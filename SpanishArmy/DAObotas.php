<?php  

function mostrarbotas($conexion){
        $consulta = "SELECT * FROM `botas`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>