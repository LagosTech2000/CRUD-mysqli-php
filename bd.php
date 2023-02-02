<?php
function conectar(){
    $servername = "localhost";
    $username = "fer1301";
    $password = "Fer1301";
    $dbname  = "crud+myql+php";   

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
if (!$conn) {
  die("Conexion Fallida: " . mysqli_connect_error());  
}
 return $conn;  
}
?>