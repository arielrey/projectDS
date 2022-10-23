<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Formulario para buscar...</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body class="bg-image p-5 text-center shadow-1-strong rounded mb-5">
        <!-- MENU DE INICIO -->
        <nav class="nav p-3 justify-content-end">
            <a href="inicio.html" class="nav-link active" aria-current="page">Inicio</a>
            <a href="#" class="nav-link active">Perdidos</a>
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
            <a href="msjV.html" class="nav-link active">          
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>    
            </a>
        </nav>
        <h2  class="text-center">Publica los datos de tu mascota perdida 🐾</h2>
        <!-- FOMRULARIO -->
        <form action="../controlador/Transacciones.php" method="post" enctype="multipart/form-data" name="forml" class="shadow-lg p-3 mb-5 bg-body rounded container">
            <table class="d-flex justify-content-center">
                <div class="form-floating mb-3 justify-content-center">
                    <!-- Especie -->
                    <tr>  
                        <td>
                            <label for="especie"></label>
                        </td>
                        <td><input type="text" name="especie" id="especie" class="form-control" placeholder="Especie"></td>
                    </tr>
                    <!-- Raza -->
                    <tr>
                        <td>
                            <label for="raza"></label>
                        </td>
                        <td><input type="text" name="raza" id="raza"  class="form-control" placeholder="Raza"></td>
                    </tr>
                    <!-- Color -->
                    <tr>
                        <td>
                            <label for="color"></label>
                        </td>
                        <td><input type="text" name="color" id="color"  class="form-control" placeholder="Color"></td>
                    </tr>
                    <!-- Nombre -->
                    <tr>
                        <td>
                            <label for="nombreanimal"></label>
                        </td>
                        <td><input type="text" name="nombreanimal" id="nombreanimal"  class="form-control" placeholder="Nombre del Animal"></td>
                    </tr>
                    <!-- Imagen -->
                    <tr>
                        <td>
                            <label for="imagen"></label>
                        </td>
                        <td><input type="file" src="" alt="" name="imagen" accept=".jpg, .png, .jpeg" id="imagen"  class="form-control" placeholder="Imagen"><br></td>
                    </tr>
                     <!-- Zona donde se perdio -->
                     <tr>
                        <td>
                     <div> 
                     <select class="form-select" style="justify-content-center" id="zona" aria-label="zona">
                     <option selected>Elegir zona...</option>
                     <option value="1">Centro</option>
                     <option value="2">Norte</option>
                     <option value="3">Sur</option>
                     <option value="4">Oeste</option>
                     </select>
                     <label for="zona">Zona donde se lo vio por ultima vez</label>
                     </div>
                     </td>
                    </tr>
                    <!-- Nombre Persona-->
                    <tr>
                        <td>
                            <label for="nombrepersona"></label>
                        </td><br>
                        <td><br><p class="fw-bold text-center">Tus datos:</p><input type="text" name="nombrepersona" id="nombrepersona"  class="form-control" placeholder="Nombre y Apellido"></td>
                    </tr>
                    <!-- Telefono -->
                    <tr>
                        <td>
                            <label for="telefono"></label>
                        </td>
                        <td><input type="tel" name="telefono" id="telefono"  class="form-control" placeholder="Telefono"></td>
                    </tr>
            </table><br>
            <div class="container">
                <div class="col-md-12 text-center">
                    <input type="submit" value="Enviar" class="btn btn-success">
                    <input type="submit" value="Cancelar" class="btn btn-danger">
                </div>
            </div>
        </form>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
