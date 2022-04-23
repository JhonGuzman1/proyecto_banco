<?php   headerAdmin();  ?>
<?php getModal('modalApertura','d');?>
<h2 class="text-center p-2">Registrar Apertura de Cuenta</h2>
<style>
    .error {
        border: 1px solid red;

    }
</style>
<input type="hidden" id="id_apertura">
<div class="form-group row">
    <label for="headline" class="col-sm-2 col-form-label">Titular :</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" readonly value="" id="nombre_value" required>
    </div>
</div>

<div class="form-group row">
    <label for="headline" class="col-sm-2 col-form-label">Saldo :</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="saldo" placeholder="Saldo" required>
    </div>
</div>
<div class="form-group row">
    <label for="headline" class="col-sm-2 col-form-label">Tasa de Intéres Anual(%) :</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="interes">
    </div>
</div>


<div class="form-group row">
    <label for="headline" class="col-sm-2 col-form-label">Tipo Moneda :</label>
    <div class="col-sm-10">
        <select class="form-control" id="select_tipo_moneda">

        </select>

    </div>
</div>

<button class="btn btn-success form-control" onclick="enviar()">Crear</button>

</div>
</div>
</body>
<script>
    $(document).ready(function () {
        listarDropDownTipoMoneda()
        $('#nombre_value').val(localStorage.getItem('nombre'))
        $('#id_apertura').val(localStorage.getItem('usuario'))
    })
    var id_cliente = 0;

    var listarClientes = function () {
        $.ajax({
            url: "AperturaCuenta/getCliente",
            type: "get",
            success: function (data) {
                const json = JSON.parse(data)
                var raw = ""
                for (let i = 0; i < json.length; i++) {

                    raw += "<tr><td>" + json[i].idCliente + "</td><td>" + json[i].nombre + "</td><td>" +
                        json[i].ap_paterno + "</td></tr>"
                }
                $('#table_apertura_body').append(raw)

            },
            errror(e) {
                console.log(e)
            }

        })
    }
    listarClientes()


    function validar() {
        var val = true;

        if ($('#saldo').val() == "") {

            val = false
            $('#saldo').toggleClass('error')
        } else if ($('#interes').val() == "") {
            val = false
            $('#interes').toggleClass('error')
        }



        return val;
    }
    var enviar = function () {

        if (validar()) {

            const saldo = document.querySelector('#saldo').value
            const estado = 0
            const interes = document.querySelector('#interes').value
            id_cliente = document.querySelector('#id_apertura').value
            const tipo_moneda = document.querySelector('#select_tipo_moneda').value

            $.ajax({
                url: "AperturaCuenta/insertApertura",
                type: "POST",
                data: {
                    saldo,
                    interes,
                    estado,
                    tipo_moneda,
                    id_cliente
                },
                success: function (data) {
                    swal({
                        title: "Creado!",
                        text: "Creado Correctamente!",
                        icon: "success",
                        button: " Aceptar!",
                    });
                    $('#saldo').val('')
                    $('#interes').val('')

                },
                error: function (e) {
                    console.log(e)
                }
            })
        }
    }
    var listarDropDownTipoMoneda = function () {
        $.ajax({
            url: "TipoMoneda/getTipoMoneda",
            type: "GET",
            success: function (data) {
                const json = JSON.parse(data)
                for (values in json) {
                    $('#select_tipo_moneda').append('<option value=' + "json[values].idTipoMoneda" +
                        '>' + json[values].descripcion + '</option>')
                }
            },
            error: function (error) {
                console.log(error)
            }
        })
    }

    $('#table_apertura').on('click', 'tr', function (e) {
        var values = e.currentTarget.querySelectorAll('td')
        var nombre = values[1].innerHTML
        id_cliente = values[0].innerHTML
        localStorage.setItem('usuario', id_cliente)
        $('#nombre_value').val(nombre)
        $('#id_apertura').val(id_cliente)
    })
</script>

</html>