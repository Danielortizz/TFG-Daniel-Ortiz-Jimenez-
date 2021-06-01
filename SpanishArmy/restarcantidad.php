<?php

	$iditem=$_GET["idProductoCarrito"];

//Cogemos los archivos que vamos a usar

	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//Nos conectamos a la base de datos

	$conexion = conectar(true);

//Usamos la funcion para restar la cantidad del carrito

	restarCantidadCarrito($conexion, $iditem);

//Nos reedirigimos al carrito

	header('Location: carrito.php');

?>