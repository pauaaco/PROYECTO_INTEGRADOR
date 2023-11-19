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
            text-align: center;
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
             <li><a href="PHP/cerrar_sesion.php"><button>Cerrar Sesión</button></a><li>
            
        </ul>
         
    </nav>

    <main>
        <h1>acerca de nosotros</h1>
        <h2>Bienvenido al Hospital G&2Hospital</h2>

        <p>Nuestro compromiso es proporcionar la más alta calidad de atención, combinando la experiencia de nuestros profesionales de la salud con tecnología de vanguardia y un enfoque centrado en el paciente.</p>

        <h3>Nuestra Misión</h3>
        <p>En el Hospital, nuestra misión es promover la salud y el bienestar de nuestra comunidad a través de un servicio compasivo, innovador y basado en evidencia. Nos esforzamos por brindar atención integral y personalizada a cada paciente, adaptándonos a sus necesidades únicas.</p>

        <h3>Servicios Destacados</h3>
        <ul>
            <li>Atención Multidisciplinaria</li>
            <li>Tecnología Avanzada</li>
            <li>Atención Personalizada</li>
            <li>Investigación y Desarrollo</li>
        </ul>

        <h3>Nuestro Equipo</h3>
        <p>Nuestro personal está formado por médicos, enfermeros y profesionales de la salud altamente calificados y apasionados por brindar el mejor cuidado posible. Cada miembro de nuestro equipo comparte el compromiso de la excelencia en el servicio y la atención al paciente.</p>

        <h3>Instalaciones y Comodidades</h3>
        <p>Nuestras instalaciones están diseñadas pensando en la comodidad y el bienestar del paciente. Ofrecemos espacios modernos, habitaciones privadas y zonas de espera cómodas para garantizar una experiencia hospitalaria positiva.</p>

        <h3>Compromiso con la Comunidad</h3>
        <p>En el Hospital de Excelencia, también nos comprometemos con nuestra comunidad. Participamos en programas de salud preventiva, educación y apoyo a organizaciones locales para promover un estilo de vida saludable y un entorno más saludable para todos.</p>

        <p>Confiamos en que su experiencia en el Hospital de Excelencia será una de confianza, cuidado y recuperación. Le damos la bienvenida y esperamos poder servirle.</p>
     </main>
</body>
</html>

</body>