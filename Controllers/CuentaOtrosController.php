<?php 

    class CuentaOtros extends Controllers{

        public function __construct(){

            parent::__construct();
        }

        public function CuentaOtros($params){
            $data['tag_page'] = "Home";
           $this->views->getView($this,"CuentaOtros",$data);
           
        }

        
        public function getCuentaOtros(){
           
            $data  =$this->model->getCuentaOtros();
 
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }

        public function getBanco(){
           
            $data  =$this->model->getBanco();
 
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }
        public function getSucursal(){
           $bancoId = $_GET['banco'];
            $data  =$this->model->getSucursal($bancoId);
 
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }
        
        public function getTipoCuenta(){
           
            $data  =$this->model->getTipoCuenta();
 
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }

        public function getTipoMoneda(){
           
            $data  =$this->model->getTipoMoneda();
 
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }

        public function getTipoIdentificacion(){
           
            $data  =$this->model->getTipoIdentificacion();
 
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }

        public function insertCuentaOtros(){
          $cuenta =  $_POST['cuenta'];
          $titular = $_POST['titular'];
          $nroCi = $_POST['nroCi'];
          $direccion = $_POST['direccion'];
          $correo = $_POST['correo'];
          $banco = $_POST['banco'];
          $sucursal = $_POST['sucursal'];
          $tipocuenta = $_POST['tipocuenta'];
          $tipomoneda = $_POST['tipomoneda'];
          $usuario = $_POST['usuario'];
          $tipoidenti= $_POST['tipoidenti'];
          $data = $this->model->insertCuentaOtros($cuenta,$titular,$nroCi,$direccion,$correo,$banco,$sucursal,$tipocuenta,$tipomoneda,$usuario,$tipoidenti);
           
        }
        
    }

?>