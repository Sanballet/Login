<?php

include('db.php');

$usuario=$_POST['usuario'];
$password=$_POST['password'];




$consulta="SELECT*FROM personal where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location: home.html");
}else{
    ?>
   <?php
   include("index.html");
   ?>
   <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
   <?php 
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>


