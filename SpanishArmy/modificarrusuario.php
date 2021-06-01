<?php  

//Cogemos los archivos que vamos a necesitar

	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//Nos conectamos a la base de datos

	$conexion = conectar(true);

	session_start();

//Cogemos las variables que vamos a usar

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$nombre = $_POST['nombre'];
	$apellido1 = $_POST['apellido1'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$apellido2 = $_POST['apellido2'];
	$cp = $_POST['cp'];
	$provincia = $_POST['provincia'];
	$comunidadautonoma = $_POST['comunidadautonoma'];
	$dni = $_POST['dni'];
	$idUsuario = $_SESSION['idUsuario'];

//utilizamos la funcion para modificar un usuario

	$consulta = modificarrusuario($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono,$email,$cp,$provincia,$comunidadautonoma,$dni,$idUsuario);

	session_destroy();

	 $consulta = consultaLogin($conexion, $usuario, $password);

	$fila = mysqli_fetch_assoc($consulta);
 
    crearSesion($fila);

//nos lleva a la pagina del panel para un user admin
    
	header('Location: perfil.php');

?>


