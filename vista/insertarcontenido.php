<!--<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Inicio </title>
        <!-- CSS only -->
       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        
        <!-- MENU DE INICIO -->
       <!-- <nav class="nav p-3 justify-content-end">
            <a href="inicio.html" class="nav-link active" aria-current="page">Inicio</a>
            <a href="#" class="nav-link active">Perdidos</a>
            <a href="msjV.html" class="nav-link active">Adoptar</a>
            <!-- Dropdown -->
        <!--    <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Realizar Publicacion
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="formulariob.php">Mascota Perdida</a></li>
                    <li><a class="dropdown-item" href="msjV.html">Dar en Adopcion</a></li>
                </ul>
            </div>
            
            <a href="msjV.html" class="nav-link active">          
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>    
            </a>
        </nav>

        <?php
        //$miconexion=mysqli_connect("localhost", "root", "", "animal");
        
       /* if (!$miconexion){
            echo "La conexion ha fallado" . mysqli_error();
            exit();
        }

        if ($_FILES ['imagen'] ['error']){
            switch ($_FILES['imagen']['error']){
                case 1: //error exceso de tamaño de archivo en php.ini
                    echo "El tamaño del archivo excede lo permitido por el servidor";
                    break;

                case 2: //Error tamaño archivo marcado desde formulario

                    echo "El tamaño del archivo excede 2MB";
                    break;

                case 3: //Corrupcion de archivo}
                    echo "El envio del archivo se interrumpio";
                    break;

                case 4: //No hay fichero}
                    echo "No se ha enviado ningun archivo";
                    break;
            }
        }
        else{
            echo "Entrada subida correctamente <br>";

            if((isset($_FILES['imagen']['name']) && ($_FILES['imagen'] ['error']==UPLOAD_ERR_OK))){
            
                $destino_de_ruta="img/";

                move_uploaded_file ($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES ['imagen']['name']; )

                echo "El archivo" . $_FILES['imagen'] ['name'] . "Se ha copiado en el directorio de imagenes";

            } else {
                echo "El archivo no se ha podido copiar al directorio de imagenes"; 

            }
        }
        
        $laespecie=$_POST['especie'];
        $laraza=$_POST['raza'];
        $elcolor=$_POST['color'];
        $elnombreanimal=$_POST['nombreanimal'];
        $laimagen=$_FILES['imagen']['name'];
        $lafecha=date("Y-m-d H:i:s");
        $lazona=$_POST['zona'];
        $elnombrepersona=$_POST['nombrepersona'];
        $eltelefono=$_POST['telefono'];

0

        $miconsulta= INSERT INTO animal (especie, raza, color, nombreanimal, imagen, fecha, zona, nombrepersona, telefono) VALUES ('" .$laespecie' . "','"  . $laraza . "','" . $elcolor . "','"  . $elnombreanimal . "','" . $laimagen . "','" . $lafecha . "','" . $lazona . "','"  . $elnombrepersona . "','" . $eltelefono . "')";

    

        $resultado=mysqli_query($miconexion, $miconsulta);

        //Cerramos conexion
        mysqli_close($miconexion);

        echo "<br> Se ha publicado con exito. <br><br>"


        ?>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>

-->
