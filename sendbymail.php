<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	} 
	ob_start();

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/Exception.php';
	require 'phpmailer/PHPMailer.php';
	require 'phpmailer/SMTP.php';

	function sendEmail($to, $subject, $body) {
		$isSent = false;
		$file = '../accounts.xml';
		if (file_exists($file)) {
			$accounts = simplexml_load_file($file);
	
			if ($accounts === false) {
				echo "Failed loading XML: ";
				foreach(libxml_get_errors() as $error) {
					echo "<br>", $error->message;
				}
			} else {
				$child_count = 0; 
				$email = $accounts->account[0]->mail;
				$password = $accounts->account[0]->password;		

				$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
				try {
					//Server settings
					$mail->Mailer="smtp";
					$mail->XMailer = 'MyMailer';
					$mail->SMTPDebug = 1;                                 // Enable verbose debug output
					$mail->isSMTP();                                      // Set mailer to use SMTP
					$mail->Host = 'shared10.hostgator.co';  // Specify main and backup SMTP servers}
					$mail->Helo = "globalmultiservis.com.co"; //Muy importante para que llegue a hotmail y otros
					$mail->SMTPAuth = true;                               // Enable SMTP authentication
					$mail->Username = $email;                 // SMTP username
					$mail->Password = $password;                           // SMTP password			
					$mail->Port       = 26;   
					$mail->setFrom($email, 'Global Multiservis');
					$mail->addAddress($to);     
					//Content
					$mail->isHTML(true);					// Set email format to HTML
					$mail->CharSet = 'UTF-8';
					$mail->AddEmbeddedImage('img/logo.png', 'logo');
					$mail->Subject = $subject;
					$mail->Body    = $body;					
					$mail->send();
					$isSent = true;
				} catch (Exception $e) {
					echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
				}		
			}    
		} else {
			exit('Error abriendo ' . $file);
		}

		return $isSent;
	}

	$form_message = '<div id="form_message">';
	// Aquí se deberían validar los datos ingresados por el usuario
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])
		&& !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) 
	{			
		$email_to = "info@globalmultiservis.com.co";
		$email_subject = "Contacto desde el sitio web";		
	
		$email_message = "<h3>Un usuario de la pagina web ha enviado un mensaje mediante el formulario de contáctenos</h3><hr /><hr />";
		$email_message = "<h4>Detalles del formulario de contacto:</h3><hr /><hr />";
		$email_message .= "<p><b>Nombre: </b>" . $_POST['name'] . "</p><hr />";
		$email_message .= "<p><b>E-mail: </b>" . $_POST['email'] . "</p><hr />";
		$email_message .= "<p><b>Teléfono: </b>" . $_POST['phone'] . "</p><hr />";
		$email_message .= "<p><b>Mensaje: </b>" . $_POST['message'] . "</p><hr />";

		$isSent = sendEmail($email_to, $email_subject, $email_message);

		if($isSent){
			$form_message .= '<div class="alert alert-success">El mensaje se envió correctamente.</div>';	
		}else{
			$form_message .= '<div class="alert alert-danger">Se produjo un error al enviar el mensaje. Intentelo más tarde.</div>';	
		}

		$email_to = $_POST['email'] ;
		$email_subject = "Contacto Global Multiservis S.A.S.";	
		$email_message = file_get_contents('../mailTemplateClient.html', FILE_USE_INCLUDE_PATH);
		$isSent = sendEmail($email_to, $email_subject, utf8_encode($email_message));

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
	
		$form_message .= '- no pueden ser vacíos.</div>';
	}

	$form_message .= '</div>';
	$_SESSION['form_message'] = $form_message;
	header('Location: index.php'); 

?>