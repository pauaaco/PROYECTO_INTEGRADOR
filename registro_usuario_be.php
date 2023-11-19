<?php
//INCLUIMOS LA CONEXION A LA BASE DE DATOS
include 'conexion_be.php';
//PARA QUE TOME EL VALOR DE LAS CASILLA DEL HTML
$Nombre=$_POST['Nombre'];
$Correo=$_POST['Correo'];
$Usuario=$_POST['Usuario'];
$Contrasena=$_POST['Contrasena'];
//ENCRIPTAR VALORES DE LA CONTRASEÑA
$Contrasena= hash('sha512', $Contrasena);
//PARA INSERTAR LOS VALORES DE CADA CASILLA DEL HTML A LA BASE DE DATOS
$query="INSERT INTO usuarios(Nombre, Correo, Usuario, Contrasena) VALUES ('$Nombre','$Correo','$Usuario','$Contrasena')";
//ENCRIPTACIÓN CONTRASEÑA
$ejecutar=mysqli_query($conexion,$query);
//PARA QUE AL REGISTRAR APAREZCA QUE SE REGISTRO CORRECTAMENTE Y VUELVA AL INDEX
if ($ejecutar){
    echo '
    <script>
    alert("usuario alamacenado correctamente");
    window.location="../index.php";
    </script>
    ';
}
?>