<?php
$servername = "127.0.0.1";
$username = "root";
$password = "0412";
$dbname = "bdhappybaby"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    // Validar datos antes de la inserción
    if (empty($nombre) || empty($apellido) || empty($email) || empty($telefono) || empty($mensaje)) {
        echo "Todos los campos obligatorios deben ser completados.";
    } else {
        // Llamar al procedimiento almacenado
        $stmt = $conn->prepare("CALL InsertContacto(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nombre, $apellido, $email, $telefono, $mensaje);

        if ($stmt->execute()) {
            
		$stmt->close();
                header("Location:login.php");
		echo "Pronto se Pondran en Contacto con Usted.";
               
		
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>
