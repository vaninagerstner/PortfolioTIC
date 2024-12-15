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
    <br>
    <center>
    <?php
    session_start(); 

    if (isset($_SESSION['nombre'])) {
        echo "Bienvenido... <b>" . $_COOKIE['USU'] . "</b><br>";
    } else {
        echo "Ud no es un usuario";
        exit(); 
    }
    ?>
    </center>
    <main>
    <section id="Socio">
        <article>
            <center>
                <h1>Actualice sus datos</h1>
                <div class="login-container">
                    <form action="actualizado.php" enctype="multipart/form-data" method="post">
                        <input type="num" id="dni" name="dni" placeholder="DNI" required> 
                        <input type="text" id="usuario" name="usuario" placeholder="Usuario">
                        <input type="email" id="email" name="email" placeholder="Email">
                        <input type="file" name="file">
                        <button type="submit" name="login">Enviar</button>
                    </form>
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