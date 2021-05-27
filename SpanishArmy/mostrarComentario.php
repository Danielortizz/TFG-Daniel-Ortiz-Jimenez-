<?php  

require 'bd/conectorBD.php';
require 'DAOusuarios.php';

$conexion = conectar(true);

 $idProducto = $_GET["idProducto"];

 $result = verComentario($conexion,$idProducto);

 $json = array();

 while ($fila = mysqli_fetch_array($result)) {
 	
 		$json[]= array(

 		'comentario' => $fila['comentario']

 		);
 }

 $jsonstring = json_encode($json);

 echo $jsonstring;

?>
