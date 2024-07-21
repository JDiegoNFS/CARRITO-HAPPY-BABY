<?php
session_start();

$productos = [
    1 => ["nombre" => "Pulidor de uñas", "precio" => 48.00, "imagen" => "images/limador.jpeg"],
    2 => ["nombre" => "Vaso 360 antiderrame", "precio" => 18.00, "imagen" => "images/vaso.jpg"],
    3 => ["nombre" => "Kit de alimentación", "precio" => 98.00, "imagen" => "images/kit.jpg"],
    4 => ["nombre" => "Plato antideslizante", "precio" => 38.00, "imagen" => "images/plato.png"],
    5 => ["nombre" => "Chupón alimentador", "precio" => 25.00, "imagen" => "images/chupon.jpeg"],
    6 => ["nombre" => "Extractor de Leche Manual", "precio" => 54.00, "imagen" => "images/extractormanual.jpeg"],
    7 => ["nombre" => "Extractor de leche eléctrico", "precio" => 198.00, "imagen" => "images/extractorelectrico.jpeg"],
    8 => ["nombre" => "Cuchara dispensadora de papillas", "precio" => 17.00, "imagen" => "images/cuchara.jpg"]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $producto_id = $_POST['producto_id'];
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }
    $cantidad = isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 1; // Obtener la cantidad del formulario
    if (isset($_SESSION['carrito'][$producto_id])) {
        $_SESSION['carrito'][$producto_id] += $cantidad; // Agregar la cantidad al producto existente en el carrito
    } else {
        $_SESSION['carrito'][$producto_id] = $cantidad;
    }
    header("Location: carrito.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Baby</title>
    <link rel="stylesheet" href="style5.css">
	<script src="script.js"></script>

<style>
        .banner {
            position: relative;
            max-width: 100%;
            height: 400px;
            overflow: hidden;
        }
        .banner img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 20px; /* Bordes redondeados */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Sombra suave */
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
            transform: translateY(-80%);
        }
        .banner .prev, .banner .next {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
        }
    </style>



<style>
        .app-img {
            display: flex;
            gap: 10px; /* Espacio entre las imágenes */
        }
        .app-img img {
            height: 400px; /* Ajusta la altura según tus necesidades */
            width: 300px; /* Mantén la proporción de la imagen */
            object-fit: cover; /* Asegura que la imagen cubra todo el contenedor */
            border-radius: 10px; /* Hace que la imagen tenga bordes ligeramente redondeados */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Agrega una sombra suave */
            border: 2px solid #ddd; /* Agrega un borde suave */
        }
    </style>









</head>

<body>
    
 

    <header class="header">
       
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
            
        </div>














        <div class="header-content container">
            <div class="header-txt">
                <h2>Bienvenido <br><span>a nuestra comunidad de cuidado y confort para bebés!</span></h2>
                <p>
                    En Happy Baby, nos dedicamos apasionadamente a brindar a los padres y cuidadores las herramientas y productos más confiables y encantadores para hacer que la experiencia de criar a un bebé sea aún más especial.
                </p>
                
            </div>





 <div class="banner">
        <div class="slides">
            <div class="slide"><img src="images/bebe1.jpg" alt="Banner 1"></div>
            <div class="slide"><img src="images/chupon3.jpg" alt="Banner 2"></div>
            <div class="slide"><img src="images/b9.jpg" alt="Banner 3"></div>
	    <div class="slide"><img src="images/b8.jpg" alt="Banner 1"></div>
            <div class="slide"><img src="images/b7.jpg" alt="Banner 2"></div>
            <div class="slide"><img src="images/b6.jpg" alt="Banner 3"></div>
        </div>
        <div class="nav">
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </div>










    </header>

    <section class="info">
        <div class="info-content container">
          







<br>




            <div class="info-txt">
                 <center><h2>La mejor calidad en los productos</h2>
                 <p>En el dulce y delicado mundo de la infancia, cada detalle importa. En nuestro compromiso con la calidad sin concesiones, nos dedicamos a proporcionar a los más pequeños de la casa los productos más seguros, confiables y de la más alta calidad. Porque sabemos que para los padres y cuidadores, la tranquilidad y el bienestar de sus bebés son prioridad número uno.
                </p> 
<center><a href="productos.php" class="btn-1">Descripción y Catálogo de Productos</a></center>
            </div>
        </div>
    </section>








    <section class="products">
        <div class="container">
        <h2 id="carrito-de-compras">Carrito de Compras</h2>
            <div class="box-container">
                <?php foreach ($productos as $id => $producto): ?>
                <div class="box">
                    <img src="<?php echo $producto["imagen"]; ?>" alt="<?php echo $producto["nombre"]; ?>">
                    <div class="product-txt">
                        <h3><?php echo $producto["nombre"]; ?></h3>
                        <p>Precio: S/. <?php echo $producto["precio"]; ?></p>
                        <form action="" method="POST">
                            <input type="hidden" name="producto_id" value="<?php echo $id; ?>">
                            <!-- Agregar campo de entrada para la cantidad -->
                            <label for="cantidad_<?php echo $id; ?>">Cantidad:</label>
                            <input type="number" id="cantidad_<?php echo $id; ?>" name="cantidad" value="1" min="1">
                            <button type="submit" class="btn-3">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <a href="carrito.php" class="btn-2">Ver carrito</a>
        </div>
    </section>

   
<br>




    <section class="app container">
        <div class="app-txt">
            <h2>Descubre las Mejores Ofertas en Productos para Bebés con Happy Baby</h2>
            <p>"Nuestros clientes nos respaldan porque confían en Happy Baby!

Tu destino número uno para encontrar las promociones más emocionantes en una amplia gama de productos para bebés. Con nuestra app, tendrás acceso exclusivo a descuentos y ofertas especiales que harán que cuidar a tu pequeño sea más fácil y asequible que nunca. Únete a nuestra comunidad y descubre nuestras increibles novedades.
            </p>
            
        </div>

 <a href="https://wa.me/51920616484" class="whatsapp-button" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="whatsapp-icon">
    </a>


        <div class="app-img">
 <img src="images/c5.jpg" alt="App Happy Baby">
<img src="images/c1.jpg" alt="App Happy Baby">
<img src="images/c3.jpg" alt="App Happy Baby">
        </div>
    </section>

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
                    <li><a href="#">Happy Baby – C.C. REAL PLAZA SALAVERRY - Piso 4<br>
                        Av. General Felipe Salaverry 2370 Jesús María - Lima<br>
                        Horario de atención: 10:00 AM a 10:00 PM.<br>
                        Teléfono: 461-6060</a></li>
                    <li><a href="#">Happy Baby – C.C. PLAZA NORTE - Piso 2<br>
                        Esquina Av. Tomas Valle con Carretera Panamericana Norte<br>
                        Independencia - Lima<br>
                        Horario de atención: 10:00 AM a 10:00 PM.<br>
                        Celular: 992 740 352</a></li>
                    <li><a href="#">Correo de contacto<br>
                        happybaby@gmail.com</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>Fan Page</h3>
                <ul>
                    <li><a href="#">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100063767935956&tabs=timeline&width=250&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="250" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </a></li>
                </ul>
            </div>
            <div class="link">
                <h3>Disponible</h3>
                <div class="descarga">
                    <img src="images/store1.png" alt="Google Play Store">
                    <img src="images/store2.png" alt="Apple App Store">
                </div>
            </div>
        </div>
    </footer>

<script>
        document.getElementById('load-more').addEventListener('click', function() {
            const hiddenProducts = document.querySelectorAll('.box.hidden');
            for (let i = 0; i < 4 && i < hiddenProducts.length; i++) {
                hiddenProducts[i].classList.remove('hidden');
            }
            if (document.querySelectorAll('.box.hidden').length === 0) {
                this.style.display = 'none';
            }
        });
    </script>


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
