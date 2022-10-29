<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Formulario </title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <br><br><br>
        <h2  class="text-center">🐾Publica los datos de tu mascota perdida 🐾</h2><br>
        <!-- FOMRULARIO -->
        <form  method="post" action="../controlador/transacciones.php" enctype="multipart/form-data" name="forml" class="shadow-lg p-3 mb-5 bg-body rounded container">
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
                     <select class="form-select"id="zona" name="zona" aria-label="zona">
                     <option selected>Elegir zona...</option>
                     <option value="centro">Centro</option>
                     <option value="norte">Norte</option>
                     <option value="sur">Sur</option>
                     <option value="este">Este</option>
                     <option value="oeste">Oeste</option>
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
                    <input type="submit" value="Enviar" class="btn btn-success" name="submit">
                    <input type="submit" value="Cancelar" class="btn btn-danger">
                </div>
            </div>
        </form>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
