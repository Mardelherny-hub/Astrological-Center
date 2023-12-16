<!DOCTYPE html>

 <html lang="">
  <head>
    <?php include('site/head.php');
    
    error_reporting(E_ALL);

    //Verificamos que esté seteado el campo E-mail del formulario
    if(isset($_POST['email'])) {

    //Definimos las cuentas de E-Mail a las que enviaremos los datos
    $email_to = "secretaria@aztlan.org.ar";
    $email_to_2 = "nicolas.nardi@aztlan.org.ar";
    $email_to_3 = "maximo.aztlan@gmail.com";
    $email_to_4 = "secretaria@aztlan.com.ar";

    //Definimos el "Asunto" ("Subject") del correo que nos llega
    $email_subject = "Formulario de Centro Astrológico";

    //Tomamos los datos del Formulario
    $nombre = $_POST['nombre'];
    $facebook = $_POST['facebook'];
    $email_from = $_POST['email'];
    $cel = $_POST['cel'];
    $pago = $_POST['pago'];
    $comentario = $_POST['comentario'];
    
    //Armamos el mensaje que nos va a llegar, con los datos del formulario
    $email_message = "Datos del Formulario.\n\n";
        function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }

    $email_message .= "Nombre: ".clean_string($nombre)."\n";
    $email_message .= "Facebook: ".clean_string($facebook)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Celular: ".clean_string($cel)."\n";
    $email_message .= "Pago: ".clean_string($pago)."\n";
    $email_message .= "Comentario: ".clean_string($comentario)."\n";
    
    
    
    //Definimos las cabeceras (de quien es el mail, a quien se le envia copia, que Driver de php usa)
    $headers = 'From: '.$email_to."\r\n".
    'Reply-To: '.$email_to."\r\n" .
    'Cc: ' . "\r\n" .
    'Cco: ' . "\r\n" .
    /*'Reply-To: '.$email_to."\r\n" .
    'Cc: clazyegg@gmail.com,cristianconocimiento@gmail.com' . "\r\n" .
    'Cco: cristianoaltamirano@gmail.com' . "\r\n" .*/
    'X-Mailer: PHP/' . phpversion();

    //Enviamos el E-Mail con la función mail de PHP
    mail("$email_to,$email_to_2,$email_to_3,$email_to_4", $email_subject, $email_message, $headers);
    }

    ?>
    
    <style>
        .side_section {
            margin-bottom: 50px;
        }
    </style>

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