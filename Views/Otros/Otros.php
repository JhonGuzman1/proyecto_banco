<?php   headerAdmin();?>


<?php  require_once("Views/Components/subnavbar.php");?>

<div id="myModal"  class="modal fade bd-example-modal-xl" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">OPERACION ENVIADA EXITOSAMENTE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <label for="" class="col col-form-label">Detalle de Transferencia</label>

      <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Cuenta origen:</label>
                  <div class="col-8">
                  <input id="form_cuenta_origen" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Importe</label>
                  <div class="col">
                     <input  id="form_importe" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Comision</label>
                  <div class="col-8">
                  <input value="0" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Moneda</label>
                  <div class="col">
                     <input  id="form_moneda_det" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Cuenta Destino</label>
                  <div class="col-8">
                  <input id="form_cuenta_destino" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Nombre Titular</label>
                  <div class="col">
                     <input  id="form_nombre_titular_dt" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row" >
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Banco Destino:</label>
                  <div class="col-8">
                  <input id="form_banco_destino" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
            
         </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
      
      </div>
    </div>
  </div>
</div>

<h2 style="text-align:center; padding:10px;">Cuenta otros </h2>

   <div class="card">

      <div class="card-header">
         Datos de del Banco Beneficiario
      </div>
      <div class="card-body">

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Banco:</label>
                  <div class="col-8">
                     <select name="" id="select_banco" class="form-control bg-primary text-light" onchange="changeSucursal()">
                       
                     </select>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Sucursal :</label>
                  <div class="col">
                  <select name="" id="select_sucursal" class="form-control bg-primary text-light" onchange="changeCuenta()">
                       
                 </select>
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Cuenta de Destino:</label>
                  <div class="col-8">
                     <select name="" id="select_cuenta_destino" class="form-control bg-primary text-light" onchange="changeDatosCuenta()">
                      
                     </select>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Moneda :</label>
                  <div class="col">
                     <input id="form_monedas" type="text" class="form-control" value="" disabled>
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Tipo de Cuenta : </label>
            <div class="col-sm-10">
               <input id="form_cuenta" type="text" class="form-control" value="" disabled>
            </div>

         </div>

      </div>
   </div>

   <div class="card">

      <div class="card-header">
         Datos del Beneficiario Final
      </div>
      <div class="card-body">
         <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Titular : </label>
            <div class="col-sm-10">
               <input id="form_titular" type="text" class="form-control" value="" disabled>
            </div>

         </div>
         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Tipo de Identificación:</label>
                  <div class="col-8">
                  <input id="form_identificacion" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Número de Identificación :</label>
                  <div class="col">
                     <input  id="form_nro_identificacion" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Direccioón:</label>
                  <div class="col-8">
                     <input id="form_direccion" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Observaciones :</label>
                  <div class="col">
                     <input id="form_observacion" type="text" class="form-control">
                  </div>
               </div>
            </div>
         </div>
         g
      </div>
   </div>
   <div class="card">

      <div class="card-header">
         Cuenta para el Débito
      </div>
      <div class="card-body">

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Cuenta de Origen:</label>
                  <div class="col-8">
                     <select name="" id="select_cuenta_origen" class="form-control bg-primary text-light">
                       
                     </select>
                  </div>
               </div>
            </div>
            <div class="col">

            </div>
         </div>
         <div class="form-group row">

            <div class="col">
               <div class="row">

                  <label for="" class="col-4 col-form-label">Monto a Transferir :</label>
                  <div class="col">
                     <input id="form_monto" type="number" class="form-control">
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Moneda:</label>
                  <div class="col-9">
                     <select name="Seleccione la Moneda" id="select_tipo_moneda" class="form-control bg-primary text-light">
                        
                     </select>
                  </div>
               </div>
            </div>

         </div>

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Origen de Fondos:</label>
                  <div class="col-8">
                     <input id="form_origen" type="text" class="form-control" value="" >
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Destino de Fondos :</label>
                  <div class="col">
                     <input id="form_destino" type="text" class="form-control">
                  </div>
               </div>
            </div>
         </div>
         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Correo Electrónico</label>
                  <div class="col-8">
                     <input type="text" class="form-control" placeholder="example@hotmail.com">
                  </div>
               </div>
            </div>
            <div class="col">

            </div>
         </div>

      </div>
   </div>

   <button class="btn btn-success form-control mt-2" onclick="insertarTransferencia()">Continuar</button>

</div>
</div>
</body>




<script src="Assets/js/script_cuenta_otros_t.js"></script>




<script>

var insertarTransferencia = function () {

   

const cuenta_origen = document.querySelector('#select_cuenta_origen').value
const cuenta_destino = document.querySelector('#select_cuenta_destino').value
const monto = document.querySelector('#form_monto').value
const tipo_moneda = document.querySelector('#select_tipo_moneda').value
const glosa = document.querySelector('#form_observacion').value
const fondo_origen = document.querySelector('#form_origen').value
const fondo_destino = document.querySelector('#form_destino').value
var cliente_id = localStorage.getItem('usuario')
console.log(cuenta_origen)
console.log(cuenta_destino)
$.ajax({
   url: "Transferencia/insertTransferenciaOtros",
   type: "POST",
   data: {
      cuenta_origen,
      cuenta_destino,
      monto,
      tipo_moneda,
      glosa,
      fondo_origen,
      fondo_destino,
      cliente_id
   },
   success: function (data) {
      console.log(data)
       try{
        const json = JSON.parse(data)
        console.log(json)
       
        if(json == "error"){
           alert("ERROR!")
           swal({
           title: "Error!",
           text: "No se puede debitar esta cuenta!",
           icon: "error",
           button: " Aceptar!",
        });
        }else{
         
         const json = JSON.parse(data)
         console.log(json)
         
                         $('#form_cuenta_origen').val(json[0].cuentaDebitoId);
                        $('#form_importe').val(json[0].monto_deposito);
                        $('#form_moneda_det').val(json[0].descripcion);
                        $('#form_cuenta_destino').val(json[0].nroCuenta);
                        $('#form_nombre_titular_dt').val(json[0].nombre_titular);
                        $('#form_banco_destino').val(json[0].nombre);

         $('#myModal').modal('toggle');

         $('#form_titular').val("");
                        $('#form_identificacion').val("");
                        $('#form_nro_identificacion').val("");
                        $('#form_direccion').val("");
                        $('#form_monedas').val("");
                        $('#form_cuenta').val("");
       
        }
       }catch(error){
         const json = JSON.parse(data)
         console.log(json)
         
                         $('#form_cuenta_origen').val(json[0].cuentaDebitoId);
                        $('#form_importe').val(json[0].monto_deposito);
                        $('#form_moneda_det').val(json[0].descripcion);
                        $('#form_cuenta_destino').val(json[0].nroCuenta);
                        $('#form_nombre_titular_dt').val(json[0].nombre_titular);
                        $('#form_banco_destino').val(json[0].nombre);

         $('#myModal').modal('toggle');
         //location.reload();
       }
     
      
   },
   error: function (e) {
      console.log(e)
   }
})

}


</script>
</html>