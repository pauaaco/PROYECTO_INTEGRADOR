<?php
//HOST,USUARI,CONTRASEÑA Y NOMBRE DE TABLA
$conexion=mysqli_connect("localhost","root","","login_registro");
//PARA SABER SI SE CONECTO CORRECTAMENTE
if($conexion){
    echo 'conectado exitosamente';
}else{
    echo 'no es posible conectar';
}
?>