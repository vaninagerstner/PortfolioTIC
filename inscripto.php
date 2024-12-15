<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$sql = "INSERT INTO futuros_alumnos VALUES ('$nombre','$dni','$celular','$email')";
if(mysqli_query ($conn,$sql)){
	echo "datos insertados";
	header("Location: gracias.php");
    exit();
}else{
	echo "Opps2";
}
?>