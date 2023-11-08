<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();   
    $obj->Nombre($_POST['Nombre']);
    $obj->ApellidoPaterno($_POST['ApellidoPaterno']);
    $obj->ApellidoMaterno($_POST['ApellidoMaterno']);
    $obj->Domicilio($_POST['Domicilio']);
    $obj->Curp($_POST['Curp']);
    $obj->NumeroDeTelefono($_POST['NumeroDeTelefono']);
    $obj->IdSucursal($_POST['IdSucursal']);
?>