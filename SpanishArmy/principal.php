<?php

//Iniciamos la sesion

    session_start();
    
//Si el usuario no existe, nos lleva de nuevo a home.html  

    if(empty($_SESSION['Usuario'])){
        header('Location: ingresar_usuario.html');
        exit;
    }

/*si el el rol del usuario es usuario me lleva a una pagina con ajustes y cosas que puede tocar un usuario normal
en caso de que el rol del usuario introducido sea admin, te lleva a una pagina web en la que tiene ajustes y pestañas para administradores*/   
    if($_SESSION['Rol'] == usuario){
        header('Location: home.php');
    } elseif ($_SESSION['Rol'] == admin) {
        header('Location: home.php');
    }

?>

<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Spanish Army</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    
</head>

<body background="img/fondo2.jpg">

<div class="grande">
   <?php require('header.php'); ?>

</div>


<!-- <script type="text/javascript" src="js/home-js.js"></script> -->

</body>
</html>