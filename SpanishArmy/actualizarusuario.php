<?php  

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';

//Nos conectamos a la base de datos
	$conexion = conectar(true);

//Y cogemos el id de usuario por que lo vamos a necesitar
	$idUsuario = $_GET['idUsuario'];
	
	$consulta = enseñarusuarioporid($conexion,$idUsuario);
	$fila = mysqli_fetch_assoc($consulta);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Actualizar Usuario</title>
	</head>

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<body background="img/fondo2.jpg">

	<header>

 	<div><img src="img/header.png" class="imagen-header" width="1300" height="250"></div>

	<ul class="nav justify-content-center" id="barra">
	 	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  		<div class="container-fluid">
	   		<a class="navbar-brand" href="home.php">SPANISH ARMY</a>
	    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarText">
	        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" aria-current="page" href="#" data-bs-toggle="dropdown"  role="button" aria-expanded="false">TIENDA</a>
	        		<ul class="dropdown-menu">
		      				<li><a class="dropdown-item" href="exclusiones.php">EXCLUSIONES</a></li>
		      				<li><a class="dropdown-item" href="baremo.php">BAREMO 2021</a></li>
		      				<li><a class="dropdown-item" href="cefot.php">MATERIAL CEFOT</a></li>
		      				<li><a class="dropdown-item" href="preguntas.php">PREGUNTAS FRECUENTES</a></li>
	    		   </ul>
	        </li>

	            <li class="nav-item">
	        <a class="nav-link" href="ofertasadmin.php">OFERTAS</a>
	        </li>
	        
	        <li class="nav-item">
	        <a class="nav-link" href="noticias.php">NOTICIAS</a>
	        </li>
	        <li class="nav-item">
	        <a class="nav-link dropdown-toggle" aria-current="page" href="#" data-bs-toggle="dropdown"  role="button" aria-expanded="false">ACCESO A TROPA</a>

	        		<ul class="dropdown-menu">
		      				<li><a class="dropdown-item" href="pantalones.php">EXCLUSIONES</a></li>
		      				<li><a class="dropdown-item" href="botas.php">BAREMO 2021</a></li>
		      				<li><a class="dropdown-item" href="mochilas.php">MATERIAL CEFOT</a></li>
		      				<li><a class="dropdown-item" href="mochilas.php">PREGUNTAS FRECUENTES</a></li>
	    		   </ul>

	        </li>
	        <li class="nav-item">
	    
	        <a class="nav-link" href="dieta.php">DIETA Y ENTRENO</a>
	        </li>
	        </ul>
	    	</div>
	        </div>
	    </nav>

	    <ul class="nav justify-content-end" id="barra">
		    <li class="nav-item">
		    <a class="nav-link active" aria-current="page" href="Perfil.php">Salir</a>
		  </li>
		</ul>

	</ul>

 </header>

<div class="cuerpo">

	<center>
	<div class="card" id="card-html" style="width: 18rem;">
	<div>	

	<form action="modificarusuario.php" method="POST" enctype="multipart/form-data">
			
		<b>Usuario: </b><input type="text" name="usuario" id="Usuario" class="form-control" placeholder="Alumno23" value="<?php echo $fila['Usuario'] ?>">
		<span id="usuario_error">El usuario introducido no es valido</span>

		<b>Password: </b><input type="text" name="password" id="Password" class="form-control" placeholder="Alumn@2020" value="<?php echo $fila['Password'] ?>">
		<span id="password_error">La contraseña introducida no es valida</span>

		<b>Nombre: </b><input type="text" name="nombre" id="Nombre" class="form-control" placeholder="Daniel" value="<?php echo $fila['Nombre'] ?>">
		<span id="nombre_error">El Nombre introducido no es valido</span>

		<b>Apellido1: </b><input type="text" name="apellido1" id="Apellido1" class="form-control" placeholder="Ortiz" value="<?php echo $fila['Apellido1'] ?>">
		<span id="apellido1_error">Lo introducido no es un apellido</span>

		<b>Apellido2: </b><input type="text" name="apellido2" id="Apellido2" class="form-control" placeholder="Jimenez" value="<?php echo $fila['Apellido2'] ?>">
		<span id="apellido2_error">Lo introducido no es un apellido</span>

		<b>Telefono: </b><input type="text" name="telefono" id="Telefono" class="form-control" placeholder="678485671" value="<?php echo $fila['Telefono'] ?>">
		<span id="telefono_error">El numero de telefono introducido no es valido</span><br>

		<b>Email: </b><input type="text" name="email" id="email"  class="form-control" placeholder="mcmartigan3turq@gmail.com" value="<?php echo $fila['Email'] ?>">
		<span id="email_error">El email introducido no es valido</span><br>

		<b>CP: </b><input type="text" name="cp" id="cp" class="form-control" placeholder="52005" value="<?php echo $fila['CP'] ?>">
		<span id="cp_error">El CP introducido no es valido</span>

		<b>Provincia: </b><input type="text" name="provincia" id="provincia" class="form-control" placeholder="Melilla" value="<?php echo $fila['Provincia'] ?>">
		<span id="provincia_error">Lo introducido no concuerda con ninguna pronvicia</span>

		<b>ComunidadAutonoma: </b><input type="text" name="comunidadautonoma" id="comunidadautonoma" class="form-control" placeholder="Melilla" value="<?php echo $fila['ComunidadAutonoma'] ?>">
		<span id="comunidadautonoma_error">Lo introducido no concuerda con ninguna comunidad autonoma</span><br>

		<b>Rol: </b>
  			<select id="rol" type="text" name="dni" id="rol" class="form-control" placeholder="Usuario/Admin" value="<?php echo $fila['Rol'] ?>">>
    			<option value="usuario">Usuario</option>
    			<option value="admin">Admin</option>
  			</select><br>

		<b>Dni: </b><input type="text" name="rol" id="dni"  class="form-control" placeholder="45314598k" value="<?php echo $fila['Dni'] ?>">
		<span id="dni_error">El Dni introducido no es correcto</span>	

		<input type="submit" value="Actualizar" name="btnregistrar"><br>
		<input type="hidden"  name="idUsuario" value="<?php echo $idUsuario ?>"><br>

	</form>	
	</center>

	</div>
</div>

</div>

 <footer>
 		
 		<div> 

 			<p class="parrafo-footer" style="margin-left: 25px;">MAPA DEL SITIO
			<p class="parrafo-footer" style="margin-left: 25px;">
			<a href="mapadelsitio.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: white; width: 30px; height: 30px;" fill="currentColor" class="bi bi-easel-fill" viewBox="0 0 16 16">
  			<path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h1.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11H7.5v2.5a.5.5 0 0 0 1 0V11h2.592l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11H14a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H9.046L8.473.337z"/>
			</svg></a><br>

			<div class="redes-footer">
				<a href="https://www.instagram.com/"><svg id="iconos" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
				  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
				</svg></a>
				<a href="https://www.twitter.com/"><svg id="iconos" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
				  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
				</svg></a>
				<a href="https://es-es.facebook.com/"><svg id="iconos" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  				<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
				</svg></a>
				
				</div>

			
				<div>	
					<ul class="nav nav-pills nav-fill" id="ayuda">
					  <li class="nav-item">
					    <a class="nav-link" href="#">Contacto</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Aviso legal</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Política de privacidad</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Política de cookies</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Configuración de cookies</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Publicidad</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Condiciones Generales de Suscripciones</a>
					  </li>
					</ul>	
				</div>
			

			<hr>
			<h5 style="color: white;" >© 2021 Spanish Army - Todos los Derechos Reservados</h5>
	</div>

 </footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/validacion.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>

