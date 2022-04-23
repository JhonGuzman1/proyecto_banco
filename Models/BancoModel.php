<?php 

    class BancoModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

       public function insertBanco(string $nombre){
        $sql = "INSERT INTO banco (nombre) values (?)";
        $arrData = array($nombre);
        $request = $this->insert($sql,$arrData);
        return $request;
       }
       public function getBanco()
       {
           $sql = "SELECT idBanco,nombre FROM banco";
           $request = $this->select_all($sql);
           return $request;
       }


    }


?>