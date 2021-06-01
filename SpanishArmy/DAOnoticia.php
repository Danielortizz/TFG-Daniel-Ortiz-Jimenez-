<?php 

//Funcion para mostrar noticias

    function mostrarnoticia($conexion){
        $consulta = "SELECT * FROM `noticias`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para borrar noticias

    function borrarnoticia($conexion,$idnoticias){
        $consulta = "DELETE FROM `spanisharmy`.`noticias` WHERE (`idnoticias` = '$idnoticias')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion insertar noticia 

    function insertarnoticia($conexion, $titulo, $publicacion, $descripcion, $imagen){
    $consulta = "INSERT INTO `spanisharmy`.`noticias` (`Titulo`, `Publicacion`, `Descripcion`, `Imagen`) VALUES ('$titulo', '$publicacion', '$descripcion', '$imagen');";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
    }

//Funcion para enseñar noticia por id

    function enseñarnoticiaporid($conexion,$idnoticias){
        $consulta = "SELECT * FROM `noticias` WHERE (`idnoticias` = '$idnoticias')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion para modificar noticias
    
    function modificarnoticia($conexion,$titulo,$publicacion,$descripcion,$idnoticias,$imagen){
        $consulta = "UPDATE `spanisharmy`.`noticias` SET `Titulo` = '$titulo', `Publicacion` = '$publicacion', `Descripcion` = '$descripcion', `Imagen` = '$imagen' WHERE (`idnoticias` = '$idnoticias')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }


?>