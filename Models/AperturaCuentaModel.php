<?php 

    class AperturaCuentaModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

      public function insertApertura(int $tasaInteresId,int $saldo,string $fecha_apertura,string $estado,int $clienteId,int $tipoCuentaId,int $tipoMonedaId){
        $sql = "INSERT INTO cuentapersonal (tasaInteresId,saldo,fecha_apertura,estado,clienteId,tipoCuentaId,tipoMonedaId) values (?,?,?,?,?,?,?)";

        $arrData = array($tasaInteresId,$saldo,$fecha_apertura,$estado,$clienteId,$tipoCuentaId,$tipoMonedaId);
        $request = $this->insert($sql,$arrData);
        return $request;

      } 
      public function getClientes(){
        $sql = "SELECT * FROM cliente";
        $request = $this->select_all($sql);
        return $request;
       }
       public function getDetalleApertura(int $cliente_id){
         $sql = "SELECT cu.nroCuenta,c.nombre,c.ap_paterno,c.ap_materno,c.ci,cu.estado,cu.tasaInteresId,cu.fecha_apertura FROM cuentapersonal cu,cliente c WHERE clienteId =".$cliente_id." AND idCliente=".$cliente_id;
         $request = $this->select($sql);
         return $request;
       }


    }


?>