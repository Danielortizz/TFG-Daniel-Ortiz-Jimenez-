<?php  

//Funcion para mostrar mochila
    function mostrarmochilas($conexion){
        $consulta = "SELECT * FROM `mochilas`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para borrar mochila
    function borrarmochila($conexion,$idmochilas){
        $consulta = "DELETE FROM `spanisharmy`.`mochilas` WHERE (`idmochilas` = '$idmochilas')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para insertar mochila   
    function insertarmochila($conexion, $nombre, $precio, $descripcion, $imagen){
        $consulta = "INSERT INTO `spanisharmy`.`mochilas` (`Nombre`, `Precio`, `Talla`, `Descripcion`, `Imagen`) VALUES ('$nombre', '$precio', '$descripcion', '$imagen');";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para enseñar mochilas
    function enseñarMochilas($conexion){
        $consulta = "SELECT idmochilas, Imagen FROM mochilas ORDER BY rand() LIMIT 4";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para enseñar mochilas por id
    function enseñarmochilaporid($conexion,$idmochilas){
        $consulta = "SELECT * FROM `mochilas` WHERE (`idmochilas` = '$idmochilas')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para modificar mochilas
    function modificarmochila($conexion,$nombre,$precio,$descripcion,$idmochilas,$imagen){
        $consulta = "UPDATE `spanisharmy`.`mochilas` SET `Nombre` = '$nombre', `Precio` = '$precio', `Descripcion` = '$descripcion', `Imagen` = '$imagen' WHERE (`idmochilas` = '$idmochilas')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

     function cogerpreciomochila($conexion,$precio){
             $consulta = "SELECT DISTINCT Precio FROM spanisharmy.mochilas";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

    function filtromochilaprecio($conexion,$precio){
        $consulta = "SELECT * FROM spanisharmy.mochilas WHERE (Precio = '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }



?>