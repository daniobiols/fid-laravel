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

	if(nombre.value == "" ){
		eNombre.innerHTML = '<span class="invalidfeedback" role="alert" id="eNombre">COMPLETAME BIEN!</span>';
		event.preventDefault();
	}else {eNombre.innerText = "";}

	if(lastname.value == "" ){
		eLastname.innerHTML = '<span class="invalidfeedback" role="alert" id="eLastname">COMPLETAME BIEN!</span>';
		event.preventDefault();
	}else {eLastname.innerText = "";}

	if(email.value == "" ){
		eCorreo.innerHTML = '<span class="invalidfeedback" role="alert" id="eCorreo">COMPLETAME BIEN!</span>';
		event.preventDefault();
	}else {eCorreo.innerText = "";}

	if(password.value == "" ){
		ePassword.innerHTML = '<span class="invalidfeedback" role="alert" id="ePassword">COMPLETAME BIEN!</span>';
		event.preventDefault();
	}else {ePassword.innerText = "";}

	if(confirm.value == "" ){
		eConfirm.innerHTML = '<span class="invalidfeedback" role="alert" id="eConfirm">COMPLETAME BIEN!</span>';
		event.preventDefault();
	}else {eConfirm.innerText = "";}

	function validateEmail(value)
	{
	   var re = /\S+@\S+\.\S+/;
	   return re.test(value);
	}

	if(validateEmail(email.value) == false){
		eCorreo.innerHTML = '<span class="invalidfeedback" role="alert" id="eCorreo">Formato Incorrecto</span>';
		event.preventDefault();
	}

	if(password.value!=confirm.value){
		ePassword.innerHTML = '<span class="invalidfeedback" role="alert" id="ePassword">Las contraseñas no coinciden</span>';
		event.preventDefault();
	}


/* -----------------------------------------INICIO LLAMADA AJAX/*/

	// var token = document.querySelector('[name=csrf-token]').getAttribute('content');


	// var campos = {
	// 	name: nombre.value,
	// 	lastname: lastname.value,
	// 	email: email.value,
	// 	password: password.value,
	// };

	// var data = new FormData();
	// data.append('datos', JSON.stringify(campos));


	// fetch('http://127.0.0.1:8000/pruebaApi', {
	//    method: 'POST',
	//    body: data,
	//    headers: {'X_CSRF-TOKEN': token}
	// })
	// .then(function(response) {
	// 	return response.text()
	// })
	// .then(function(response) {
	// 	console.log(response)
	// })
	// .catch(function(error) {
	//    console.log(error);
	// })

/* --------------------------------------------FIN LLAMADA AJAX/*/


});
