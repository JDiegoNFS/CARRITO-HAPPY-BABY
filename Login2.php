<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Baby - Contáctanos</title>
    <link rel="stylesheet" href="style5.css">
</head>

<body>
    <header>
        <!-- Encabezado -->
        <div class="header">
            <div class="menu container">
                <a href="#" class="logo">Happy Baby</a>
                <input type="checkbox" id="menu">
                <label for="menu">
                    <img src="images/menu.png" class="menu-icono" alt="">
                </label>
                <nav class="navbar">
                    <ul>
                    <li><a href="index2.php">Inicio</a></li>
                    <li><a href="Servicios.php">Servicios</a></li>
                    <li><a href="Productos.php">Productos</a></li>
                    <li><a href="Contáctanos.php">Contáctanos</a></li>
		    <li><a href="sesion.php">Iniciar Sesión</a></li>
                    </ul>
                </nav>
                <div>
                    <ul>
                        <li class="submenu">
                            <img src="images/car.svg" id="img-carrito" alt="">
                            <div id="carrito">
                                <table id="lista-carrito">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                <a href="#" id="vaciar-carrito" class="btn-3">Vaciar Carrito</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
 <br>
<br>
<br>


    <!-- Formulario de contacto -->
    <section>
        <div class="container">
            <h2>Contáctanos</h2>
            <form action="gestionar_ingresoContacto.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono"><br><br>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" required></textarea><br><br>

               

                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>

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

    <script src="script.js"></script>
</body>

</html>
