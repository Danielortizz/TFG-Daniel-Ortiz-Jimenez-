<?php

//Cargamos los archivos que vamos a usar

    require 'bd/conectorBD.php';
    require 'DAOusuarios.php';
	require 'DAObotas.php';

//Nos conectamos a la base de datos

    $conexion = conectar(true);

//Iniciamos la sesion
    
    session_start();

    $idbotas = $_GET["idbotas"];
    $idcesta = $_SESSION["idUsuario"];

    $buscarbota=mysqli_fetch_assoc(enseñarbotaporid($conexion,$idbotas));

    $precioItem = $buscarbota["Precio"];
    $nombreProducto = $buscarbota["Nombre"];
    
    $buscarbotacarrito = buscarbotacarrito($conexion,$idbotas, $idcesta);

    if(mysqli_num_rows($buscarbotacarrito)!=0){
      $actualizar=sumacantidad($conexion,$idbotas);
      header("location: botas.php");
    }else{
        $cantidad = 1;
        $insertar=insertarbotacarrito($conexion,$idbotas, $idcesta, $cantidad, $precioItem, $nombreProducto);
        header("location: botas.php");
    }


?>