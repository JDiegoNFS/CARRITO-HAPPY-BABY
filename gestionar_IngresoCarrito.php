<?php
session_start(); // Iniciar la sesión

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $db_password = "0412"; // Nota: Cambié el nombre de la variable para evitar conflictos con la variable de contraseña del usuario
    $dbname = "bdhappybaby";

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
    }

    // Llamar al procedimiento almacenado
    if ($stmt = $conn->prepare("CALL IngresarCarritoCompras(?, ?)")) {
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();

        // Obtener el resultado del procedimiento almacenado
        $result = $stmt->get_result();

        // Verificar el resultado
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Almacenar el nombre del usuario en la sesión
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['message'] = "Ingreso exitoso al carrito de compras";
                
                // Redirigir a la página principal
                header("Location: index2.php");
                exit();
            }
        } else {
            $_SESSION['message'] = "Credenciales incorrectas.";
            header("Location: sesion.php");
            exit();
        }

        // Cerrar el statement
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
