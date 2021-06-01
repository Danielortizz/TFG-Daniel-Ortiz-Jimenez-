<?php  

//Iniciamos la sesion

 session_start();

//En este archivo lo que hacmeos es dirigir a un header dependiendo de tu rol de usuario en la pagina
//si eres admin vas a un header con panel de administración
//si eres un usuario normal te sale tu perfil y cosas de un usuario logueado
//y por ultimo si no eres un usuario logueado pues en el header te sale para loguearte


    $rol = "";
    if(isset($_SESSION["Rol"])){
        $rol = $_SESSION["Rol"];
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Spanish Army</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="shortcut icon" href="img/logo.png">
	
</head>
<body>


<?php if($rol==""){ ?>
 <header>

 	<div><img src="img/header.png" class="imagen-header" width="1300" height="250"></div>

	<ul class="nav justify-content-center" id="barra">
	 	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="margenes">

	  		<div class="container-fluid">
	   		<a class="navbar-brand" href="home.php"><img src="img/logo.png" style="width: 150px; height: 60px; margin-top: -20px; margin-left: 0px; "></a>
	    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarText">
	        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" aria-current="page" href="#" data-bs-toggle="dropdown"  role="button" aria-expanded="false">TIENDA</a>
	        		<ul class="dropdown-menu">
		      				<li><a class="dropdown-item" href="camisetas.php">CAMISETAS MILITARES</a></li>
		      				<li><a class="dropdown-item" href="pantalones.php">PANTALONES MILITARES</a></li>
		      				<li><a class="dropdown-item" href="botas.php">BOTAS MILITARES</a></li>
		      				<li><a class="dropdown-item" href="mochilas.php">MOCHILAS MILITARES</a></li>
	    		   </ul>
	        </li>

	        <li class="nav-item">
	        <a class="nav-link" href="ofertas.php">OFERTAS</a>
	        </li>

	        <li class="nav-item">
	        <a class="nav-link" href="noticias.php">NOTICIAS</a>
	        </li>
	        <li class="nav-item">
	        <a class="nav-link dropdown-toggle" aria-current="page" href="#" data-bs-toggle="dropdown"  role="button" aria-expanded="false">ACCESO A TROPA</a>

	        		<ul class="dropdown-menu">
		      				<li><a class="dropdown-item" href="exclusiones.php">EXCLUSIONES</a></li>
		      				<li><a class="dropdown-item" href="baremo.php">BAREMO 2021</a></li>
		      				<li><a class="dropdown-item" href="cefot.php">MATERIAL CEFOT</a></li>
		      				<li><a class="dropdown-item" href="preguntas.php">PREGUNTAS FRECUENTES</a></li>
	    		   </ul>

	        </li>
	        <li class="nav-item">
	        <a class="nav-link" href="dieta.php">DIETA Y ENTRENO</a>
	        </li>
	        </ul>
	    	</div>
	        </div>
	    </nav>

	    <ul class="nav justify-content-end">
	    	<li class="nav-item">
		    <a class="nav-link" aria-current="page" href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
 			<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
  			<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
			</svg> Login </a>
		    </li>

		    <li class="nav-item">
		    <a class="nav-link active" aria-current="page" href="ingresar_usuarioo.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  			<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  			<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
			</svg> Registrate</a>
		  </li>

		  <li class="nav-item">
		    <a class="nav-link active" aria-current="page" href="carrito.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  			<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
			</svg> Carrito</a>
		  </li>
		</ul>
	</ul>

 </header>

<?php } ?>

<?php if($rol=="usuario"){ ?>

	 <header>

 	<div><img src="img/header.png" class="imagen-header" width="1300" height="250"></div>

	<ul class="nav justify-content-center" id="barra">
	 	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="margenes">

	  		<div class="container-fluid">
	   		<a class="navbar-brand" href="home.php"><img src="img/logo.png" style="width: 150px; height: 60px; margin-top: -20px; margin-left: 0px; "></a>
	    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarText">
	        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" aria-current="page" href="#" data-bs-toggle="dropdown"  role="button" aria-expanded="false">TIENDA</a>
	        		<ul class="dropdown-menu">
		      				<li><a class="dropdown-item" href="camisetas.php">CAMISETAS MILITARES</a></li>
		      				<li><a class="dropdown-item" href="pantalones.php">PANTALONES MILITARES</a></li>
		      				<li><a class="dropdown-item" href="botas.php">BOTAS MILITARES</a></li>
		      				<li><a class="dropdown-item" href="mochilas.php">MOCHILAS MILITARES</a></li>
	    		   </ul>
	        </li>

	        <li class="nav-item">
	        <a class="nav-link" href="ofertas.php">OFERTAS</a>
	        </li>

	        <li class="nav-item">
	        <a class="nav-link" href="noticias.php">NOTICIAS</a>
	        </li>
	        <li class="nav-item">
	        <a class="nav-link dropdown-toggle" aria-current="page" href="#" data-bs-toggle="dropdown"  role="button" aria-expanded="false">ACCESO A TROPA</a>

	        		<ul class="dropdown-menu">
		      				<li><a class="dropdown-item" href="exclusiones.php">EXCLUSIONES</a></li>
		      				<li><a class="dropdown-item" href="baremo.php">BAREMO 2021</a></li>
		      				<li><a class="dropdown-item" href="cefot.php">MATERIAL CEFOT</a></li>
		      				<li><a class="dropdown-item" href="preguntas.php">PREGUNTAS FRECUENTES</a></li>
	    		   </ul>

	        </li>
	        <li class="nav-item">
	        <a class="nav-link" href="dieta.php">DIETA Y ENTRENO</a>
	        </li>
	        </ul>
	    	</div>
	        </div>
	    </nav>

	    <ul class="nav justify-content-end">
	    	<li class="nav-item">
			<a class="nav-link" aria-current="page" href="perfil.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
  			<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z"/>
		</svg> Perfil</a>
		  </li>

		   <li class="nav-item">
		    <a class="nav-link active" aria-current="page" href="cerrarsesion.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
			<path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
			</svg> Cerrar Sesion</a>
		  </li>

		  <li class="nav-item">
		    <a class="nav-link active" aria-current="page" href="carrito.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  			<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
			</svg> Carrito</a>
		  </li>
		</ul>
	</ul>
</header>
<?php } ?>



<?php if($rol=="admin"){ ?>


 <header>

 <div><img src="img/header.png" class="imagen-header" width="1300" height="250"></div>

	<ul class="nav justify-content-center" id="barra">
	 	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="margenes">
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
		    <a class="nav-link active" aria-current="page" href="cerrarsesion.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
			<path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
			</svg> Cerrar Sesion</a>
		  </li>

		  <li class="nav-item">
		    <a class="nav-link active" aria-current="page" href="carrito.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  			<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
			</svg> Carrito</a>
		  </li>
		</ul>

	</ul>

 </header>
<?php } ?>

</body>
</html>