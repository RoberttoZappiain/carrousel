<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="">
    <div class="container ">
        <div class="row">
<div class="col-12">
    <div id="carouselExampleCaptions" class="carousel slide bg-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/img1.png" class="d-block w-100 p-5 " alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Accede a la mejor pagina web</h5>
              <p>Ingresa si ya tienes una cuenta en la plataforma.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/img2.png" class="d-block w-100 p-5" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Registrate, es facil y rapido!</h5>
              <p>En unos minutos estaras dentro del sitio.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/img3.jpeg" class="d-block w-100 p-5" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Ultima imagen del carrouse</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md- col-lg-6">

               <div class="card mt-2 text-center bg-dark">
                    <div class="card-body bg-dark text-warning">
                      <h4 class="card-title">Registrate</h4>
                      <p class="card-text">
                          <form action="">
                        <input type="text"  id="nombre" class="form-control" name="nombre" placeholder="Nombre" required>
                        <input type="text"  id="apellidos" class="form-control mt-1" name="apellidos" placeholder="Apellidos" required>
                        <input type="email" id="correo" class="form-control mt-1"  name="correo" placeholder="Correo"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Debe contener una direccion de correo electronico valida">
                        <input type="tel"  id="telefono" class="form-control mt-1"  name="telefono" placeholder="Teléfono" pattern="[0-9]{9}" title="Debe contener un numero telefonico valido">
                        <input type="text"  id="usuario" class="form-control mt-1" name="usuario" placeholder="Usuario" required>
                        <input type="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres" class="form-control mt-1" placeholder="Contraseña" required>
                        <input type="submit" class="btn btn-block btn-outline-primary mt-3" value="Registrar" id="registrar">
                        </form>

                      ¿ya tienes cuenta?<a href="#" class="card-link"> Ingresa aquí</a>
                    </div>
              </div>
            </div>
            <div class="my-auto mx-auto text-center col-sm-12 col-md- col-lg-6">
                <img  src="images/registro.png" height="350" width="350" alt="">
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
