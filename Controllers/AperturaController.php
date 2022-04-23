

<?php 

    class Apertura extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function Apertura($params){
            $data['tag_page'] = "t";
            
           $this->views->getView($this,"Apertura",$data);
        }

   

    }



?>