<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Formulario para buscar...</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body> 
        <h2>Publica los datos de tu mascota perdida</h2>
        <form action="../controlador/Transacciones.php" method="post" enctype="multipart/form-data" name="forml">
    <table>
    <tr>
        <td> Especie:
            <label for="campo_especie"></label>
        </td>
        <td><input type="text" name="campo_especie" id="campo_especie"></td>
    </tr>
    
    <tr>
        <td> Raza:
            <label for="campo_raza"></label>
        </td>
        <td><input type="text" name="campo_raza" id="campo_raza"></td>
    </tr> 

    <tr>
        <td> Color:
            <label for="campo_color"></label>
        </td>
        <td><input type="text" name="campo_color" id="campo_color"></td>
    </tr>

    <tr>
        <td> Nombre:
            <label for="campo_nombre"></label>
        </td>
        <td><input type="text" name="campo_nombre" id="campo_nombre"></td>
    </tr>

    <tr>
        <td> Imagen:
            <label for="imagen"></label>
        </td>
        <td><input type="file" src="" alt="" name="imagen" accept=".jpg, .png, .jpeg" id="imagen"></td>
    </tr>



    </table>

    <br>
    <button type="submit"> Enviar </button>
    </form>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
