<?php  

//Cogemos los archivos que vamos a usar



require 'bd/conectorBD.php';
require 'DAOusuarios.php';

//Nos conectamos a la base de datos

$conexion = conectar(true);


//Iniciamos la sesion 

session_start();

$idcesta=$_SESSION['idUsuario'];


//Usamos la funcion para vaciar el carrito

borraProductoCarrito($conexion, $idcesta);

//Nos va a reedirigir a la página principal

header('Location: home.php');

?>