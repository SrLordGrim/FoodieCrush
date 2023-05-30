document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario por defecto
  
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    // Verificar las credenciales en el backend o en una base de datos
    // Aquí se omite la lógica real de verificación por simplicidad
  
    if (username === 'usuario' && password === 'contraseña') {
      // Credenciales válidas, inicio de sesión exitoso
      sessionStorage.setItem('isLoggedIn', true);
      sessionStorage.setItem('username', username);
      window.location.href = 'index.html';
    } else {
      // Credenciales inválidas, mostrar mensaje de error o redirigir a una página de error
      alert('Nombre de usuario o contraseña incorrectos');
    }
  });
  