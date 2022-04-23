
<?php 

    class Errors extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function notfound(){
           $this->views->getView($this,"Error");
        }

        
    }
    $notFound = new Errors();
    $notFound->notfound();



?>