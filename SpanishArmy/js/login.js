/*aqui llamamos a todos los id del html y los guardamos en una constante*/
	const usuario = document.getElementById('usuario');
	const password = document.getElementById('password');
	const error = document.getElementById("error");

/*JQUERY EL #recoge el id y el .css los estilos para el control de errores*/
	$("#usuario_error").css("visibility", "hidden");
	$("#password_error").css("visibility", "hidden");
	$("#error").css("visibility", "hidden");

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, 
	password: /^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/
}

const campos = {
	usuario: false,
	password: false
}

/*Funciones para validar el usuario  y para gestionar el control de errores*/
function validarUsuario(){
	if(expresiones.usuario.test(usuario.value)){
		campos['usuario'] = true;
		document.getElementById('usuario_error').style.visibility = "hidden";


	}else{
		campos['usuario'] = false;
		document.getElementById('usuario_error').style.visibility = "visible";
		document.getElementById('usuario_error').style.color = "red";
	}
}

/*Funciones para validar la contraseña  y para gestionar el control de errores*/
function validarPassword(){
	if(expresiones.password.test(password.value)){
		campos['password'] = true;
		document.getElementById('password_error').style.visibility = "hidden";
	}else{
		campos['password'] = false;
		document.getElementById('password_error').style.visibility = "visible";
		document.getElementById('password_error').style.color = "red";
	}	
}

function validarFormulario()
{
	let login = document.login;	
	if(campos.usuario && campos.password)
	{
		login.submit();
	}
	else
	{
		error.style.visibility = "visible";
		return false;
	}
}

/*Funciones para validar los botones que se van a usar para validar todo lo demás*/
function clickButton(){
	validarUsuario();
	validarPassword();
	validarFormulario();
}

/*Añadimos los oyentes de eventos a las constantes creadas arribas del todo*/
usuario.addEventListener("keyup", validarUsuario);
usuario.addEventListener("blur", validarUsuario);
password.addEventListener("keyup", validarPassword);
password.addEventListener("blur", validarPassword);

boton.addEventListener("click", clickButton);