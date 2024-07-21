


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style5.css">



<style>
        .products-section {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .product-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 10px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-image img {
            width: 100%;
            height: auto;
        }
        .product-details {
            padding: 15px;
        }
        .product-details h3 {
            margin: 0;
            font-size: 1.5em;
            color: #333;
        }
        .product-details p {
            margin: 10px 0;
            color: #555;
        }
        .product-details .price {
            font-size: 1.2em;
            color: #e91e63;
        }



.boton-rosado {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff69b4; /* Color rosado */
    color: #ffffff; /* Texto blanco */
    text-decoration: none; /* Quitar subrayado del enlace */
    border: none; /* Sin borde */
    border-radius: 5px; /* Bordes redondeados */
    font-size: 16px;
}

.boton-rosado:hover {
    background-color: #ff4f9e; /* Cambio de color al pasar el ratón */
}
    </style>




<style>
        .image-section {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .image-section img {
            max-width: 200px; /* Ajusta el ancho máximo de las imágenes según lo necesites */
            height: auto;
            margin: 0 10px; /* Espacio entre las imágenes */
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
            <div>
               
           
        </div>
        
            

        </div>

    </header>



 <center><h2>Nuestras Marcas</h2> </center>

    <div class="image-section">
        <img src="images/graco.png" alt="">
        <img src="images/nubby.png" alt="">
        <img src="images/ebaby.png" alt="">
        <img src="images/drbrowns.png" alt="">
        <img src="images/babymoov.png" alt="">
        <!-- Añade más imágenes según sea necesario -->
    </div>



    <div class="products-section">
         <center><h2>Catalogo de Productos</h2>
	En Happy Baby, nos enorgullece ofrecer una variedad de productos diseñados especialmente para satisfacer las necesidades de los bebés y sus padres. Cada uno de 	nuestros productos ha sido cuidadosamente seleccionado para garantizar seguridad, comodidad y funcionalidad, haciendo que la crianza sea más fácil y 	placentera  </center><br> <br>

        <div class="products-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="images/b7.jpg" alt="Pulidor de uñas">
                </div>
                <div class="product-details">
                    <h3>Pulidor de uñas</h3>
                    <p>El limador de uñas proporciona una mayor precisión en comparación con las tijeras o cortaúñas, permitiendo a los padres dar forma a las uñas del bebé con mucho cuidado. </p>
	                    <p class="price">S/. 48.00</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/kit.jpg" alt="Vaso 360 antiderrame">
                </div>
                <div class="product-details">
                    <h3>Vaso 360 antiderrame</h3>
                    <p>El diseño principal del vaso 360 antiderrame es su capacidad para evitar derrames. La tecnología de la tapa permite que el líquido solo fluya 	cuando el bebé succiona desde el borde del vaso, no habrá derrames de 	líquido, manteniendo el entorno limpio y seco.</p>
                    <p class="price">S/. 18.00</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/vaso.jpg" alt="Kit de alimentación">
                </div>
                <div class="product-details">
                    <h3>Kit de alimentación</h3>
                    <p>es una colección esencial de herramientas diseñadas para facilitar la hora de la comida, asegurando que tanto los padres como los bebés tengan 		una experiencia positiva y sin complicaciones</p>
                    <p class="price">S/. 98.00</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/plato.png" alt="Plato antideslizante">
                </div>
                <div class="product-details">
                    <h3>Plato antideslizante</h3>
                    <p>Los platos antideslizantes suelen estar hechos de silicona o plásticos resistentes que son fáciles de limpiar.</p>
                    <p class="price">S/. 38.00</p>
                </div>
            </div>

	 
            <div class="product-card">
                <div class="product-image">
                    <img src="images/gorro.jpg" alt="Gorro de Baño">
                </div>
                <div class="product-details">
                    <h3>Gorro de Baño</h3>
                    <p>Un gorro de baño de calidad ayuda a prevenir que el agua entre en los oídos del bebé, reduciendo así el riesgo de infecciones del oído y otitis 		externa.</p>
                    <p class="price">S/. 18.00</p>
                </div>
 </div>



<div class="product-card">
                <div class="product-image">
                    <img src="images/extractorelectrico.jpeg" alt="Extractor de Leche Electrico">
                </div>
                <div class="product-details">
                    <h3>Pulidor de uñas</h3>
                    <p>El extractor eléctrico permite a las madres extraer leche en cualquier momento y lugar conveniente para ellas. Pueden realizar la extracción en casa, en el trabajo o mientras están fuera de casa, </p>
	                    <p class="price">S/. 190.00</p>
                </div>
            </div>



<div class="product-card">
                <div class="product-image">
                    <img src="images/cuchara2.jpg" alt="Extractor de Leche Electrico">
                </div>
                <div class="product-details">
                    <h3>Pulidor de uñas</h3>
                    <p>la cuchara dispensadora de papillas es un utensilio práctico y versátil que facilita la alimentación de los bebés durante la transición a 			alimentos sólidos.  </p>
	                    <p class="price">S/. 18.00</p>
                </div>
            </div>


<div class="product-card">
                <div class="product-image">
                    <img src="images/chupon3.jpg" alt="Extractor de Leche Electrico">
                </div>
                <div class="product-details">
                    <h3>Pulidor de uñas</h3>
                    <p>El chupón alimentador permite introducir alimentos sólidos o semisólidos en la dieta del bebé de una manera segura y gradual. </p>
	                    <p class="price">S/. 15.00</p>
                </div>
            </div>
            <!-- Agrega más productos aquí -->
        </div>
    </div>
    
  <center><h3> Para Adquirir Nuestros Productos siga el siguiente enlace  </h3><br>
 <a href="index2.php#carrito-de-compras" class="boton-rosado">Ir a la página principal</a>
 </center> <br>

   

        
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
                        <li><a href="#">Happy Baby – C.C. REAL PLAZA SALAVERRY - Piso 4  <br>
						Av. General Felipe Salaverry 2370 Jesús María - Lima  <br>
						Horario de atención : 10:00 AM a 10:00 PM. <br>
						Teléfono: 461-6060 </a></li>

                        <li><a href="#"> Happy Baby – C.C. PLAZA NORTE - Piso 2 <br>
					Esquina Av. Tomas Valle con Carretera Panamericana Norte <br>
					Independencia - Lima <br>
					Horario de atención : 10:00 AM a 10:00 PM. <br>
					Celular: 992 740 352   </a></li>




                        <li><a href="#">Correo de contacto  <br>
					happybaby@gmail.com </a></li>
                        


                    </ul>

            </div>

            <div class="link">
                <h3>Fan Page</h3>
                    <ul>
                        <li><a href="#">   <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100063767935956&tabs=timeline&width=250&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="250" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

</a></li>


                        
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