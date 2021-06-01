<?php

//Cargamos los archivos que vamos a usar

    require 'bd/conectorBD.php';
    require 'DAOusuarios.php';
	require 'DAOcamisetas.php';

//Nos conectamos a la base de datos

    $conexion = conectar(true);

//Iniciamos la sesion
    
    session_start();

    $idcamisetas = $_GET["idcamisetas"];
    $idcesta = $_SESSION["idUsuario"];

    $buscarcamiseta=mysqli_fetch_assoc(enseñarcamisetaporid($conexion,$idcamisetas));

    $precioItem = $buscarcamiseta["Precio"];
    $nombreProducto = $buscarcamiseta["Nombre"];
    
    $buscarcamisetacarrito = buscarcamisetacarrito($conexion,$idcamisetas, $idcesta);

    if(mysqli_num_rows($buscarcamisetacarrito)!=0){
      $actualizar=sumacantidad($conexion,$idcamisetas);
      header("location: camisetas.php");
    }else{
        $cantidad = 1;
        $insertar=insertarcamisetacarrito($conexion,$idcamisetas, $idcesta, $cantidad, $precioItem, $nombreProducto);
        header("location: camisetas.php");
    }



?>