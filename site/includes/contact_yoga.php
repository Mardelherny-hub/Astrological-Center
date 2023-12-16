<!DOCTYPE html>

 <html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asociación Civil Aztlan Centro Cultural de Psicología, Filosofía y Humanidades</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php
error_reporting(E_ALL);
if(isset($_POST['email'])) {
// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "marianocrivelli@gmail.com";
$email_subject = "Formulario de Aztlan Taller de Yoga";
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
mail($email_to, $email_subject, $email_message, $headers);
}
?>
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
    <div class="container" id="contenedor">
      
      <?php include('includes/navbar.php');?>
      <section>
        <div style="height: auto;background-color: #ebebeb;max-width: 1600px;">
          <img class="img-responsive" src="assets/images/articulos/psico_jung.jpg" alt=""/>
        </section>
        
        <!-- Page Content -->
        <div class="container-fluid cont-section" style="padding-top:20px" id="articulo">
          <!-- /.row -->
          <div class="row">
            <div class="col-sm-9">
              
              
              <!-- titulo -->
              <div class="page-header">
                <h2>Gracias por contactarse, estaremos en contacto con usted muy pronto.<h2>
              </div>
            </div>
            <!-- /coluna derecha -->
            <div class="col-sm-3">
              <?php include('includes/rside.php');?>
              <!-- <img class="img-responsive" src="assets/images/articulos/aside.jpg" alt=""/>  -->
            </div>
          </div><br>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <?php include('includes/footer.php');?>
      </div>
      <!-- Bootstrap JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e95d72d475c8b"></script>
    </body>
  </html>