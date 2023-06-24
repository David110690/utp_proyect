<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];


$consulta = "SELECT* FROM usuario where Usuario = '$USUARIO' and Password ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.html");

}else{
    header("location:error.html");
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);





?>