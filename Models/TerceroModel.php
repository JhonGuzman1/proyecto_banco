<?php 

    class TerceroModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

        public function insertarTercero(int $monto_deposito,string $glosa,string $origenFondo,string $destinoFondo,string $fecha,int $estado,int $ClienteId,int $cuentaDebitoId,int $cuentaDepositoId,int $tipoMonedaId){

            
            $sql = "INSERT INTO transaccion (monto_deposito,glosa,origenFondo,destinoFondo,fecha,estado,ClienteId,cuentaDebitoId,cuentaDepositoId,tipoMonedaId) values (?,?,?,?,?,?,?,?,?,?)";


            $selectSQL = "SELECT saldo FROM cuentapersonal WHERE nroCuenta = ".$cuentaDebitoId;
            $monto = $this->select($selectSQL);
            //return $monto;
           if($monto['saldo'] -$monto_deposito > 0){

               //resta
               $sql2 = "UPDATE cuentapersonal set saldo = saldo -".$monto_deposito." WHERE nroCuenta = ".$cuentaDebitoId;
               $arrData2 =array($monto_deposito,$cuentaDebitoId);

               $sql4 = "SELECT nroCuenta FROM cuentadeposito where idCuentaDeposito = ".$cuentaDepositoId;
                
               $val = $this->select($sql4);
               
               $id = $val['nroCuenta'];
               $sql3 = "UPDATE cuentapersonal set saldo = saldo +".$monto_deposito." WHERE nroCuenta = ".$id;
               $arrData3 = array($monto_deposito,$id);




            $arrData = array($monto_deposito,$glosa,$origenFondo,$destinoFondo,$fecha,$estado,$ClienteId,$cuentaDebitoId,$cuentaDepositoId,$tipoMonedaId);
            $request = $this->insert($sql,$arrData);

            $resta = $this->update($sql2,$arrData2);
            $suma  = $this->update($sql3,$arrData3);

            $obt = "SELECT * FROM transaccion t, cuentadeposito d, cuentapersonal p, cliente c , tipomoneda m WHERE t.idTransaccion= '$request' and t.cuentaDepositoId=d.idCuentaDeposito and d.nroCuenta=p.nroCuenta and p.clienteId = c.idCliente and t.tipoMonedaId=m.idTipoMoneda ";
            $info = $this->select_all($obt);

            
            return $info;
           }
            return 'error';
           }




        public function getCuentaDestino($Usuario){
            $sql= " SELECT cliente.nombre,cliente.ap_paterno,cuentadeposito.nroCuenta,cuentadeposito.idCuentaDeposito FROM cuentadeposito,cliente, cuentapersonal p  WHERE  tipoCuentaDepositoId = 2 AND cuentadeposito.nroCuenta = p.nroCuenta AND p.clienteId=cliente.idCliente AND cuentadeposito.clienteId = '$Usuario' AND p.clienteId != '$Usuario'";

            $request  = $this->select_all($sql);
            return $request;
        }   


        public function getObtXCuenta($idCuenta){
            $sql= " SELECT * FROM cuentadeposito WHERE tipoCuentaDepositoId = 2 AND idCuentaDeposito= '$idCuenta' ";

            $request  = $this->select_all($sql);
            return $request;
        }   
          
           

    }


?>