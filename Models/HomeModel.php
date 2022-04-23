<?php 

    class HomeModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

        public function getCuenta_id($id){
           // return $id;

         $sql = "SELECT * FROM cuenta where id = $id";
         $request = $this->select($sql);
         return $request;
        }
     


    }


?>