<?php 

    class TransferenciaModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

   
         public function insertTransferencia(int $monto_deposito,string $glosa,string $origenFondo,string $destinoFondo,string $fecha,string $estado,int $ClienteId,int $cuentaDebitoId,int $cuentaDepositoId,int $tipoMonedaId){
       
             $sql = "INSERT INTO  transaccion (monto_deposito,glosa,origenFondo,destinoFondo,fecha,estado,ClienteId,cuentaDebitoId,cuentaDepositoId,tipoMonedaId) values (?,?,?,?,?,?,?,?,?,?)";
             $arrData = array($monto_deposito,$glosa,$origenFondo,$destinoFondo,$fecha,$estado,$ClienteId,$cuentaDebitoId,$cuentaDepositoId,$tipoMonedaId);


            $selectSQL = "SELECT saldo FROM cuentapersonal WHERE nroCuenta = ".$cuentaDebitoId;
            $monto = $this->select($selectSQL);
            
            // Tipo Cambio
            $selectCambio ="SELECT monto_tc FROM tipo_cambio,tipomoneda WHERE id_operacionTC =2 AND id_destino_tipomoneda =  idTipoMoneda";
            $tipoCambio = $this->select($selectCambio);


           if($monto['saldo'] -($monto_deposito*$tipoCambio['monto_tc']) > 0){
                
                
                //resta
                $sql2 = "UPDATE cuentapersonal set saldo = saldo -".$monto_deposito*$tipoCambio['monto_tc']." WHERE nroCuenta = ".$cuentaDebitoId;
                $arrData2 =array($monto_deposito,$cuentaDebitoId);
                
                $sql4 = "SELECT nroCuenta FROM cuentadeposito where idCuentaDeposito = ".$cuentaDepositoId;
                
                $val = $this->select($sql4);
                
                $id = $val['nroCuenta'];
                $sql3 = "UPDATE cuentapersonal set saldo = saldo +".$monto_deposito*$tipoCambio['monto_tc']." WHERE nroCuenta = ".$id;
                $arrData3 = array($monto_deposito,$id);
                $request = $this->insert($sql,$arrData);
                $resta = $this->update($sql2,$arrData2);
                $suma  = $this->update($sql3,$arrData3);
                
                $obt = "SELECT * FROM transaccion t, cuentadeposito d, cuentapersonal p, cliente c , tipomoneda m WHERE t.idTransaccion= '$request' and t.cuentaDepositoId=d.idCuentaDeposito and d.nroCuenta=p.nroCuenta and p.clienteId = c.idCliente and t.tipoMonedaId=m.idTipoMoneda ";
                $info = $this->select_all($obt);
    
                
                return $info;
                }
                return 'error';
            }
            public function getCuentaOrigen(int $cliente_id)
            {
                
                $sql = "SELECT * FROM cuentapersonal WHERE clienteId =".$cliente_id;
                $request = $this->select_all($sql);
                return $request;             
         }
         public function getCuentaPersonal( $cliente_id)
         {
           
           //     $sql = "SELECT * FROM cuentapersonal WHERE clienteId = '$cliente_id' AND tipoCuentaDepositoId = 1 " ;
             $sql = "SELECT * FROM cuentapersonal WHERE clienteId = '$cliente_id' " ;
                $request = $this->select_all($sql);
                return $request;             
         }

         public function getTransaccion( $cliente_id,$cuenta,$opcion)
         {
            switch ($opcion) 
            {
            case 0:
                $sql = "SELECT * FROM transaccion WHERE ClienteId = '$cliente_id' and cuentaDebitoId= '$cuenta' " ;
                $request = $this->select_all($sql);
                return $request;
                break;
            case 1:
                $sql = "SELECT * from transaccion where ClienteId = '$cliente_id' and cuentaDebitoId= '$cuenta'  and DATE_FORMAT(transaccion.fecha, '%Y-%m-%d') = CURDATE()  " ;
                $request = $this->select_all($sql);
                return $request;   
                   
                break;
            case 2:
                $sql = "SELECT  * from transaccion where   ClienteId = '$cliente_id' and cuentaDebitoId= '$cuenta'  ORDER by(fecha) LIMIT 0,12 " ;
                $request = $this->select_all($sql);
                return $request;   
                break;
                case 3:
                    $sql = "SELECT * from transaccion where ClienteId = '$cliente_id' and cuentaDebitoId= '$cuenta'  AND MONTH(DATE_FORMAT(transaccion.fecha, '%Y-%m-%d'))=MONTH(CURRENT_DATE()) and YEAR(DATE_FORMAT(transaccion.fecha, '%Y-%m-%d'))=YEAR(CURRENT_DATE()) " ;
                    $request = $this->select_all($sql);
                    return $request;   
                break;
                case 4:
                    $sql = "SELECT * from transaccion where ClienteId = '$cliente_id' and cuentaDebitoId= '$cuenta' AND 
                    YEAR(DATE_FORMAT(transaccion.fecha, '%Y-%m-%d')) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
                    AND MONTH(DATE_FORMAT(transaccion.fecha, '%Y-%m-%d')) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) " ;
                    $request = $this->select_all($sql);
                    return $request; 
                break;
                case 5:
                    $sql = "SELECT * from transaccion where ClienteId = '$cliente_id' and cuentaDebitoId= '$cuenta'AND DATE_FORMAT(transaccion.fecha, '%Y-%m-%d')BETWEEN '2020-09-01' AND '2020-10-15'" ;
                    $request = $this->select_all($sql);
                    return $request; 
                break;
            }
        
                           
         }

         public function getDetallesTransaccion( $id)
         {
           
                  $sql = "SELECT * FROM transaccion t, cuentadeposito d, tipomoneda m WHERE t.idTransaccion= '$id' and t.cuentaDepositoId=d.idCuentaDeposito and t.tipoMonedaId= m.idTipoMoneda " ;
                  $request = $this->select_all($sql);
                 return $request;             
         }
       
            public function getCuentaDestino(int $cliente_id)
            {
                

                $sql = "SELECT * FROM cuentadeposito d,cuentapersonal p WHERE d.clienteId = '$cliente_id' AND d.nroCuenta = p.nroCuenta ";
                $request = $this->select_all($sql);
                return $request;             
         }
         
         public function getCuentaOtrosXBancoSucrusal($bancoId,$sucursalId,$usuarioId){
            $sql = "SELECT * FROM cuentaotros c , cuentadeposito d WHERE c.cuentaDepositoId= d.idCuentaDeposito and c.bancoId = '$bancoId' and c.sucursalId = '$sucursalId' and d.clienteId = '$usuarioId' ";
            $request = $this->select_all($sql);
            return $request;        
         }

         public function getDatosCuenta($CuentaId){
            $sql = "SELECT *,m.descripcion as descr FROM cuentaotros c, tipoidentificacion t , tipomoneda m , tipocuenta tc WHERE c.cuentaDepositoId= '$CuentaId' and c.tipoIdentificacionId= t.idTipoI  and  c.tipoMonedaId=m.idTipoMoneda and c.tipoCuentaId= tc.id";
            $request = $this->select_all($sql);
            return $request; 
         }


         public function insertTransferenciaOtros(int $monto_deposito,string $glosa,string $origenFondo,string $destinoFondo,string $fecha,string $estado,int $ClienteId,int $cuentaDebitoId,int $cuentaDepositoId,int $tipoMonedaId){
       
            try{
                $sql = "INSERT INTO  transaccion (monto_deposito,glosa,origenFondo,destinoFondo,fecha,estado,ClienteId,cuentaDebitoId,cuentaDepositoId,tipoMonedaId) values (?,?,?,?,?,?,?,?,?,?)";
                $arrData = array($monto_deposito,$glosa,$origenFondo,$destinoFondo,$fecha,$estado,$ClienteId,$cuentaDebitoId,$cuentaDepositoId,$tipoMonedaId);
    
    
               $selectSQL = "SELECT saldo FROM cuentapersonal WHERE nroCuenta = ".$cuentaDebitoId;
               $monto = $this->select($selectSQL);
               //return $monto;
              if($monto['saldo'] -$monto_deposito > 0){
                   
                   
                   //resta
                   $sql2 = "UPDATE cuentapersonal set saldo = saldo -".$monto_deposito." WHERE nroCuenta = ".$cuentaDebitoId;
                   $arrData2 =array($monto_deposito,$cuentaDebitoId);
                   
                   $request = $this->insert($sql,$arrData);
                   $resta = $this->update($sql2,$arrData2);
                  

                   $obt = "SELECT * FROM transaccion t , cuentadeposito d, cuentaotros o , banco b, tipomoneda m WHERE t.idTransaccion = '$request' AND t.cuentaDepositoId = d.idCuentaDeposito AND d.idCuentaDeposito = o.cuentaDepositoId and o.bancoId = b.idBanco and o.tipoMonedaId = m.idTipoMoneda ";
                   $info = $this->select_all($obt);
                   return $info;
                   }
                   return 'error';
            }catch(Exception $e){
               // return 'error';
            }
           
           }


    }


?>