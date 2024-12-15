<?php
session_start();
session_destroy(); // Destruir la sesión actual
setcookie("USU", "", time() - 3600, "/"); // Eliminar la cookie configurada
header("Location: login.php"); // Redirigir al login u otra página
exit(); // Asegurar que el script se detenga aquí
?>
