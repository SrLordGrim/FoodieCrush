<?php
session_start();

// Verificar las credenciales aquí
$username = $_POST['username'];
$password = $_POST['password'];

// Ejemplo básico de verificación (reemplazar con tu propia lógica de autenticación)
if ($username === 'usuario' && $password === 'contraseña') {
  // Credenciales válidas, se inicia la sesión
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $username;

  // Redirigir al usuario a la página de inicio (index.html)
  header('Location: index.html');
} else {
  // Credenciales inválidas, redirigir al usuario de vuelta al formulario de inicio de sesión
  header('Location: login.html');
}
?>
