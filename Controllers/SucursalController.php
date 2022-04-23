
<?php 

    class Sucursal extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function sucursal($params){
            $data['tag_page'] = "Sucursal";
            
           $this->views->getView($this,"Sucursal",$data);
        }
        public function insertar_sucursal(){
            $nombre = $_POST['nombre'];
            $banco_id = $_POST['banco_id'];
            $data = $this->model->insertSucursal($nombre,$banco_id);
            echo $data;
        }
        public function getBanco(){
            $data = $this->model->getBanco();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }
        public function getSucursal(){

            $data = $this->model->getSucursal();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }

    }



?>