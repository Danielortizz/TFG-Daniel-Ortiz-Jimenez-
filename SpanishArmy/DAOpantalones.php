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

//Funcion para coger el precio de todos los pantalones

    function cogerpreciopantalon($conexion,$precio){
             $consulta = "SELECT DISTINCT Precio FROM spanisharmy.pantalones";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para coger el precio de un pantalon en especifico (filtro)

    function filtropantalonprecio($conexion,$precio){
        $consulta = "SELECT * FROM spanisharmy.pantalones WHERE (Precio = '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para buscar un pantalon en el carrito

    function buscarpantaloncarrito($conexion,$idpantalones, $idcesta){
            $consulta = "SELECT * FROM spanisharmy.item where idcesta = '$idcesta' and idProducto_pantalones = '$idpantalones'";
            $resultado = mysqli_query($conexion, $consulta);
                return $resultado;
    }

//Funcion para sumar una cantidad en el carrito

          function sumacantidad($conexion,$idpantalones){
            $consulta = " UPDATE `spanisharmy`.`item` SET `cantidad` = cantidad+1 WHERE (`idProducto_pantalones` = '$idpantalones')";
            $resultado = mysqli_query($conexion, $consulta);
                return $resultado;
        }

//Funcion para insertar pantalon en el carrito
       
        function insertarpantaloncarrito($conexion,$idpantalones, $idcesta, $cantidad, $precioItem, $nombreProducto){
            $consulta = "INSERT INTO `spanisharmy`.`item` (`Cantidad`, `PrecioItem`, `idCesta`, `idProducto_pantalones`, `nombreProducto`) VALUES ('$cantidad', '$precioItem', '$idcesta', '$idProducto_pantalones', '$nombreProducto');";
            $resultado = mysqli_query($conexion, $consulta);
                return $resultado;
        }


?>