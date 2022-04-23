
<?php 

    class SucursalModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

        public function insertSucursal(string $nombre,int $idBanco){
            $sql = "INSERT INTO sucursal (nombre,idBanco) values (?,?)";
            $arrData = array($nombre,$idBanco);
            $request = $this->insert($sql,$arrData);
            return $request;
           }
           public function getBanco(){
               $sql  = "SELECT * FROM banco";
               $request=$this->select_all($sql);
               return $request;
           }
           public function getSucursal()
           {
               $sql = "SELECT sucursal.idSucursal,sucursal.nombre,banco.nombre as banco FROM sucursal,banco WHERE sucursal.idBanco = banco.idBanco";
               $request = $this->select_all($sql);
               return $request;
           }

    }


?>