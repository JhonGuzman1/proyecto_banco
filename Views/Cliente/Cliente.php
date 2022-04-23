<?php   headerAdmin();?>

<?php getModal('modalCliente','d');?>
<h1>Clientes</h1>

<button class="btn btn-success m-4" data-toggle="modal" data-target="#modalCliente">Nuevo Cliente</button>

        <table id="table_cliente">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody> 
            </tbody>
        </table>
</div>
</div>
</body>

<script>
$(document).ready(function(){
    listarCliente()
})

var listarCliente = function () {
    $('#table_cliente').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "ajax": {
            "url": "Cliente/listarCliente",
            "dataSrc": ""
        }, "columns": [
            { data: 'idCliente' },
            { data: 'nombre' },
            { data: 'ap_paterno' }
        ],
        "responsieve": true,
        "iDisplayLength": 10


    })
}

    var crear_persona = function () {
        let carnet = $('#form_cliente_carnet').val()
        let nombre = $('#form_cliente_nombre').val()
        let paterno = $('#form_cliente_paterno').val()
        let materno = $('#form_cliente_materno').val()
        //let fecha = $('#form_cliente_fecha').val()
        let direccion = $('#form_cliente_direccion').val()
        let correo = $('#form_cliente_correo').val()
        let telefono = $('#form_cliente_telefono').val()
        console.log(nombre)

        $.ajax({
            url: "Cliente/insertar_cliente",
            type: "POST",
            data: {
                nombre,
                paterno,
                materno,
                direccion,
                correo,
                telefono,
                carnet
            },
            success: function (data) {
                swal({
                    title: "Creado!",
                    text: "Creado Correctamente!",
                    icon: "success",
                    button: " Aceptar!",
                });
                $('#form_cliente_carnet').val("")
                $('#form_cliente_nombre').val("")
                $('#form_cliente_paterno').val("")
                $('#form_cliente_materno').val("")

                $('#form_cliente_direccion').val("")
                $('#form_cliente_correo').val("")
                $('#form_cliente_telefono').val("")

            },
            error: function (e) {

            }
        })
    }
</script>

</html>