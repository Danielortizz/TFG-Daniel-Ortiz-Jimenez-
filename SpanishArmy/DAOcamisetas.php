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

//Funcion para coger el precio de todas las camisetas

    function cogerpreciocamiseta($conexion,$precio){
             $consulta = "SELECT DISTINCT Precio FROM spanisharmy.camisetas";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para coger el precio de una camisetas en especifico (filtro)

    function filtrocamisetaprecio($conexion,$precio){
        $consulta = "SELECT * FROM spanisharmy.camisetas WHERE (Precio = '$precio')";
        $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion que busca una camiseta en el carrito

    function buscarcamisetacarrito($conexion,$idcamisetas, $idcesta){
            $consulta = "SELECT * FROM spanisharmy.item where idcesta = '$idcesta' and idProducto_camisetas = '$idcamisetas'";
            $resultado = mysqli_query($conexion, $consulta);
                return $resultado;
    }

//Funcion para insertar uan camiseta en el carrito

     function insertarcamisetacarrito($conexion,$idcamisetas, $idcesta, $cantidad, $precioItem, $nombreProducto){
            $consulta = "INSERT INTO `spanisharmy`.`item` (`cantidad`, `PrecioItem`, `idcesta`, `idProducto_camisetas`, `nombreProducto`) VALUES ('$cantidad', '$precioItem', '$idcesta', '$idcamisetas', '$nombreProducto')";
            $resultado = mysqli_query($conexion, $consulta);
                return $resultado;
        }

//Funcion para sumar una cantidad en el carrito
        
          function sumacantidad($conexion,$idcamisetas){
            $consulta = " UPDATE `spanisharmy`.`item` SET `cantidad` = cantidad+1 WHERE (`idProducto_camisetas` = '$idcamisetas')";
            $resultado = mysqli_query($conexion, $consulta);
                return $resultado;
        }
    



?>