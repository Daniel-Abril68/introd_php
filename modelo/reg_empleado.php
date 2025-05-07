<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require 'modelo/conexion.php'

    session_start();
    if(isset($_SESSION['username']))
    {
        $id_empleado = $_POST['id_empleado'];
        $nombre_emp = $_POST['nombre_empleado'];
        $apellido_empleado = $_POST['apellido_empleado'];
        $departamento_emp = $_POST['departamento_empleado'];

        $query ="INSERT INTO Empleado(id_empleado,nombre_empleado,apellidos_empleado,departamento_empleado) VALUES ('$id_emp', '$nombre_emp', '$apellidos_empleado', '$departamento_emp')";

        $insercion = mtsqli_quiery($conexion,$quiery) or trigger_error("error en la insercion de los datos".mysqli_error($conexion));

        if($insercion)
        {
            echo '<script type "text/javascript">
                    alert("Empleado registrado!");
                    window.location.href = "../registrar_empleado.php"
                </script>';
        }
        else
        {
            header('location: ../index.php');
        }
    }
?>
