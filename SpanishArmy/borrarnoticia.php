<?php  

//Cogemos los archivos que vamos a necesitar

	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';
	require 'DAOnoticia.php';

//Nos conectamos a la base de datos

	$conexion = conectar(true);

//Y cogemos el id de noticias por que lo vamos a necesitar

	$idnoticias = $_GET['idnoticias'];
	
//Usamos una funcion que nos permite borrar una noticias fijandonos en un id

	$consulta =  borrarnoticia($conexion,$idnoticias);

//Nos lleva a la pagina de noticias del admin
	
	header('Location: noticiasadmin.php');

?>