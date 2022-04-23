
<?php 

    class Registro extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function Registro($params){
            $data['tag_page'] = "Home";
            
           $this->views->getView($this,"Registro",$data);
        }

        

    }



?>