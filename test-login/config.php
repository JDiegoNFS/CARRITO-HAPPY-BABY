config.php

<?php

//iniciar sesión en la página web
inicio_sesión();

//config.php

//Incluir la biblioteca cliente de Google para el archivo de carga automática de PHP
require_once 'proveedor/autoload.php';

//Hacer objeto del cliente API de Google para llamar a la API de Google
$google_client = nuevo Google_Client();

//Establecer el ID del cliente OAuth 2.0
$google_client->setClientId('952019194245-3oqr32esm40vp45754qb58kltrja8bot.apps.googleusercontent.com');

//Establece la clave secreta del cliente OAuth 2.0
$google_client->setClientSecret('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');

//Establecer el URI de redireccionamiento de OAuth 2.0
$google_client->setRedirectUri('https://demo.com/PRUEBA%20CARRITO/test-login/index.php');

// para obtener el correo electrónico y el perfil 
$google_client->addScope('correo electrónico');

$google_client->addScope('perfil');

?> 