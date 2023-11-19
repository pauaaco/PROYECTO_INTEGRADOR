<?php
//inicializar sesion
session_start();
//si no existe la variable de sesion usuario ejecutar la alerta 
//esto es para que no puedan entrar a las otras pestañas del aplicativo 
//sin inicar sesion previamente
if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("INICIE SESIÓN");
    window.location="index.php";
    </script>
    ';
    die();
    session_destroy();
}
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            text-align: center;
        }

        header {
            background-color: #007de4;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: absolute;
            width: 100%;
            z-index: 2;
        }

        nav {
            background-color: #1cafdb;
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 40px;
            left: 0;
            padding: 10px;
            box-sizing: border-box;
            margin-top: 0px;
           
        }
            
        main {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin: 20px 0;
        }

        ul li a {
            text-decoration: none;
            color: #d34d4d1f;
        }
      

        form {
            margin: 20px auto;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        h1 {
         font-size: 2em;
         color: #a5cef0;
        }

        h2 {    
            font-size: 1.5em;
            color: #1cafdb; 
        }

        button {
            background-color: #1cafdb;
            color: #fff;
           border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold; 
            font-family: 'Arial', sans-serif;
        }

        button:hover {
            background-color: #005fa6;
        }   

        hr {
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <header>
        <h1>G&2Hospital</h1>
    </header>

    <nav>
    
     
        <ul>
            <li><a href=#>.</a></li>
            <li><a href="home.php"><button>home</button></a></li>
            <hr>
            <li><a href="citas.php"><button>agendamiento de citas</button></a></li>
            <hr>
            <li><a href="vcitas.php"><button>ver citas</button></a></li>
            <hr>
            <li><a href="usuarios.php"><button>usuarios</button></a></li>
            <hr>
       </ul>
         
    </nav>

    <main>
        <h1>.</h1>
        <h1>agendamiento de cita</h1>
        <h2>porfavor rellene el formulario para poder agendar su cita</h2>
       
        <form action="PHP/registro_citas_be.php" method="POST" class="formulario__citas">
            

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="Nombre" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="Email" required>
    
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="Fecha" required>
    
            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="Hora" required>
            
            <label for="especialidad">Selecciona una especialidad:</label>
             <select id="especialidad" name="Especialidad">
                  <option value="" disabled selected>Escoger especialidad</option>
                  <option value="medicina_general">Medicina General</option>
                  <option value="odontologia">Odontología</option>
                  <option value="pediatria">Pediatría</option>
    </select>
    </select>


            <input type="submit" value="Agendar Cita">
        </form>
       
</body>
</html>