
<?php 

    class ClienteModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

       public function insertCliente(string $ci,string $nombre,string $ap_materno,string $ap_paterno,string $ap_casado,string $fecha_nacimiento,string $direccion,string $correo_electronico,string $telefono){
        $sql = "INSERT INTO cliente (ci,nombre,ap_paterno,ap_materno,ap_casado,fecha_nacimiento,direccion,correo_electronico,telefono) values (?,?,?,?,?,?,?,?,?)";
        $arrData = array($ci,$nombre,$ap_materno,$ap_paterno,$ap_casado,$fecha_nacimiento,$direccion,$correo_electronico,$telefono);
        $request = $this->insert($sql,$arrData);
        return $request;
       }
       public function listarCliente(){
        $sql = "SELECT * FROM cliente";
        $request = $this->select_all($sql);
        return $request;

       }
     


    }


?>