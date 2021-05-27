<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAObotas.php';

//Nos conectamos a la base de datos
	$conexion = conectar(true);

//Cogemos las variables que vamos a usar
	$nombre = $_POST['nombre'];	
	$precio = $_POST['precio'];
	$talla = $_POST['talla'];
	$descripcion = $_POST['descripcion'];


	$nombreimagen=$_FILES['imagen']['name'];

//aqui saldría el nombre de la imagen temporal
    $imagen=$_FILES['imagen']['tmp_name'];

//la ruta a la que iria la imagen
    $rutaimagen="img/".$nombreimagen;

//y como se mueve el archivo a la ruta especificada   
	move_uploaded_file($imagen,$rutaimagen);


//utilizamos la funcion para insertar una bota
	$consulta = insertarbota($conexion, $nombre, $precio, $talla, $descripcion, $rutaimagen);

//nos lleva a la pagina de productos para un user admin
	header('Location: botasadmin.php');

?>