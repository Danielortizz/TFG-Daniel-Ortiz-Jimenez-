<?php  

//Cogemos los archivos que vamos a necesitar

	require 'bd/conectorBD.php';
	require 'DAOcamisetas.php';

//Nos conectamos a la base de datos

	$conexion = conectar(true);

//Cogemos las variables que vamos a usar

	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];	
	$descripcion = $_POST['descripcion'];
	$idcamisetas = $_POST['idcamisetas'];

//coge el nombre de la imagen que hemos insertado nueva

	$nombreimagen=$_FILES['imagen']['name'];

//aqui saldría el nombre de la imagen temporal

    $imagen=$_FILES['imagen']['tmp_name'];

//la ruta a la que iria la imagen

    $rutaimagen="img/".$nombreimagen;

 //y como se mueve el archivo a la ruta especificada   

	move_uploaded_file($imagen,$rutaimagen);

//utilizamos la funcion para modificar la camiseta

	$consulta = modificarcamiseta($conexion,$nombre,$precio,$descripcion,$idcamisetas,$rutaimagen);

//nos lleva a la pagina de juegos para un user admin
	
	header('Location: camisetasadmin.php');

?>

