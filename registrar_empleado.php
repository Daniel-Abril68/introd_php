<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require 'modelo/conexion.php'

    session_start();
    if(isset($_SESSION['username']))
    {
        $nombre_usuario = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar Empleado</h1>
    <?php
        echo 'usuario: '.$nombre_usuario;
    ?>
    <!--Formulario de registro de un empleado-->
    <form action="" method = "post">
        <h2>empleado</h2>
        <label for="">Codigo:</label> 
        <input type="text" name="id_empleado" id="" required>
        <br><br>
        <label for="">nombre:</label>
        <input type="text" name="nombre_empleado" id="" required>
        <br><br>
        <label for="">apellidos:</label>
        <input type="text" name="apellido_empleado" id="" required>
        <br><br>
        <label for="">departamento:</label>
        <input type="text" name="departamento_empleado" id="" required>
        <br><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>