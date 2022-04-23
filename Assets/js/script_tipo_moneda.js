
$(document).ready(function () {
    listarTipoMoneda();

})



var listarTipoMoneda = function () {
    $('#table-tipo_moneda').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "ajax": {
            "url": "TipoMoneda/getTipoMoneda",
            "dataSrc": ""
        }, "columns": [
            { data: 'idTipoMoneda' },
            { data: 'descripcion' },
            { data: 'abreviacion' }
        ],
        "responsieve": true,
        "iDisplayLength": 10


    })
}


var form_moneda = document.querySelector("#form-moneda")
form_moneda.onsubmit = function (e) {
    e.preventDefault()
    const descripcion = document.querySelector('#form_descripcion_moneda').value
    const abreviacion = document.querySelector('#form_abreviacion_moneda').value
    $.ajax({
        url: "TipoMoneda/insertTipoMoneda",
        type: "POST",
        data: { descripcion, abreviacion },
        success: function (data) {

            swal({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success",
                button: "Creado Correctamente!",
            });

            $('#table-tipo_moneda').DataTable().ajax().reload()
            //listarTipoMoneda()
            // $('#modalMoneda').modal()
        }, error: function (e) {
            console.log(e)
        }
    })
}
function openModalMoneda() {
    $('#modalMoneda').modal('show')
}