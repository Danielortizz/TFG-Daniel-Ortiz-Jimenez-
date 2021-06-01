<?php

//Cargamos los archivos que vamos a usar

    require 'bd/conectorBD.php';
    require 'DAOusuarios.php';
	require 'DAOpantalones.php';

//Nos conectamos a la base de datos

    $conexion = conectar(true);

//Iniciamos la sesion
    
    session_start();

    $idpantalones = $_GET["idpantalones"];
    $idcesta = $_SESSION["idUsuario"];


    $buscarpantalon=mysqli_fetch_assoc(enseñarpantalonporid($conexion,$idpantalones));

    $precioItem = $buscarpantalon["Precio"];
    $nombreProducto = $buscarpantalon["Nombre"];
    
    $buscarpantaloncarrito = buscarpantaloncarrito($conexion,$idpantalones, $idcesta);

    if(mysqli_num_rows($buscarpantaloncarrito)!=0){
      $actualizar=sumacantidad($conexion,$idpantalones);
      header("location: pantalones.php");
    }else{
        $cantidad = 1;
        $insertar=insertarpantaloncarrito($conexion,$idpantalones, $idcesta, $cantidad, $precioItem, $nombreProducto);
        header("location: pantalones.php");
    }
    

?>