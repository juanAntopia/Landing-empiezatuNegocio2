<?php
//perla.holguin@3e-digital.com

if(isset($_POST)){
		$name = htmlspecialchars($_POST['c_name']);
		$email = htmlspecialchars($_POST['c_email']);
		$phone = htmlspecialchars($_POST['c_phone']);
		$state = htmlspecialchars($_POST['c_state']);
		$city = htmlspecialchars($_POST['c_city']);
		$budget = htmlspecialchars($_POST['c_budget']);
		$radioValue = htmlspecialchars($_POST['radioValue']);
		$camp1 = htmlspecialchars($_POST['c_camp1']);
		$camp2 = htmlspecialchars($_POST['c_camp2']);
		$camp3 = htmlspecialchars($_POST['c_camp3']);
		$radioValue2 = htmlspecialchars($_POST['radioValue2']);
		$message = htmlspecialchars($_POST['c_message']);

	$error = "faltan_valores";

	if ($name && $email && $phone && $state && $city && $budget
		&& $radioValue && $radioValue2 && $message) {
		$error = "ok";
		if (!is_int($name) || !is_numeric($name) && !empty($name) && strlen($name) > 2 && strlen($name) < 100) {
			$validate_name = true;
		} else {
			$validate_name = false;
			$error = "nombre";
		}

		if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($email) > 2 && strlen($email) < 150 && !empty($email)) {
			$validate_email = true;
		} else {
			$validate_email = false;
			$error = "email";
		}

		if($phone != "" && preg_match("/^[0-9]+$/", $phone)){
			$validate_phone = true;
		}else{
			$validate_phone = false;
			$error = "telefono";
		}

		if (!is_int($state) || !is_numeric($state) && !empty($state) && strlen($state) > 2 && strlen($state) < 100) {
			$validate_state = true;
		} else {
			$validate_state = false;
			$error = "estado";
		}

		if (!is_int($city) || !is_numeric($city) && !empty($city) && strlen($city) > 2 && strlen($city) < 100) {
			$validate_city = true;
		} else {
			$validate_city = false;
			$error = "ciudad";
		}

		if (!is_int($calle) || !is_numeric($calle) && !empty($calle) && strlen($calle) > 2 && strlen($calle) < 100) {
			$validate_calle = true;
		} else {
			$validate_calle = false;
			$error = "calle";
		}

		if($budget != "" && preg_match("/^[0-9]+$/", $budget)){
			$validate_budget = true;
		}else{
			$validate_budget = false;
			$error = "presupuesto";
		}

		if (isset($radioValue)) {
			$validate_radioValue = true;
		} else {
			$validate_radioValue = false;
			$error = "RadioValue1";
		}

		/*if($camp1 != "" && preg_match("/^[0-9]+$/", $camp1)){
			$validate_camp1 = true;
		}else{
			$validate_camp1 = false;
			$error = "m2";
		}

		if($camp2 != "" && preg_match("/^[0-9]+$/", $camp2)){
			$validate_camp2 = true;
		}else{
			$validate_camp2 = false;
			$error = "ancho";
		}

		if($camp3 != "" && preg_match("/^[0-9]+$/", $camp3)){
			$validate_camp3 = true;
		}else{
			$validate_camp3 = false;
			$error = "largo";
		}*/

		if (isset($radioValue2)) {
			$validate_radioValue2 = true;
		} else {
			$validate_radioValue2 = false;
			$error = "RadioValue2";
		}

		if (strlen($message) > 2 && strlen($message) < 500 && !empty($message)) {
			$validate_message = true;
		} else {
			$validate_message = false;
			$error = "mensaje";
		}
	}else {
		$error = "faltan_valores";
		header("Location:../index.php?error=$error");
	}

	if ($error != "ok") {
		header("Location:../index.php?error=" . $error);
	}elseif($error == "ok"){
		
		

		//asunto
		$asunto="Mensaje enviado desde la página web";

		//destinatario
		$destino="juan_27angel@hotmail.com";

		//cabeceras para validar el formato HTML
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Content-type: text/html; charset=UTF-8\r\n";

		//contenido del mensaje
		$contenido='
		<!DOCTYPE html>
		<html lang="es">
		<head></head>
		<body>
			<h2>' . $name . ' ha enviado el siguiente mensaje a través de tu sitio web:</h2>
			<hr>
		
			<p>' . $message . '</p>

			<hr>

			<h5>Información del formulario</h5>

			<ul>
				<li>Estado: '.$state.'</li>
				<li>Ciudad: '.$city.'</li>
				<li>Presupuesto aproximado: '.$budget.'</li>
				<li>¿Cuentas con terreno?: '.$radioValue.'</li>
				<li>m2: '.$camp1.'</li>
				<li>Ancho: '.$camp2.'</li>
				<li>Largo: '.$camp3.'</li>
				<li>¿Estas interesado en un proyecto Llave en mano?: '.$radioValue2.'</li>
			</ul>

			<p>Contacta a  <strong>' . $name . '</strong> al correo:  <span style="color:blue;"> ' . $email . '</span> o al teléfono '. $phone .' </p>
			
			<p>Ir a mi sitio web <span style="color:blue">http://www.</span></p>
		</body>
		</html>
		';

		//enviar correo
		$envio = mail($destino, $asunto, $contenido, $headers);

		if($envio){
			header("Location:../thanks.php");
			//Enviando autorespuesta
			$pwf_header = "\n"
			."Reply-to:  \n";
			$pwf_asunto = "GreenMatik Confirmación";
			$pwf_dirigido_a = "$email";
			$pwf_mensaje = "$name Gracias por dejarnos su mensaje desde nuestro sitio web \n"
			."Su mensaje ha sido recibido satisfactoriamente \n"
			."Nos pondremos en contacto lo antes posible a su e-mail: $email o su telefono $phone \n"
			."\n"
			."\n"
			."-----------------------------------------------------------------"
			."Favor de NO responder este e-mail ya que es generado Automaticamente.\n"
			."Atte:  \n";
			@mail($pwf_dirigido_a, $pwf_asunto, $pwf_mensaje, $pwf_header);
		}else{
			header("Location:../index.php?error=Inténtelo de nuevo en unos momentos");
		}
	}
}