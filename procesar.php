<?php
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo "PHP funcionando<br>";

$conexion = mysqli_connect("sql312.epizy.com","if0_40478677","jesusvazquezproyecto","if0_40478677_proyecto");
if(!$conexion){
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $comentario = mysqli_real_escape_string($conexion, $_POST['comentario']);

    if (!empty($nombre) && !empty($comentario)) {
        $sql = "INSERT INTO Visitas (nombre, comentario) VALUES ('$nombre', '$comentario')";

        if (mysqli_query($conexion, $sql)) {

            echo "<script>window.location.href = 'gracias.html';</script>";
        } else {
            echo "<h3 style='color:red'>Error al guardar: " . mysqli_error($conexion) . "</h3>";
        }
    } else {
        echo "<h3 style='color:red'>Por favor completa todos los campos.</h3>";
    }
}

mysqli_close($conexion);
?>