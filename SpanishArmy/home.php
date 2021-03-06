<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Spanish Army</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/logo.png">
	
</head>

<body background="img/fondo2.jpg">
	
	<?php require('header.php'); ?>

 <div class="cuerpo">

 <div class="container">

			<p align="center"><FONT FACE="Impact" size="500px" class="titulocarrusel" >!!! OFERTAS !!!</FONT></p>

			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 500px; margin-left: 27%; max-width: 100%;">

				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<div class="carousel-inner" id="jaja">

					<?php

					//Cogemos los archivos que vamos a necesitar
						require 'bd/conectorBD.php';
						require 'DAOusuarios.php';
						require 'DAOofertas.php';

					//Nos conectamos a la base de datos
                        $conexion = conectar(true);
					
					//Usamos la funcion para poder mostrar los datos de nuestra base de datos en los carruseles
						$consulta = enseñarOfertas($conexion);
						
						$i = 0;

						//Muestra en bucle todos los campos de la consulta
						while($fila = mysqli_fetch_assoc($consulta)) {
					?>

					<div class="item <?php echo ($i == 0) ? 'active' : '';?>" >

						<img loading="eager" src="<?php echo $fila['Imagen'];?>" alt="" style="width:100%; height:350px;">

					</div>

					<?php

							//incrementamos para que no se repita siempre la misma imagen
							$i++;
							}
					?>

				</div>

				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Anterior</span>
				</a>

				<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Siguiente</span>
				</a>

			</div>

		</div>



		<div align="center" class="cuadro">

		<h1><FONT FACE="Impact" class="titulocarrusel" >PREGUNTAS FRECUENTES</FONT></h1>

		<img src="img/preguntas.png" class="imagen-header"></img>

		<h2><font face="Impact" class="titulocarrusel" style="color: white; ">¿Cuánto gana un militar de tropa y marinería?</font></h2>

		<p  style="background: white; font-size: 20px;" align="left">Esto varía en función de la unidad de destino ya que cada una tiene diferentes complementos. Pero para que os hagáis una idea el sueldo medio de un soldado recién llegado oscila entre los 950 y los 1075 euros.</p></h4>

		<h2><font face="Impact" class="titulocarrusel" style="color: white; ">¿Cuáles son los requisitos mínimos para el acceso a tropa?</font></h2>

		<p  style="background: white; font-size: 20px;" align="left">Como requisitos mínimos deberéis tener 18 años y no haber cumplido los 29 el día de incorporación al centro de formación militar. Estar en posesión de la ESO, carecer de antecedentes penales y poseer la nacionalidad española. Para más información visita nuestras páginas de requisitos y exclusiones</p></h2>

		<h2><font face="Impact" class="titulocarrusel" style="color: white; ">¿Cuándo y cómo puedo ascender a suboficiales?</font></h2>

		<p  style="background: white; font-size: 20px;" align="left">Si no eres militar podrás presentarte a las convocatorias de promoción directa siempre y cuando cumplas con los requisitos de edad y estudios, 21 años sin titulación previa y 26 con titulación previa.<br>

		Si eres tropa, cuando lleves un año de servicio ya podrás presentarte a las convocatorias por promoción interna, hasta los 31 años sin titulación previa y hasta los 33 con titulación.<br></h2>

		<h2><font face="Impact" class="titulocarrusel" style="color: white; font-size: 20px;">¿Dónde pedir cita para la convocatoria?</font></h2>

		<p  style="background: white; font-size: 20px;" align="left" > – Por teléfono: 902 432 100 o 913 089 798</p>
		<p  style="background: white; font-size: 20px;" align="left"> – Online, en la página web de reclutamiento.</p>
		<p  style="background: white; font-size: 20px;" align="left"> – En persona en una Subdelegación de Defensa, llevando tu DNI. Consúltalas aquí</p></h2>

		<img src="img/delegaciones.png" class="imagen-header" style="margin-bottom: 10px;"></img>

		<h2><font face="Impact" class="titulocarrusel" style="color: white; font-size: 20px;">Fases de la convocatoria</font></h2>

		<p style="background: white; font-size: 20px;" align="left">Está compuesto por dos fases, la primera consta de las pruebas de concurso y de oposición. Y posteriormente, una segunda fase que comprende las pruebas de reconocimiento médico, prueba de personalidad y las pruebas de aptitud física.

		A la segunda fase pasarán únicamente quienes consigan nota como titular para alguna de las plazas elegidas, además de una serie de reservas para cubrir posibles bajas durante el proceso.<br></p></h2>

		<h2><font face="Impact" class="titulocarrusel" style="color: white; ">¿Cuales son las marcas de las pruebas físicas?</font></h2>

		<img style="margin-bottom: 10px;" src="img/fisica1.jpg" class="imagen-header"></img><br>

		<img style="margin-bottom: 10px;" src="img/fisica2.jpg" class="imagen-header"></img><br>

		<h2><font face="Impact" class="titulocarrusel" style="color: white;">¿Dónde están los centros de formación?</font></h2>

		<p style="background: white; font-size: 20px;" align="left" >EJERCITO DE TIERRA<br>
		CEFOT 1 (Cáceres): Infantería ligera, infantería acorazada/mecanizada.<br>
		CEFOT 2 (San Fernando, Cádiz): BRIPAC, caballería, artillería de campaña, artillería de costa y antiaérea, ingenieros y transmisiones.<br>

		ARMADA<br>
		ESCAÑO (Ferrol, A Coruña): Operaciones y sistemas, energía y propulsión.<br>
		ESENGRA (Ferrol, A Coruña): Aprovisionamiento, maniobras y navegación.<br>
		– EIMGAF (Cartagena, Murcia): Infantería de marina.<br>

		EJERCITO DEL AIRE<br>
		ETESDA (Zaragoza): Todas las especialidades en la formación general.</p><br></b></h2>

		<img style="margin-bottom: 10px; font-size: 20px;"  class="imagen-header" src="img/imagen1.jpg" width="600" height="250"></img>

		<h1><FONT FACE="Impact" class="titulocarrusel" >DOCUMENTACION CEFOT</FONT></h1>

		<img style="margin-bottom: 10px; font-size: 20px;" src="img/cefot.jpg" width="700" height="350" class="imagen-header"></img>

		<h2><FONT class="titulocarrusel" style="color: white;" FACE="Impact"><p>Documentacion Personal para el CEFOT</p></FONT>
		
		<p align="left"  style="background: white; font-size: 20px;">* DNI- En caso de no disponer de él, deberás adjuntar un documento que justifique su ausencia.

		<br>* Tarjeta de la Seguridad Social

		<br>* Carnet de conducir

		<br>* Ficha de datos bancarios en la que figure el IBAN de tu cuenta ( Para que puedan ingresarte la nómina )

		<br>* Cartilla de vacunación - Si la llevas es posible que puedas librarte de alguna de las vacunas que te pondrán, aunque no es lo habitual.</p>

		<p align="left" style="background: white; font-size: 20px;">En caso de llevar vehículo propio.
		Si llevais vuestro vehículo personal, es fundamental que tengais toda la documentación en regla, ITV y seguro en vigor etcétera, si no, no podreis acceder al interior de la base y os tocará aparcar dios sabe donde.</p>

		<p align="left" style="background: white; font-size: 20px;">En caso de que el vehículo no esté a vuestro nombre, tendréis que adjuntar junto con la documentación necesaria, una autorización del propietario y una fotocopia de su DNI. En la autorización basta con que escriba que os autoriza a conducir su vehículo por razón de parentesco por ejemplo. También deberá adjuntar su nombre y su DNI y por supuesto firmar dicha autorización.</p><br></h2>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>