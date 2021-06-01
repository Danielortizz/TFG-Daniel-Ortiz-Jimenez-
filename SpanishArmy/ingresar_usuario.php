<?php 

//Cogemos archivos que vamos a usar

require 'bd/conectorBD.php';
require 'DAOusuarios.php';

//Usamos las variables que vamos a coger

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$cp = $_POST['cp'];
$provincia = $_POST['provincia'];
$comunidadautonoma = $_POST['comunidadautonoma'];
$dni = $_POST['dni'];

$recaptcha = $_POST['g-recaptcha-response'];


//Nos conectamos a la base de datos

 $conexion = conectar(true);



    if(!$recaptcha){

       header("Location: ingresar_usuarioo.php?captcha=novalido");
       
    } else{
        
    	//usamos la funcion para añadir usuarios nuevos a nuestra base de datos
 
 		$consulta = insertarUsuarios($conexion,$usuario,$password,$nombre,$apellido1,$apellido2,$telefono, $email, $cp, $provincia, $comunidadautonoma, $dni);


	if($consulta){

   			header('Location: home.php');

    	} else {
   
   			header('Location: ingresar_usuarioo.php');

 		}

    }





 ?>
