<?php
session_start();

$productos = [
    1 => ["nombre" => "Pulidor de uñas", "precio" => 48.00, "imagen" => "limador.jpeg"],
    2 => ["nombre" => "Vaso 360 antiderrame", "precio" => 18.00, "imagen" => "vaso.jpg"],
    3 => ["nombre" => "Kit de alimentacion", "precio" => 98.00,"imagen" => "kit.jpg"],
    4 => ["nombre" => "Plato antideslizante", "precio" => 38.00,"imagen" => "plato.png"],
    5 => ["nombre" => "Chupón alimentador", "precio" => 25.00,"imagen" => "chupon.jpeg"],
    6 => ["nombre" => "Extractor de Leche Manual", "precio" => 54.00,"imagen" => "extractormanual.jpeg"],
    7 => ["nombre" => "Extractor de leche eléctrico", "precio" => 198.00,"imagen" => "extractorelectrico.jpeg"],
    8 => ["nombre" => "Cuchara dispensadora de papillas", "precio" => 17.00,"imagen" => "cuchara.jpg"]];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $producto_id = $_POST['producto_id'];
    $action = $_POST['action'];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    if (isset($_SESSION['carrito'][$producto_id])) {
        if ($action == 'remove') {
            if ($_SESSION['carrito'][$producto_id] > 1) {
                $_SESSION['carrito'][$producto_id]--;
            } else {
                unset($_SESSION['carrito'][$producto_id]);
            }
        } elseif ($action == 'add') {
            $_SESSION['carrito'][$producto_id]++;
        } elseif ($action == 'delete') {
            unset($_SESSION['carrito'][$producto_id]);
        }
    } elseif ($action == 'add') {
        $_SESSION['carrito'][$producto_id] = 1;
    }

    exit(json_encode(['success' => true]));
}

$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];
$total = 0;

foreach ($carrito as $id => $cantidad) {
    $total += $productos[$id]['precio'] * $cantidad;
}
?>








<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="StiloCarrito.css">
    <script src="app.js"></script>
</head>
<body>
<h1>Carrito de Compras</h1>
<?php if (empty($carrito)): ?>
    <p>El carrito está vacío.</p>
<?php else: ?>
    <table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($carrito as $id => $cantidad): ?>
            <tr>
                <td>
                    <img src="images/<?php echo $productos[$id]['imagen']; ?>" alt="<?php echo $productos[$id]['nombre']; ?>" width="50">
                    <?php echo $productos[$id]['nombre']; ?>
                </td>
                <td>S/.<?php echo number_format($productos[$id]['precio'], 2); ?></td>
                <td>
                    <button class="btn-quantity" data-action="remove" data-product="<?php echo $id; ?>">-</button>
                    <span class="quantity"><?php echo $cantidad; ?></span>
                    <button class="btn-quantity" data-action="add" data-product="<?php echo $id; ?>">+</button>
                </td>
                <td>S/.<?php echo number_format($productos[$id]['precio'] * $cantidad, 2); ?></td>
                <td>
                    <button class="btn-delete" data-action="delete" data-product="<?php echo $id; ?>">Eliminar</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    <p>Total: S/.<?php echo number_format($total, 2); ?></p>
<?php endif; ?>
<a href="index2.php">Seguir Comprando</a> <br><br>

<div class="container">
    <h2>Método de Pago</h2>
    <form action="procesar_pago.php" method="post">
        <label for="metodo_pago">Seleccione el método de pago:</label>
        <select id="metodo_pago" name="metodo_pago" required>
            <option value="Boleta">Boleta</option>
            <option value="Factura">Factura</option>
        </select>
        <div id="dni_field" style="display: none;">
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" autocomplete="off">
            <button type="button" id="prueba">Consultar</button>
            <div>Nombres: <label id="nombre"></label></div>
            <div>Apellido P.: <label id="apellidop"></label></div>
            <div>Apellido M.: <label id="apellidom"></label></div>
        </div>
        <div id="ruc_field" style="display: none;">
            <label for="ruc">RUC:</label>
            <input type="text" id="ruc" name="ruc" autocomplete="off">
            <button type="button" id="pruebaruc">Consultar</button>
            <div>RUC: <label id="rucNumero"></label></div>
            <div>Nombre o Razón social: <label id="razonsocial"></label></div>
            <div>Estado: <label id="estado"></label></div>
            <div>Dirección: <label id="direccion"></label></div>
            <div>Departamento: <label id="departamento"></label></div>
        </div>
        <input type="submit" value="Continuar con el Pago">
    </form>
</div>

<a href="ruc.php">Consulta RUC</a>
<br><br><br><br>
<a href="index.php">Consulta DNI</a>
<br><br><br><br>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const metodoPagoSelect = document.getElementById('metodo_pago');
    const dniField = document.getElementById('dni_field');
    const rucField = document.getElementById('ruc_field');

    metodoPagoSelect.addEventListener('change', function() {
        if (this.value === 'Boleta') {
            dniField.style.display = 'block';
            rucField.style.display = 'none';
        } else if (this.value === 'Factura') {
            dniField.style.display = 'none';
            rucField.style.display = 'block';
        } else {
            dniField.style.display = 'none';
            rucField.style.display = 'none';
        }
    });

    $("#pruebaruc").click(function() {
        var ruc = $("#ruc").val();
        $.ajax({           
            type: "POST",
            url: "consultar-ruc-ajax.php",
            data: 'ruc=' + ruc,
            dataType: 'json',
            success: function(data) {
                if (data == 1) {
                    alert('El RUC tiene que tener 11 digitos');
                } else {
                    console.log(data);
                    $("#rucNumero").html(data.numeroDocumento);
                    $("#razonsocial").html(data.nombre);
                    $("#estado").html(data.estado);
                    $("#direccion").html(data.direccion);
                    $("#departamento").html(data.departamento);
                }
            }
        });
    });

    $("#prueba").click(function() {
        var dni = $("#dni").val();
        $.ajax({           
            type: "POST",
            url: "consulta-dni-ajax.php",
            data: 'dni=' + dni,
            dataType: 'json',
            success: function(data) {
                if (data == 1) {
                    alert('El DNI tiene que tener 8 digitos');
                } else {
                    console.log(data);
                    $("#nombre").html(data.nombres);
                    $("#apellidop").html(data.apellidoPaterno);
                    $("#apellidom").html(data.apellidoMaterno);
                }
            }
        });
    });

    const btnQuantity = document.querySelectorAll('.btn-quantity');
    const btnDelete = document.querySelectorAll('.btn-delete');
    
    const updateCart = (productId, action) => {
        const formData = new FormData();
        formData.append('producto_id', productId);
        formData.append('action', action);
        
        fetch('carrito.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        })
        .catch(error => console.error('Error:', error));
    };

    btnQuantity.forEach(button => {
        button.addEventListener('click', function() {
            const action = this.getAttribute('data-action');
            const productId = this.getAttribute('data-product');
            updateCart(productId, action);
        });
    });

    btnDelete.forEach(button => {
        button.addEventListener('click', function() {
            const action = this.getAttribute('data-action');
            const productId = this.getAttribute('data-product');
            updateCart(productId, action);
        });
    });
});
</script>





</body>


</html>
