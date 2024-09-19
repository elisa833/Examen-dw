<<?php
require_once("./app/config/dependencias.php");
require_once("./app/controller/producto.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=ICONS."bootstrap-icons.css";?>">
    <link rel="stylesheet" href="<?=CSS."registro_producto.css";?>">
    <title>Formulario de Productos</title>
</head>
<body class="vh-100 d-flex justify-content-center align-items-center">
    <form action="./producto.php" method="post" class="w-25 p-4">
        <div class="text-center mb-4 c-user">
            <i class="bi bi-basket-fill text-white"></i>
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-shop fs-3 text-white mx-1"></i>
            <input type="text" class="form-control" placeholder="Ingrese nombre del producto" name="producto" value="<?= (!empty($_POST['producto'])) ? $_POST['producto'] : ''; ?>">
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-tags fs-3 text-white mx-1"></i>
            <input type="text" class="form-control" placeholder="Ingrese precio" name="precio" value="<?= (!empty($_POST['precio'])) ? $_POST['precio'] : ''; ?>">
        </div>
        
        <div class="mt-3 c-button">
            <button type="submit" class="btn w-100 text-white fs-4">Agregar Producto</button> 
        </div>
    </form>
</body>
</html>
