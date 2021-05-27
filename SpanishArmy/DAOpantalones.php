<?php  

//Funcion para mostrar pantalones
    function mostrarpantalones($conexion){
        $consulta = "SELECT * FROM `pantalones`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para eliminar pantalones
    function borrarpantalon($conexion,$idpantalones){
        $consulta = "DELETE FROM `spanisharmy`.`pantalones` WHERE (`idpantalones` = '$idpantalones')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para añadir pantalones
    function insertarpantalon($conexion, $nombre, $precio, $descripcion, $imagen){
        $consulta = "INSERT INTO `spanisharmy`.`pantalones` (`Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES ('$nombre', '$precio', '$descripcion', '$imagen');";
        $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
    }

//Funcion para enseñar pantalones
    function enseñarPantalones($conexion){
        $consulta = "SELECT idpantalones, Imagen FROM pantalones ORDER BY rand() LIMIT 4";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para enseñar pantalones por id
    function enseñarpantalonporid($conexion,$idpantalones){
        $consulta = "SELECT * FROM `pantalones` WHERE (`idpantalones` = '$idpantalones')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para modificar pantalones
    function modificarpantalon($conexion,$nombre,$precio,$descripcion,$idpantalones,$imagen){
        $consulta = "UPDATE `spanisharmy`.`pantalones` SET `Nombre` = '$nombre', `Precio` = '$precio', `Descripcion` = '$descripcion', `Imagen` = '$imagen' WHERE (`idpantalones` = '$idpantalones')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function cogerpreciopantalon($conexion,$precio){
             $consulta = "SELECT DISTINCT Precio FROM spanisharmy.pantalones";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

    function filtropantalonprecio($conexion,$precio){
        $consulta = "SELECT * FROM spanisharmy.pantalones WHERE (Precio = '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

?>