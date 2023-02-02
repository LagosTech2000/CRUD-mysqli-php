<?php
session_start();
if(isset($_SESSION["usuario"])){
$usuario=$_SESSION["usuario"];

$id =  $_SESSION["prodId"];
$marca = $_SESSION["marca"];
$modelo = $_SESSION["modelo"];
$precio = intval($_SESSION["precio"]);
}

if(isset($_POST["guardarProd"])){
    require_once("funciones.php");
    $marcaE = $_POST["marcaProd"];
    $modeloE = $_POST["modeloProd"];
    $precioE = intval($_POST["precioProd"]);

    editarProducto($marcaE,$modeloE,$precioE,$id);
    echo "<script>alert('$marca,$modelo,$precio,$id')</script>";
   header("Location: inicio.php");
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
    <title>Editar Producto | <?php echo ucfirst($usuario["usuario"]);?> </title>
</head>
<body class="bg-secondary text-white">



<h2 class="mt-5 text-center">Editar Telefono </h2>
   <br/ >
   <center>
     <div class="container-fluid ">

         <form action="editar.php" method="POST">
             
             <div class="form-outline form-secondary mb-4">
                 <input type="text" id="typeEmailX" required name="marcaProd" class="fs-2 text-center text-info bg-dark form-control form-control-lg w-50" value=" <?php echo $marca ;?>" />
                 <label class="form-label" for="typeEmailX">Marca<label>
                     </div>
                    
                     <div class="form-outline form-secondary mb-4">
                 <input type="text" id="typeEmailX" required name="modeloProd" class="fs-2 text-center text-info bg-dark form-control form-control-lg w-50" value=" <?php echo $modelo ;?>" />
                 <label class="form-label" for="typeEmailX">Modelo<label>
                     </div>
                     
                     
                     
                     <div class="form-outline form-white mb-4">
                         <input type="numberr" id="typeEmailX" required name="precioProd" class="w-25 fs-2 text-info bg-dark text-center form-control form-control-lg rounded-50" value=" <?php echo $precio ;?>" />
                         <label class="form-label" for="typeEmailX">Precio<label>
                             </div>
                             
                             <div class="form-outline form-white mb-4">
                                
                                 
                                 
                                 <button name="guardarProd" class="btn btn-outline-info btn-lg px-5" type="submit">Guardar</button>
                                 <a href='inicio.php' name="guardarProd" class="btn btn-outline-warning btn-lg px-5" type="submit">Regresar</a>
                                </form>
                            </div>
                        </center>
                    

</section>
</body>
</html>