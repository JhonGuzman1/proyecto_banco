
<?php 

    class Tercero extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function Tercero($params){
            $data['tag_page'] = "Home";
            
           $this->views->getView($this,"Tercero",$data);
        }
        public function insertarTercero(){
            $monto = $_POST['monto'];
            $glosa = $_POST['glosa'];
            $correo = $_POST['correo'];
            $moneda= $_POST['moneda'];
            $fondo_origen= $_POST['fondo_origen'];
            $fondo_destino = $_POST['fondo_destino'];
            $cuenta_origen = $_POST['cuenta_origen'];
            $cuenta_destino = $_POST['cuenta_destino'];
            $fecha = date("Y/m/d");
            $cliente_id = $_POST['cliente_id'];
            $estado = 0;
            $data = $this->model->insertarTercero($monto,$glosa,$fondo_origen,$fondo_destino,$fecha,$estado,$cliente_id,$cuenta_origen,$cuenta_destino,$moneda);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }
        public function getCuentaDestino(){
            $user = $_POST['cliente_id'];
            $data = $this->model->getCuentaDestino($user);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }

        public function getObtXCuenta(){
            $cuenta = $_GET['cuenta'];
            $data = $this->model->getObtXCuenta($cuenta);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }
        

    }



?>