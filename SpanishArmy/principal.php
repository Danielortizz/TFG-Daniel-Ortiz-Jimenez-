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
        header('Location: usuario.php');
    } elseif ($_SESSION['Rol'] == admin) {
        header('Location: admin.php');
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
    <header id="principal">

        <a href="Home.php"><img src="imagenes/logo.png" class="logo"></a>

        <div class="btn-group" role="group" aria-label="Basic mixed styles example" id="botones-principal">
            <button type="button" class="btn btn-warning" id="salir"><a href="Home.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg></a><br><b>Salir</b></button>
         </div>

    </header>

</div>


<!-- <script type="text/javascript" src="js/home-js.js"></script> -->

</body>
</html>