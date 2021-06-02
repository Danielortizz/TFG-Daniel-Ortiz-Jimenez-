<?php 

//Cargamos los archivos que vamos a usar

	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//Nos conectamos a la base de datos 

	$conexion = conectar(true);

//cogemos el valor que hemos metido en el campo del dni

	$usuario = $_POST['usuario'];

//cogemos el valor que hemos metido en el campo de la nueva contraseña
	
	$password = $_POST['password'];

//Uso de funciones

	modificarUsuarios($conexion, $password, $usuario);


//Nos lleva al a pagina para loguearnos

	header('Location: login.php');

?>