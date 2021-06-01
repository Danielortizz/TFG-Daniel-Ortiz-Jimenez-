<?php 

//Iniciamos una sesion
	
	session_start();

//La destruimos
	
	session_destroy();

//Y nos reedirigimos a la pagina principal
	
	header('Location: home.php');

?>