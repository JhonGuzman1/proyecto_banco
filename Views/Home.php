
    <?php   headerAdmin();?>

<?php getModal('modalApertura','d');?>
     <h1>Home</h1>
<h2>Bienvenido <span id="nombre_modal"></span> </h2> 
         </div>
</div>
</body>
<script>
$(document).ready(function(){
    $('#modalApertura').modal({backdrop: 'static', keyboard: false})
    listarClientes()
})

var listarClientes  = function (){
    $.ajax({
        url:"AperturaCuenta/getCliente",
        type:"get",
        success:function(data){
            const json = JSON.parse(data)
            var raw = ""
            for(let i =  0; i<json.length; i++){
                
                 raw += "<tr><td>"+json[i].idCliente+"</td><td>"+json[i].nombre+"</td><td>"+json[i].ap_paterno+"  "+json[i].ap_materno+"</td><td>"+json[i].ci+"</td> </tr>"
            }
           $('#table_apertura_body').append(raw)
      
        },errror(e){
            console.log(e)
        }

    })
}


$('#table_apertura').on('click','tr',function(e){
    var values = e.currentTarget.querySelectorAll('td')
    var nombre  =values[1].innerHTML
    var apellido = values[2].innerHTML
    var carnet = values[3].innerHTML
id_cliente = values[0].innerHTML
localStorage.setItem('usuario',id_cliente)
localStorage.setItem('nombre',nombre)
localStorage.setItem('apellido',apellido)
localStorage.setItem('carnet',carnet)

$('#nombre_modal').text(nombre)
  $('#modalApertura').modal('hide')
})

$('#modal_apertura_buscar').on('keyup',function(){
    _this = this
    $.each($('#table_apertura tbody tr'),function(){

    if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase())=== -1)
        $(this).hide()
    else
        $(this).show()
    })
     
})
</script>
</html>