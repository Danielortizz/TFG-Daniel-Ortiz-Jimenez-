<?php 

//Funcion que muestras las botas

    function mostrarbotas($conexion){
            $consulta = "SELECT * FROM `botas`";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

//Funcion que borra las botas 
    function borrarbotas($conexion,$idbotas){
            $consulta = "DELETE FROM `spanisharmy`.`botas` WHERE (`idbotas` = '$idbotas')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

//Funcion que añade una bota
    function insertarbota($conexion, $nombre, $precio, $descripcion, $imagen){
        $consulta = "INSERT INTO `spanisharmy`.`botas` (`Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES ('$nombre', '$precio', '$descripcion', '$imagen');";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que enseña todas las botas
    function enseñarBotas($conexion){
            $consulta = "SELECT idbotas, Imagen FROM botas ORDER BY rand() LIMIT 4";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion que enseña una bota basandose en su id, para no modificar todas.
    function enseñarbotaporid($conexion,$idbotas){
            $consulta = "SELECT * FROM `botas` WHERE (`idbotas` = '$idbotas')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para modificar las botas    
     function modificarbota($conexion,$nombre,$precio,$descripcion,$idbotas,$imagen){
            $consulta = "UPDATE `spanisharmy`.`botas` SET `Nombre` = '$nombre', `Precio` = '$precio', `Descripcion` = '$descripcion', `Imagen` = '$imagen' WHERE (`idbotas` = '$idbotas')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

     function cogerpreciobota($conexion,$precio){
             $consulta = "SELECT DISTINCT Precio FROM spanisharmy.botas";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

    function filtrobotaprecio($conexion,$precio){
        $consulta = "SELECT * FROM spanisharmy.botas WHERE (Precio = '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

?>

