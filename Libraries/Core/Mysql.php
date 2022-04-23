<?php 

    class Mysql extends Conexion{
        private $conexion;
        private $strQuery;
        private $arrayValues;
        public $lastInsert;

        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        public function insert(string $query,array $arrValues){
            try{
                $this->strQuery = $query;
                $this->arrayValues = $arrValues;
                $this->conexion->beginTransaction();
                $insert = $this->conexion->prepare($this->strQuery);
    
                $resInsert  = $insert->execute($this->arrayValues);
                $lastInsert = $this->conexion->lastInsertId();
                $this->conexion->commit();
                
                if($resInsert)
                {
                  //  echo "hola";
                  //  $lastInsert = $this->conexion->lastInsertId();
                }else{
                    //$lastInsert = 0;
                //    echo "hola";
                }
                return $lastInsert;
            }catch(Exception $e){
                $this->conexion->rollBack();
                echo "Fallo: " . $e->getMessage();
            }
           
        }

        public function select(string $query){
            $this->strQuery =$query;
            $result = $this->conexion->prepare($this->strQuery);
            $result->execute();
            $data =$result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        public function select_all(string $query){
            $this->strQuery =$query;
            $result = $this->conexion->prepare($this->strQuery);
            $result->execute();
            $data =$result->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }
        public function update(string $query,array $arrValue){
            $this->strQuery = $query;
            $this->arrayValues = $arrValue;
            $update = $this->conexion->prepare($this->strQuery);
            $resExecute  = $update->execute($this->arrayValues);
            return $resExecute;

        }

        public function delete(string $query)
        {
            $this->strQuery = $query;
            $result = $this->conexion->prepare($this->strQuery);
            $result->execute();
            return $result;
        }


    }




?>