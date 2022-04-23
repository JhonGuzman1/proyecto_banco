<?php 

    class Home extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function home($params){
            $data['tag_page'] = "Home";
            
           $this->views->getView($this,"Home",$data);
        }

        public function getCuenta($id)
        {
            $data  = $this->model->getCuenta_id($id);
            print_r($data);
        }
   

    }



?>