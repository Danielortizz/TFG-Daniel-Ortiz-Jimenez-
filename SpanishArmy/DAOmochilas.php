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
        $consulta = "INSERT INTO `spanisharmy`.`mochilas` (`Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES ('$nombre', '$precio', '$descripcion', '$imagen');";
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

//Funcion para coger el precio de todas las mochilas

     function cogerpreciomochila($conexion,$precio){
             $consulta = "SELECT DISTINCT Precio FROM spanisharmy.mochilas";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para coger el precio de una mochila en especifico (filtro)

    function filtromochilaprecio($conexion,$precio){
        $consulta = "SELECT * FROM spanisharmy.mochilas WHERE (Precio = '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para buscar mochila en el carrito

 function buscarmochilacarrito($conexion,$idmochilas, $idcesta){
            $consulta = "SELECT * FROM spanisharmy.item where idcesta = '$idcesta' and idProducto_mochilas = '$idmochilas'";
            $resultado = mysqli_query($conexion, $consulta);
                return $resultado;
    }

//Funcion para insertar una mochila en el carrito

     function insertarmochilacarrito($conexion,$idmochilas, $idcesta, $cantidad, $precioItem, $nombreProducto){
            $consulta = "INSERT INTO `spanisharmy`.`item` (`cantidad`, `PrecioItem`, `idcesta`, `idProducto_mochilas`, `nombreProducto`) VALUES ('$cantidad', '$precioItem', '$idcesta', '$idmochilas', '$nombreProducto')";
            $resultado = mysqli_query($conexion, $consulta);
                return $resultado;
        }

    //Funcion para sumar una cantidad en el carrito
        
          function sumacantidad($conexion,$idmochilas){
            $consulta = " UPDATE `spanisharmy`.`item` SET `cantidad` = cantidad+1 WHERE (`idProducto_mochilas` = '$idmochilas')";
            $resultado = mysqli_query($conexion, $consulta);
                return $resultado;
        }

?>