<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['email'])) {
	// EDIT THE 2 LINES BELOW AS REQUIRED 
	function died($error) {
		// your error code can go here
		echo "We are very sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	// validation expected data exists
	if(!isset($_POST['nombre']) || !isset($_POST['facebook']) || !isset($_POST['email']) || !isset($_POST['cel']) || !isset($_POST['dni']) || !isset($_POST['comentario'])) {
		died('We are sorry, but there appears to be a problem with the form you submitted.');
	}
	
    $asunto = $_POST['asunto'];
    $nombre = $_POST['nombre'];
    $facebook = $_POST['facebook'];
    $email_from = $_POST['email'];
    $cel = $_POST['cel'];
    //-- se respeta el nombre de la variable 'dni', pero desde el formulario se envia el pais.
    $dni = $_POST['dni'];
    $comentario = $_POST['comentario'];
	
	$error_message = "";

	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    $string_exp = "/^[A-Za-z .'-]+$/";

	if(!preg_match($email_exp,$email_from)){
		$error_message .= 'El email es invalido.<br />';
	}
	
	if(!preg_match($string_exp,$nombre)){
		$error_message .= 'El nombre no es valido.<br />';
	}
	
	if(!preg_match($string_exp,$facebook)){
		$error_message .= 'El facebook no es valido.<br />';
	}
	
	if(strlen($comentario) < 2){
		$error_message .= 'El comentario no es valido.<br />';
	}
	
	if(strlen($error_message) > 0){
		//header('Location: http://aztlan.com.ar/elescarabajodeoro/contacto.php?e=$error_message');
		died($error_message);
	}
	
	function clean_string($string){
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}
    
    $email_message = "Datos del Formulario.\n\n";
    $email_message .= "Nombre: ".clean_string($nombre)."\n";
    $email_message .= "Facebook: ".clean_string($facebook)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Celular: ".clean_string($cel)."\n";
    $email_message .= "DNI: ".clean_string($dni)."\n";
    $email_message .= "Comentario: ".clean_string($comentario)."\n";

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	EnviarEmail($email_message, $asunto);
}

function EnviarEmail($body, $asunto){

  $mail = new PHPMailer(true);

  try {
      //Server settings
      $mail->CharSet = "UTF-8";
      $mail->SMTPDebug = 0;                                       // Enable verbose debug output
      $mail->isSMTP();                                            // Set mailer to use SMTP
      //$mail->Host       = 'sd-895865-L.ferozo.com';  // Specify main and backup SMTP servers
      $mail->Host       = 'smtp.hostinger.com.ar';  // Specify main and backup SMTP servers
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'web_2@centroastrologico.com.ar';                     // SMTP username
      $mail->Password   = 'CentroastrologicoAztlan1936';                               // SMTP password
      $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
      $mail->Port       = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('web_2@centroastrologico.com.ar', 'Web Centroastrologico');
      
      $mail->addAddress('secretaria@aztlan.org.ar');
      $mail->addCC('nicolas.nardi@aztlan.org.ar');
      $mail->addCC('maximo.aztlan@gmail.com');
      $mail->addCC('secretaria@aztlan.com.ar');

      $mail->addReplyTo('noreplay@centroastrologico.com.ar', 'No responder');

      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = $asunto;
      $mail->Body    = $body;

      $mail->send();
      
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }  
}

?>


<!DOCTYPE html>

 <html lang="">
  <head>
    <?php include('site/head.php'); ?>
    
    <style>
        .side_section {
            margin-bottom: 50px;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Ads: 959391870 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-959391870"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-959391870');
</script>


<!-- Event snippet for Consulta/Reserva conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-959391870/lH0YCMXZg2IQ_tC8yQM'});
</script>


  </head>
  <body>
    <!-- Google Code for Consulta/Reserva Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 959391870;
var google_conversion_label = "lH0YCMXZg2IQ_tC8yQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/959391870/?label=lH0YCMXZg2IQ_tC8yQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

    <script>
  fbq('track', 'Lead');
</script>

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
                <!-- Secci&oacute;n principal > comienzo -->
                <section class="main_section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-9">
                                <section class="article_section">

                                    <div class="page-header articulo_header">
                                        <section>
                                            <p style="font-size: 20px; font-weight: 600; text-align: center;">
                                            
                                                <?php
                                                    echo "$nombre, ¡Muchas Gracias! <br />
                                                    Nos pondremos en contacto a la brevedad."
                                                ?>
                                            </p>
                                            
                                        </section>
                                    </div>


                                </section>
                            </div>
                            <div class="col-md-3 side_section">
                                <?php include('site/events-astro.php'); ?>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        <?php include('site/footer.php'); ?>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
  </html>