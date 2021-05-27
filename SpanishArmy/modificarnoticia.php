<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOnoticia.php';

//Nos conectamos a la base de datos
	$conexion = conectar(true);

//Cogemos las variables que vamos a usar
	$titulo = $_POST['titulo'];
	$publicacion = $_POST['publicacion'];	
	$descripcion = $_POST['descripcion'];
	$idnoticias = $_POST['idnoticias'];

//coge el nombre de la imagen que hemos insertado nueva
	$nombreimagen=$_FILES['imagen']['name'];

//aqui saldría el nombre de la imagen temporal
    $imagen=$_FILES['imagen']['tmp_name'];

//la ruta a la que iria la imagen
    $rutaimagen="img/".$nombreimagen;

 //y como se mueve el archivo a la ruta especificada   
	move_uploaded_file($imagen,$rutaimagen);

//utilizamos la funcion para modificar la noticia
	$consulta = modificarnoticia($conexion,$titulo,$publicacion,$descripcion,$idnoticias,$rutaimagen);

//nos lleva a la pagina de juegos para un user admin
	header('Location: noticiasadmin.php');

?>

