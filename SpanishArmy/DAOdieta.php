<?php  

function mostrardieta($conexion){
        $consulta = "SELECT * FROM `dieta`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>