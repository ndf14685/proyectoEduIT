<?php 
session_start();

unset($_SESSION['numero']); //Se borra del archivo de texto
session_unset();//Borra todas las variables
session_destroy();
 ?>
 <?php /*
$x= 5;
unset($x); //para eliminar una variable de la memoria
*/ ?> 