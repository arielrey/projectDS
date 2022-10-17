<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Dar en Adopcion...</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>    
        <!-- AGREGAR MENU DE INICIO -->
        <div > 
            <h2>Dar en Adopcion</h2>

            <nav class="nav">
                <a href="formularioDarAdop.php" class="nav-link active" aria-current="page">Dar en Adopcion</a>
                <a href="inicio.html" class="nav-link active">Inicio</a>
            </nav>

        </div>
        
    
    <form action="../controlador/Transacciones.php" method="post" enctype="multipart/form-data" name="forml" >
        <table>
            <h5>Datos del Animal</h5>
            <div class="form-floating mb-3 justify-content-center">
                <!-- Especie -->
                <tr>  
                    <td>
                        <label for="campo_especie"></label>
                    </td>
                    <td><input type="text" name="campo_especie" id="campo_especie" class="form-control" placeholder="Especie"></td>
                </tr>
                <!-- Raza -->
                <tr>
                    <td>
                        <label for="campo_raza"></label>
                    </td>
                    <td><input type="text" name="campo_raza" id="campo_raza"  class="form-control" placeholder="Raza"></td>
                </tr>
                <!-- Color -->
                <tr>
                    <td>
                        <label for="campo_color"></label>
                    </td>
                    <td><input type="text" name="campo_color" id="campo_color"  class="form-control" placeholder="Color"></td>
                </tr>
                <!-- Nombre -->
                <tr>
                    <td>
                        <label for="campo_nombre"></label>
                    </td>
                    <td><input type="text" name="campo_nombre" id="campo_nombre"  class="form-control" placeholder="Nombre"></td>
                </tr>
                <!-- Imagen -->
                <tr>
                    <td>
                        <label for="imagen"></label>
                    </td>
                    <td><input type="file" src="" alt="" name="imagen" accept=".jpg, .png, .jpeg" id="imagen"  class="form-control" placeholder="Imagen"></td>
                </tr>
            </div>
        </table><br>

        <button  class="btn btn-primary" type="submit"> Enviar </button>
    </form>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
