<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOdieta.php';

//Nos conectamos a la base de datos
	$conexion = conectar(true);

//Y cogemos el id de dieta por que lo vamos a necesitar
	$iddieta = $_GET['iddieta'];
	
//Usamos una funcion que nos permite borrar una dieta fijandonos en un id
	$consulta =  borrardieta($conexion,$iddieta);

//Nos lleva a la pagina de dieta del admin
	header('Location: dietaadmin.php');

?>

