
<?php 

    class Otros extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function Otros($params){
            $data['tag_page'] = "Home";
            
           $this->views->getView($this,"Otros",$data);
        }

        

    }



?>