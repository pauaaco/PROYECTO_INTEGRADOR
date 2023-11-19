<?php
session_start();
include 'conexion_be.php';
$Correo=$_POST['Correo'];
$Contrasena=$_POST['Contrasena'];
$Contrasena=hash('sha512',$Contrasena);
$validar_login=mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo='$Correo' and Contrasena='$Contrasena'");
if(mysqli_num_rows($validar_login)>0){
    $_SESSION['usuario']=$Correo;
    header("location:../home.php");
    exit;
}else{
    echo'
    <script>
    alert("usuario no existe,por favor verifique los datos introducidos");
    window.location="../index.php";
    </script>
    ';
    exit;

}

?>