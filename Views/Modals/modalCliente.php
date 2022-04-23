<div class="modal fade" id="modalCliente" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre" id="form_cliente_nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" id="form_cliente_paterno" placeholder="Apellido Paterno"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" id="form_cliente_materno" placeholder="Apellido Materno"
                            class="form-control">
                    </div>
                   <!-- <div class="form-group">
                        <input type="text" id="form_abreviacion_moneda" placeholder="Ap Casado"
                            class="form-control">
                    </div>-->
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Carnet" id="form_cliente_carnet">
                    </div>
                   <!-- <div class="form-group">
                        <input type="date" id="form_cliente_fecha" placeholder="Fecha Nacimiento"
                            class="form-control">
                    </div>-->
                    <div class="form-group">
                        <input type="text" id="form_cliente_direccion" placeholder="Direccion"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" id="form_cliente_correo" placeholder="Correo Electronico"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" id="form_cliente_telefono" placeholder="Telefono"
                            class="form-control">
                    </div>
                </div>
                <div class="modal-footer">

                    <button class="btn btn-primary" onclick="crear_persona()">Crear</button>
                </div>
        </div>
    </div>
</div>