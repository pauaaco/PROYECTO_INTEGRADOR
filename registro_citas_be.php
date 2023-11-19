<?php
//INCLUIMOS LA CONEXION A LA BASE DE DATOS
include 'conexion_be.php';
//PARA QUE TOME EL VALOR DE LAS CASILLA DEL HTML
$Nombre=$_POST['Nombre'];
$Email=$_POST['Email'];
$Fecha=$_POST['Fecha'];
$Hora=$_POST['Hora'];
$Especialidad=$_POST['Especialidad'];
//ENCRIPTAR VALORES DE LA CONTRASEÑA
//PARA INSERTAR LOS VALORES DE CADA CASILLA DEL HTML A LA BASE DE DATOS
$verificarCita=mysqli_query($conexion,"SELECT * FROM citas WHERE Especialidad='$Especialidad' AND Hora='$Hora' AND Fecha='$Fecha'");
if(mysqli_num_rows($verificarCita)>0){
    echo'
    <script>
    alert("Esta cita ya esta asignada, Porfavor elija otra hora");
    window.location="../citas.php";
    </script>
    ';
    exit;
}else{
$query1="INSERT INTO citas(Nombre, Email, Fecha, Hora, Especialidad) VALUES ('$Nombre','$Email','$Fecha','$Hora','$Especialidad')";
$ejecutar=mysqli_query($conexion,$query1);
    echo'
    <script>
    alert("Cita asiganda con exito");
    window.location="../citas.php";
    </script>
    ';
    exit;

}


?>