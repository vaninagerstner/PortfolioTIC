<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEAMLab</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     
    <style>
        h2 {
            font-size: 40px; 
        }
        p {
            font-size: 24px; 
        }
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 16px;
            background-color: #059212;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: none; 
            z-index: 1000; 
        }
        .back-to-top:hover {
            background-color: #059212;
        }
        .back-to-top i {
            font-size: 24px;
        }
    </style>
</head>
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
                <li><a href="#home">Home</a></li>
                <li><a href="#nuestra-propuesta">Nuestra Propuesta</a></li>
                <li><a href="#experiencias">Experiencias</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <main> 
        <section id="home">
            <article>
                <h2 style="text-align: center;">Taller para niños curiosos</h2>
                <br>
                <p>Descubre el increíble mundo del STEAM, donde la diversión y el aprendizaje se unen para desarrollar la creatividad, el ingenio y la motivación. Crea y aprende con nosotros a través de programación, robótica, diseño 3D, animación Stop Motion y experimentos científicos. ¡Una experiencia educativa única para estudiantes de todas las edades!</p>
                <div class="container">
                    <div class="image-gallery">
                        <img src="1.jpeg" alt="Imagen 1">
                        <img src="2.jpeg" alt="Imagen 2">
                        <img src="3.jpeg" alt="Imagen 3">
                        <img src="4.jpeg" alt="Imagen 4">
                        <img src="5.jpeg" alt="Imagen 5">
                        <img src="6.jpeg" alt="Imagen 6">
                        <img src="7.jpeg" alt="Imagen 7">
                    </div>
                </div>
            </article>
        </section>
        
        <section id="nuestra-propuesta">
            <article>
                <h2 style="text-align: center;">Nuestra Propuesta</h2>
                <br>
                <p>¿Qué es un proyecto STEAM? Es una iniciativa educativa que integra ciencias (Science), tecnología (Technology), ingeniería (Engineering), arte (Art) y matemáticas (Mathematics) en un enfoque interdisciplinario.</p>
                <div style="text-align: center;">
                    <video controls>
                        <source src="video.mp4" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
            </article>
            <a href="#" class="back-to-top"><i class="bi bi-arrow-up-circle"></i> Volver Arriba</a>
        </section>

        <section id="experiencias" class="mb-4">
            <article>
                <h2 class="text-center">Experiencias</h2>
                <br>
                <section id="button-section" class="mb-4">
                    <div class="d-flex justify-content-center mb-3 gap-3">
                        <button class="round-button" data-bs-toggle="collapse" data-bs-target="#contenido1" aria-expanded="false" aria-controls="contenido1">Impresión 3D</button>
                        <button class="round-button" data-bs-toggle="collapse" data-bs-target="#contenido2" aria-expanded="false" aria-controls="contenido2">Programación Robótica</button>
                        <button class="round-button" data-bs-toggle="collapse" data-bs-target="#contenido3" aria-expanded="false" aria-controls="contenido3">Ciencia divertida</button>
                        <button class="round-button" data-bs-toggle="collapse" data-bs-target="#contenido4" aria-expanded="false" aria-controls="contenido4">Arte digital</button>
                    </div>
                    <div class="collapse" id="contenido1">
                        <div class="card card-body">
                            Descubre el emocionante mundo del Diseño e Impresión 3D en nuestro taller. Aquí, los participantes aprenderán a utilizar herramientas digitales avanzadas para diseñar objetos tridimensionales únicos y creativos...
                        </div>
                    </div>
                    <div class="collapse" id="contenido2">
                        <div class="card card-body">
                            Descubre dos emocionantes temas "Programación y Robótica". En Programación, los participantes resolverán desafíos de codificación y crearán videojuegos, desarrollando habilidades en algoritmos y estructuras de datos...
                        </div>
                    </div>
                    <div class="collapse" id="contenido3">
                        <div class="card card-body">
                            Explora el fascinante mundo de la Ciencia Divertida en nuestro taller. Aquí, los participantes tendrán la oportunidad de realizar emocionantes experimentos científicos donde podrán observar, predecir y analizar diversos fenómenos de manera práctica...
                        </div>
                    </div>
                    <div class="collapse" id="contenido4">
                        <div class="card card-body">
                            Los participantes desarrollarán habilidades fundamentales en el Arte Digital y la animación Stop Motion en nuestro taller. Aquí, explorarán técnicas avanzadas de dibujo digital y animación, utilizando software especializado para crear personajes, escenarios y efectos visuales únicos...
                        </div>
                    </div>
                </section>
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="16.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                        <div class="carousel-item">
                            <img src="9.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                        <div class="carousel-item">
                            <img src="10.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                        <div class="carousel-item">
                            <img src="11.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                        <div class="carousel-item">
                            <img src="12.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                        <div class="carousel-item">
                            <img src="13.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                        <div class="carousel-item">
                            <img src="14.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                        <div class="carousel-item">
                            <img src="15.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                        <div class="carousel-item">
                            <img src="8.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                        <div class="carousel-item">
                            <img src="17.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                        <div class="carousel-item">
                            <img src="18.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                        <div class="carousel-item">
                            <img src="19.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                        <div class="carousel-item">
                            <img src="20.jpeg" class="d-block w-100" alt="imagen">
                        </div>
                    </div>
                </div>
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

    <script>
        const backToTopButton = document.querySelector('.back-to-top');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>
