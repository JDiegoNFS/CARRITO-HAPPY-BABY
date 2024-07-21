<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $province = $_POST["province"];
    $district = $_POST["district"];
    $address = $_POST["address"];
    $password = $_POST["password"];







// Datos de conexión
$servername = "localhost";
$username = "root";
$password = "0412";
$dbname = "bdhappybaby";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}






    // Insertar los datos en la tabla de usuarios
    $sql = "INSERT INTO usuario (nombreUsuario, celular, correo, provincia, distrito, direccion, password)
            VALUES ('$nombre', '$phone', '$email', '$province', '$district', '$address', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Registro exitoso
        header("Location: sesion.php?registro_exitoso=true");
        exit();
    } else {
        // Error al registrar el usuario
        echo "Error al registrar el usuario: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
