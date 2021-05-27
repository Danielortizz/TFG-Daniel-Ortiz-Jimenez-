<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOcamisetas.php';

//Nos conectamos a la base de datos
	$conexion = conectar(true);

//Y cogemos el id de camisetas por que lo vamos a necesitar
	$idcamisetas = $_GET['idcamisetas'];
	
//Usamos una funcion que nos permite borrar una camiseta fijandonos en un id
	$consulta =  borrarcamiseta($conexion,$idcamisetas);

//Nos lleva a la pagina de camisetas del admin
	header('Location: camisetasadmin.php');

?>

