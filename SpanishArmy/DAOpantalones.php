<?php  

function mostrarpantalones($conexion){
        $consulta = "SELECT * FROM `pantalones`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>