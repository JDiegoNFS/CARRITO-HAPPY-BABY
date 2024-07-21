

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

 


   
    <body>
   

 <br>


    <h2>Ingresar al Carrito de Compras</h2>
    <form action="gestionar_IngresoCarrito.php" method="post">
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Ingresar al Carrito de Compras</button>
    </form>
       <div class="registration-link">
            ¿No tienes una cuenta? <a href="Registro_Cliente.php">Regístrate aquí</a>
        </div>
        <div class="social-login">
            <button id="google-sign-in">Iniciar Sesión con Google</button>
        </div>
    







        


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

    
</body>

</html>
