<?php 

function mostrarnoticia($conexion){
        $consulta = "SELECT * FROM `noticias`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>