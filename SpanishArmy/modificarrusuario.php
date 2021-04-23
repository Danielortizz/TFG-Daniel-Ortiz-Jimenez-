<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//Nos conectamos a la base de datos
	$conexion = conectar(true);

//Cogemos las variables que vamos a usar
	$usuario = $_POST['Usuario'];
	$password = $_POST['Password'];
	$nombre = $_POST['Nombre'];
	$apellido1 = $_POST['Apellido1'];
	$telefono = $_POST['Telefono'];
	$email = $_POST['Email'];
	$apellido2 = $_POST['Apellido2'];
	$cp = $_POST['CP'];
	$provincia = $_POST['Provincia'];
	$comunidadautonoma = $_POST['ComunidadAutonoma'];
	$dni = $_POST['Dni'];
	$idUsuario = $_POST['idUsuario'];


//utilizamos la funcion para modificar un usuario
	 $consulta = modificarrusuario($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono,$email,$cp,$provincia,$comunidadautonoma,$dni,$idUsuario);

//nos lleva a la pagina del panel para un user admin
	header('Location: perfil.php');

?>


