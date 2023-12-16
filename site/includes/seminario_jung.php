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
    <script src="js/scripts.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .panel-default {
    border-color: white;
    }
    .panel-default>.panel-heading {
    color: #333;
    background-color: white;
    border-color: white;
    }
    .nav-tabs {
    border-bottom: 1px solid #e0ded9;
    }
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #555;
    cursor: default;
    background-color: #fff;
    border-bottom-color: transparent;
    }
    .nav-tabs>li>a {
    border-color: white white #e0ded9;
    font-size: 19px;
    background-color: #f0f5f8;
    }
    .nav-tabs>li>a:hover {
    border-color: white white white;
    }
    .solicita_btn{
    cursor: pointer;
    border: none;
    background: #3277ae;
    color: #FFF;
    margin: 0px auto;
    padding: 20px 19px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    font: bold 16px "PT Sans", sans-serif;
    text-transform: uppercase;
    }
    .solicita_btn:hover {
    color: white;
    background: #be0f34;
    -webkit-transition: background 0.3s ease-in-out;
    -moz-transition: background 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
    }
    img.program_image {
    float: left;
    margin-right: 20px;
    width: 100px;
    }
    ul.program_list {
    margin-left: 120px;
    width: auto;
    padding-bottom: 30px;
    }
    .panel-body li {
    font: 18px/28px "Segoe UI", arial, helvetica, roboto, "droid sans", sans-serif;
    margin-bottom: 5px;
    }
    .youtube-video{
    padding: 15px;
    min-width: 420px;
    }
    ul.font18
    {
    font-size: 15px;
    margin-bottom: 30px;
    }
    div.col-sm-10 ul.font18 li
    {
    list-style-type: none;
    padding: 2px 0px;
    }
    div.col-sm-10 ul.font18 li:before {
    content: "• ";
    color: rgb(251, 128, 4);; /* or whatever color you prefer */
    }
    div.col-sm-10 ul.font18 li.not-list-item:before
    {
    content: "";
    }
    h3
    {
    font-size: 24px;
    }
    h6.autors
    {
    color: rgb(251, 128, 4);
    font-size: 22px;
    }
    @media screen and (max-width: 600px)
    {
    .mobile-visibility-none
    {
    display: none;
    }
    }
    @media screen and (min-width: 768px)
    {
    #articulo {padding: 20px 70px;}
    }
    /* Estilos para que los videos de YouTube sean responsive */
    .video-container
    {
    display: block;
    margin: 0px auto 30px;
    max-width: 560px;
    max-height: 315px;
    width: 100%;
    }
    @media screen and (min-width: 360px)
    {
    .video-container
    {
    min-width: 300px;
    width: 100%;
    }
    }
    @media screen and (min-width: 768px)
    {
    .video-container
    {
    float: left;
    margin: 0px 20px 20px 0px;
    }
    }
    .video-container .video-responsive
    {
    background-color: lightblue;
    position: relative;
    padding-bottom: 56%; /* 16/9 ratio */
    padding-top: 30px; /* IE6 workaround*/
    height: 0;
    overflow: hidden;
    width: 100%;
    }
    .video-container .video-responsive iframe,
    .video-container .video-responsive object,
    .video-container .video-responsive embed
    {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
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
    
    <div class="container" id="contenedor">
      <?php include('includes/navbar.php');?>
      <section>
        <div style="background-color: #ebebeb;" class="videoint">
          <img src="http://www.aztlan.org.ar/assets/images/formation/Libro_Rojo.jpg" alt="Jung, Dalai Lama, Krishnamurti, Marlow, Grof, Wilber, Laing, Capra" width="100%" height="auto" />
        </div>
      </section>
      
      <!-- Page Content -->
      <div class="container-fluid cont-section" id="articulo">
        <div class="row">
          <div class="col-sm-9" style="overflow: hidden; padding: 0px 0px 10px 0px; margin-bottom: 30px;">
            
            <!-- titulo -->
            <div style="padding-bottom: 0px;" class="page-header articulo_header">
              <!-- ADDTHIS
              Go to www.addthis.com/dashboard to customize your tools
              <div class="addthis_inline_share_toolbox" style="margin: 20px 0px 10px 0px;"></div>
              -->
              <a name="arriba"></a>
              <h1 class="articulo_text_header" style="font-size: 26px; font-weight: 700; margin-top: 0px;text-transform: uppercase;font-family: 'pt_sansbold', sans-serif;">El Libro rojo de Carl G. Jung: Seminario de 4 clases</h1>
              <!--h2 class="h2sub" style="margin-top: 0px; margin-bottom: 5px; font-size: 18px !important; line-height: 24px!important;"></h2-->
              <hr style="margin-top: 10px; margin-bottom: 15px">
              
              <div class="row">
                <div class="col-sm-6">
                  <div class="video-container">
                    <div class="video-responsive">
                      <!--el iframe tenía: width="400" height="240"-->
                      <iframe src="https://www.youtube.com/embed/lCHmBqFzff0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <p style="font-size: 15px; margin-bottom: 4px; line-height: 145%; font-family: 'PT Sans', sans-serif; padding-right: 30px;">

                  <ul class="font18" style="margin: 0px; padding-left: 16px;">
                  <li>4 jornadas de 1h 30m cada una.</li>
                  <li>Martes 12 de Junio a las 19 hs.</li>
                  <li>Más información al 2090-8805 / 155-837-9788 (Whatsapp)</li>
                </ul>
                <br/>
                  En 1957, C. G. Jung declaró que los eventos de sus imaginaciones y visones grabadas en el Libro Rojo: Liber Novus – que comenzó a transcribir en 1914 – eran la base de todo su trabajo subsiguiente: En palabras de Jung sobre el Libro Rojo - “Mi vida vida entera consistió en elaborar lo que irrumpió de lo Inconsciente y me inundó como una misteriosa corriente … Todo lo que siguió después fue solo el ordenamiento exterior, la elaboración científica, y el integrarlo en mi vida. Pero el numinoso comienzo, que contenía todo, comenzó allí.”</p>
                </div>
              </div>
              
            </div>
            <div class="row">
              <h2 class="h2sub" style="margin-bottom: 5px; margin-top: 0px; font-size: 19px !important; line-height: 24px!important; padding-left: 15px;">PROGRAMA DEL SEMINARIO</h2>
              <h3 class="h2sub" style="margin-bottom: 5px; margin-top: 0px; font-size: 17px !important; line-height: 24px!important; padding-left: 15px;">El Libro Rojo: Liber Novus</h3>
              <div class="col-md-6">
                
                <ul class="font18" style="margin: 0px; padding-left: 16px;">
                  <li>El Viaje al Inconsciente.</li>
                  <li>La integración y asimilación del Inconsciente.</li>
                  <li>La técnica de la Imaginación Activa. </li>
                  <li>Explicación de la Estructura del Libro. </li>
                  <li>La expresión de los Arquetipos a través de la obra</li>
                </ul>
              </div>
              <div class="col-md-6">
                
                <ul class="font18" style="margin: 0px; padding-left: 16px;">
                  <li>Breve biografía de Carl G. Jung.</li>
                  <li>Las influencias que recibió. Cómo se fue construyendo su visón del mundo.</li>
                  <li>La estructura de la Mente para Jung. Ego, Inconsciente Personal e Inconsciente Colectivo.</li>
                </ul>
              </div>
            </div>
            <br>
            

            <hr style="margin-top: 10px; margin-bottom: 15px">

            <div >
              <p style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif; float: left;"><span style="font-family: 'pt_sansbold', sans-serif;"> Valor: </span>$1500 </p>
            </div>
            
            <div style="text-align: center; margin: 60px 0px 0px 0px; border-radius: 2px;" class="mobile-visibility-none">
              <a href="#arriba" class="button solicita_btn" style="padding: 8px 13px;">SOLICITÁ MÁS INFORMACIÓN AQUÍ</a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <a name="solicita-mas-informacion-aqui"></a>
              
              <div class="rside-blog" id="cajaform" style="margin-bottom: 15px; background-color: #001c3d; border: none;    border-radius: 3px;">
  
  <div class="contacto">
    <div>
      <form id="contact" action="contacto_curso_anual_psicologia.php" method="post">
        <h3 class="h2sub" style="margin-bottom: 5px; margin-top: 0px; font-size: 18px !important; line-height: 24px!important; color: #fff">Solicitá más información</h3>
        <fieldset>
          <input style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif;" name="nombre" placeholder="Nombre y Apellido" type="text" tabindex="1" required style="border-radius: 0px; border: none;" />
        </fieldset>
        <fieldset>
          <input style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif;" name="email" placeholder="Email" type="email" tabindex="2" required style="border-radius: 0px; border: none;" />
        </fieldset>
        <fieldset>
          <input style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif;" name="cel" placeholder="Celular" type="tel" tabindex="3" required style="border-radius: 0px; border: none;" />
        </fieldset>
        <fieldset>
          <input style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif;" name="dni" placeholder="DNI" type="tel" tabindex="4" required style="border-radius: 0px; border: none;" />
        </fieldset>
        <fieldset>
          <input style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif;" name="facebook" placeholder="Facebook" type="text" tabindex="5" required style="border-radius: 0px; border: none;" />
        </fieldset>
       
        <fieldset>
          <textarea  name="comentario" placeholder="Escribe tu mensaje..." tabindex="6" required style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif; margin-top: 0px; height: 130px;"></textarea>
        </fieldset>
        <p style="color: red; margin-bottom: 0"><?php if(isset($error_message)){echo $error_message;} ?></p>
        <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando" style="display: block; margin: auto; color: #fff; background-color: #337ab7; width: 100%;">ENVIAR</button>
        </fieldset>
      </form>
    </div>
  </div>
</div>

<!--REDES-->
<div class="rside" style="margin-bottom: 15px;">
  <h6 style="text-transform: none;">Seguinos en</h6>
  <ul class="list-inline" style="padding-bottom: 0px;" >
    <li style="padding-right: 0;">
      <a href="https://www.facebook.com/psicologiaholisticaztlan/">
        <img src="assets/images/footer/escuela_f.png" width="35px" class="img-responsive" style="padding-right: 0px;" alt="Image">
      </a>
    </li>
    <li style="padding-right: 0; padding-left: 3px;">
      <a href="https://twitter.com/cculturalaztlan">
        <img src="assets/images/footer/escuela_t.png" width="35px" class="img-responsive" style="padding-right: 0px;" alt="Image">
      </a>
    </li>
    <li style="padding-right: 0; padding-left: 3px;">
      <a href="https://www.instagram.com/psicologia_aztlan/">
        <img src="assets/images/footer/escuela_i.png" width="35px" class="img-responsive" style="padding-right: 0px;" alt="Image">
      </a>
    </li>
    <li style="padding-right: 0; padding-left: 3px;">
      <a href="https://www.youtube.com/c/elescarabajodeoroaztlan">
        <img src="assets/images/footer/escuela_y.png" width="35px" class="img-responsive" style="padding-right: 0px;" alt="Image">
      </a>
    </li>
  </ul>
</div>

            </div>
          </div>
        </div>
        <br />
      </div>
      <?php include('includes/footer.php');?>
    </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e95d72d475c8b"></script>
  </body>
</html>