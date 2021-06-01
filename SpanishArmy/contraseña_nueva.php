<?php 

//Cargamos los archivos que vamos a usar

	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//Nos conectamos a la base de datos 

	$conexion = conectar(true);

//cogemos el valor que hemos metido en el campo del dni

	$dni = $_POST['dni'];

//cogemos el valor que hemos metido en el campo de la nueva contraseña
	
	$contraseñaN = $_POST['password'];

//Uso de funciones

	modificarUsuarios($conexion, $contraseñaN, $dni);

//Nos lleva al a pagina para loguearnos

	header('Location: login.html');

?>