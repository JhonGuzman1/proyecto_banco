<?php   headerAdmin();?>
<h2>Registrar Cuenta de Terceros</h2>

<div class="form-group">
    <label for="">N° de Cuenta</label>
    <input type="text" class="form-control" placeholder="Numero de Cuenta" id="form_terceros_nroCuenta">
</div>
<div class="form-group">
    <label for=""> Fecha Fin</label>
    <input type="date" class="form-control" min=<?php $hoy=date("Y-m-d"); echo $hoy;?> placeholder="Fecha Vencimiento"
        required id="form_terceros_fechaFin">
</div>
<button class="btn btn-success" onclick="insertar()">Crear</button>

</div>

</div>

</body>
<script>
    var insertar = function () {


        let nroCuenta = $('#form_terceros_nroCuenta').val()
        // let fecha_registro = $('#form_terceros_fechaRegistro').val()
        let fecha_vencimiento = $('#form_terceros_fechaFin').val()
        let clienteId = localStorage.getItem('usuario')

        if (nroCuenta != '' || fecha_vencimiento != '') {

            $.ajax({
                url: "Terceros/insertarTerceros",
                type: "POST",
                data: {
                    nroCuenta,
                    fecha_vencimiento,
                    clienteId
                },
                success: function (data) {

                    try {

                        const json = JSON.parse(data)
                    } catch (error) {
                        json = "fdas"
                    }
                    if (json == "error") {
                        swal({
                            title: "Error!",
                            text: "No existe esta cuenta!",
                            icon: "error",
                            button: " Aceptar!",
                        });
                    } else {
                        swal({
                            title: "Creado!",
                            text: "Creado Correctamente!",
                            icon: "success",
                            button: " Aceptar!",
                        });
                        $('#form_terceros_nroCuenta').val('')

                    }
                },
                error: function (e) {

                }
            })

        } else {
            swal({
                title: "Error!",
                text: "Existe algun campo vacio!",
                icon: "error",
                button: " Aceptar!",
            });
        }

    }
</script>

</html>