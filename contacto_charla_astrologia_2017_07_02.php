<!DOCTYPE html>

 <html lang="">
  <head>
    <?php include('site/head.php');
    
    error_reporting(E_ALL);
    if(isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "secretaria@aztlan.org.ar";
    $email_to_2 = "nicolas.nardi@aztlan.org.ar";
    $email_to_3 = "maximo.aztlan@gmail.com";
    $email_to_4 = "secretaria@aztlan.com.ar";
    $email_subject = "Formulario de Centro Astrológico por Charla Dom 02/07/2017";
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
    !isset($_POST['dni']) ||
    !isset($_POST['comentario'])) {
    died('We are sorry, but there appears to be a problem with the form you submitted.');
    }
    $nombre = $_POST['nombre']; // required
    $facebook = $_POST['facebook']; // required
    $email_from = $_POST['email']; // required
    $cel = $_POST['cel']; // not required
    $dni = $_POST['dni']; // not required
    $comentario = $_POST['comentario']; // required
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
    $email_message .= "DNI: ".clean_string($dni)."\n";
    $email_message .= "Comentario: ".clean_string($comentario)."\n";
    // create email headers
    $headers = 'From: '.$email_to."\r\n".
    'Reply-To: '.$email_to."\r\n" .
    'Cc: ' . "\r\n" .
    'Cco: ' . "\r\n" .
    /*'Reply-To: '.$email_to."\r\n" .
    'Cc: clazyegg@gmail.com,cristianconocimiento@gmail.com' . "\r\n" .
    'Cco: cristianoaltamirano@gmail.com' . "\r\n" .*/
    'X-Mailer: PHP/' . phpversion();
    mail("$email_to,$email_to_2,$email_to_3,$email_to_4", $email_subject, $email_message, $headers);
    }
    ?>
  </head>
  <body>
    <?php
    include('site/header.php');
    include('site/home_zodiac_signs_menu.php');
    ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="container" id="contenedor">
        
        <!-- Page Content -->
        <div class="container-fluid cont-section" style="padding-top:20px" id="articulo">
          <!-- /.row -->
          <div class="row">
            <div class="col-sm-12">
              
              
              <!-- titulo -->
              <div class="page-header" style="border: none; margin-bottom: 40px;">
                <p style="font-size: 20px; font-weight: 600; text-align: center;">
                Te contactaremos a la brevedad para confirmarte tu reserva.<br />
                Muchas gracias</p>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <?php include('site/footer.php');?>
      <!-- Bootstrap JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e95d72d475c8b"></script>
    </body>
  </html>