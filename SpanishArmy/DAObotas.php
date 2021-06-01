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

//Funcion que enseña una bota basandose en su id, para no modificar todas

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

//Funcion para coger el precio de todas las botas

     function cogerpreciobota($conexion,$precio){
             $consulta = "SELECT DISTINCT Precio FROM spanisharmy.botas";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para coger un precio en especifico de las botas (filtro) 

    function filtrobotaprecio($conexion,$precio){
        $consulta = "SELECT * FROM spanisharmy.botas WHERE (Precio = '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para buscar una bota en el carrito

     function buscarbotacarrito($conexion,$idbotas, $idcesta){
            $consulta = "SELECT * FROM spanisharmy.item where idcesta = '$idcesta' and idProducto_botas = '$idbotas'";
            $resultado = mysqli_query($conexion, $consulta);
                return $resultado;
    }

//Funcion para sumar una cantidad en el carrito

          function sumacantidad($conexion,$idbotas){
            $consulta = " UPDATE `spanisharmy`.`item` SET `cantidad` = cantidad+1 WHERE (`idProducto_botas` = '$idbotas')";
            $resultado = mysqli_query($conexion, $consulta);
                return $resultado;
        }

//Funcion insertar bota en el carrito
        
function insertarbotacarrito($conexion,$idbotas, $idcesta, $cantidad, $precioItem, $nombreProducto){
            $consulta = "INSERT INTO `spanisharmy`.`item` (`cantidad`, `PrecioItem`, `idcesta`, `idProducto_botas`, `nombreProducto`) VALUES ('$cantidad', '$precioItem', '$idcesta', '$idbotas', '$nombreProducto')";
            $resultado = mysqli_query($conexion, $consulta);
                return $resultado;
        }                
        





?>

