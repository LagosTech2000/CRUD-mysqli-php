<?php
session_start();
        
        if(isset($_SESSION["usuario"])){

            $usuario=$_SESSION["usuario"]; 
            
    require_once("funciones.php");

         $id=$usuario["Id"];
         $productos = obtProducto($id);

        }else{
            header('Location: index.php');

        }

        if(isset($_POST["CerrarSesion"])){
               session_destroy();
               header('Location: index.php');
        }

        if(isset($_POST["guardarProd"])){
            $marca=$_POST["marcaProd"];
            $modelo=$_POST["modeloProd"];
            $precio=$_POST["precioProd"];
            if(strlen($marca)>4&&strlen($modelo)>0&&strlen($precio)>2){
           agregarProducto(ucfirst($marca),ucfirst($modelo),$precio,$id);
           header('refresh: 0');
            }else{
                echo "<script>alert('Ingrese Datos validos')</script>";
            }
           
         }
        
        if(isset($_POST["eliminarProd"])){
            $idProd=$_POST["prodId"];
            eliminarProducto($idProd); 
            header('refresh: 0');
         }

         if(isset($_POST["eliminarProd"])){
            
         }

         if(isset($_POST["buscar"])){

            $marca=$_POST["buscarProd"];
            if(strlen($marca)>3){

                $productos = buscarMarca($marca);
            }else{
                echo "<script>alert('La Busqueda debe tener al menos 4 caracteres')</script>";
            }
            
         }

         if(isset($_POST["editar"])){
            $_SESSION["prodId"]= $_POST["prodId"];
            $_SESSION["marca"]= $_POST["marca"];
            $_SESSION["modelo"]=$_POST["modelo"];
            $_SESSION["precio"]=$_POST["precio"];
            header("Location: editar.php");
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
    <title>Inicio | <?php echo ucfirst($usuario["usuario"]);?> </title>
</head>
<body class="bg-secondary text-white">



    <header>
       
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand ms-5 fs-1 text-info fw-bold" href="inicio.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
            <li class="nav-item ms-5 fs-1">
              <a class="nav-link" aria-current="page" href="perfil.php">Perfil</a>
            </li>
            <li class="nav-item fs-1 ms-5">
              <a class="nav-link" href="#">Acerca</a>
            </li>

      </ul>

      <form class="d-flex" action="inicio.php" method="POST">
        <input name="buscarProd" class="form-control bg-dark text-info text-center me-3 fs-2" type="search" placeholder="Buscar por Marca" aria-label="Search">
        <button name="buscar" class="btn btn-outline-info fs-2  " type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>



</header>



<section>

<br/>
           
    
<table class="mb-5 table table-dark table-striped w-75 m-auto ">
        
        <thead>
        <h2 class="text-center">Mis Telefonos </h2>

    <tr>
      <th scope="col">Codigo</th> 
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Precio</th>
      <th scope="col">Registrado en</th>
      <th scope="col"></th>
      
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($productos as $producto) {?>
        
    <tr class="mb-5">
        <form action="inicio.php" method="POST">

            <td scope="row"><input type="hidden" name="prodId" value="<?php echo $producto["Id"];?>" /><?php echo $producto["Id"];?> </td>
            <td><input name="marca" type="hidden" value="<?php echo $producto["marca"];?>"><?php echo $producto["marca"];?> </td>
            <td><input type="hidden" name="modelo" value="<?php echo $producto["modelo"] ;?>" /><?php echo $producto["modelo"];?></td>
            <td ><input name="precio" type="hidden" value="<?php echo $producto["precio"];?>"/><?php echo $producto["precio"];?> Lps</td>
            <td><?php echo substr($producto["createdAt"],0,10);?></td>
            <td>
                <button name="eliminarProd" type="submit" class="btn btn-outline-danger">Eliminar</button>
                <button name="editar" type="submit" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" >Editar</button>
        </form>
             </td>
    </tr>

    <?php }?>
   
  </tbody>
</table>

<h2 class="text-center">Agregar Un Nuevo Telefono </h2>
   <br/ >
   <center>
     <div class="container-fluid ">

         <form action="inicio.php" method="POST">
             
             <div class="form-outline form-secondary mb-4">
                 <input type="text" id="typeEmailX" required name="marcaProd" class="fs-2 text-center text-info bg-dark form-control form-control-lg w-50" />
                 <label class="form-label" for="typeEmailX">Marca<label>
                     </div>

                     <div class="form-outline form-secondary mb-4">
                 <input type="text" id="typeEmailX" required name="modeloProd" class="fs-2 text-center text-info bg-dark form-control form-control-lg w-50" />
                 <label class="form-label" for="typeEmailX">Modelo<label>
                     </div>
                     
                     
                     
                     <div class="form-outline form-white mb-4">
                         <input type="number" id="typeEmailX" required name="precioProd" class="w-25 fs-2 text-info bg-dark text-center form-control form-control-lg" />
                         <label class="form-label" for="typeEmailX">Precio<label>
                             </div>
                             
                             <div class="form-outline form-white mb-4">
                                
                                 
                                 
                                 <button name="guardarProd" class="btn btn-outline-info btn-lg px-5" type="submit">Guardar</button>
                                </form>
                            </div>
                        </center>
                    

</section>
</body>
</html>