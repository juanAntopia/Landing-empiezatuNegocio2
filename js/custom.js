


/**
 * Validación de formularios con AJAX
 */
/*
$(function(){
	$('#btn-ajax').click(function () { 
	   var url = 'mail/formulario-contacto.php';

	   $.ajax({
		   type: "POST",
		   url: url,
		   data: $('#contact-form').serialize(),
		   success: function (data) {
			   $('#nombre-status').html('');
			   $('#email-status').html('');
			   $('#telefono-status').html('');
			   $('#estado-status').html('');
			   $('#ciudad-status').html('');
			   $('#presupuesto-status').html('');
			   $('#terreno-status').html('');
			   $('#camp1-status').html('');
			   $('#camp2-status').html('');
			   $('#camp3-status').html('');
			   $('#interest-status').html('');
			   $('#mensaje-status').html('');
			   $('#terms-status').html('');
			   $('#mensajeErr-Status').html(data);//muestra los datos del script de PHP
		   }
	   });

	   return false;
	});
});*/

$(document).ready(function(){

	$.getJSON('http://api.wipmania.com/jsonp?callback=?', function (data) {        

	var country = data.address.country;
	console.log('País de usuario: ' + country);    

	});

	var radioButton1 = document.getElementById('inlineRadio1');
	var radioButton2 = document.getElementById('inlineRadio2');
	var input1 = document.getElementById('c_camp1');
	var input2 = document.getElementById('c_camp2');
	var input3 = document.getElementById('c_camp3');

	function updateStatus(){
		if(radioButton2.checked){
			input1.disabled = true;
			input2.disabled = true;
			input3.disabled = true;
		}else{
			input1.disabled = false;
			input2.disabled = false;
			input3.disabled = false;

		}
	}

	radioButton1.addEventListener('change', updateStatus);
	radioButton2.addEventListener('change', updateStatus);
		
});