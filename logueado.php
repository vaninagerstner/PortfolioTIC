<?php
session_start();
include("conexion.php");

$dni = $_POST['dni'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$password = $_POST['password'];
setcookie("USU", $usuario);

// Consulta SQL para verificar las credenciales
$sql = "SELECT * FROM socios WHERE dni='$dni' AND usuario='$usuario' AND email='$email' AND password='$password'";
$consulta = mysqli_query($conn, $sql);
$existe = mysqli_num_rows($consulta);

if ($existe == 1) {
    // Guardar el usuario y DNI en la sesión
    $user_data = mysqli_fetch_assoc($consulta); // Traer los datos del usuario desde la base
    $_SESSION['usuario'] = $user_data['usuario']; // Guardar nombre de usuario
    $_SESSION['dni'] = $user_data['dni']; // Guardar DNI del usuario en la sesión

    // Redirigir al perfil restringido
    header("Location: restringido.php");
    exit();
} else {
    // Si las credenciales no son válidas, redirigir al login
   echo "Ud.no es un usuario registrado";
    header("Location: login.php");
    exit();
}
?>
