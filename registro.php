<?php

require_once("funciones.php");
$data=array();
if(isset($_POST["Guardar"])){
    if(isset($_POST["correo"]) && isset($_POST['user'])&&isset($_POST["pass"])){
        $correo=$_POST["correo"]; 
        $pass=$_POST["pass"]; 
        $user=$_POST["user"]; 
        $data= array($user,$correo,$pass);
        //  var_dump($data);
        if(strlen($user)>4&&strlen($pass)>4&&strlen($correo)>5){
            
          guardar($data);
          header('Location: index.php');
        }else{
            echo "<script>alert('El usuario, correo y la contrasena deben tener al menos 5 caracteres')</script>";
        }
        
}else{

}
}

if(isset($_POST["Vaciar"])){
    vaciar();
    header('Refresh: 0');

}
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>REGISTRO

    </title>
</head>
<body class="bg-dark">
    <center>
       
        <section>
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="mb-5 card bg-dark text-white border-white"  style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4  pb-5">

              <h2 class="fw-bold mb-2  text-uppercase">Crear Una Cuenta</h2>
              <p class="text-white-50 mb-5">Por favor ingresa tus datos</p>
          
              <form action="registro.php" method="POST">

                  <div class="form-outline form-secondary mb-4">
                      <input type="text" id="typeEmailX" required name="user" class="fs-2 text-center form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Usuario<label>
                    </div>
                          

                          <div class="form-outline form-white mb-4">
                              <input type="email" id="typeEmailX" required name="correo" class="fs-2 text-center form-control form-control-lg" />
                              <label class="form-label" for="typeEmailX">Correo<label>
                          </div>

                          <div class="form-outline form-white mb-4">
                              <input type="password" required id="typePasswordX" name="pass" class="fs-2 text-center form-control form-control-lg" />
                              <label class="form-label"  for="typePasswordX">Contraseña</label>
            
            
            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Contraseña olvidada?</a></p>
            
            <button name="Guardar" class="btn btn-outline-info px-5" type="submit">Ingresar</button>
            <a href="index.php" class="mt-3 btn btn-outline-warning bg-dark mb-3">REGRESAR</a>

        </form>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Empieza a Acumular Puntos Como Usuario 
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </section>

        <br/>


         
        </section>
    
</center>
</body>
</html>