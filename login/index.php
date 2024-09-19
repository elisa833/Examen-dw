<?php
require_once("./app/config/dependencias.php");
session_start();
//valida si ya existe el usuario o la variable de sesion, que jala el archivo para enlazarlo
require_once("./app/controller/inicio.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=ICONS."bootstrap-icons.css";?>">
    <link rel="stylesheet" href="<?=CSS."inicio.css";?>">
    <title>Formulario</title>
</head>
<body class="vh-100 d-flex justify-content-center align-items-center">
    <form action="./inicio.php" method="post" class="w-25 p-4">
        <div class="text-center mb-5 c-user">
            <i class="bi bi-emoji-sunglasses"></i>
        </div>
        <div class="text-center mb-4 c-user">
            <h1>Bienvenido</h1>
        <!--Solo muestra el contenido de registri que es el arreglo siendo el nombre o su contenido -->
            <h2><?= $_SESSION['registro']['nombre']." ".$_SESSION['registro']['apellido'] ?> </h2> 
            <a href="cerrar_sesion.php" class="btn btn-info btn-lg" id="salir">Cerrar sesion</a>
    
        </div>
    </form>
</body>
</html>