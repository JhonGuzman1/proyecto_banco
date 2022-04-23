<?php 

    class TipoMonedaModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

        public function getMoneda(){
          $sql = "SELECT * FROM tipomoneda";
          $request = $this->select_all($sql);
          return $request;
         }
         public function insertMoneda(string $descripcion,string $abreviacion){
             $sql = "INSERT INTO tipomoneda (descripcion,abreviacion) values (?,?)";
             $arrData = array($descripcion,$abreviacion);
             $request = $this->insert($sql,$arrData);
             return $request;
         }


    }


?>