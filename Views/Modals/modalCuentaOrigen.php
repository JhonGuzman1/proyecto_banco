<style>

    tr{
        cursor:pointer;
    }
</style>
<div class="modal  fade" id="modalCuentaOrigen" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Seleccionar Cuenta Origen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="text" id="table_cuenta_origen_buscar" placeholder="Buscar" class="form-control form-group  mb-5"> 
            <table id="table_cuenta_origen" class="table">
                <thead>
                    <tr>
                        <th>N° Cuenta</th>
                        <th>Saldo</th>
                        <th>Tasa de Interes</th>
                    </tr>

                </thead>
                <tbody id="table_cuenta_origen_body">
                    
                </tbody>
            </table>
            <div class="modal-footer p-3">
            
            </div>

        </div>
    </div>
</div>