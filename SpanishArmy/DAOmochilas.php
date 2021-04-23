<?php  

function mostrarmochilas($conexion){
        $consulta = "SELECT * FROM `mochilas`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>