<?php

$iditem=$_GET["idProductoCarrito"];

//Cogemos los archivos que vamos a necesitar
require 'bd/conectorBD.php';
require 'DAOusuarios.php';

//Nos conectamos a la base de datos
$conexion = conectar(true);

//Eliminamos el producto con el uso de su funcion
eliminarProductoCarrito($conexion, $iditem);

//Nos reedirige al carrito
header('Location: carrito.php');
?>