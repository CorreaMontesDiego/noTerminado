<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre del empleado</label>
        <input type="text" name="Nombre" required class="form-control" id="Nombre" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="ApellidoPaterno" class="form-label">Apellido Paterno</label>
        <input type="text" name="ApellidoPaterno" required class="form-control" id="ApellidoPaterno" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="ApellidoMaterno" class="form-label">Apellido Materno</label>
        <input type="text" name="ApellidoMaterno" required class="form-control" id="ApellidoMaterno" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="Domicilio" class="form-label">Domicilio</label>
        <input type="text" name="Domicilio" required class="form-control" id="Domicilio" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="Curp" class="form-label">Curp</label>
        <input type="text" name="Curp" required class="form-control" id="Curp" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="NumeroDeTelefono" class="form-label">Numero de telefono</label>
        <input type="text" name="NumeroDeTelefono" required class="form-control" id="NumeroDeTelefono" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="IdSucursal" class="form-label">Id sucursal</label>
        <input type="text" name="IdSucursal" required class="form-control" id="IdSucursal" aria-describedby="emailHelp">
    </div>
    

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>