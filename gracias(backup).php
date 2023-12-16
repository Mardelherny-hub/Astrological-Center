<?php
error_reporting(E_ALL);
if(isset($_POST['email'])) {
// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "matias.aztlan2@gmail.com";
$email_subject = "Formulario de Centro Astrologico Aztlan";
function died($error) {
// your error code can go here
echo "We are very sorry, but there were error(s) found with the form you submitted. ";
echo "These errors appear below.<br /><br />";
echo $error."<br /><br />";
echo "Please go back and fix these errors.<br /><br />";
die();
}
// validation expected data exists
if(!isset($_POST['nombre']) ||
!isset($_POST['facebook']) ||
!isset($_POST['email']) ||
!isset($_POST['cel']) ||
!isset($_POST['comentario'])) {
died('We are sorry, but there appears to be a problem with the form you submitted.');
}
$nombre = $_POST['nombre']; // required
$facebook = $_POST['facebook']; // required
$email_from = $_POST['email']; // required
$cel = $_POST['cel']; // not required
$comentario = $_POST['comentario']; // required 
$solicita = $_POST['solicita']; // required
$modalidad = "";
foreach($_POST['checkbox'] as $checkbox){
//echo $checkbox . ' ';
$modalidad .= $checkbox . ' ';
}
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
if(!preg_match($email_exp,$email_from)) {
$error_message .= 'El email es invalido.<br />';
}
$string_exp = "/^[A-Za-z .'-]+$/";
if(!preg_match($string_exp,$nombre)) {
$error_message .= 'El nombre no es valido.<br />';
}
if(!preg_match($string_exp,$facebook)) {
$error_message .= 'El facebook no es valido.<br />';
}
if(strlen($comentario) < 2) {
$error_message .= 'El comentario no es valido.<br />';
}
if(strlen($error_message) > 0) {
//header('Location: http://aztlan.com.ar/elescarabajodeoro/contacto.php?e=$error_message');
died($error_message);
}
$email_message = "Formulario.\n\n";
function clean_string($string) {
$bad = array("content-type","bcc:","to:","cc:","href");
return str_replace($bad,"",$string);
}
$email_message .= "Nombre: ".clean_string($nombre)."\n";
$email_message .= "Facebook: ".clean_string($facebook)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Celular: ".clean_string($cel)."\n";
$email_message .= "Solicita: ".clean_string($solicita)."\n";
$email_message .= "Comentario: ".clean_string($comentario)."\n";
$email_message .= "Modalidad: ".clean_string($modalidad)."\n";
// create email headers
$headers = 'From: '.$email_to."\r\n".
'Reply-To: '.$email_to."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Centro Astrol&oacute;gico Aztlan</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/general.css" />
		<link rel="stylesheet" type="text/css" href="css/texts.css" />
		<script src="js/scripts.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58252bfe33a5cbce"></script>

		<!-- Facebook Pixel Code -->
	    <script>
	    !function(f,b,e,v,n,t,s)
	    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	    n.queue=[];t=b.createElement(e);t.async=!0;
	    t.src=v;s=b.getElementsByTagName(e)[0];
	    s.parentNode.insertBefore(t,s)}(window,document,'script',
	    'https://connect.facebook.net/en_US/fbevents.js');
	     fbq('init', '666546336853489'); 
	    fbq('track', 'PageView');
	    fbq('track', 'Lead');
	    </script>
	    <noscript>
	     <img height="1" width="1" 
	    src="https://www.facebook.com/tr?id=666546336853489&ev=PageView
	    &noscript=1"/>
	    </noscript>
	    <!-- End Facebook Pixel Code -->

    
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div id="container" style="background-color: #fff;">
			<?php include('site/header.php'); ?>
			<section id="content_section">
				<!-- Sección principal > comienzo -->
				<section class="main_section" style="padding: 0px 6em">
					<h2>
						SOLO CON CONFIRMACIÓN DE RESERVA
						<br><br>
						Gracias por contactarse, estaremos en contacto con usted muy pronto.
					</h2>
				</section>
				<!-- Sección principal > final -->
				<!-- Sección lateral > comienzo -->
				<section class="side_section">
					<!-- Sección de eventos -->
					<?php include('site/events-home.php'); ?>
				</section>
				<!-- Sección lateral > final -->
			</section>
			<?php include('site/footer.php'); ?>
			
		</div>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>