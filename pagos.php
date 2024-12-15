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
if (!isset($_SESSION['dni'])) {
    header("Location: login.php?error=2");
    exit();
}

include("conexion.php");

// Usar el DNI almacenado en la sesión
$dni = $_SESSION['dni']; // Tomar el DNI del usuario logueado

echo "<div class='container mt-3'>";
echo "Bienvenido, tus pagos registrados con el DNI: <b>$dni</b> son...";
echo "</div>";

// Consultar las cuotas del usuario usando el DNI
$sql = "SELECT * FROM cuotas WHERE dni = '$dni'";
$resultado = mysqli_query($conn, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    // Mostrar la tabla de cuotas
    echo "<div class='container mt-5'>";
    echo "<table class='table table-striped table-bordered'>";
    echo "<thead><tr>";
    echo "<th>DNI</th>";
    echo "<th>Concepto</th>";
    echo "<th>Vencimiento</th>";
    echo "<th>Valor Cuota</th>";
    echo "<th>Estado</th>";
    
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($fila['dni']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['concepto']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['vencimiento']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['valor_cuota']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['estado']) . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
    echo "</div>";
} else {
    echo "<div class='container mt-5'>";
    echo "<p>No se encontraron cuotas registradas para este usuario.</p>";
    echo "</div>";
}

// Cerrar conexión
mysqli_close($conn);
?>

            <br>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
