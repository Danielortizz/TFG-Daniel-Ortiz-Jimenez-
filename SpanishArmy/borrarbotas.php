<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';
	require 'DAObotas.php';

//Nos conectamos a la base de datos
	$conexion = conectar(true);

//Y cogemos el id de botas por que lo vamos a necesitar
	$idbotas = $_GET['idbotas'];
	
//Usamos una funcion que nos permite borrar una botas fijandonos en un id
	$consulta =  borrarbotas($conexion,$idbotas);

//Nos lleva a la pagina de botas del admin
	header('Location: botasadmin.php');

?>