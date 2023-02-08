<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Publicar </title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        
    <div class="text-center">
    <?php 

include_once("conexion.php");/*
include_once("../modelo/animal.php");
include_once("../modelo/manejo_objetos.php");*/
include_once("../vista/formulariob.php");
if (isset($_POST['submit'])) {
    if (strlen($_POST['especie']) >= 1 && strlen($_POST['raza']) >= 1 && strlen($_POST['color']) >= 1 && strlen($_POST['nombreanimal']) >= 1 && strlen( $_FILES['imagen']['name']) >= 1 && strlen($_POST['zona']) >= 1 && strlen($_POST['nombrepersona']) >= 1 && strlen($_POST['telefono']) >= 1) {
	    $especie = trim($_POST['especie']);
	    $raza = trim($_POST['raza']);
	    $color = trim($_POST['color']);
        $nombreanimal = trim($_POST['nombreanimal']);
        $imagen = trim($_FILES['imagen']['name']);
        $fecha = date("y/m/d");
        $zona = trim($_POST['zona']);
        $nombrepersona = trim($_POST['nombrepersona']);
        $telefono = trim($_POST['telefono']);
	    $consulta = "INSERT INTO animal(especie, raza, color, nombreanimal, imagen, fecha, nombrepersona, telefono) VALUES ('$especie','$raza','$color','$nombreanimal','$imagen','$fecha','$nombrepersona','$telefono')";
	    $resultado = mysqli_query($conexion,$consulta);
	   
}

?>
 

        <?php
 if ($resultado) {
    echo "<h3>Se cargo con exito</h3>";
} else {
    echo "<h2 style='color:red;'>No se cargó la publicación</h2>";
}
}   else {
    echo "Completar los campos";
}


?>
        <br>
        <a href="../vista/formulariob.php"><h3>Volver a Intentar</h3></a><br>
        <a href="../vista/inicio.html"><h3>Volver al Inicio</h3></a><br>
        <a href="../vista/mostrar_public.php"><h3>Ver lista de Perdidos</h3></a>

<?php
//insercion de imagen
if($_FILES['imagen']['error']){
    switch ($_FILES ['imagen']['error']){
        case 1: //error acceso del archivo
            echo "<h3>El archivo supera el limite permitido</h3>(param upload_max_size de php.ini)";
            break;

        case 2://error acceso del archivo
            echo "<h3>El archivo supera el limite permitido</h3>(post_max_size de php.ini)<br>";
            break;

        case 3: //error de interrupcion durante subida
            echo "<h3>El envio del archivo se interrumpio</h3><br>";
            break;
        
        case 4:
            echo "<h3>El archivo es nulo</h3><br>";
            break;
    }
    }
    else {
        echo "<h3>No hay error al transferir el archivo</h3><br>";

        if((isset($_FILES['imagen']['name'])&&($_FILES['imagen']['error']==UPLOAD_ERR_OK))){
            $destino_de_ruta='../imagenes/';

            move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);
            echo "<h3>El archivo</h3>" . $_FILES['imagen']['name'] . "<h3>Se ha guardado en directorio de imagenes</h3><br>";
        }else{
            echo "<h3>El archivo no se guardo en el directorio de imagenes</h3>";
        }    
    }
?>
    </div>
  <!-- FOOTER -->
  <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="d-flex flex-column">
      <div id="page-content">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-md-7">
              <h1 class="fw-light mt-4 text-white">Gracias por visitarnos!</h1><br>
                <p class="lead text-white-50">Mas informacion</p>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
          <h5>Github</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="https://github.com/arielrey" class="nav-link active">bethvalenti</a></li>
            <li class="mb-2"><a href="https://github.com/bethvalenti"  class="nav-link active">arielrey</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5>Guides</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="inicio.html" class="nav-link active">Inicio</a></li>
            <li class="mb-2"><a href="mostrar_public.php" class="nav-link active">Perdidos</a></li>
            <li class="mb-2"><a href="formulariob.php" class="nav-link active">Buscar mascota</a></li>
            <li class="mb-2"><a href="msjV.html" class="nav-link active">Adoptar</a></li>
            <li class="mb-2"><a href="petshop.html" class="nav-link active">Petshop</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5>Contacto</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><p>341 278-4977 / 341 276-2260</p></li>
            <li class="mb-2"><p>elizabethvalenti28@gmail.com</p></li>
            <li class="mb-2"><p>reynacho163@gmail.com</p></li>
          </ul>
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