

<?php 

    class Terceros extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function Terceros($params){
            $data['tag_page'] = "Home";
            
           $this->views->getView($this,"Terceros",$data);
        }
        public function insertarTerceros(){
            $nroCuenta = $_POST['nroCuenta'];
            $fecha_vencimiento = $_POST['fecha_vencimiento'];
            $clienteId = $_POST['clienteId'];
            $fecha_registro =  date("Y/m/d");
            $tipo_cuenta_deposito = 2; 

            $data = $this->model->insertarTerceros($nroCuenta,$fecha_registro,$fecha_vencimiento,$clienteId,$tipo_cuenta_deposito);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }
        

    }



?>