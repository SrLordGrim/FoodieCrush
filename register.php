<?php
session_start();

// Obtener los datos del formulario de registro
$username = $_POST['username'];
$password = $_POST['password'];

// Validar y guardar los datos del nuevo usuario<?php
session_start();

// Obtener los datos del formulario de registro
$username = $_POST['username'];
$password = $_POST['password'];

// Validar y guardar los datos del nuevo usuario
// Aquí deberías implementar tu propia lógica de validación y almacenamiento de usuarios en una base de datos

// Establecer la conexión con la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'foodiecrush');


// Verificar si la conexión fue exitosa
if (!$conexion) {
    die('Error al conectar con la base de datos: ' . mysqli_connect_error());
}

// Preparar la consulta SQL con una sentencia preparada
$consulta = "INSERT INTO RegistroCuenta (nombre, contraseña) VALUES (?, ?)";
$stmt = mysqli_prepare($conexion, $consulta);

// Asignar los valores a los parámetros de la sentencia preparada
mysqli_stmt_bind_param($stmt, "ss", $username, $password);

// Ejecutar la sentencia preparada
mysqli_stmt_execute($stmt);

// Verificar si la inserción fue exitosa
if (mysqli_stmt_affected_rows($stmt) > 0) {
    // El registro se insertó correctamente en la base de datos

    // Guardar los datos en variables de sesión
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    // Redirigir al usuario a la página principal (index.html) después del registro exitoso
    header('Location: index.html');
} else {
    // Ocurrió un error al insertar el registro
    echo "Error al registrar el usuario. Inténtalo nuevamente.";
}

// Cerrar la conexión con la base de datos
mysqli_close($conexion);
?>
