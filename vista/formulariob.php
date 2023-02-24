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
        <h1  class="text-center">🔎 Publica los datos de tu mascota perdida 🔍</h1><br><br>
        <!-- FOMRULARIO -->
        <form  method="post" action="../controlador/transacciones.php" enctype="multipart/form-data" name="forml" class="shadow-lg p-3 mb-5 bg-body rounded container">
            <table class="">
            <h3>🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾</h3><br>
            <div class="form-group text-center">
          <!-- Especie -->
            <label for="especie"></label>
            <input type="text" name="especie" id="especie" class="form-control item" placeholder="Especie">
          </div><br>
          <!-- Raza -->
          <div class="form-group text-center">
            <label for="raza"></label>
            <input type="text" name="raza" id="raza"  class="form-control item" placeholder="Raza">
          </div><br>
          <!-- Color -->
          <div class="form-group text-center">
            <label for="color"></label>
            <input type="text" name="color" id="color"  class="form-control item" placeholder="Color">
          </div><br>
          <!-- Nombre -->
          <div class="form-group text-center">
            <label for="nombreanimal"></label>
            <input type="text" name="nombreanimal" id="nombreanimal"  class="form-control item" placeholder="Nombre del Animal">
          </div><br>
          <!-- Imagen -->
          <div class="form-group text-center">
            <label for="imagen"></label>
            <input type="file" src="" alt="" name="imagen" accept=".jpg, .png, .jpeg" id="imagen"  class="form-control item" placeholder="Imagen">
          </div><br><br>
                     <!-- Zona donde se perdio -->
                     <div class="form-group">
                     <select class="form-select"id="zona" name="zona" aria-label="zona">
                     <option selected>Elegir zona...</option>
                     <option value="centro">Centro</option>
                     <option value="norte">Norte</option>
                     <option value="sur">Sur</option>
                     <option value="este">Este</option>
                     <option value="oeste">Oeste</option>
                     </select>
                     <label for="zona">Zona donde se lo vio por ultima vez</label>
                     </div></table><br>
            <!-- Nombre Persona-->
            <div class="form-group text-center">
              <label for="nombrepersona"></label>
              <p class="fw-bold text-center">Tus datos:</p><input type="text" name="nombrepersona" id="nombrepersona"  class="form-control item" placeholder="Nombre y Apellido">
            </div><br>
            <!-- Telefono -->
            <div class="form-group text-center">
              <label for="telefono"></label>
              <input type="tel" name="telefono" id="telefono"  class="form-control item" placeholder="Telefono">
            </div><br>
            <div class="container">
                <div class="col-md-12 text-center">
                    <input type="submit" value="Enviar" class="btn btn-success" name="submit">
                    <input type="submit" value="Cancelar" class="btn btn-danger">
                </div>
            </div><br>
            <h3>🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾🐾</h3>
        </form>
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
            <li class="mb-2"><a href="https://github.com/bethvalenti" class="nav-link active">bethvalenti</a></li>
            <li class="mb-2"><a href="https://github.com/arielrey"  class="nav-link active">arielrey</a></li>
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
