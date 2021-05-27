<?php  

//Funcion para mostrar dietas
    function mostrardieta($conexion){
            $consulta = "SELECT * FROM `dieta`";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para borrar dieta
    function borrardieta($conexion,$iddieta){
            $consulta = "DELETE FROM `spanisharmy`.`dieta` WHERE (`iddieta` = '$iddieta')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion para mostrar dieta por id 
    function enseñardietaporid($conexion,$iddieta){
            $consulta = "SELECT * FROM `dieta` WHERE (`iddieta` = '$iddieta')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
    }

//Funcion que modifica la dieta
    function modificardieta($conexion,$tipodedieta,$ingredientes,$entrenamiento,$recuperacion,$iddieta,$imagen){
        $consulta = "UPDATE `spanisharmy`.`dieta` SET `Tipo de dieta` = '$tipodedieta', `Ingredientes` = '$ingredientes', `Entrenamiento` = '$entrenamiento', `Recuperacion post ejercicio` = '$recuperacion', `Imagen` = '$imagen' WHERE (`iddieta` = '$iddieta')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

//Funcion que inserta una dieta

    function insertardieta($conexion, $tipodedieta, $ingredientes, $entrenamiento, $recuperacion, $imagen){
    $consulta = "INSERT INTO `spanisharmy`.`dieta` (`Tipo de dieta`, `Ingredientes`, `Entrenamiento`, `Recuperacion post ejercicio`, `Imagen`) VALUES ('$tipodedieta', '$ingredientes', '$entrenamiento', '$recuperacion', '$imagen');";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
    }

?>