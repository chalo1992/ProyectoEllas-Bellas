<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    // Verificar el usuario y la contraseña (aquí debes implementar tu propia lógica de validación)
    if ($username === "soraya.lopez" && password_verify($password, $hashedPassword)) {
        // Iniciar sesión (si es necesario)
        
        // Redirigir a la página de administradores
        header("Location: administradores.php");
        exit();
    } else {
        // Usuario y/o contraseña incorrectos
        $error = "Usuario y/o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ellas+Bellas</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVpHTPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


   <!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg m-0">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/Logo/logo.jpg" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="servicios.php">Tratamientos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ubicación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostrar_productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostrar_aparatos.php">Aparatología</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-whatsapp"></i></a>
                </li>
                <li class="nav-item">
                    <a href="login_administradores.php" class="nav-link"><i class="fa fa-cog"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container_fluid">

    <div class="contenedor_formulario">
    <h2 class="mt-5">Iniciar sesión</h2>
        
        <?php if (isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
        
        <form class="mt-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="text" id="username" name="username" placeholder="Nombre de usuario" required><br><br>
            <input type="password" id="password" name="password" placeholder="Contraseña" required><br><br>
            
            <input type="submit" value="Iniciar sesión">
        </form>
    </div>

</div>
<footer>
  <div class="contenedor_footer">
    <div class="row pt-5">
      <div class="col-md-4 text-center">
        <h4>Contacto</h4>
        <p>Dirección: Av. de Atenas, 75, local 44, 28232 Las Rozas de Madrid, Madrid</p>
        <p>Teléfono: 644 02 81 95</p>
        <p>Email: info@ellasbellas.com</p>
      </div>
      <div class="col-md-4 text-center">
        <h4>Redes Sociales</h4>
        <ul>
          <li><a href="#" class="nav-link">Intragram: <i class="fa fa-instagram"></i></a></li>
          <li><a href="#" class="nav-link">Whatssap: <i class="fa fa-whatsapp"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 text-center">
        <h4>Horario</h4>
        <p>Lunes a Viernes: 9:00 am - 8:00 pm</p>
        <p>Sábado: 10:00 am - 5:00 pm</p>
        <p>Domingo: Cerrado</p>
      </div>
    </div>
    <p class="text-center">© 2023 Ellas+Bellas - Todos los derechos reservados</p>
  </div>
</footer>


    
<script src="JS/jsIndex.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</body>
</html>
