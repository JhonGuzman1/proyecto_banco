
<div class="modal fade" id="modalCuentaOtros" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form id="form-cuentaotros" > 
      <div class="modal-body">
            <div class="form-group row">
                <div class="col">
                    <div class="row">
                        <label for="" class="col col-form-label">Bancos :</label>
                        <div class="col-8">
                            <select id="select_banco" name="" class="form-control bg-primary text-light " onchange="changeSucursal()">
                                
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">

                        <label for="" class="col-form-label">Sucursal</label>
                        <div class="col">
                            <select name="" id="select_sucursal" class="form-control  bg-primary text-light" >
                                
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Tipo de Cuenta : </label>
                <div class="col-sm-10">
                    <select id="select_tipo_cuenta" class="form-control bg-primary text-light">
                        
                    </select>
                </div>
            </div>

        <div class="form-group row">
            <div class="col">
                <div class="row">
                    <label for="" class="col col-form-label">Numero Cuenta a Adicionar :</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="form_nrocuenta">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">

                    <label for="" class="col-form-label">Moneda</label>
                    <div class="col">
                        <select name="" id="select_tipo_moneda" class="form-control  bg-primary text-light">
                            
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Titular : </label>
            <div class="col-sm-12">
        
                    <div class="col-8">
                        <input type="text" class="form-control" id="form_titular">
                    </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col">
                <div class="row">
                <label for="" class="col-form-label">Tipo de Identificacion</label>
                    <div class="col">
                        <select name="" id="select_tipo_identificacion" class="form-control  bg-primary text-light">
                            
                        </select>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">

                    <label for="" class="col-form-label">Nro Identificacion</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="form_nroidentificacion">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col">
                <div class="row">
                <label for="" class="col-form-label">Direccion</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="form_direccion">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">

                    <label for="" class="col-form-label">Correo</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="form_correo">
                    </div>
                </div>
            </div>
        </div>


          
      </div>
      <div class="modal-footer">
   
        <button class="btn btn-primary"  type="submit">Crear</button>
      </div>
     </form>
    </div>
  </div>
</div>

