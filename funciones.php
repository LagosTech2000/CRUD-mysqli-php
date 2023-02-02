<?php
//requerir la conexin a la base de datos
  require_once("bd.php");
//ingresar usuario en registro
  function guardar($data){
  
   $conn = conectar();     
   $date=date("Y-m-d");
   $user=$data[0];
   $correo=$data[1];
   $pass=$data[2];
   $hash=password_hash($pass, PASSWORD_ARGON2ID);

  
  $sql = "INSERT INTO user (usuario, correo, pass, createdAt)
  VALUES ('$user', '$correo','$hash','$date')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Se Agrego El Usuario $user')</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn); 



      
    }
  
// Iniciar sesion
    function login($user,$pass){
      $conn = conectar();
      $query="SELECT * FROM user WHERE usuario = '$user'";
      $result=mysqli_query($conn, $query);
      
      if($result->num_rows>0){
          foreach($result as $r){
                    $hash= $r['pass'];
          
                  }
           if(password_verify($pass,$hash)){
          session_start();
          
          var_dump(mysqli_fetch_assoc($result));
          
          foreach($result as $usuario){
                    $nombre= $usuario["usuario"];
                    $_SESSION["usuario"]=$usuario;
                                        
          }

          echo"<script>alert('Sesion Iniciada Como $nombre')</script>";
           header('Location: inicio.php');
          
             }else{
              echo "<script>alert('Contrasena Incorrecta!')</script>";
            }
      }else{
          echo "<script>alert('No se encontro ninguna cuenta asociada al usuario!')</script>";
          
      }
    }

    //Obtener telefonos de usuario
    
    function obtProducto($id){
      $conn = conectar();
      $sql = "SELECT * FROM productos where idUsuario = $id ORDER BY precio DESC";
      return mysqli_query($conn, $sql);
      
    }

//agregar telefonos por usuario
    function agregarProducto($marca,$modelo,$precio,$idUsuario){

      $conn = conectar();
      $date=date("Y-m-d");
      
      $sql="INSERT INTO productos (marca,modelo,precio,createdAt,idUsuario) VALUES ('$marca','$modelo','$precio','$date','$idUsuario') ";
      if (mysqli_query($conn, $sql)) {
        
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn); 
    }
//eliminar telefonos de usuario
    function eliminarProducto($id){
    $conn = conectar();
    $sql = "DELETE FROM productos WHERE Id = $id";
    mysqli_query($conn, $sql);
    
    mysqli_close($conn); 


    }


    //buscar telefonos del usuario

    function buscarMarca($marca){
      $conn = conectar();
      $sql = "SELECT * FROM productos WHERE marca LIKE '%$marca%'";
      return mysqli_query($conn, $sql);

    }

    //editar datos de los telefonos

   function editarProducto($marca,$modelo,$precio,$id){
    $conn = conectar();
    $sql = "UPDATE productos SET marca = '$marca', modelo = '$modelo', precio = '$precio' WHERE Id = '$id'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);

   }

 
    


?>