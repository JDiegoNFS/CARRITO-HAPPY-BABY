<?php
session_start();

$productos = [
    1 => ["nombre" => "Pulidor de uñas", "precio" => 48.00],
    2 => ["nombre" => "Vaso 360 antiderrame", "precio" => 18.00],
    3 => ["nombre" => "Kit de alimentacion", "precio" => 98.00],
    4 => ["nombre" => "Plato antideslizante", "precio" => 38.00],
    5 => ["nombre" => "Chupón alimentador", "precio" => 25.00],
    6 => ["nombre" => "Extractor de Leche Manual", "precio" => 54.00],
    7 => ["nombre" => "Extractor de leche eléctrico", "precio" => 198.00],
    8 => ["nombre" => "Cuchara dispensadora de papillas", "precio" => 17.00]
];

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
                    <td><?php echo $productos[$id]['nombre']; ?></td>
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
<a href="index2.php">Seguir Comprando</a>

<script>
document.addEventListener('DOMContentLoaded', function() {
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
