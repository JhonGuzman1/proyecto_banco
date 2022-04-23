<?php 

    class TercerosModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

        public function insertarTerceros(string $nroCuenta,string $fecha_registro,string $fecha_vencimiento,int $clienteId,int $tipoCuentaDepositoId){

            $sql2 = "SELECT nroCuenta FROM cuentapersonal WHERE nroCuenta = ".$nroCuenta;
            $res = $this->select($sql2);
            if($res['nroCuenta']!= null){


                
                $sql = "INSERT INTO cuentadeposito (nroCuenta,fecha_registro,fecha_vencimiento,clienteId,tipoCuentaDepositoId) values (?,?,?,?,?)";
                
                
                $arrData = array($nroCuenta,$fecha_registro,$fecha_vencimiento,$clienteId,$tipoCuentaDepositoId);
                $request = $this->insert($sql,$arrData);
                return $request;
            }
            return 'error'; 
            }
            
            
            
        }
        
        
        ?>