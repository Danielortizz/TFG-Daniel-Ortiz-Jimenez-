<?php

//Funcion para conectarnos a la base de datos
    function conectar($esRemota){

        if($esRemota){
            $servidor = "bdortizjimenezdaniel.c0ey7gozexkr.eu-west-3.rds.amazonaws.com";
        }else{
            $servidor = "...";
        }
        //usuario
        $usuario = "admin";
        //contraseña
        $password = "militosiempre123";
        //base de datos
        $BD = "spanisharmy";

        

        $conectar = mysqli_connect($servidor, $usuario, $password, $BD);

        if($conectar){
            
            return $conectar;
        }else{
           
            echo mysqli_connect_error();
            exit;
        }
    }

?>