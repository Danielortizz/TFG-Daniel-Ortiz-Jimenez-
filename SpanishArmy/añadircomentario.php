<?php  

require 'bd/conectorBD.php';
require 'DAOusuarios.php';

 $conexion = conectar(true);

 $idProducto = $_POST['idProducto'];
 $idUsuario = $_POST['idUsuario'];
 $comentario = $_POST['comentario'];

 $añadircomentario = añadirComentario($conexion,$idUsuario,$idProducto,$comentario);



?>