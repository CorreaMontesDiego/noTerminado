<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/usernameModel.php");
            $this->model = new usernameModel();
        }
        public function insertar($Nombre,$ApellidoPaterno,$ApellidoMaterno,$Domicilio,$Curp,$NumeroDeTelefono,$IdSucursal){

            $Nombre = $this->model->Nombre($Nombre);
            $ApellidoPaterno = $this->model->ApellidoPaterno($ApellidoPaterno);
            $ApellidoMaterno = $this->model->ApellidoMaterno($ApellidoMaterno);
            $Domicilio = $this->model->Domicilio($Domicilio);
            $Curp = $this->model->Curp($Curp);
            $NumeroDeTelefono = $this->model->NumeroDeTelefono($NumeroDeTelefono);
            $IdSucursal = $this->model->IdSucursal($IdSucursal);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $nombre){
            return ($this->model->update($id,$nombre) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>