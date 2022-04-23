<?php   headerAdmin();?>
<?php getModal('modalCuentaOrigen','d');?>
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

         <div class="form-group row" hidden>
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









<h2 style="text-align:center; paddign:10px;">Cuenta Terceros</h2>
<div class="card">

   <div class="card-header">
      Datos de Cuenta
   </div>
   <div class="card-body">

      <div class="form-group row">
         <label for="" class="col-sm-2 col-form-label">Cuenta Origen: </label>
         <div class="col-sm-10">
            <input type="text" class="form-control" id="form_tercero_cuenta_origen" readonly data-toggle="modal"
               data-target="#modalCuentaOrigen" placeholder="Buscar" onclick="getCuentaPropia()">
         </div>

      </div>


   </div>

</div>
<div class="card">

   <div class="card-header">
      Datos de Destinatario
   </div>
   <div class="card-body">

      <div class="form-group row">
         <div class="col">
            <div class="row">
               <label for="" class="col col-form-label">Titular Cuenta:</label>
               <div class="col-8">
                  <select  id="select_form_cliente" class="form-control bg-primary text-light" onchange="changeObtCuenta()">
                     <option>Elija un titula de Cuenta</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="row">

               <label for="" class="col-form-label">Cuenta Destino :</label>
               <div class="col">
                  <input type="hidden" class="form-control" readonly id="form_cuenta">
                  <input type="text" class="form-control" readonly id="form_cuentaDepositosX" disabled>
               </div>
            </div>
         </div>
      </div>

   </div>
</div>
<div class="card">

   <div class="card-header">
      Datos Adicionales
   </div>
   <div class="card-body">

      <div class="form-group row">

         <div class="col">
            <div class="row">

               <label for="" class="col-form-label">Monto a Transferir :</label>
               <div class="col">
                  <input type="text" class="form-control" id="form_tercero_monto">
               </div>
            </div>
         </div>

         <div class="col">
            <div class="row">
               <label for="" class="col col-form-label">Moneda:</label>
               <div class="col-9">
                  <select class="form-control bg-primary text-light" id="select_tipo_moneda">

                  </select>
               </div>
            </div>
         </div>

      </div>

      <div class="form-group row">
         <div class="col">
            <div class="row">
               <label for="" class="col col-form-label">Glosa:</label>
               <div class="col-9">
                  <input type="text" class="form-control" id="form_tercero_glosa">
               </div>
            </div>
         </div>
         <div class="col">
            <div class="row">

               <label for="" class="col-form-label">Origen de Fondos :</label>
               <div class="col">
                  <input type="text" class="form-control" id="form_tercero_origen">
               </div>
            </div>
         </div>
      </div>

      <div class="form-group row">
         <div class="col">
            <div class="row">
               <label for="" class="col col-form-label">Destino de Fondos:</label>
               <div class="col-9">
                  <input type="text" class="form-control" id="form_tercero_destino">
               </div>
            </div>
         </div>
         <div class="col">
            <div class="row">

               <label for="" class="col-3 col-form-label">Mensaje Adjunto al correo electronico :</label>
               <div class="col">
                  <input type="text" class="form-control" id="form_tercero_correo">
               </div>
            </div>
         </div>
      </div>

   </div>
</div>
<button class="btn btn-success form-control mt-2" onclick="insertar()">Continuar</button>
</div>

</div>

</body>
<script>
   $(document).ready(function () {
      listarDropDownTipoMoneda()
      getCuentaPropia()
      getCuentaDestino()
   })

   var listarDropDownTipoMoneda = function () {
      $.ajax({
         url: "TipoMoneda/getTipoMoneda",
         type: "GET",
         success: function (data) {
            const json = JSON.parse(data)
            for (values in json) {
               $('#select_tipo_moneda').append('<option value=' + "" + json[values].idTipoMoneda + "" +
                  '>' + json[values].descripcion + '</option>')
            }
         },
         error: function (error) {
            console.log(error)
         }
      })
   }
   var insertar = function () {
      let glosa = $('#form_tercero_glosa').val()
      let monto = $('#form_tercero_monto').val()
      let correo = $('#form_tercero_correo').val()
      let moneda = $('#select_tipo_moneda').val()
      let fondo_origen = $('#form_tercero_origen').val()
      let cuenta_destino = $('#select_form_cliente').val()
      let cuenta_origen = $('#form_tercero_cuenta_origen').val()
      let fondo_destino = $('#form_tercero_destino').val()
      let cliente_id = localStorage.getItem('usuario')

      if (glosa == "" || monto == "" || correo == "" || fondo_origen == "" || fondo_destino == "") {
         swal({
                     title: "Error!",
                     text: "Campos vacios!",
                     icon: "error",
                     button: " Aceptar!",
                  });
      } else {


         $.ajax({
            url: "Tercero/insertarTercero",
            type: "POST",
            data: {
               glosa,
               monto,
               correo,
               moneda,
               fondo_origen,
               fondo_destino,
               cuenta_origen,
               cuenta_destino,
               cliente_id
            },
            success: function (data) {
               try{
                  const json = JSON.parse(data)
               if (json == "error") {
                  swal({
                     title: "Error!",
                     text: "No se puede debitar esta cuenta!",
                     icon: "error",
                     button: " Aceptar!",
                  });
               } else {
                 
                  $('#form_cuenta_origen').val(json[0].cuentaDebitoId);
                        $('#form_importe').val(json[0].monto_deposito);
                        $('#form_moneda_det').val(json[0].descripcion);
                        $('#form_cuenta_destino').val(json[0].nroCuenta);
                        $('#form_nombre_titular_dt').val(json[0].nombre+" "+json[0].ap_paterno);
                        $('#form_banco_destino').val(json[0].nombre);

                   $('#myModal').modal('toggle');

                  $('#form_tercero_glosa').val("")
                  $('#form_tercero_monto').val("")
                  $('#form_tercero_correo').val("")
                  $('#select_tipo_moneda').val("")
                  $('#form_tercero_origen').val("")
                  $('#select_form_cliente').val("")
                  $('#form_tercero_cuenta_origen').val("")
                  $('#form_tercero_destino').val("")
               }
               }catch(error){
                  swal({
                     title: "Creado!",
                     text: "Transaccion Realizada Correctamente!",
                     icon: "success",
                     button: " Aceptar!",
                  });
                  $('#form_tercero_glosa').val("")
                  $('#form_tercero_monto').val("")
                  $('#form_tercero_correo').val("")
                  $('#select_tipo_moneda').val("")
                  $('#form_tercero_origen').val("")
                  $('#select_form_cliente').val("")
                  $('#form_tercero_cuenta_origen').val("")
                  $('#form_tercero_destino').val("")
               }
               

            },
            error: function (e) {

            }
         })
      }
   }

   var getCuentaPropia = function () {
      $("#table_cuenta_origen_body").empty();
      var cliente_id = localStorage.getItem('usuario')

      $.ajax({
         url: "Transferencia/getCuentaOrigen",
         type: "POST",
         data: {
            cliente_id
         },
         success: function (data) {

            const json = JSON.parse(data)
            var raw = ""
            for (let i = 0; i < json.length; i++) {

               raw += "<tr><td>" + json[i].nroCuenta + "</td><td>" + json[i].saldo + "</td><td>" +
                  json[i]
                  .tasaInteresId + "</td></tr>"
            }
            $('#table_cuenta_origen_body').append(raw)

            console.log(json)
         },
         error: function (e) {
            console.log(e)
         }
      })
   }

   $('#table_cuenta_origen').on('click', 'tr', function (e) {
      console.log('d')
      var values = e.currentTarget.querySelectorAll('td')
      console.log(values[0].innerHTML)
      var cuenta = values[0].innerHTML
      $('#modalCuentaOrigen').modal('hide')
      $('#form_tercero_cuenta_origen').val(cuenta)
   })

   $('#table_cuenta_origen_buscar').on('keyup', function (e) {
      _this = this
      $.each($('#table_cuenta_origen tbody tr'), function () {
         console.log(_this)

         if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
            $(this).hide()
         else
            $(this).show()
      })


   })

   var getCuentaDestino = function () {
      var cliente_id = localStorage.getItem('usuario')
      $.ajax({
         url: "Tercero/getCuentaDestino",
         type: "POST",
         data:{cliente_id},
         success: function (data) {
            console.log(data)
            const json = JSON.parse(data)
            for (values in json) {
               $('#select_form_cliente').append('<option value=' + "" + json[values]
                  .idCuentaDeposito + "" +
                  '>' + (json[values].nombre+" "+json[values].ap_paterno) + '</option>')
            }
         }
      })
   }

   $('#select_form_cliente').change(function (e) {
      $('#form_cuenta').val(e.target.value)
   })

   function changeObtCuenta()
        {
            var cuenta =  document.querySelector('#select_form_cliente').value;
           
            
            if (cuenta == null) {
                return alert("Debe Elijir una Cuenta");
             }
             
            $.ajax({
                url:"Tercero/getObtXCuenta",
                type:"GET",
                data:{cuenta},
                success:function(data){
                   
                    const json = JSON.parse(data)
                    
                        $('#form_cuentaDepositosX').val(json[0].nroCuenta);
                        
                   
                },error:function(error){
                    console.log(error)
                }
            })
        }
</script>

</html>