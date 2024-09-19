<?php
require_once("./app/config/dependencias.php");
session_start();
require_once("./app/controller/producto.php");

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
  <form action="./registro_producto.php" method="post" class="w-25 p-4">
    <div class="text-center mb-5 c-user">
      <i class="bi bi-emoji-sunglasses"></i>
    </div>
    <div class="text-center mb-4 c-user">
      
      <?php if (isset($_SESSION['registro'])): ?>
        <h2>Último producto agregado: <?= $_SESSION['registro']['producto'] ?> - $<?= $_SESSION['registro']['precio'] ?></h2>
      <?php endif; ?>
      
      <h2>Lista de productos:</h2>
      <?php if (isset($_SESSION['productos'])): ?>
        <ul>
          <?php foreach ($_SESSION['productos'] as $producto): ?>
            <li class="fs-4"><?= $producto['producto'] ?> - $<?= $producto['precio'] ?></li>
          <?php endforeach; ?>
        </ul>
      <?php else: ?>
        <h2>No hay productos registrados</h2>
      <?php endif; ?>
    
      <a href="cerrar_sesion.php" class="btn btn-info btn-lg" id="salir">Salir</a>
    
    </div>
  </form>
</body>
</html>