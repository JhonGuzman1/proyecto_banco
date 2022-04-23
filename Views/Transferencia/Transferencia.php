<?php   headerAdmin(); ?>
<?php getModal('modalCuentaOrigen','d');?>
<?php getModal('modalCuentaDestino','d');?>
<?php  require_once("Views/Components/subnavbar.php");?>
<style>
   .error {
      border: 1px solid red;
   }

   .form {

      visibility: collapse;
   }
</style>



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








<h2 style="text-align:center; padding:10px;">Cuenta Propia</h2>
<div class="form-group">
   <input type="text" readonly id="form_transferencia_detalle" class="form-control">
</div>
<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Cuenta de origen : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control" id="transferencia_cuenta_origen" placeholder="Buscar" data-toggle="modal"
         data-target="#modalCuentaOrigen" onclick="getCuentaPropia()" readonly>

   </div>
</div>
<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Cuenta de destino : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control" id="transferencia_cuenta_destino" placeholder="Buscar" data-toggle="modal"
         data-target="#modalCuentaDestino" readonly onclick="getCuentaDeposito()">

   </div>
</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Monto : </label>
   <div class="col-sm-10">
      <input type="number" class="form-control" id="transferencia_monto">
   </div>

</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Moneda : </label>
   <div class="col-sm-10">
      <select class="form-control bg-primary text-light" id="select_tipo_moneda">

      </select>
   </div>
</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Glosa : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control" id="transferencia_glosa">
   </div>

</div>
<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Origen Fondos : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control" id="transferencia_fondo_origen">
   </div>

</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Destino Fondos : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control" id="transferencia_fondo_destino">
   </div>

</div>

<button class="btn btn-success form-control mt-5" onclick="insertar()">Guardar</button>
</div>
</div>
</body>

<script>
   $(document).ready(function () {
      listarDropDownTipoMoneda();
      $('#form_transferencia_detalle').val(localStorage.getItem('nombre') + " " + localStorage.getItem(
         'apellido') + "--" + localStorage.getItem('carnet'))


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

   var listarCuentaOrigen = function () {
      $.ajax({
         url: "",
         type: "GET",
         success: function (data) {
            console.log(data)
         },
         error: function (error) {
            console.log(error)
         }
      })
   }


   function validar() {
      let flag = true
      if ($('#transferencia_monto').val() == "" || $('#transferencia_glosa').val() == "" || $(
            '#transferencia_fondo_origen') == "" || $('#transferencia_fondo_origen') == "") {
         flag = false
         swal({
            title: "Error!",
            text: "Campos Vacios",
            icon: "error",
            button: " Aceptar!",
         });
      }

      return flag;
   }

   var insertar = function () {

      if (validar()) {

         const cuenta_origen = document.querySelector('#transferencia_cuenta_origen').value
         const cuenta_destino = document.querySelector('#transferencia_cuenta_destino').value
         const monto = document.querySelector('#transferencia_monto').value
         const tipo_moneda = document.querySelector('#select_tipo_moneda').value
         const glosa = document.querySelector('#transferencia_glosa').value
         const fondo_origen = document.querySelector('#transferencia_fondo_origen').value
         const fondo_destino = document.querySelector('#transferencia_fondo_destino').value
         var cliente_id = localStorage.getItem('usuario')
         console.log(cuenta_origen)
         console.log(cuenta_destino)
         $.ajax({
            url: "Transferencia/insertTransferencia",
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
               const json = JSON.parse(data)
               if (json == "error") {
                  swal({
                     title: "Error!",
                     text: "Saldo insuficiente!",
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
                  $('#transferencia_glosa').val("")
                  $('#transferencia_fondo_origen').val('')
                  $('#transferencia_fondo_destino').val('')
                  $('#transferencia_monto').val('')
                  $('#transferencia_cuenta_origen').val('')
                  $('#transferencia_cuenta_destino').val('')
               }

            },
            error: function (e) {
               console.log(e)
            }
         })

      }
   }
   var getCuentaPropia = function () {
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

               raw += "<tr><td>" + json[i].nroCuenta + "</td><td>" + json[i].saldo + "</td><td>" + json[i]
                  .tasaInteresId + "</td></tr>"
            }
            $('#table_cuenta_origen_body').empty().append(raw)

            console.log(json)
         },
         error: function (e) {
            console.log(e)
         }
      })
   }

   $('#table_cuenta_origen').on('click', 'tr', function (e) {
      var values = e.currentTarget.querySelectorAll('td')
      console.log(values[0].innerHTML)
      var cuenta = values[0].innerHTML
      $('#modalCuentaOrigen').modal('hide')
      $('#transferencia_cuenta_origen').val(cuenta)
   })


   var getCuentaDeposito = function () {
      var cliente_id = localStorage.getItem('usuario')

      $.ajax({
         url: "Transferencia/getCuentaDestino",
         type: "POST",
         data: {
            cliente_id
         },
         success: function (data) {

            const json = JSON.parse(data)
            var raw = ""
            for (let i = 0; i < json.length; i++) {

               raw += "<tr><td class='form'>" + json[i].idCuentaDeposito + "</td><td>" + json[i].nroCuenta +
                  "</td></tr>"
            }
            $('#table_cuenta_destino_body').empty().append(raw)

            console.log(json)
         },
         error: function (e) {
            console.log(e)
         }
      })
   }

   $('#table_cuenta_destino').on('click', 'tr', function (e) {
      var values = e.currentTarget.querySelectorAll('td')
      console.log(values[0].innerHTML)
      var cuenta = values[0].innerHTML
      $('#transferencia_cuenta_destino').val(cuenta)
      $('#modalCuentaDestino').modal('hide')
   })




   //-*--------------------------------------Buscadores

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

   $('#table_cuenta_destino_buscar').on('keyup', function (e) {
      _this = this
      $.each($('#table_cuenta_destino tbody tr'), function () {
         console.log(_this)

         if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
            $(this).hide()
         else
            $(this).show()
      })


   })
</script>

<!--<script src="Assets/js/script_cuenta_propia.js"></script>-->

</html>