<?php 

    class Movimientos extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function Movimientos($params){
            $data['tag_page'] = "Movimientos";
            
           $this->views->getView($this,"Movimientos",$data);
        }

        

    }



?>