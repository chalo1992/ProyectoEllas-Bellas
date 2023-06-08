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
        <a class="navbar-brand" href="ellas+bellas.php"><img src="img/Logo/logo.jpg" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="tratamientos_administrador.php">Tratamientos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tratamientos_administrador.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tratamientos_administrador.php">Aparatología</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login_administradores.php">Cerrar sesión</a>
                </li>
      
            </ul>
        </div>
    </div>
</nav>

<div class="contenedorBienvenida">
    <?php  

    //Reanudamos la sesión antes de que se vea el contenido
    session_start();

    //Comprobamos que si se almacenó algo en la variable superglobal...
    if (!isset($_SESSION['usuario'])) { //En caso de que no...
      header("location:login_administradores.php");
    }

    //Si hay algo almacenado que se muestre la página (abajo)

    ?>

    <?php  

    echo "<h1 class='pt-5'>Bienvenid@ " . $_SESSION['usuario'] .  "</h1><br>";

    ?>

    <button class="boton_cerrar mt-5"><a href="cerrar_sesion.php">Cerrar sesión</a></button>


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
