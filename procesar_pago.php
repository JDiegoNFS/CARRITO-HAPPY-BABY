<?php
// procesar_pago.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $metodo_pago = $_POST['metodo_pago'];

    switch ($metodo_pago) {
        case 'Boleta':
            header("Location: index.php");
            break;
        case 'Factura':
            header("Location: ruc.php");
            break;
    }
    exit;
} else {
    echo "Método de solicitud no válido.";
}
?>
