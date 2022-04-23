<?php   headerAdmin();?>


<div id="myModal"  class="modal fade bd-example-modal-xl" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Descripcion de Movimiento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     

      <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Descripcion:</label>
                  <div class="col-8">
                  <input id="form_descripcion" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Moneda</label>
                  <div class="col">
                     <input  id="form_moneda" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Monto Transferencia</label>
                  <div class="col-8">
                  <input  id="form_monto" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Cuenta Destino</label>
                  <div class="col">
                     <input  id="form_cuenta_destino" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Cuenta Origen</label>
                  <div class="col-8">
                  <input id="form_cuenta_origen" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Fecha</label>
                  <div class="col">
                     <input  id="form_fecha" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row" >
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Nro Documento:</label>
                  <div class="col-8">
                  <input id="form_nro_doc" type="text" class="form-control" disabled>
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
             
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked>
        <label class="form-check-label" for="exampleRadios1">
           Extracto del Dia
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2" checked>
        <label class="form-check-label" for="exampleRadios1">
           Extracto de 12 Ult
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="3" checked>
        <label class="form-check-label" for="exampleRadios1">
           Extracto del Mes Actual
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="4" checked>
        <label class="form-check-label" for="exampleRadios1">
           Extracto del Mes Anterior
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="5" checked>
        <label class="form-check-label" for="exampleRadios1">
           Entre Rangos de Fecha
        </label>
    </div>

    <button type="submit" class="btn btn-primary" onclick="MandarId()">Continuar</button>

   

    <table id="table-cuenta_otros" class="table">
                        <thead>
                            <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Nro de Documento</th>
                            <th scope="col">Monto</th>
                            <th scope="col">Detalle</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        
                        </tbody>
                    </table>
                    </div>

    <script>

        $(document).ready(function(){
           // MandarId();
            listarDropDownCuentaPropia();
          //  listarCuentaOtros();
        })

       /* var listarCuentaOtros  = function (){

            let cliente_id = localStorage.getItem('usuario');
            $('#table-cuenta_otros').DataTable({
                "aProcessing":true,
                "aServerSide":true,
                "ajax":{
                    "method":"GET"
                    "url":"CuentaOtros/getTransaccion",
                    "data":"cliente_id"
                },"columns":[
                    {data:"fecha"},
                    {data:"glosa"},
                    {data:"idTransaccion"},
                    {data:"monto_deposito"}
                ],
                "responsieve":true,
                "iDisplayLength":10
                
                
            })
        }*/

        var MandarId  = function ()
        {

            $('#table-cuenta_otros td').remove();
             var opcion =0;   
            
            if( $('#exampleRadios1').prop('checked') ) {
                opcion= $("#exampleRadios1").val()
            }
            if( $('#exampleRadios2').prop('checked') ) {
                opcion= $("#exampleRadios2").val()
            }
            if( $('#exampleRadios3').prop('checked') ) {
                opcion= $("#exampleRadios3").val()
            }
            if( $('#exampleRadios4').prop('checked') ) {
                opcion= $("#exampleRadios4").val()
            }
            if( $('#exampleRadios5').prop('checked') ) {
                opcion= $("#exampleRadios5").val()
            }

            console.log(opcion+"jhon");
        
        
        let cliente_id = localStorage.getItem('usuario');
        const cuenta_origen = document.querySelector('#select_cuenta_origen').value

        console.log(cliente_id);
        $.ajax({
            url:"Transferencia/getTransaccion",
            type:"POST",
            data:{cliente_id,cuenta_origen,opcion},
            success:function(data){
                const json = JSON.parse(data);
               // console.log(json);
               for (values in json){
                $("#table-cuenta_otros").last().append("<tr><td>"+json[values].fecha+"</td>   <td>"+json[values].glosa+"</td> <td>"+json[values].idTransaccion+"</td>  <td>"+json[values].monto_deposito+"</td> <td>  <button >Ver Detalle</button>  </td>   </tr>");
                }
            },error:function(error){
                console.log(error)
            }
        })
        }


        $('#table-cuenta_otros').on('click','tr',function(e){
            var values = e.currentTarget.querySelectorAll('td')
            var id  =values[2].innerHTML
            
            $.ajax({
            url:"Transferencia/getDetallesTransaccion",
            type:"POST",
            data:{id},
            success:function(data){
                const json = JSON.parse(data)

                       $('#form_descripcion').val(json[0].glosa);
                        $('#form_moneda').val(json[0].descripcion);
                        $('#form_monto').val(json[0].monto_deposito);
                        $('#form_cuenta_destino').val(json[0].nroCuenta);
                        $('#form_cuenta_origen').val(json[0].cuentaDebitoId);
                        $('#form_fecha').val(json[0].fecha);
                        $('#form_nro_doc').val(json[0].idTransaccion);
                        $('#myModal').modal('toggle');
            },error:function(error){
                console.log(error)
            }
        })
           
             
        })

        var listarDropDownCuentaPropia  = function ()
        {
        let cliente_id = localStorage.getItem('usuario');
        console.log(cliente_id);
        $.ajax({
            url:"Transferencia/getCuentaPersonal",
            type:"GET",
            data:{cliente_id},
            success:function(data){
                const json = JSON.parse(data)
                for (values in json){
                    $('#select_cuenta_origen').append('<option value='+ json[values].nroCuenta +'>'+json[values].nroCuenta+'</option>')
                }
            },error:function(error){
                console.log(error)
            }
        })
        }
    </script>
    
    
</body>