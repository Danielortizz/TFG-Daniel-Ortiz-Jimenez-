<?php

//Cogemos los archivos que vamos a usar

require 'bd/conectorBD.php';
require 'DAOusuarios.php';

//Nos conectamos a la base de datos

$conexion = conectar(true);

//Iniciamos la sesion

session_start();

$idcesta=$_SESSION['idUsuario'];

//Borrar producto del carrito

borraProductoCarrito($conexion, $idcesta);

//nos redirecciona al carrito

header('Location: carrito.php');

?>