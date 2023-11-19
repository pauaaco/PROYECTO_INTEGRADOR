
<?php
session_start();
if(isset($_SESSION['usuario'])){
    header("location:home.php");
}
?>



<!DOCTYPE html>
<head>
    <meta charset="UTF -8">
    <meta name="viweport" content="width=device width, initial scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="assests/css/estilos.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login"> 
                    <h3>¿ya tienes cuenta?</h3>
                    <p>inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar--sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-registro"> 
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Registarte para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div> 
            </div>
<!--FORMULARIO DE LOGIN Y REGISTRO-->
            <div class="contenedor__login-registro">
            <!--LOGIN-->
                <form action="PHP/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="Correo">
                    <input type="password" placeholder="Contraseña" name="Contrasena">
                    <button>Entrar</button> 
                </form>
                  <!--REGISTRO-->
                <form action="PHP/registro_usuario_be.php" method="POST" class="formulario__registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre" name="Nombre">
                    <input type="text" placeholder="Correo electronico"  name="Correo">
                    <input type="text" placeholder="Usuario" name="Usuario">
                    <input type="password" placeholder="Contraseña" name="Contrasena">
                    <button>Registrar</button>   
                </form>
            </div>
        </div>
    </main>

<script src="assests/js1/script.js"></script>
</body>
</html>