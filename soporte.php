<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<header>
    <div class="container">
        <div class="d-flex justify-content-end">
            <a href="index final.php">
                <button type="button" class="btn btn-secondary">Cerrar Sesión</button>
            </a>
        </div>
    </div>
    <img src="logosteamlab.png" alt="Logo STEAMLab">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav>
        <ul>
            <li><a href="restringido.php">Perfil</a></li>
            <li><a href="actualizar.php">Actualizar datos</a></li>
            <li><a href="pagos.php">Gestión de pagos</a></li>
            <li><a href="soporte.php">Soporte</a></li>
        </ul>
    </nav>
</header>
<center>
    <br>
    <?php
    session_start();

    // Verificamos si el usuario está autenticado mediante la cookie
    if (isset($_COOKIE['USU'])) {
        $usuario = $_COOKIE['USU']; // Obtenemos el usuario desde la cookie
        setcookie("USU", $usuario, time() + 3600); // Refrescamos la cookie
        echo "Bienvenido... <b>" . htmlspecialchars($usuario) . "</b><br>";
    } else {
        echo "Ud no es un usuario autorizado."; // Mensaje de error si no está autenticado
        exit();
    }
    ?>
</center>
<main>
    <section id="contacto">
        <article>
            <center>
                <h2>Soporte</h2>
                <br>
                <form action="guardarsoporte.php" method="post">
                    <!-- Incluimos un campo oculto con el usuario -->
                    <input type="hidden" name="usuario" value="<?php echo htmlspecialchars($usuario); ?>">
                    <input type="text" id="nombre" name="nombre" placeholder="Escriba su nombre" required>
                    <input type="email" id="email" name="email" placeholder="Escriba su Email" required>
                    <textarea id="mensaje" name="mensaje" placeholder="Escriba su mensaje"></textarea>
                    <button type="submit" name="registro">Enviar</button>
                </form>
                <br><br>
                <div>
                    Gracias por comunicarte, un representante pronto se comunicará contigo.
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
    </div>
</footer>
</body>
</html>
