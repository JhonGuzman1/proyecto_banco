<?php   headerAdmin(); ?>

<?php   getModal('modalSucursal','d');?>
<h2 sytle="text-align:center;">Sucursales Santa Cruz</h2>
<button class="btn btn-success m-4" data-toggle="modal" data-target="#modalSucursal">Nueva Sucursal</button>

    <table id="table_sucursal">
        <thead>
            <tr>
                <th>Id</th>            
                <th>Nombre</th>
                <th>Banco</th>
            </tr> 

        </thead>
        <tbody>
        
        </tbody>
    </table>
</div>
</div>

</body>
<script>
    $(document).ready(function () {
        getBanco()
        listarSucursal()
    })
    var getBanco = function () {

        $.ajax({
            url: "Sucursal/getBanco",
            type: "GET",
            success: function (data) {
                const json = JSON.parse(data)
                console.log(json)
                for (values in json) {
                    $('#select_sucursal_banco').append('<option value=' + "" + json[values].idBanco +
                        "" + '>' + json[values].nombre + '</option>')
                }

            },
            error: function (e) {
                console.log(e)
            }
        })
    }
    var enviar_sucursal = function () {
        let nombre = $('#form_sucursal_nombre').val()
        let banco_id = $('#select_sucursal_banco').val()
        $.ajax({
            url: "Sucursal/insertar_sucursal",
            type: "POST",
            data: {
                nombre,
                banco_id
            },
            success: function (data) {
                swal({
                    title: "Creado!",
                    text: "Creado Correctamente!",
                    icon: "success",
                    button: " Aceptar!",
                });
                $('#form_banco_nombre').val('')
            },
            error: function (e) {

            }
        })
    }

    var listarSucursal = function () {
        $('#table_sucursal').DataTable({
            "aProcessing": true,
            "aServerSide": true,
            "ajax": {
                "url": "Sucursal/getSucursal",
                "dataSrc": ""
            },
            "columns": [{
                    data: 'idSucursal'
                },
                {
                    data: 'nombre'
                },
                {
                    data:'banco'
                }
            ],
            "responsieve": true,
            "iDisplayLength": 10


        })
    }

</script>

</html>