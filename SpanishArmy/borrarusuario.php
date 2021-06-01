<?php  

//Cogemos los archivos que vamos a necesitar

	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//Nos conectamos a la base de datos

	$conexion = conectar(true);

//Y cogemos el id de usuario por que lo vamos a necesitar

	$idUsuario = $_GET['idUsuario'];

//Usamos una funcion que nos permite borrar un usuario fijandonos en un id

	borrarusuario($conexion,$idUsuario);

//Nos lleva a la pagina de usuario del admin
	
	header('Location: paneladmin.php');

?>