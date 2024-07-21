<?php
// login.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procesar los datos del formulario de inicio de sesión
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Aquí deberías validar las credenciales contra tu base de datos
    // Suponiendo que las credenciales son válidas
    session_start();
    $_SESSION['user'] = $email;
    header('Location: dashboard.php');
} else {
    echo "Método de solicitud no válido.";
}
?>
