<?php   headerAdmin();?>
<h2 class="text-center p-d">Registro de Cuentas Bancarias</h2>
<form action="" class="container p-5">
    <div class="form-group row">
        <div class="col">
            <div class="row">
                <label for="" class="col col-form-label">Bancos :</label>
                <div class="col-8">
                    <select name="" class="form-control bg-primary text-light ">
                        <option value="">Banco BNB</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">

                <label for="" class="col-form-label">Sucursal</label>
                <div class="col">
                    <select name="" id="" class="form-control  bg-primary text-light">
                        <option value="">Seleccione Sucursal</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Tipo de Cuenta : </label>
        <div class="col-sm-10">
            <select class="form-control bg-primary text-light">
                <option value="">Caja de Ahorro cuenta corriente</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col">
            <div class="row">
                <label for="" class="col col-form-label">Número de cuenta a accionar :</label>
                <div class="col-8">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">

                <label for="" class="col-form-label">Moneda :</label>
                <div class="col">
                    <select name="" id="" class="form-control  bg-primary text-light">
                        <option value="">Seleccione La moneda</option>
                        <option value="">Bolivianos</option>
                        <option value="">Dolares</option>

                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Titular : </label>
        <div class="col-sm-10">
            <input type="text" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <div class="col">
            <div class="row">
                <label for="" class="col col-form-label">Tipo de Identificación:</label>
                <div class="col-8">
                    <select name="" id="" class="form-control bg-primary text-light">
                        <option value="">CIN Cédula de Identidad</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">

                <label for="" class="col-form-label">Número de Identificación :</label>
                <div class="col">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col">
            <div class="row">
                <label for="" class="col col-form-label">Dirección:</label>
                <div class="col-8">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">

                <label for="" class="col-form-label">Correo Electrónico :</label>
                <div class="col">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="from-group row">
        <label for="" class="col col-form-label">Fecha de Vencimiento:</label>
        <div class="col-6">
            <input type="date" class="form-control">
        </div>
        <div class="col-4 form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                Indefinido 
            </label>
        </div>
    </div>
    <button class="btn btn-success  mt-2 form-control">Continuar</button>
</form>
<?php footerAdmin(); ?>