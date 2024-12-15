<?php
include("conexion.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contacto (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

    if (mysqli_query($conn, $sql)) {
        header("Location: graciassoporte.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>