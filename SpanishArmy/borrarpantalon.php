<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOpantalones.php';

//Nos conectamos a la base de datos
	$conexion = conectar(true);

//Y cogemos el id de pantalones por que lo vamos a necesitar
	$idpantalones = $_GET['idpantalones'];
	
//Usamos una funcion que nos permite borrar un pantalon fijandonos en un id
	$consulta =  borrarpantalon($conexion,$idpantalones);

//Nos lleva a la pagina de pantalones del admin
	header('Location: pantalonesadmin.php');

?>