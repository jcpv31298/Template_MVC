<?php

    class Conexion {

        private $connect;
        
        public function __construct()
        {
            
            $conexionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME."";

            try {

                $this->connect = new PDO($conexionString, DB_USER, DB_PASSWORD);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e){

                $this->conexion = "Error en la conexión";
                echo "ERROR: ".$e->getMessage();

            }

            
        }

        public function connect() {

            return $this->connect;

        }

    }

?>