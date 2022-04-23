<?php   headerAdmin(); ?>
<?php   getModal('modalBanco','d');?>
<h2 style="text-align:center;">Bancos Santa Cruz</h2>
<button class="btn btn-success m-4" data-toggle="modal" data-target="#modalBanco">Nuevo Banco</button>
<table id="table_banco">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>
</div>
</div>

</body>
<script>
$(document).ready(function (){
    listarBanco()
})
    var enviar_banco = function () {
        let nombre = $('#form_banco_nombre').val()
        $.ajax({
            url: "Banco/insertar_banco",
            type: "POST",
            data: {
                nombre
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

    var listarBanco = function () {
        $('#table_banco').DataTable({
            "aProcessing": true,
            "aServerSide": true,
            "ajax": {
                "url": "Banco/getBanco",
                "dataSrc": ""
            },
            "columns": [{
                    data: 'idBanco'
                },
                {
                    data: 'nombre'
                }
            ],
            "responsieve": true,
            "iDisplayLength": 10


        })
    }
</script>

</html>