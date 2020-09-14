<?php

    class Home extends Controllers {

        public function __construct()
        {
            
            parent::__construct();

        }

        public function home() {

            $data["page_id"] = 1;
            $data["tag_name"] = "Inicio - Sistema MACON";
            $data["page_title"] = "Inicio";
            $data["page_name"] = "home";

            $this->views->getView($this, "home", $data);

        }

        public function insertar() {

            $data = $this->model->setData("Jose Valdez", 25);

            print_r($data);

        }

        public function verDato($id) {

            $data = $this->model->getData($id);

            print_r($data);

        }

        public function verDatos() {

            $data = $this->model->getAllData();

            print_r($data);

        }

        public function actualizar() {

            $data = $this->model->updateData(1,"Carlos Paez", 21);

            print_r($data);

        }

        public function borrar($id) {

            $data = $this->model->deleteData($id);

            print_r($data);

        }

    }

?>