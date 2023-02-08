<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Perdidos </title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>  

            <!-- LOGO -->
          
            <div class="col text-center" class="flex-col logo">
              <a href="inicio.html" title="pichichosros" rel="home">
              <img width="155" height="155"  src="img/logo.png" class="header_logo header-logo"></a>                          
          </div>

        <!-- MENU DE INICIO -->
        <nav class="nav p-3 justify-content-end">   
            <a href="inicio.html" class="nav-link active" aria-current="page">Inicio</a>
            <a href="mostrar_public.php" class="nav-link active">Perdidos</a>
            <a href="msjV.html" class="nav-link active">Adoptar</a>
            <!-- Dropdown -->
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Realizar Publicacion
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="formulariob.php">Mascota Perdida</a></li>
                    <li><a class="dropdown-item" href="msjV.html">Dar en Adopcion</a></li>
                </ul>
            </div>
            
            <a href="petshop.html" class="nav-link active">          
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>    
            </a>
        </nav>

        <!--Lista de animales perdidos-->
        <div class="text-center">
        <h1>Lista de perdidos</h1>
        <h4>Si perdiste a tu mascota, realiza una publicacion para mas posibilidades de encontrarl@, te deseamos mucha suerte</h4></div>
        <br>
        <div class="shadow-lg p-3 mb-5 bg-body rounded container">

            <div class="text-center">
        <?php
        include_once("../modelo/manejo_objetos.php");


        try {
            $miconexion=new PDO('mysql:host=localhost; dbname=animalbd', 'root', '');
            $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $manejo_objetos=new manejo_objetos($miconexion);
            $tabla_blog=$manejo_objetos->getContenidoPorFecha();
            if (empty($tabla_blog)){
                echo "No hay publicaciones aun";
            }
            else {                                                  
                 //Llama a los geters de manejo_objetos.php y los muestra.
                 foreach($tabla_blog as $valor) {
                    echo"<tr><h4>".  $valor->getId()."</h4></tr><br>";
                    echo"<tb><tr><h3>Especie: ". $valor->getEspecie()."</h3></tr><br>";
                    echo"<tr><h4>Raza: ". $valor->getRaza() ."</h4></tr><br>";
                    echo"<tr><h4>Color: ".  $valor->getColor()."</h4></tr></br>";
                    echo "<h4><tr>Nombre de la mascota: ". $valor->getNombreanimal(), "</h4></tr>";
                    if ($valor->getImagen() !="") {
                        echo "<img src='../imagenes/";
                        echo $valor->getImagen() . "' width='45%' height='50%' />";
                    }
                    echo "<tr><h4>Zona: ". $valor->getZona() . "</h4></tr><br>";
                    echo"<tr><h4>Tutor/a: ". $valor->getNombrepersona() ."</h4></tr><br>";
                    echo"<tr><h4>Telefono: ".  $valor->getTelefono()."</h4></tr><br>";
                    echo"<tr><small>Fecha: ". $valor->getFecha()."</small></tr><br>";
                    echo"<a href='update.php'><div class='text-end'><tr><img src='img/lapiz.png' width='30'/></tr></a><hr/><hr/><hr/></tb></div>";
                }
            }
            echo "</div></div>";
        } catch (Exception $e) {
            die ("Error: " . $e->getMessage());
        }
        ?>
        <br>
        <div class="text-center">
        <a href="../vista/inicio.html"><h3>Volver al Inicio</h3></a><br>
        <a href="../vista/mostrar_public.php"><h3>Ver lista de Perdidos</h3></a>
        </div>

              <!-- FOOTER -->

              <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="d-flex flex-column">
      <div id="page-content">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-md-7">
              <h1 class="fw-light mt-4 text-white">Sticky Footer using Flexbox</h1>
              <p class="lead text-white-50">Use just two Bootstrap utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!</p>
            </div>
          </div>
        </div>
       </div>
      </div>
    <div class="container text-center">
      <small>Copyright 2023 &copy; Elizabeth Valenti - Ariel Rey</small>
    </div> 
  </footer>



        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>