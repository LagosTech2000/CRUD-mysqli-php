<?php
session_start();
        
        if(isset($_SESSION["usuario"])){

            $usuario=$_SESSION["usuario"]; 
             require_once("funciones.php");
             $Telefonos = obtProducto($usuario["Id"]);

             $intTelefonos=0;
               foreach($Telefonos as $r){
                  $intTelefonos++;
               }
            //  $Telefonos= array_count_values($res);
        }else{
            header('Location: index.php');

        }

        if(isset($_POST["CerrarSesion"])){
               session_destroy();
               header('Location: index.php');
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <title>Perfil |  <?php echo $usuario["usuario"];?> </title>
</head>
<body class="bg-secondary">
    <header>
       
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand ms-5 fs-1" href="inicio.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item fs-1 ms-5">
              <a class="nav-link text-info fw-bold" href="perfil.php">Perfil</a>
            </li>
            <li class="nav-item ms-5 fs-1">
              <a class="nav-link" aria-current="page" href="#">Acerca</a>
            </li>
                
      </ul>
      
    </div>
  </div>
</nav>



</header>



<section class="h-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card">
          <div class="text-center m-auto w-100 rounded text-white d-flex flex-row" style="background-color: #000; height:200px;">
           
            <div class="m-auto fs-2" style="margin-top: 130px;">
              <h1 ><?php echo ucfirst($usuario["usuario"]);?></h2>
              <p><?php echo $usuario["correo"];?></p>
              <form action="inicio.php" method="post">
        <input class="btn btn-outline-danger" type="submit" name="CerrarSesion" value="Cerrar Sesion">
        
        </form>
            </div>
            
          </div>
          <div class="p-4 text-black bg-dark">
            <div class="d-flex justify-content-center text-center py-1">
              <div>
                <p class="fs-2 text-muted mb-0">Telefonos en Venta</p>
                <p class="fs-2 text-muted mb-1"><?php echo $intTelefonos;?></p>
              </div>
            
            </div>
          </div>
          <div class=" bg-dark text-muted card-body p-4 text-black">
            
            <div class="d-flex justify-content-center align-items-center mb-4">
              <p class="text-center fw-normal mb-0">Telefonos</p>
            </div>
            <br/>
            
            <div class="row g-4 text-muted">

              <?php foreach($Telefonos as $tel){?>
              <div class="col-3 text-muted rounded border-black btn-outline-light p-2 mb-2">
              <p class="lead fw-normal mb-0">Marca: <?php echo $tel["marca"];?></p>
              <p class="lead fw-normal mb-0">Modelo: <?php echo $tel["modelo"];?></p>
              <p class="lead fw-normal mb-0">Precio: <?php echo $tel["precio"];?> Lps</p>
              
               </div>
              <?php }; ?>
              
            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
</section>


<section>

</section>
</body>

</html>