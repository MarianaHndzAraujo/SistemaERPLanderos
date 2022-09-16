<?php
require 'funcionesBD.php';
$usuario=$_POST['txtusuario'];
$contraseña=$_POST['txtpass'];
session_start();
$_SESSION['usuarioS']=$usuario;

$conexion=conectarBD();

$consulta="SELECT*FROM tbusuarios where correo='$usuario' and pass='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['perfil']=="Administrador"){ //administrador
    echo "<script> alert('Bienvenido a LANDEROS Administrador'); window.location='Landeros.php'</script>";

}else
  if($filas['perfil']=="Empleado"){ //cliente
    echo "<script> alert('Bienvenido a LANDEROS Empleado'); window.location='LanderosEmpleado.php'</script>";
  }
else{
    ?>
    <?php
    include("login.html");
    ?>
    echo "<script> alert('Revisa tus credenciales'); window.location='login.html' </script>";
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
