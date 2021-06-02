<?php

//Cogemos los archivos que vamos a usar
    require 'bd/conectorBD.php';
    require 'DAOusuarios.php';

    use PHPMailer\PHPMailer\PHPMailer;

//Recogemos el valor del formulario.

    $email = $_POST["email"];

//Creamos la conexión a la base de datos.

    $conexion = conectar(true);

//Usamos la funcion 

    $consultaEmail = recuperarEmail($conexion, $email);

    $emaildato = mysqli_fetch_assoc($consultaEmail);

    $usuario = $emaildato["Usuario"];

    if(mysqli_num_rows($consultaEmail) != 1) {

                header("Location: recuperar_contraseñaa.php?error=emailnoexiste");

    } else {

        $nombre = "Equipo de Desarrollo de SpanishArmy";
        $titulo = "Correo para cambiar su contraseña en SpanishArmy";
        $url = "http://15.188.55.115/PHP/FCT/SpanishArmy/nueva_contrasena.php";
        $texto = "Pulse para cambiar su contraseña.";
        $mensaje = "<a href='$url?usuario=$usuario'>$texto</a>";

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $titulo = utf8_decode($titulo);
        $mensaje = utf8_decode($mensaje);
        $mail = new PHPMailer();

        //SMTP Settings.

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "mcmartigan3turq@gmail.com";
        $mail->Password = "nejkmrookzkszmkv";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //eMail Settings.

        $mail->isHTML(true);
        $mail->setFrom($email, $nombre);
        $mail->addAddress($email);
        $mail->Subject = $titulo;
        $mail->Body = $mensaje;

        if($mail->send()) {

            header('Location: login.php?action=correoEnviado');

        } else

        {
            echo "ERROR";
        }
        
    }
    
?>