
    <?php   headerAdmin();?>
    <h2 class="text-center p-2">Apertura de Cuenta Bancaria</h2>
    <form action="../actions/apertura.php"class="container mt-5" method="POST">
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Titular :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="apertura_titular" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Cuenta :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  id="apertura_cuenta" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Estado :</label>
            <div class="col-sm-10">
            <input type="text" id="apertura_estado"  class="form-control" readonly/>
         
               
            </div>
        </div>
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Tasa de Intéres Anual(%) :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="apertura_interes" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Fecha :</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="apertura_fecha" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Agencia :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="agencia">
            </div>
        </div>
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Ejecutivo :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ejecutivo">
            </div>
        </div>



    <table class="table p-2 container ">

        <thead class="thead-dark">
        <tr>
            <th>Saldo Reserva :</th>
            <th>Saldo Consultado :</th>
            <th>Saldo Congelado :</th>
            <th>Saldo Congelado :</th>
            <th>Saldo Sobregiro :</th>
            <th>Saldo Disponible :</th>
            <th>Saldo Actual :</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        

        </tr>        
        </tbody>

    </table>

    </form>
 </div>
 </div>

 </body>
<script>

var cliente_id = localStorage.getItem('usuario')

var getDetalleApertura = function(){

    $.ajax({
        url:"AperturaCuenta/getDetalleApertura",
        type:"POST",
        data:{cliente_id},
        success:function(data){
            const cuenta = JSON.parse(data)
            $('#apertura_titular').val(cuenta.nombre)
            $('#apertura_cuenta').val(cuenta.nroCuenta)
            $('#apertura_interes').val(cuenta.tasaInteresId)
            $('#apertura_fecha').val(cuenta.fecha_apertura)
            if(cuenta.estado==0){

                $('#apertura_estado').val('Activo')
            }else{

                $('#apertura_estado').val('Inactivo')
            }
            console.log(cuenta)
        },error:function(error){
            console.log(error)
        }
    })
    
}
getDetalleApertura()
</script>
</html>