<?php
session_start();
if(isset($_SESSION["usuario"])){
  header('Location: inicio.php');
}
if(isset($_POST["login"])){

    if(isset($_POST["user"] ) && isset($_POST["pass"])){
        
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        
        require_once("funciones.php");
        login($user,$pass);
        
        
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LOGIN</title>
</head>
<body class="bg-dark">
    
    <section class="vh-100 gradient-custom">
  <div class="containe py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="mb-5 card bg-dark text-white border-white"  style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4  pb-5">

              <h2 class="fw-bold mb-2  text-uppercase">Iniciar Sesion</h2>
              <p class="text-white-50 mb-5">Por favor ingresa tus datos</p>
          
              <form action="index.php" method="POST">

                  <div class="form-outline form-white mb-4">
                      <input required type="text" id="typeEmailX" name="user" class="text-center form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Usuario/Correo<label>
                          </div>

                          <div class="form-outline form-white mb-4">
                <input required type="password" id="typePasswordX" name="pass" class="text-center form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Contraseña</label>
            </div>
            
            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Contraseña olvidada?</a></p>
            
            <button name="login" class="btn btn-outline-light btn-lg px-5" type="submit">Ingresar</button>
        </form>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">No tienes una cuenta <a href="registro.php" class="text-white-50 fw-bold">Crea Una</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
</body>
</html>