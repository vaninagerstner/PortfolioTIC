<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];
$sql = "INSERT INTO contacto VALUES ('$nombre', '$email', '$mensaje')";
if(mysqli_query ($conn,$sql)){
	echo "datos insertados";
	header("Location: gracias.php");
    exit();
}else{
	echo "Opps2";
}
?>