
var form_apertura_cuenta = $('#form_apertura')
form_apertura_cuenta.onsubmit = function(e){
    e.preventDefault()
    const saldo = document.querySelector('#saldo').value
    const estado = 0
    const interes = document.querySelector('#interes').value
    const id_cliente = document.querySelector('#id_apertura').value
    const tipo_moneda = document.querySelector('#select_tipo_moneda').value

    $.ajax({
        url:"AperturaCuenta/insertApertura",
        type:"POST",
        data:{saldo,interes,estado,tipo_moneda,id_cliente},
        success:function(data){
            swal({
                title: "Creado!",
                text: "Creado Correctamente!",
                icon: "success",
                button: " Aceptar!",
              });
        },error:function(e){
            console.log(e)
        }
    })
}


