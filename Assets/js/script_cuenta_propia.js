$(document).ready(function(){
   listarDropDownTipoMoneda();
   
})


var listarDropDownTipoMoneda  = function (){
    
    $.ajax({
        url:"TipoMoneda/getTipoMoneda",
        type:"GET",
        success:function(data){
            const json = JSON.parse(data)
            for (values in json){
                $('#select_tipo_moneda').append('<option value='+"json[values].idTipoMoneda"+'>'+json[values].descripcion+'</option>')
            }
        },error:function(error){
            console.log(error)
        }
    })
}

var listarCuentaOrigen = function(){
    $.ajax({
        url:"",
        type:"GET",
        success:function(data){
            console.log(data)
        },error:function(error){
            console.log(error)
        }
    })
}




var form_cuenta_propia = document.querySelector('#form_transferencia')
    form_cuenta_propia.onsubmit = function(e){

        e.preventDefault()
            const cuenta_origen = document.querySelector('#transferencia_cuenta_origen').value
            const cuenta_destino = document.querySelector('#transferencia_cuenta_destino').value
            const monto = document.querySelector('#transferencia_monto').value
            const tipo_moneda = document.querySelector('#transferencia_tipo_moneda').value
            const glosa = document.querySelector('#transferencia_glosa').value
            const fondo_origen = document.querySelector('#transferencia_fondo_origen').value
            const fondo_destino = document.querySelector('#transferencia_fondo_destino').value

            $.ajax({
                url:"Transferencia/insertTransferencia",
                type:"POST",
                data:{cuenta_origen,cuenta_destino,monto,tipo_moneda,glosa,fondo_origen,fondo_destino},
                success:function(data){
                    console.log(data)
                },error:function(e){
                    console.log(e)
                }
            })

    }
    var form_apertura_cuenta = document.querySelector('#form_apertura')
    form_apertura_cuenta.onsubmit = function(e){
        e.preventDefault()
        const saldo = document.queryCommandSupported('#saldo')
        const estado = document.queryCommandSupported('#estado')
        const interes = document.queryCommandSupported('#interes')
        const fecha = document.queryCommandSupported('#fecha')
        const tipo_moneda = document.queryCommandSupported('#select_tipo_moneda')
        $.ajax({
            url:"AperturaCuenta/insertApertura",
            type:"POST",
            data:{saldo,interes,estado,fecha,tipo_moneda},
            success:function(data){
                console.log(data)
            },error:function(e){
                console.log(e)
            }
        })
        console.log('hfid')
    }