<?php

    class Mysql extends Conexion {

        private $conexion;
        private $strquery;
        private $arrValues;

        public function __construct()
        {

            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
            
        }

        // METODO PARA AGREGAR DATOS
        public function insert(string $query, array $arrValues) {

            $this->strquery = $query;
            $this->arrValues = $arrValues;

            $insert = $this->conexion->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrValues);

            if($resInsert) {

                $lastInsert = $this->conexion->lastInsertId();

            } else {

                $lastInsert = 0;

            }

            return $lastInsert;

        }
        /* ----------------------------------------------------------------------------------------------- */
        
        // METODO PARA OBTENER UN DATO
        public function select(string $query) {
            
            $this->strquery = $query;
            
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            
            $data = $result->fetch(PDO::FETCH_ASSOC);
            
            return $data;
            
        }
        /* ----------------------------------------------------------------------------------------------- */
        
        // METODO PARA OBTENER TODOS LOS DATOS
        public function selectAll(string $query) {
            
            $this->strquery = $query;
            
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            
            return $data;
            
        }
        /* ----------------------------------------------------------------------------------------------- */
        
        // METODO PARA ACTUALIZAR DATOS
        public function update(string $query, array $arrValues) {
            
            $this->strquery = $query;
            $this->arrValues = $arrValues;
            
            $update = $this->conexion->prepare($this->strquery);
            $resUpdate = $update->execute($this->arrValues);
            
            return $resUpdate;
            
        }
        /* ----------------------------------------------------------------------------------------------- */

        public function delete(string $query) {

            $this->strquery = $query;

            $delete = $this->conexion->prepare($this->strquery);
            $result = $delete->execute();
            
            return $result;

        }

    }

?>