<?php  

//Funcion para mostrar camisetas
    function mostrarcamisetas($conexion){
            $consulta = "SELECT * FROM `camisetas`";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para borrar camisetas
    function borrarcamiseta($conexion,$idcamisetas){
            $consulta = "DELETE FROM `spanisharmy`.`camisetas` WHERE (`idcamisetas` = '$idcamisetas')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para añadir camisetas
    function insertarcamiseta($conexion, $nombre, $precio, $descripcion, $imagen){
        $consulta = "INSERT INTO `spanisharmy`.`camisetas` (`Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES ('$nombre', '$precio', '$descripcion', '$imagen');";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para enseñar las camisetas
    function enseñarCamisetas($conexion){
            $consulta = "SELECT idcamisetas, Imagen FROM camisetas ORDER BY rand() LIMIT 4";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para enseñar camiseta por id 
    function enseñarcamisetaporid($conexion,$idcamisetas){
            $consulta = "SELECT * FROM `camisetas` WHERE (`idcamisetas` = '$idcamisetas')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para modificar camisetas 
    function modificarcamiseta($conexion,$nombre,$precio,$descripcion,$idcamisetas,$imagen){
            $consulta = "UPDATE `spanisharmy`.`camisetas` SET `Nombre` = '$nombre', `Precio` = '$precio', `Descripcion` = '$descripcion', `Imagen` = '$imagen' WHERE (`idcamisetas` = '$idcamisetas')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

    function cogerpreciocamiseta($conexion,$precio){
             $consulta = "SELECT DISTINCT Precio FROM spanisharmy.camisetas";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

    function filtrocamisetaprecio($conexion,$precio){
        $consulta = "SELECT * FROM spanisharmy.camisetas WHERE (Precio = '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

    


?>