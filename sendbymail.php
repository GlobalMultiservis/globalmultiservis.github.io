<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
} 

$form_message = '<div id="form_message">';
// Aquí se deberían validar los datos ingresados por el usuario
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])
	&& !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) 
{	
	$email_to = "diegorojas3124@hotmail.com";
	$email_subject = "Contacto desde el sitio web";
	$email_from = 'info@globalmultiservis.com.co';
	
	$email_message = "Detalles del formulario de contacto:\n\n";
	$email_message .= "Nombre: " . $_POST['name'] . "\n";
	$email_message .= "E-mail: " . $_POST['email'] . "\n";
	$email_message .= "Teléfono: " . $_POST['phone'] . "\n";
	$email_message .= "Mensaje: " . $_POST['message'] . "\n\n";

	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers, '-info@globalmultiservis.com.co');
	
	$form_message .= '<div class="alert alert-success">El mensaje se envió correctamente.</div>';				

}else{
	$form_message .= '<div class="alert alert-danger"> Los campos ';
	if(!isset($_POST['name']) || empty($_POST['name'])) {
		$form_message .= '- Nombre ';			
	}
	
	if(!isset($_POST['email']) || empty($_POST['email'])) {
		$form_message .= '- Correo ';			
	}
	
	if(!isset($_POST['message']) || empty($_POST['message'])) {
		$form_message .= '- Mensaje ';			
	}	
	
	$form_message .= '- no pueden estar vacíos.</div>';
}

$form_message .= '</div>';
echo($form_message);
$_SESSION['form_message'] = $form_message;
//header('Location: index.html#works'); 

?>