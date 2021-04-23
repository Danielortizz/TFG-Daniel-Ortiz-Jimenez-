<?php  

function mostrarcamisetas($conexion){
        $consulta = "SELECT * FROM `camisetas`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>