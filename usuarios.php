<?php
$conexion=mysqli_connect("localhost","root","","login_registro");

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
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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
    <h2>Listado de Citas</h2>
        <hr>
        <h2>Usuarios</h2>  
        <style>
        table {
  border-collapse: collapse;
}

td {
  background-color: white;
  color: black;
}

th{
  background-color: #6994E2;
  color:white;
  text-align:center;
  
}

td{
  border: none;
  text-align:center;
}
</style>

<style>
        table {
        border-collapse: collapse;
        width: 100%;
        background-color: #6994E2;
        border-radius: 10px;
        overflow: hidden;
        }

        th, td {
            border: 1px solid #fff; /* Borde blanco */
            padding: 8px;
            text-align: center;
            background-color: #6994E2;
        }

        th {
            background-color: #394867; /* Color de fondo para las celdas de encabezado */
            color: #fff; /* Color de texto para las celdas de encabezado */
        }
    </style>
    
<table>
            <hr>
            <hr>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Usuario</th>
            </tr>
            <?php
            $sql="SELECT * from usuarios";
            $result=mysqli_query($conexion,$sql);
            
            while($mostrar=mysqli_fetch_array($result)){
            ?>
            
            <tr>
            <td><?php echo $mostrar['Nombre']?></td>
            <td><?php echo $mostrar['Correo']?></td>
            <td><?php echo $mostrar['Usuario']?></td>
            </tr>
            <?php
            }
            ?>
            
            <!-- Aquí se mostrarán las citas -->
        </table>


    
     </main>
</body>
</html>