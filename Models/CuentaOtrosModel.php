<?php 

    class CuentaOtrosModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

        public function getCuentaOtros(){
          $sql = "SELECT * FROM cuentadeposito c ,cuentaotros ct WHERE c.idCuentaDeposito = ct.cuentaDepositoId";
          $request = $this->select_all($sql);
        
          return $request;
         }

         public function getBanco(){
            $sql = "SELECT * FROM banco";
            $request = $this->select_all($sql);
          
            return $request;
           }

           public function getSucursal($idBanco){
            $sql = "SELECT * FROM sucursal WHERE idBanco ='$idBanco'";
            $request = $this->select_all($sql);
          
            return $request;
           }

           public function getTipoCuenta(){
            $sql = "SELECT * FROM tipocuenta";
            $request = $this->select_all($sql);
          
            return $request;
           }

           public function getTipoMoneda(){
            $sql = "SELECT * FROM tipomoneda";
            $request = $this->select_all($sql);
          
            return $request;
           }

           public function getTipoIdentificacion(){
            $sql = "SELECT * FROM tipoidentificacion";
            $request = $this->select_all($sql);
          
            return $request;
           }


         


         public function insertCuentaOtros(string $nroCuenta,$nombreTitular,$nroIdentificacion,$direccion,$Correo,$Banco,$Sucursal,$TipoCuenta,$TipoMoneda,$Usuario,$TipoI){
            $fechaRegistro = getdate();
            $tipoCuentaD =3;
            $clienteId=1;
            $sql = "INSERT INTO cuentadeposito (nroCuenta,fecha_registro,clienteId,tipoCuentaDepositoId) 
             values (?,?,?,?)";

             $arrData = array($nroCuenta,$fechaRegistro,$Usuario,$tipoCuentaD);
             $request = $this->insert($sql,$arrData);
             
         

            /* $sqlaux="SELECT MAX(idCuentaDeposito) as id FROM cuentadeposito";
             $aux= $this->select_all($sqlaux);
             
             $put= $this->lastInsert;   
            
            foreach ($aux as $r){
                $r['id'];
            
            }
        
            $obtId=$r['id']; */

          //  echo $obtId;
            
             $sqlInsert = "INSERT INTO cuentaotros (cuentaDepositoId,nombre_titular,nro_identificacion,direccion,correo_electronico,bancoId,sucursalId,tipoIdentificacionId,tipoCuentaId,tipoMonedaId) 
             values (?,?,?,?,?,?,?,?,?,?)";
            $a=1;
            $b=2;
             $arrayData = array($request,$nombreTitular,$nroIdentificacion,$direccion,$Correo,$Banco,$Sucursal,$TipoI,$TipoCuenta,$TipoMoneda);
             
             $requestt = $this->insert($sqlInsert,$arrayData);   

             return $requestt;
         }


    }


?>
