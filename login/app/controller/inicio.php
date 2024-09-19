<?php
//lo agrega y valida que realmente exista el usuario
if (!isset($_SESSION['usuario']) && ($_SESSION['producto'])) {
    header("location:login.php");
    header("location:producto.php");
}

?>