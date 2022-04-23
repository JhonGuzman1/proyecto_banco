

<?php 

class AperturaCuenta extends Controllers{

    public function __construct(){
        //Ejecuta el constructor de su padre
        parent::__construct();
    }
    public function AperturaCuenta($params){
        $data['tag_page'] = "t";
        
       $this->views->getView($this,"AperturaCuenta",$data);
    }

    public function insertApertura(){
        //echo 'bien';
      //  return 'bien';
        $saldo = $_POST['saldo'];
        $interes= $_POST['interes'];
        $estado= $_POST['estado'];
        //$fecha= $_POST['fecha'];
        $tipo_moneda = $_POST['tipo_moneda'];
        $ClienteId = $_POST['id_cliente'];
        $tipo_cuentaId = 1;
        $tipo_moneda = 1;
        $fecha = date("Y/m/d");
        $data = $this->model->insertApertura($interes,$saldo,$fecha,$estado,$ClienteId,$tipo_cuentaId,$tipo_moneda);

        echo $data;

    }
    public function getCliente(){
        $data  =$this->model->getClientes();
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }
    public function getDetalleApertura(){
        $cliente_id = $_POST['cliente_id'];
        $data = $this->model->getDetalleApertura($cliente_id);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }

}



?>