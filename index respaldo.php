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
    if (isset($_SESSION['carrito'][$producto_id])) {
        $_SESSION['carrito'][$producto_id]++;
    } else {
        $_SESSION['carrito'][$producto_id] = 1;
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
    <style>
        .whatsapp-button {
            display: inline-block;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
        .whatsapp-button:hover {
            background-color: #1ebe5a;
        }
        .whatsapp-icon {
            width: 30px;
            height: 30px;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <a href="https://wa.me/51920616484" class="whatsapp-button" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="whatsapp-icon">
    </a>

    <header class="header">
       
        <div class="menu container">
            <a href="#" class="logo">Happy Baby</a>
            
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Servicios.php">Servicios</a></li>
                    <li><a href="Productos.php">Productos</a></li>
                    <li><a href="Login.php">Login</a></li>
                </ul>
            </nav>
            
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h2>Bienvenido <br><span>a nuestra comunidad de cuidado y confort para bebés!</span></h2>
                <p>
                    En Happy Baby, nos dedicamos apasionadamente a brindar a los padres y cuidadores las herramientas y productos más confiables y encantadores para hacer que la experiencia de criar a un bebé sea aún más especial.
                </p>
                <a href="#" class="btn-1">Información</a>
            </div>
            <div class="header-img">
                <img src="images/m2.png" alt="Happy Baby">
            </div>
        </div>
    </header>

    <section class="info">
        <div class="info-content container">
            <div class="info-img">
                <img src="images/m4.png" alt="Calidad">
            </div>
            <div class="info-txt">
                <h2>La mejor calidad en los productos</h2>
                <p>
                    En el dulce y delicado mundo de la infancia, cada detalle importa. En nuestro compromiso con la calidad sin concesiones, nos dedicamos a proporcionar a los más pequeños de la casa los productos más seguros, confiables y de la más alta calidad. Porque sabemos que para los padres y cuidadores, la tranquilidad y el bienestar de sus bebés son prioridad número uno.
                </p>
                <a href="#" class="btn-1">Información</a>
            </div>
        </div>
    </section>

    <main class="products container">
    <h2>Catálogo de Productos</h2>
    <div class="box-container" id="lista-1">
        <?php foreach ($productos as $id => $producto): ?>
            <div class="box">
                <img src="<?php echo $producto['imagen']; ?>" alt="">
                <div class="product-txt">
                    <h3><?php echo $producto['nombre']; ?></h3>
                    <p>Calidad Premium</p>
                    <h3>S/.<?php echo number_format($producto['precio'], 2); ?></h3>
                    <form method="post" action="">
                        <input type="hidden" name="producto_id" value="<?php echo $id; ?>">
                        <button type="submit" class="agregar-carrito btn-3" data-id="<?php echo $id; ?>">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="btn-2" id="load-more">Cargar Más</div>
    <a href="carrito.php">Ver Carrito</a>
</main>
    <br>

    <section class="app container">
        <div class="app-txt">
            <h2>Descarga nuestra app y descubre ofertas</h2>
            <p>"Descubre las Mejores Ofertas en Productos para Bebés en Nuestra Aplicación"
                En Happy Baby, estamos encantados de presentarte nuestra aplicación móvil, tu destino para encontrar las promociones más emocionantes en una amplia gama de productos para bebés. Con nuestra aplicación, tendrás acceso exclusivo a descuentos y ofertas especiales que harán que cuidar a tu pequeño sea aún más agradable y asequible.
            </p>
            <div class="descarga">
                <img src="images/store1.png" alt="Google Play Store">
                <img src="images/store2.png" alt="Apple App Store">
            </div>
        </div>
        <div class="app-img">
            <img src="images/app.png" alt="App Happy Baby">
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

</body>

</html>
