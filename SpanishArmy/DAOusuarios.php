<?php

//Funcion para ver si el usuario y la contraseña son ciertas y así poder ver sus datos

    function consultaLogin($conexion, $usuario, $password){
        $consulta = "SELECT * FROM usuario WHERE Usuario = '$usuario' AND Password = '$password'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para insertar un usuario, la usamos para registrar un usuario a la pagina web

    function insertarUsuarios($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono, $email, $cp, $provincia, $comunidadautonoma,$dni){
        $consulta = "INSERT INTO usuario (`Usuario`, `Password`, `Nombre`, `Apellido1`, `Apellido2`, `Telefono`, `Email`, `CP`, `Provincia`, `ComunidadAutonoma`, `Dni` ,`Rol`) VALUES ('$usuario','$password','$nombre','$apellido1','$apellido2','$telefono', '$email', '$cp', '$provincia', '$comunidadautonoma', '$dni' ,'usuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para modificar el usuario, le damos los parametros para conectarnos a la BD, la contraseña y el id del usuario que vamos a cambiar

    function modificarUsuarios($conexion, $password, $usuario){
        $consulta = "UPDATE usuario SET `Password` = '$password' WHERE (`Usuario` = '$usuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para crear la sesion dandole un nombre de usuario

    function crearSesion($usuario){
        session_id($usuario['idUsuarios']);
        session_start();
        $_SESSION['idUsuario'] = $usuario['idUsuario'];
        $_SESSION['Usuario'] = $usuario['Usuario'];
        $_SESSION['Password'] = $usuario['Password'];
        $_SESSION['Nombre'] = $usuario['Nombre'];
        $_SESSION['Apellido1'] = $usuario['Apellido1'];
        $_SESSION['Apellido2'] = $usuario['Apellido2'];
        $_SESSION['Telefono'] = $usuario['Telefono'];
        $_SESSION['Email'] = $usuario['Email'];
        $_SESSION['CP'] = $usuario['CP'];
        $_SESSION['Provincia'] = $usuario['Provincia'];
        $_SESSION['ComunidadAutonoma'] = $usuario['ComunidadAutonoma'];
        $_SESSION['Rol'] = $usuario['Rol'];
        $_SESSION['Dni'] = $usuario['Dni'];
    }

//Funcion que nos ayuda a recuperar la contraseña dandole el dni

    function recuperarEmail($conexion, $email){
         $consulta = "SELECT * FROM usuario WHERE Email = '$email' ";
         $resultado = mysqli_query($conexion, $consulta);
         return $resultado;
    }

//Funcion para coger los usuarios

    function obtenerUsuarios($conexion){
         $consulta = "SELECT * FROM usuario" ;
         $resultado = mysqli_query($conexion, $consulta);
         return $resultado;
    }

//Funcion para modificar los usuarios

    function modificarusuario($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono,$email,$cp,$provincia,$comunidadautonoma,$dni,$rol,$idUsuario){
       $consulta = "UPDATE `spanisharmy`.`usuario` SET `Usuario` = '$usuario', `Password` = '$password', `Nombre` = '$nombre', `Apellido1` = '$apellido1', `Apellido2` = '$apellido2', `Telefono` = '$telefono', `Email` = '$email', `CP` = '$cp', `Provincia` = '$provincia', `ComunidadAutonoma` = '$comunidadautonoma', `Dni` = '$dni', 
       `Rol` = '$rol' WHERE (`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para borrar usuarios

    function borrarusuario($conexion,$idUsuario){
        $consulta = "DELETE FROM `spanisharmy`.`usuario` WHERE (`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para modificar un usuario

     function modificarrusuario($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono,$email,$cp,$provincia,$comunidadautonoma,$dni,$idUsuario){
       $consulta = "UPDATE `spanisharmy`.`usuario` SET `Usuario` = '$usuario', `Password` = '$password', `Nombre` = '$nombre', `Apellido1` = '$apellido1', `Apellido2` = '$apellido2', `Telefono` = '$telefono', `Email` = '$email', `CP` = '$cp', `Provincia` = '$provincia', `ComunidadAutonoma` = '$comunidadautonoma', `Dni` = '$dni' WHERE (`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para enseñar un usuario especifico por su id

    function enseñarusuarioporid($conexion,$idUsuario){
        $consulta = "SELECT * FROM `usuario` WHERE (`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para añadir un comentario a un producto

    function añadirComentario($conexion,$idUsuario,$idProducto,$comentario,$usuario){
        $consulta = "INSERT INTO `comentario` (`idUsuario`, `idProducto`, `comentario`, `Usuario`) VALUES ('$idUsuario', '$idProducto', '$comentario', '$usuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para ver un comentario de un producto

    function verComentario($conexion,$idProducto){
        $consulta = "SELECT * FROM `comentario` WHERE (`idProducto` = '$idProducto')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

/////////////////////////////////////////////////////////////////////

//Funcion para insertar en el carrito

    function insertarCarrito($conexion, $idcesta, $idCliente){
            $consulta = "INSERT INTO `spanisharmy`.`cesta` (`id_cesta`, `idCliente`, `precio_total`) VALUES ('$idcesta', '$idCliente', '0.00');";

            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

//Funcion para el ver carrito 

        function verCarrito($conexion, $idcesta ){
            $consulta = "SELECT * FROM `spanisharmy`.`item` where idcesta = '$idcesta';";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

//Funcion para eliminar productos en el carrito

        function eliminarProductoCarrito($conexion, $iditem){
            $consulta = " DELETE FROM `spanisharmy`.`item` WHERE (`iditem` = '$iditem');  ";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

//Funcion para borrar productos en el carrito

        function borraProductoCarrito($conexion, $idcesta){
            $consulta = " DELETE FROM `spanisharmy`.`item` WHERE (`idcesta` = '$idcesta');  ";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

//Funcion para sumar cantidad en el carrito

        function sumaCantidadCarrito($conexion, $iditem){
            $consulta = " UPDATE `spanisharmy`.`item` SET `cantidad` = cantidad+1 WHERE (`iditem` = '$iditem');  ";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

//Funcion para restar cantidad en el carrito  

        function restarCantidadCarrito($conexion, $iditem){
            $consulta = " UPDATE `spanisharmy`.`item` SET `cantidad` = cantidad-1 WHERE (`iditem` = '$iditem');  ";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

//Funcion para conseguir el precio total del carrito

        function precioTotal($conexion, $idcesta ){
            $consulta = "SELECT sum(PrecioItem * Cantidad) FROM spanisharmy.item where idcesta = '$idcesta'";
            $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
        }


?>