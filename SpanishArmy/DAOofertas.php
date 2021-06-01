<?php  

//Funcion para mostrar ofertas

    function mostrarofertas($conexion){
        $consulta = "SELECT * FROM `ofertas`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para borrar ofertas

    function borrarofertas($conexion,$idoferta){
        $consulta = "DELETE FROM `spanisharmy`.`ofertas` WHERE (`idoferta` = '$idoferta')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para insertar ofertas

    function insertaroferta($conexion, $nombre, $precio, $descripcion, $imagen){
        $consulta = "INSERT INTO `spanisharmy`.`ofertas` (`Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES ('$nombre', '$precio', '$descripcion', '$imagen');";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para enserñar ofertas

    function enseñarOfertas($conexion){
        $consulta = "SELECT idoferta, Imagen FROM ofertas ORDER BY rand() LIMIT 4";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para enseñar ofertas por id

    function enseñarofertaporid($conexion,$idoferta){
        $consulta = "SELECT * FROM `ofertas` WHERE (`idoferta` = '$idoferta')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para modificar ofertas
    
    function modificaroferta($conexion,$nombre,$precio,$descripcion,$idoferta,$imagen){
        $consulta = "UPDATE `spanisharmy`.`ofertas` SET `Nombre` = '$nombre', `Precio` = '$precio', `Descripcion` = '$descripcion', `Imagen` = '$imagen' WHERE (`idoferta` = '$idoferta')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>

