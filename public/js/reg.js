// window.onload = function (){
//  }
var form = document.querySelector('form#reg');
var nombre = document.querySelector('form#reg input[name="name"');
var lastname = document.querySelector('form#reg input[name="lastname"');
var email = document.querySelector('form#reg input[name="email"');
var password = document.querySelector('form#reg input[name="password"');
var confirm = document.querySelector('form#reg input[name="password_confirmation"');

var eNombre = document.querySelector('form#reg span#eNombre');
var eLastname = document.querySelector('form#reg span#eLastname');
var eCorreo = document.querySelector('form#reg span#eCorreo');
var ePassword = document.querySelector('form#reg span#ePassword');
var eConfirm = document.querySelector('form#reg span#eConfirm');


form.addEventListener("submit", function(event){

	event.preventDefault();

	if(nombre.value == "" ){
		eNombre.innerHTML = '<span class="invalidfeedback" role="alert" id="eNombre">COMPLETAME BIEN!</span>';
	}else {eNombre.innerText = "";}

	if(lastname.value == "" ){
		eLastname.innerHTML = '<span class="invalidfeedback" role="alert" id="eLastname">COMPLETAME BIEN!</span>';
	}else {eLastname.innerText = "";}

	if(email.value == "" ){
		eCorreo.innerHTML = '<span class="invalidfeedback" role="alert" id="eCorreo">COMPLETAME BIEN!</span>';
	}else {eCorreo.innerText = "";}

	if(password.value == "" ){
		ePassword.innerHTML = '<span class="invalidfeedback" role="alert" id="ePassword">COMPLETAME BIEN!</span>';
	}else {ePassword.innerText = "";}

	if(confirm.value == "" ){
		eConfirm.innerHTML = '<span class="invalidfeedback" role="alert" id="eConfirm">COMPLETAME BIEN!</span>';
	}else {eConfirm.innerText = "";}

	function validateEmail(value) 
	{
	   var re = /\S+@\S+\.\S+/;
	   return re.test(value);
	}

	if(validateEmail(email.value) == false){
		eCorreo.innerHTML = '<span class="invalidfeedback" role="alert" id="eCorreo">Formato Incorrecto</span>';
	}

	if(password.value!=confirm.value){
		ePassword.innerHTML = '<span class="invalidfeedback" role="alert" id="ePassword">Las contraseñas no coinciden</span>';
	}	

/* -----------------------------------------INICIO LLAMADA AJAX/*/


	var campos = {
		name: nombre.value,
		lastname: lastname.value,
		email: email.value,
		password: password.value,
	};

	console.log(campos);

	var data = new FormData();
	data.append('datos', JSON.stringify(campos));


	fetch('', {
	   method: 'POST',
	   body: data
	})
	.then(function(response) {
	   if(response.ok) {
	       return response.json()
	   } 
	   else {
	       throw "Error en la llamada Ajax";
	   }
	})
	.catch(function(error) {
	   console.log(error);
	});	

/* --------------------------------------------FIN LLAMADA AJAX/*/


}); 