<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['email']))
{
	// EDIT THE 2 LINES BELOW AS REQUIRED 
	
	function died($error)
	{
		// your error code can go here
		echo "We are very sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	// validation expected data exists
	if(!isset($_POST['nombre']) ||
	!isset($_POST['red']) ||
	!isset($_POST['email']) ||
	!isset($_POST['cel']) ||
	!isset($_POST['pais']) ||
	!isset($_POST['comentario']))
	{
		died('We are sorry, but there appears to be a problem with the form you submitted.');
	}
	
	$nombre = $_POST['nombre']; // required
	$facebook = $_POST['red']; // required
	$pais = $_POST['pais']; // required
	$email_from = $_POST['email']; // required
	$cel = $_POST['cel']; // not required
	$comentario = $_POST['comentario']; // required
	$solicita = $_POST['solicita']; // required
	$fecha = $_POST['fecha']; // required
	$ciudad = $_POST['ciudad']; // required
	$red = $_POST['red']; // required
	$modalidad = "";
	if(isset($_POST['checkbox'])){
		foreach($_POST['checkbox'] as $checkbox){
			//echo $checkbox . ' ';
			$modalidad .= $checkbox . ' ';
		}	
	}
	
	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if(!preg_match($email_exp,$email_from))
	{
		$error_message .= 'El email es invalido.<br />';
	}
	
	$string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($string_exp,$nombre))
	{
		$error_message .= 'El nombre no es valido.<br />';
	}
	
	if(!preg_match($string_exp,$facebook))
	{
		$error_message .= 'El facebook no es valido.<br />';
	}
	
	if(strlen($comentario) < 2)
	{
		$error_message .= 'El comentario no es valido.<br />';
	}
	
	if(strlen($error_message) > 0)
	{
		//header('Location: http://aztlan.com.ar/elescarabajodeoro/contacto.php?e=$error_message');
		died($error_message);
	}
	
	
	function clean_string($string)
	{
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}

    $solicita = 'Consultoría Astrológica - '.$solicita;
	$email_message = "Formulario.\n\n<br>";
	$email_message .= "Nombre: ".clean_string($nombre)."<br>\n";
	$email_message .= "Facebook: ".clean_string($facebook)."<br>\n";
	$email_message .= "Email: ".clean_string($email_from)."<br>\n";
	$email_message .= "Celular: ".clean_string($cel)."<br>\n";
	$email_message .= "Pais: ".clean_string($pais)."<br>\n";
	$email_message .= "Solicita: ".clean_string($solicita)."<br>\n";
	$email_message .= "Comentario: ".clean_string($comentario)."<br>\n";
	$email_message .= "Modalidad: ".clean_string($modalidad)."<br>\n";
	$email_message .= "Fecha nacimiento: ".clean_string($fecha)."<br>\n";
	$email_message .= "Ciudad nacimiento: ".clean_string($ciudad)."<br>\n";
	$email_message .= "Red Social: ".clean_string($red)."<br>\n";
	require 'PHPMailer/src/Exception.php';
	  require 'PHPMailer/src/PHPMailer.php';
	  require 'PHPMailer/src/SMTP.php';

	  EnviarEmail($email_message, $solicita);
}



function EnviarEmail($body, $solicita){

  $mail = new PHPMailer(true);

  try {
      //Server settings
      $mail->SMTPDebug = 0;                                       // Enable verbose debug output
      $mail->isSMTP();                                            // Set mailer to use SMTP
      //$mail->Host       = 'sd-895865-L.ferozo.com';  // Specify main and backup SMTP servers
      $mail->Host       = 'bh8940.banahosting.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'consultas@centroastrologico.com.ar';                     // SMTP username
      $mail->Password   = 'CentroastrologicoAztlan1936';                               // SMTP password
      $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
      $mail->Port       = 587;                                    // TCP port to connect to
      $mail->CharSet = 'UTF-8';

      //Recipients
      $mail->setFrom('consultas@centroastrologico.com.ar', 'Web Centroastrologico');
      $mail->addAddress('maximo.aztlan@gmail.com');
	  /*
      $mail->addAddress('secretaria@aztlan.org.ar');
      $mail->addCC('nicolas.nardi@aztlan.org.ar');
      $mail->addCC('consultoria@aztlan.org.ar');
	  */
      //$mail->addCC('');

      $mail->addReplyTo('noreplay@centroastrologico.com.ar', 'No responder');

      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = $solicita;
      $mail->Body    = $body;

      $mail->send();
      
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    
  }  
}

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include('site/head.php'); ?>
	</head>
	<body>
		<script>
  fbq('track', 'Lead');
</script>
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<?php include('site/header.php'); ?>
		<div id="container">
			<section id="content_section">
				<section class="main_section">
					<div class="container-fluid" style="background-color: #fff;">
						<div class="row">
							<div class="col-md-9">
								<h2>&iexcl;Gracias por Reservar&excl;</h2>
								<h2>A la brevedad te estaremos avisando la disponibilidad.</h2>
							</div>
							<div class="col-md-3 side_section">
								<!-- Secci車n de eventos -->
								<?php include('site/events-home.php'); ?>
							</div>
						</div>
					</div>
				</section>
			</section>
			
			<?php include('site/footer.php'); ?>
		</div>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>
