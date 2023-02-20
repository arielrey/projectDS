<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Publicar </title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <!-- LOGO -->
        <div class="col text-center" class="flex-col logo">
          <a href="../vista/inicio.html" title="pichichosros" rel="home">
          <img width="155" height="155"  src="../vista/img/logo.png" class="header_logo header-logo"></a>              
        </div>
        <!-- MENU DE INICIO -->
        <nav class="nav p-3 justify-content-end">   
      
          <a href="../vista/inicio.html" class="nav-link active" aria-current="page">Inicio</a>
          <a href="../vista/mostrar_public.php" class="nav-link active">Perdidos</a>
          <a href="../vista/msjV.html" class="nav-link active">Adoptar</a> 

          <!-- Dropdown -->
          <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Realizar Publicacion
              </button>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../vista/formulariob.php">Mascota Perdida</a></li>
                  <li><a class="dropdown-item" href="../vista/msjV.html">Dar en Adopcion</a></li>
              </ul>
          </div>
          <a href="../vista/petshop.html" class="nav-link active">          
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>    
          </a>
      </nav>
    </a>
    <div class="text-center">
<?php
//insercion de imagen
if($_FILES['imagen']['error']){
    switch ($_FILES ['imagen']['error']){
        case 1: //error acceso del archivo
            echo "<div class='alert alert-danger' role='alert'><h3>El archivo supera el limite permitido</h3></div>(param upload_max_size de php.ini)";
            break;

        case 2://error acceso del archivo
            echo "<div class='alert alert-danger' role='alert'><h3>El archivo supera el limite permitido</h3></div>(post_max_size de php.ini)<br>";
            break;

        case 3: //error de interrupcion durante subida
            echo "<div class='alert alert-danger' role='alert'><h3>El envio del archivo se interrumpio</h3></div><br>";
            break;
        
        case 4:
            echo "<div class='alert alert-danger' role='alert'><h3>El archivo es nulo</h3></div><br>";
            break;
    }
    }
    else {
        echo "<div class='alert alert-success' role='alert'><h3>Se publico con exito!</h3>";

        if((isset($_FILES['imagen']['name'])&&($_FILES['imagen']['error']==UPLOAD_ERR_OK))){
            $destino_de_ruta='../imagenes/';

            move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);
            echo "</div>";
        }else{
            echo "<div class='alert alert-danger' role='alert'><h3>El archivo no se cargo con exito</h3></div>";
        }    
    }
?>
<?php 
include_once("conexion.php");
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
}   else {
    echo "<div class='alert alert-danger' role='alert'>Completar los campos</div>";
}
?>
</div>
<!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>