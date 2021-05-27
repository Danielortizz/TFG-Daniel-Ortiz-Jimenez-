<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//Nos conectamos a la base de datos
	$conexion = conectar(true);

//Cogemos las variables que vamos a usar
	$usuario = $_POST['usuario'];	
	$password = $_POST['password'];
	$nombre = $_POST['nombre'];
	$apellido1 = $_POST['apellido1'];
	$apellido2 = $_POST['apellido2'];	
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$cp = $_POST['cp'];
	$provincia = $_POST['provincia'];	
	$comunidadautonoma = $_POST['comunidadautonoma'];
	$rol = $_POST['Rol'];
	$dni = $_POST['dni'];

//utilizamos la funcion para insertar un usuario
	$consulta = insertarUsuarios($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono, $email, $cp, $provincia, $comunidadautonoma,$dni);

//nos lleva a la pagina de productos para un user admin
	header('Location: paneladmin.php');

?>