<style>
    tr{
        cursor:pointer;
    }
</style>
<div class="modal  fade" id="modalApertura" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <h2 class="text-center p-3">Busca un  Cliente</h2>
        <input type="text" placeholder="Buscar" id="modal_apertura_buscar" class="form-control mb-4">
            <table id="table_apertura" class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Carnet</th>
                    </tr>

                </thead>
                <tbody id="table_apertura_body">
                    
                </tbody>
            </table>
            <div class="modal-footer p-3">
            
            </div>

        </div>
    </div>
</div>