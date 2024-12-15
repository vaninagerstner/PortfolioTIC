<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEAMLab</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   <header>
     <div class="container">
            <div class="d-flex justify-content-end">
            <a href="login.php" class="me-2"></a>
            <a href="index final.php">
                <button type="button" class="btn btn-secondary">Cerrar Sesión</button>
            </a>
            </div>
        </div>
        <img src="logosteamlab.png" alt="Logo STEAMLab">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <br>
         <nav>
            <ul>
                <li><a href="restringido.php">Perfil</a></li>
                <li><a href="actualizar.php">Actualizar datos</a></li>
                <li><a href="pagos.php">Gestión de pagos</a></li>
                <li><a href="soporte.php">Soporte</a></li>
            </ul>
        </nav>
    </header>
<main>
<section id="Socio">
    <article>
        <center>



<?php
     session_start(); 
     $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
     if (isset($_SESSION['nombre'])) {
         echo "Bienvenido... <b>" . $_COOKIE['USU']. "</b><br>";
         echo "<br>";

         include("conexion.php");

         $usuario = $_COOKIE['USU'];
         $sql = "SELECT * FROM socios WHERE usuario='$usuario'";
         $resultado = mysqli_query($conn, $sql);

         if ($resultado) {
             if (mysqli_num_rows($resultado) > 0) {
                 $datos_usuario = mysqli_fetch_assoc($resultado);
                 $usuario = $datos_usuario['usuario'];
                 $email = $datos_usuario['email'];
                 $dni = $datos_usuario['dni'];
                 $foto = $datos_usuario['foto']; 
             } else {
                 echo "No se encontraron datos para el usuario.";
                 exit();
             }
         } else {
             echo "Error en la consulta: " . mysqli_error($conn);
             exit();
         }
     } else {
         echo "Ud no es un usuario";
         exit(); 
     }
?>

            <div class="card" style="width: 35rem;">
                <img src="<?php echo $foto; ?>" class="card-img-top" alt="Foto del usuario">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "Estos son los datos del perfil de ", $usuario; ?></h5>
                    <p class="card-text">Email: <?php echo $email; ?></p>
                    <p class="card-text">DNI: <?php echo $dni; ?></p>
                </div>
            </div>
        </center>
    </article>
</section>
</main>
<footer>
    <div class="social">
        <a href="https://facebook.com"><img src="facebook.png" alt="Facebook"></a>
        <a href="https://twitter.com"><img src="twitter.png" alt="Twitter"></a>
        <a href="https://instagram.com"><img src="instagram.png" alt="Instagram"></a>
        <a href="https://www.northfield.edu.ar/"><img src="escudo.png" alt="Escudo"></a>
    </div>
    <div class="geolocalizacion">
        <p>Colegio Northfield School, Tigre, Buenos Aires, Argentina</p>
    </div>
    <div class="owner">
        <p>Vanina Gerstner &copy; 2024</p>
    </footer>
</body>
</html>