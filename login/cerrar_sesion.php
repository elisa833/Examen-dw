<?php
session_start(); //permite trabajar con las sesiones
session_unset(); // libera la sesion actual
session_destroy(); // destruye las variables de sesion

header("location:login.php"); //nos redirige el login ya que la destruye

?>