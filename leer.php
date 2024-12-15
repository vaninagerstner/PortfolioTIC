<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEAMLab</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php
session_start();
if (!isset($_SESSION['dni'])) {
    header("Location: login.php?error=2");
    exit();
}

include("conexion.php");

// Usar el DNI desde la sesión
$dni = $_SESSION['dni'];
$sql = "SELECT * FROM cualquier_tabla WHERE dni = '$dni'";
$resultado = mysqli_query($conn, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "DNI: " . htmlspecialchars($fila['dni']) . "<br>";
        echo "Otro Dato: " . htmlspecialchars($fila['otro_dato']) . "<br>";
    }
} else {
    echo "No se encontraron datos para el DNI proporcionado.";
}

// Cerrar conexión
mysqli_close($conn);
?>

<body>
<header>
    <div class="container">
            <div class="d-flex justify-content-end">
            <a href="login.php" class="me-2">
            <button type="button" class="btn btn-secondary">Ingresar</button>
            </a>
            <a href="inscribirse.php">
        <button type="button" class="btn btn-secondary">Inscribirse</button>
            </a>
            </div>
        </div>
        <img src="logosteamlab.png" alt="Logo STEAMLab">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <nav>
            <ul>
                <li><a href="index final.php">Home</a></li>
                <li><a href="#nuestra-propuesta">Nuestra Propuesta</a></li>
                <li><a href="#experiencias">Experiencias</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
<main>
<section id="Socio">
            <article>
                <center>
                  
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
        </div>
    </footer>
</body>
</html>