<?php

    class conexion{
        private $servidor = "localhost";
        private $usuario = "root";
        private $clave = "";
        private $conexion;

        public function __construct()
        {
            try{

                $this->conexion = new PDO("mysql:host=$this->servidor;dbname=album", $this->usuario, $this->clave);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            }catch(PDOException $error){
                echo "Conexión erronea".$error;
            }
        }

        public function ejecucion($sql){ //insertar,borrar y actualizar
            $this->conexion->exec($sql);
            return $this->conexion->lastInsertId();
        }

        public function consuta($sql){ //consulta
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll();
        }


    }





?>