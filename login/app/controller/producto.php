<?php
session_start();

if ($_POST) {
  // Comprueba que los datos estén llenos en los inputs
  if (isset($_POST['producto']) && !empty($_POST['producto']) && 
      isset($_POST['precio']) && !empty($_POST['precio'])) {
    
    // Agrega los datos de los inputs a la variable de sesión
    $nombre = $_POST['producto'];
    $precio = $_POST['precio'];
    
    // Inicializa la sesión de productos si no existe
    if (!isset($_SESSION['productos'])) {
      $_SESSION['productos'] = array();
    }
    
    // Agrega el producto a la lista de productos
    $_SESSION['productos'][] = array(
      'producto' => $nombre,
      'precio' => $precio
    );
    
    // Actualiza la sesión de registro
    $_SESSION['registro'] = array(
      'producto' => $nombre,
      'precio' => $precio
    );
    
    // Redirecciona al login
    header('location:./producto.php');
  } else {
    echo "<script>alert('No agregaste ningun producto');</script>";
  }
}

?>