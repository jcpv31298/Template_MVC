<?php

    class homeModel extends Mysql {

        public function __construct()
        {

            parent::__construct();

        }

        public function setData(string $nombre, int $edad) {

            $query = "INSERT INTO usuario(nombre,edad) VALUES(?,?)";
            $arrValues = array($nombre,$edad);

            $result = $this->insert($query,$arrValues);
            
            return $result;

        }

        public function getData(int $id) {

            $query = "SELECT * FROM usuario WHERE id=$id";

            $result = $this->select($query);

            return $result;

        }

        public function getAllData() {

            $query = "SELECT * FROM usuario";

            $result = $this->selectAll($query);

            return $result;

        }

        public function updateData(int $id, string $nombre, int $edad) {

            $query = "UPDATE usuario SET nombre=?,edad=? WHERE id=$id";
            
            $arrValues = array($nombre, $edad);

            $request = $this->update($query, $arrValues);

            return $request;

        }

        public function deleteData(int $id) {

            $query = "DELETE FROM usuario WHERE id=$id";

            $request = $this->delete($query);

            return $request;

        }

    }

?>