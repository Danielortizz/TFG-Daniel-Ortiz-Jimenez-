<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';
	require 'DAOmochilas.php';

//Nos conectamos a la base de datos
	$conexion = conectar(true);

//Y cogemos el id de mochilas por que lo vamos a necesitar
	$idmochilas = $_GET['idmochilas'];
	
//Usamos una funcion que nos permite borrar una mochila fijandonos en un id
	$consulta =  borrarmochila($conexion,$idmochilas);

//Nos lleva a la pagina de mochilas del admin
	header('Location: mochilasadmin.php');

?>