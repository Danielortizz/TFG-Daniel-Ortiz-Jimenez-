<?php

//Cargamos los archivos que vamos a usar

    require 'bd/conectorBD.php';
    require 'DAOusuarios.php';
	require 'DAOmochilas.php';

//Nos conectamos a la base de datos

    $conexion = conectar(true);

//Iniciamos la sesion
    
    session_start();

    $idmochilas = $_GET["idmochilas"];
    $idcesta = $_SESSION["idUsuario"];

    $buscarmochila=mysqli_fetch_assoc(enseñarmochilaporid($conexion,$idmochilas));

    $precioItem = $buscarmochila["Precio"];
    $nombreProducto = $buscarmochila["Nombre"];
    
    $buscarmochilacarrito = buscarmochilacarrito($conexion,$idmochilas, $idcesta);

    if(mysqli_num_rows($buscarmochilacarrito)!=0){
      $actualizar=sumacantidad($conexion,$idmochilas);
      header("location: mochilas.php");
    }else{
        $cantidad = 1;
        $insertar=insertarmochilacarrito($conexion,$idmochilas, $idcesta, $cantidad, $precioItem, $nombreProducto);
        header("location: mochilas.php");
    }


?>