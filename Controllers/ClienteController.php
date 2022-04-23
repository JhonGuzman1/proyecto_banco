

<?php 

    class Cliente extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function cliente($params){
            $data['tag_page'] = "Cliente";
            
           $this->views->getView($this,"Cliente",$data);
        }
        public function insertar_cliente(){
            $carnet = $_POST['carnet'];
            $nombre = $_POST['nombre'];
            $paterno = $_POST['paterno'];
            $materno = $_POST['materno'];
            $fecha = date("Y/m/d");
            $direccion = $_POST['direccion'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $casado = "";
            $data = $this->model->insertCliente($carnet,$nombre,$paterno,$materno,$casado,$fecha,$direccion,$correo,$telefono);
            echo $data;
        }
        public function listarCliente(){

            $data = $this->model->listarCliente();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }
       
   

    }



?>