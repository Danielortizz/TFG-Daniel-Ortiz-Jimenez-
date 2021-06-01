<?php  

//Cogemos los archivos que vamos a usar

	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//Nos conectamos a la base de datos
 
	$conexion = conectar(true);

//Iniciamos la session
	session_start();


//Cogemos la id del producto que vmaos a hacer el comentario, la del usuario y el comentario en sí.

	$idProducto = $_POST['idProducto'];
	$idUsuario = $_POST['idUsuario'];
	$comentario = $_POST['comentario'];
	$usuario = $_SESSION['Usuario'];


	if($comentario == NULL){
    
    } else {

        añadirComentario($conexion,$idUsuario,$idProducto,$comentario,$usuario);
    }


//Declaramos la funcion para añadir un comentario en una variable que vamos a usar mas adelante


?>