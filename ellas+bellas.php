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
                    <a class="nav-link" href="mostrar_servicios.php">Tratamientos</a>
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
                    <a href="https://www.instagram.com/ellasmasbellasestetica/" class="nav-link"><i class="fa fa-instagram"></i></a>
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


    <div class="container">
        <div class="contenido">
           <h1 id="main_title">Ellas + Bellas</h1> 
           <p id="presentacion">¡Bienvenid@s a Ellas+bellas!<br>
            Mi nombre Soraya López, nuestro principal objetivo como centro de estética es brindarte una experiencia única 
            y personalizada para realzar y potenciar tu belleza natural.<br>
            Ofrecemos una amplia variedad de servicios de belleza y bienestar para ayudarte a verte y sentirte mejor.<br>
            ¡Descubre todos los <span><a href="">tratamientos</a> </span> disponibles!</p>   
            <input type="button" class="contactar" id="contactar" value="Contacta con nosotros"> 
        </div>
    </div>

    <div class="contenedor_filo">
        <h1 class="text-center pt-4">FILOSOFÍA</h1>
        <p id="filosofia" class="text-center">
            <ul>
                <li>Consecución de los objetivos a través de tratamientos de gran calidad y personalizados</li>
                <li>Ambiente relajado y acogedor</li>
                <li>Utilización de productos de máxima calidad</li>
                <li>Profesionales altamente cualificadas y formadas en las últimas tendencias</li>
            </ul>
        </p>
    </div>


    <div class="contenedor_carrousel carousel-container">

        <h1 class="pt-4 text-center text-light">TRATAMIENTOS</h1>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="contenedorCartas d-flex justify-content-around mt-5">
                        <div class="card col-12 col-md-4 mx-auto">
                            <img class="card-img-top h-50" src="img/FOTOS/Tipos/Depilacion/depilacion_cejas.jpg" alt="Card image cap">
                            <div class="card-body d-md-block">
                                <h5 class="card-title text-center">Depilación</h5>
                                <p class="card-text">En Ellas+Bellas utilizamos dos tipos de cera en función de la sensibilidad de la zona. Cera tibia chocolate: brazos, piernas, brazos...Y cera caliente de chocolate para las zonas más sensibles como ingles, axilas y labio.</p>
                                <a href="#" class="btn btn-primary">¡Descúbrelos!</a>
                            </div>
                        </div>

                        <div class="card col-12 col-md-4 mx-auto">
                            <img class="card-img-top h-50 fotodepilacionIMG" src="img/FOTOS/Tipos/Fotodepilacion/fotodepilacion3.jpg" alt="Card image cap">
                            <div class="card-body d-md-block">
                                <h5 class="card-title text-center">Fotodepilación</h5>
                                <p class="card-text">Ellas+Bellas utiliza un método de fotodepilación IPL que inhibe o debilita el crecimiento del pelo atacando el folículoa través de pulsaciones de luz suave.</p>
                                <a href="#" class="btn btn-primary">¡Descúbrelos!</a>
                            </div>
                        </div>

                        <div class="card col-12 col-md-4 mx-auto">
                            <img class="card-img-top h-50" src="img/FOTOS/Tipos/Depilacion/depilacion_axilas.jpg" alt="Card image cap">
                            <div class="card-body d-md-block">
                                <h5 class="card-title text-center">Depilación laser</h5>
                                <p class="card-text">El sistema SHR, el más innovador de la depilación láser. ¡Olvídate del dolor para siempre!</p>
                                <a href="#" class="btn btn-primary">¡Descúbrelos!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="contenedorCartas d-flex justify-content-around mt-5">
                        <div class="card col-12 col-md-4 mx-auto">
                            <img class="card-img-top h-50" src="img/FOTOS/Tipos/Faciales/limpieza_facial_profunda.jpg" alt="Card image cap">
                            <div class="card-body d-md-block">
                                <h5 class="card-title text-center">Faciales</h5>
                                <p class="card-text">Nos centramos en la limpieza, rejuvenecimiento de la cara y el cuello mediante técnicas no invasivas.</p>
                                <a href="#" class="btn btn-primary">¡Descúbrelos!</a>
                            </div>
                        </div>

                        <div class="card col-12 col-md-4 mx-auto">
                            <img class="card-img-top h-50" src="img/FOTOS/Tipos/Corporales/tratamiento_corporal3.jpg" alt="Card image cap">
                            <div class="card-body d-md-block">
                                <h5 class="card-title text-center">Corporales</h5>
                                <p class="card-text">Solicita tu diagnóstico. Ellas+Bellas personaliza los tratamientos adecuados a las necesidades de cada cliente. Cuenta con una amplia variedad de aparatología para optimizar los resultados.</p>
                                <a href="#" class="btn btn-primary">¡Descúbrelos!</a>
                            </div>
                        </div>

                        <div class="card col-12 col-md-4 mx-auto">
                            <img class="card-img-top h-50" src="img/FOTOS/Tipos/Cuidado de manos y pies/manicura_normal.jpg" alt="Card image cap">
                            <div class="card-body d-md-block">
                                <h5 class="card-title text-center">Cuidado de manos y pies</h5>
                                <p class="card-text">¿Existe algo mas placentero y agradable que tener un buen cuidado de las manos y los pies?¿Te gustaría exhibir unas manos bonitas y personalizadas?
                                    Descubre el increíble resultado que ofrecen todos sus tratamientos.</p>
                                <a href="#" class="btn btn-primary">¡Descúbrelos!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="contenedorCartas d-flex justify-content-around mt-5">
                        <div class="card col-12 col-md-4 mx-auto">
                            <img class="card-img-top h-50" src="img/FOTOS/Tipos/Masajes/masajes2.jpg" alt="Card image cap">
                            <div class="card-body d-md-block">
                                <h5 class="card-title text-center">Masajes</h5>
                                <p class="card-text">¿Necesitas disminuir el estrés después de un largo día? ¿Notas a lo largo de la jornada mucha tensión muscular? No esperes más para descubrir lo que ofrece un buen masaje con aceites esenciales acompañado de música con sonidos de la naturaleza...</p>
                                <a href="#" class="btn btn-primary">¡Descúbrelos!</a>
                            </div>
                        </div>

                        <div class="card col-12 col-md-4 mx-auto">
                            <img class="card-img-top h-50 " src="img/FOTOS/Tipos/Maquillaje y pestañas/maquillaje.jpg" alt="Card image cap">
                            <div class="card-body d-md-block">
                                <h5 class="card-title text-center">Maquillaje y pestañas</h5>
                                <p class="card-text">¿Quieres estar radiante para cualquier tipo de evento/celebración? ¡Prueba nuestro servicio de maquillaje, permanente y tinte de pestañas y nuestros diseños de ceja con henna!</p>
                                <a href="#" class="btn btn-primary">¡Descúbrelos!</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>


    <div class="contenedorFormularioMapa grid-dinamica m-0 pt-3">

        <div class="formulario">
        <form action="https://formsubmit.co/chalo1992@hotmail.com" class="w-75 m-0 mx-auto mt-5" method="POST">
            <h3 class="text-center text-light pb-3">Solicita una cita o pide información</h3>
            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="Nombre:">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Apellidos: </label>
                <input type="text" class="form-control" name="apellidos" id="exampleInputApellidos: 1" placeholder="Apellidos:">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Teléfono: </label>
                <input type="text" class="form-control" name="telefono" id="exampleInputtelefono: 1" placeholder="Teléfono:">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email: </label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email:">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensaje: </label>
                <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje:"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>


        </div>

        <div class="mapa">

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12132.24249466155!2d-3.9227938!3d40.5181511!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd419cdcb7aaaaab%3A0x73fef69000f05f66!2sEllas%20%2B%20Bellas%20Centro%20de%20Est%C3%A9tica!5e0!3m2!1ses!2ses!4v1682870480764!5m2!1ses!2ses" 
                width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </div>

    <div class="contenedor_colaboraciones">
        <div><img src="img/Logo/skeyindor.png" alt="skeyindor"></div>
        <div><img src="img/Logo/logo-alqvimia.png" alt="alqvimia"></div>
        <div><img src="img/Logo/freihaut.png" alt="freihaut"></div>
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
