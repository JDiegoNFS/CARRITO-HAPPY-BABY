<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Baby - Contáctanos</title>
    <link rel="stylesheet" href="style5.css">


 <style>
        .banner {
            position: relative;
            max-width: 90%;
            height: 300px;
            overflow: hidden;
        }
        .banner img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }
        .banner .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .banner .slide {
            min-width: 100%;
            box-sizing: border-box;
        }
        .banner .nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }
        .banner .prev, .banner .next {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
        }
    </style>









</head>

<body>
    <header>
        <!-- Encabezado -->
        <div class="header">
            <div class="menu container">
                <a href="#" class="logo">Happy Baby</a>
                
                
                <nav class="navbar">
                    <ul>
                    <li><a href="index2.php">Inicio</a></li>
                    <li><a href="Servicios.php">Servicios</a></li>
                    <li><a href="Productos.php">Productos</a></li>
                    <li><a href="Contacto.php">Contáctanos</a></li>
		    <li><a href="sesion.php">Iniciar Sesión</a></li>
                    </ul>
                </nav>
                <div>
                    
               
            </div>
        </div>
    </header>
 <br>
<br>
<br>

  <center><div class="banner">
        <div class="slides">
            <div class="slide"><img src="images/b1.png" alt="Banner 1"></div>
            <div class="slide"><img src="images/b2.jpg" alt="Banner 2"></div>
            <div class="slide"><img src="images/m2T.png" alt="Banner 3"></div>
        </div>
        <div class="nav">
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </div>
 </center>


    <!-- Formulario de contacto -->
    <center> <section>
        <div class="container">
            <h2>Contáctanos</h2>
            <form action="gestionar_ingresoContacto.php" method="post">
                <label for="nombre">Nombres:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>

                <label for="apellido">Apellidos:</label>
                <input type="text" id="apellido" name="apellido" required><br><br>

                <label for="email">Correo E:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono"><br><br>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" required></textarea><br><br>

               

                <input type="submit" value="Enviar">
            </form>
        </div>
    </section> </center>
 <br>
 <br>

    <!-- Pie de página -->
    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <h3>Enlaces de interés</h3>
                <ul>
                    <li><a href="#">Conócenos</a></li>
                    <li><a href="#">Tiempos de entrega</a></li>
                    <li><a href="#">Cambios y devoluciones</a></li>
                    <li><a href="#">Política de reembolso</a></li>
                    <li><a href="#">Garantía</a></li>
                    <li><a href="#">Política de privacidad</a></li>
                    <li><a href="#">Preguntas frecuentes</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Nuestras tiendas</h3>
                <ul>
                    <li>
                        <a href="#">
                            Happy Baby – C.C. REAL PLAZA SALAVERRY - Piso 4<br>
                            Av. General Felipe Salaverry 2370 Jesús María - Lima<br>
                            Horario de atención: 10:00 AM a 10:00 PM.<br>
                            Teléfono: 461-6060
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Happy Baby – C.C. PLAZA NORTE - Piso 2<br>
                            Esquina Av. Tomas Valle con Carretera Panamericana Norte<br>
                            Independencia - Lima<br>
                            Horario de atención: 10:00 AM a 10:00 PM.<br>
                            Celular: 992 740 352
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Correo de contacto<br>
                            happybaby@gmail.com
                        </a>
                    </li>
                </ul>
            </div>

            <div class="link">
                <h3>Fan Page</h3>
                <ul>
                    <li>
                        <a href="#">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100063767935956&tabs=timeline&width=250&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                    width="250" height="300" style="border:none;overflow:hidden" scrolling="no"
                                    frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="link">
                <h3>Disponible</h3>
                <div class="descarga">
                    <img src="images/store1.png" alt="">
                    <img src="images/store2.png" alt="">
                </div>
            </div>
        </div>
    </footer>

    <script>
        let currentSlide = 0;
        const slides = document.querySelector('.slides');
        const totalSlides = document.querySelectorAll('.slide').length;

        function moveSlide(direction) {
            currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
            slides.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        setInterval(() => {
            moveSlide(1);
        }, 3000);
    </script>
</body>

</html>
