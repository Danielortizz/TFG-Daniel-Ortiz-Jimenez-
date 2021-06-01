<?php

	$iditem=$_GET["idProductoCarrito"];

//Cogemos los archivos que vamos a usar

	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//Nos conectamos a la base de datos

	$conexion = conectar(true);

//Funcion que hace sumar una cantidad en el carrito

	sumaCantidadCarrito($conexion, $iditem);
	header('Location: carrito.php');

?>