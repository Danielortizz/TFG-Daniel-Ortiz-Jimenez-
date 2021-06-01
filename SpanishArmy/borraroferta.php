<?php  

//Cogemos los archivos que vamos a necesitar

	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';
	require 'DAOofertas.php';

//Nos conectamos a la base de datos

	$conexion = conectar(true);

//Y cogemos el id de oferta por que lo vamos a necesitar

	$idoferta = $_GET['idoferta'];
	
//Usamos una funcion que nos permite borrar una oferta fijandonos en un id

	$consulta =  borrarofertas($conexion,$idoferta);

//Nos lleva a la pagina de oferta del admin
	
	header('Location: ofertasadmin.php');

?>