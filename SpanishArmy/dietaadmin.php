<!DOCTYPE html>
<html>
	<head>
		<title>Spanish Army</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link rel="shortcut icon" href="img/logo.png">
	</head>
	
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
		      				<li><a class="dropdown-item" href="camisetasadmin.php">CAMISETAS MILITARES</a></li>
		      				<li><a class="dropdown-item" href="pantalonesadmin.php">PANTALONES MILITARES</a></li>
		      				<li><a class="dropdown-item" href="botasadmin.php">BOTAS MILITARES</a></li>
		      				<li><a class="dropdown-item" href="mochilasadmin.php">MOCHILAS MILITARES</a></li>
	    		   </ul>
	        </li>

	        <li class="nav-item">
	        <a class="nav-link" href="ofertasadmin.php">OFERTAS</a>
	        </li>
	        
	        <li class="nav-item">
	        <a class="nav-link" href="noticiasadmin.php">NOTICIAS</a>
	        </li>
	        
	        <li class="nav-item">
	        <a class="nav-link" href="dietaadmin.php">DIETA Y ENTRENO</a>
	        </li>

	        <li class="nav-item">
	        <a class="nav-link" href="paneladmin.php">PANEL USUARIOS</a>
	        </li>

	        </ul>
	    	</div>
	        </div>
	    </nav>

	    <ul class="nav justify-content-end" id="barra">
		    <li class="nav-item">
		    <a class="nav-link active" aria-current="page" href="home.php">Cerrar Sesion</a>
		  </li>
		</ul>

		<ul class="nav justify-content-end" id="barra">
		    <li class="nav-item">
		    <a class="nav-link active" aria-current="page" href="añadirdieta.html"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
  			<path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
  			<path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
			</svg> </a>
		  	</li>  
		</ul>

	</ul>

 </header>

 <div class="cuerpo">

	<center>
	<table border="1" class="table table-striped table-dark">

	<tr>
		<th id="th" >#</th>
		<th id="th" >Tipo de dieta</th>
		<th id="th" >Ingredientes</th>
		<th id="th" >Entrenamiento</th>
		<th id="th" >Recuperacion</th>
		<th id="th" >Imagen</th>
	</tr>

	<?php 

//Cogemos los archivos que vamos a necesitar
	require 'bd/conectorBD.php';
	require 'DAOusuarios.php';
	require 'DAOdieta.php';

//Nos conectamos a la base de datos
	$conexion = conectar(true);

//usamos una funcion que nos permite mostrar las dieta de la base de datos
	$result = mostrardieta($conexion);

//recorre la consulta y los muestra
	while ($fila=mysqli_fetch_array($result)) {

	?>

	<tr>

		<td id="td"><b> <?php echo $fila['iddieta'] ?> </b></td>
		<td id="td"><b> <?php echo $fila['Tipo de dieta'] ?> </b></td>
		<td id="td"><b> <?php echo $fila['Ingredientes'] ?> </b></td>
		<td id="td"><b> <?php echo $fila['Entrenamiento'] ?> </b></td>
		<td id="td"><b> <?php echo $fila['Recuperacion post ejercicio'] ?> </div></b></td>
		<td id="td"><b> <img class="imagen" style="width: 200px;" src="<?php echo $fila['Imagen']; ?>"> </b></td>

		<td>
			<button ><a href="borrardieta.php?iddieta=<?php  echo $fila['iddieta'];?>" value="eliminar" name="eliminar" onclick="return confirm('Estás seguro que quieres eliminar esta dieta?');"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-reverse" viewBox="0 0 16 16">
  			<path d="M9.854 5.146a.5.5 0 0 1 0 .708L7.707 8l2.147 2.146a.5.5 0 0 1-.708.708L7 8.707l-2.146 2.147a.5.5 0 0 1-.708-.708L6.293 8 4.146 5.854a.5.5 0 1 1 .708-.708L7 7.293l2.146-2.147a.5.5 0 0 1 .708 0z"/>
  			<path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7.08a2 2 0 0 0 1.519-.698l4.843-5.651a1 1 0 0 0 0-1.302L10.6 1.7A2 2 0 0 0 9.08 1H2zm7.08 1a1 1 0 0 1 .76.35L14.682 8l-4.844 5.65a1 1 0 0 1-.759.35H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h7.08z"/>
			</svg> </button>
		</td>

		<td>
			<ul class="nav justify-content-center">
		  		<li class="nav-item" id="botones">
		    		<a class="nav-link active" aria-current="page" href="actualizardieta.php?iddieta=<?php echo $fila['iddieta']; ?>" value="Modificar" name="Modificar"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
  			<path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
  			<path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
			</svg></a>
		  		</li>
			</ul>
		</td>

	</tr>

	<?php

	}

	?>

	</table>
	</center>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>