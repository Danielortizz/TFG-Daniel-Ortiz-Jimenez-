<?php  

//Cogemos los archivos que vamos a usar

require 'bd/conectorBD.php';
require 'DAOusuarios.php';

//nos conectamos a la base de datos

$conexion = conectar(true);

//cogemos el id del producto que queremos ver

session_start();

 $idProducto = $_GET["idProducto"];

 $result = verComentario($conexion,$idProducto);

 $json = array();

 while ($fila = mysqli_fetch_array($result)) {
 	
 		$json[]= array(

 		'comentario' => $fila['comentario'],
 		'Usuario' => $fila['Usuario'],
 

 		);
 }

 $jsonstring = json_encode($json);

 echo $jsonstring;

?>
