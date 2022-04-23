    <?php   headerAdmin();?>
    <?php   getModal('modalMoneda','d');?>

    <h2 style="text-align:center;">Tipo Moneda</h2>
    <button class="btn btn-success m-4" onclick="openModalMoneda()" data-toggle="modal"
        data-target="#modalMoneda">Nuevo</button>
    <table id="table-tipo_moneda">
        <thead>
            <tr>
                <th>idTipoMoneda</th>
                <th>Nombre</th>
                <th>Abreviacion</th>
            </tr>
        </thead>
        <tbody>


        </tbody>
    </table>

    </div>
    </div>
    </body>
    <script src="Assets/js/script_tipo_moneda.js"></script>

    </html>