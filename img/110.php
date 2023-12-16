<!--110-->
<?php
//var_dump($camp);
$horario = $evento->horario;
$horario_2 = $evento->maxHorario;
$dia = $evento->fechaStr;
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aztlan - Escuela de Astrolog&iacute;a -</title>
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://aztlan.org.ar/pages/psi/?c=<?php echo $_GET['c']?>/2" />
    <meta property="og:title" content="Centro Cultural de Astrolog&#237;a - Almagro"/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content="Centro Cultural de Astrolog&#237;a"/>
    <meta property="og:description" content="Claves para el Autoconocimiento y el Desarrollo Personal" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900,600,800,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="http://aztlan.org.ar/pages/psi/site/css/estilos_v2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../centroastrologico/css/general.css" />
    <link rel="stylesheet" type="text/css" href="../../centroastrologico/css/texts.css" />
    <script type="text/javascript">
    var CaptchaCallback = function(){
    grecaptcha.render('RecaptchaField1', {'sitekey' : '6Lf6nSATAAAAAMyU6v4acFZiHVpGi-GZO-SW1Eum'});
    grecaptcha.render('RecaptchaField2', {'sitekey' : '6Lf6nSATAAAAAMyU6v4acFZiHVpGi-GZO-SW1Eum', 'size':'compact'});
    };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?hl=es&onload=CaptchaCallback&render=explicit" async defer></script>
    <?php echo '<script>var evento='.$evt.',tipo='.$evento->tipoEvento_idTipo.',owner='.$owner.',source='.$source.';</script>'?>
    <script src="site/script.js?random=<?php echo uniqid(); ?>"></script>
    <script src="site/js/site.js?random=<?php echo uniqid(); ?>"></script>
    <!--satro_v2_reserva.php-->
    <style>
      div.col-sm-10 ul.font18 li
      {
          list-style-type: none;
          padding: 2px 0px;
      }
      div.col-sm-10 ul.font18 li:before
      {
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
      h6
      {
          color: rgb(251, 128, 4);
          font-size: 22px;
      }
      p
      {
        font-size: 18px;
        line-height: 160%;
        margin-bottom: 20px;
      }
      p strong
      {
        font-family: "Open Sans", "Segoe UI", Arial, sans-serif;
        font-weight: 700;
        text-transform: none;
      }
      p + ul
      {
        margin-top: 0px;
      }
      ul.font18,
      ol.font18
      {
        font-size: 18px;
        margin-bottom: 30px;
      }
      @media screen and (max-width: 600px)
      {
          .mobile-visibility-none
          {
              display: none;
          }
      }
    </style>
  </head>
  <body class="astro" margin="0">
    <div id="fb-root"></div>
    
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=1550425018612860";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <div class="container" id="container" style="padding-left: 0px; padding-right: 0px;">
      <?php include('../../centroastrologico/site/header.php');?>
      <!--   BEGIN CONTENTS    -->
      <div class="visible-md visible-lg" id="contents2" style="background-image:url('../../../images/eventos/landing/<?php echo $evento->idEvento?>.jpg') !important">
        <div id="form" class="hidden-xs hidden-sm">
          <form class="form-horizontal" role="form">
            <legend class="envianos">&iexcl;Reserv&aacute; tu lugar!</legend>
            <legend class="envianos">Todas las reservas quedan sujetas a confirmaci&oacute;n seg&uacute;n disponibilidad.</legend>
            <div class="form-group" >
              <label for="inputName" class="col-xs-3 control-label">Nombre</label>
              <div class="col-xs-9">
                <input type="text" class="form-control"  name="nombre" validate chars="3" msg="Debes ingresar tu nombre" value="Nombres"
                placeholder="Nombre" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="inputLastname" class="col-xs-3 control-label">Apellido</label>
              <div class="col-xs-9">
                <input type="text" class="form-control" name="apellido" validate chars="3" msg="Debes ingresar tu apellido" value="Apellidos"
                placeholder="Apellido" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="dni" class="col-sm-3 control-label">Dni</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="dni" validate chars="8" msg="Debes ingresar tu dni" value="22333444"
                placeholder="33322211" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="inputTel" class="col-xs-3 control-label">Celular</label>
              <div class="col-xs-9">
                <input type="text" class="form-control" name="telefono" validate chars="8" msg="Debes ingresar tu celular" value="Celular"
                placeholder="Celular" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-xs-3 control-label">Email</label>
              <div class="col-xs-9">
                <input type="email" class="form-control" name="email" validate="email"  msg="Debes ingresar tu email" value="mail@hotmail.com"
                placeholder="Email" required/>
              </div>
            </div>
            <div class="form-group" >
              <label for="inputName" class="col-xs-3 control-label">Facebook </label>
              <div class="col-xs-9">
                <input type="text" class="form-control"  name="facebook" validate chars="3" msg="Debes ingresar tu facebook" value="Usuario de  Facebook"
                placeholder="Usuario de Facebook" required/>
              </div>
            </div>
            <div id="RecaptchaField1" style="margin-left: 6%;"></div>
            <p id="captchatext" style="color:#fff;text-align:center;display: none;">Debes seleccionar no soy un robot.</p>
            <input type="hidden" name="desde" value="astro">
            <input type="hidden" name="tipoform" value="reserva">
            <div class="form-group">
              <a href="site/autoreply/autoreply_fb.html">
                <button class="btnSend btn btn-warning">RESERVAR</button>
              </a>
            </div>
          </form>
        </div>
        <div class="clearfix"></div>
      </div>
      <!--   END CONTENTS    -->


      <!-- EMPIEZA TEXTO CHARLA ASTROLOGÍA -->
        <div class="container-fluid" style="background-color: #fff; padding: 0px 50px 0px 30px;">
            <div class="row">
                <div class="col-md-9 col-lg-8" style="margin-bottom: 0px;">
                    <!-- CHARLA DE ASTROLOGÍA: beggining -->
                    <div class="page-header articulo_header" style="border-bottom: none; margin-top: 20px;">
                        <h1 class="articulo_text_header" style="font-size: 45px; font-weight: 700; margin-top: 0px;">TAROT: CREA EL FUTURO</h1>
                        <h1 class="articulo_text_header" style="font-size: 40px; font-weight: 700; margin-top: 0px;">Curso de Verano</h1>
                        <br>



                        <!--p style="font-size: 20px; margin: 0px 0px 20px 0px; line-height: 175%; border-bottom: 1px solid #ddd; padding-bottom: 20px;"> 
                        <ul style="font-size: 18px;"><strong>Inicio:</strong>
                          <li>Jueves 18 de Enero a las 11 hs.</li>
                          <li>Miercoles 7 de Febrero a las 11 hs.</li>
                        </ul>
                        </p-->

                        <p style="font-size: 17px;margin-bottom: 0;"><strong>Enero</strong>
                          <br>Turno mañana:</p>
                        <ul style="margin-bottom: 10px; list-style-position: inside; padding-left: 0;">
                          <li style="font-size: 17px;">Jueves 8 de Febrero a las 11 hs.</li>
                        </ul> 

                        <br><br>



                        
                        <p style="font-size: 25px;">¿Para qué aprender Tarot?</p>
                        
                        <ul>
                          <li style="font-size: 18px;">Para obtener una guía a la hora de tomar decisiones y decidir sobre nuestro presente y futuro.</li>
                        <li style="font-size: 18px;">Para conectarnos con nuestra sabiduría interior y el conocimiento de los Arquetipos.</li>

                          <li style="font-size: 18px;">Aprender a leer el lenguaje del Tarot nos ayuda a través de sus símbolos, a entender de dónde venimos y hacia dónde vamos, observando el presente.</li>

                          <li style="font-size: 18px;">El Tarot es un puente, entre el consciente y el inconsciente, entre el adentro y el afuera, muestra el conflicto y también las soluciones posibles, conectando con el poder personal.</li>

                          <li style="font-size: 18px;">En los cursos de Tarot estudiamos el lenguaje y la filosofía tarótica, aparte de aprender a leer, realizar ejercicios, trabajando con los dos aspectos de nuestra mente: el racional y el intuitivo.</li>

                          <li style="font-size: 18px;">Estudiamos sus orígenes y su historia. Profundizamos en los símbolos y en el trabajo personal con los Arcanos, para luego si lo deseas, poder trabajar con otras personas.</li>

                          <li style="font-size: 18px;">Ley de SINCRONICIDAD ¿Existen las Casualidades?</li>
                          <li style="font-size: 18px;">El Tarot como expresión de la Sabiduría Ancestral del Inconsciente Colectivo.</li>
                          </ul>
                        <br>
                        <p><strong>Duración: </strong>1 Módulo de 4 Clases.</p>
                         <p><strong>Frecuencia: </strong>Una vez por semana. Cada clase dura 1 h 30 min.</p>
                         <p><strong>Valor:</strong> $1.300</p>

                        <p>Dictado por Lucía Pocosgnich – Consultora Astrológica y Profesora de Tarot, Psicología y Astrología de la Escuela de Psicología y Filosofía Aztlan y del Centro Astrológico Aztlan</p>
                        
                             <!--
                          <h4>

                        <ul><br>
                          <li>La entrada al Mundo Mágico de las Runas.</li><br>
                          <li>El Legado de la Atlántida.</li><br>
                          <li>El “Futhark” no es un alfabeto o un abecedario.</li><br>
                          <li>Simbolismo de las Runas para una práctica Psico-Física.</li><br>
                          <li>Armonizar y conectar nuestras Emociones, Pensamientos y Cuerpo con las Runas.</li><br>
                        </ul>
                        </h4>
                        --> 
                    </div>


                    <p style="font-size: 18px; margin: 0px 0px 20px 0px; line-height: 175%; border-bottom: 1px solid #ddd; padding-bottom: 20px;">
                    <!-- CHARLA DE ASTROLOGÍA: end -->
                    
                    <div class="visible-xs" id="mobile-contents">
                      
                      <div class="col-xs-12  visible-xs visible-sm" style="background-color: #fff;">
                        <div class="form-mobile">
                          <form class="form-horizontal" role="form">
                            <legend class="envianos">&iexcl;Reserv&aacute; tu lugar!</legend>
                            <legend class="envianos">Todas las reservas quedan sujetas a confirmaci&oacute;n seg&uacute;n disponibilidad.</legend>
                            <div class="form-group" >
                              <div class="col-xs-12">
                                <input type="text" class="form-control"  name="nombre" validate chars="3" msg="Debes ingresar tu nombre" value="Nombres" placeholder="Nombre" required/>
                              </div>
                            </div>
                            <div class="form-group" >
                              <div class="col-xs-12">
                                <input type="text" class="form-control" name="apellido" validate chars="3" msg="Debes ingresar tu apellido" value="Apellidos" placeholder="Apellido" required/>
                              </div>
                            </div>
                            <div class="form-group" >
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="dni" validate chars="8" msg="Debes ingresar tu dni" value="33222444" placeholder="dni" required/>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-xs-12">
                                <input type="text" class="form-control" name="telefono" validate chars="8"  msg="Debes ingresar tu celular" value="Celular" placeholder="Celular" required/>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-xs-12">
                                <input type="email" class="form-control" name="email" validate="email"  msg="Debes ingresar tu email" value="mail@hotmail.com" placeholder="Email" required/>
                              </div>
                            </div>
                            <div class="form-group" >
                              <div class="col-xs-12">
                                <input type="text" class="form-control"  name="facebook" validate chars="3" msg="Debes ingresar tu facebook" value="Usuario de Facebook" placeholder="Usuario de Facebook" required/>
                              </div>
                            </div>
                            
                            <div id="RecaptchaField2" style="margin-left: 10%;"></div>
                          
                            <p id="captchatextmobile" style="color:#fff;text-align:center;display: none;">Debes seleccionar no soy un robot.</p>
                            <div style="width: 100%;">
                              <input type="hidden" name="desde" value="astro">
                              <input type="hidden" name="tipoform" value="reserva">
                              <div class="form-group">
                                <button class="btnSend mobile btn btn-warning btn-lg">RESERVAR</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      
                      <div class="clearfix"></div>
                    </div>

                    <div class="page-header articulo_header" style="border-bottom: none; padding-bottom: 0 !important; margin: 0 !important; border-bottom: 0 !important">
                    </div>
                    
                    <br><br><br>
                </div>

                <div class="col-md-3 col-lg-4" style="padding: 50px;">
                  <?php include('../../includes/rside-para-landings-fanpage-astro.php');?>
                </div>
            </div>
        </div>
      <!-- TERMINA TEXTO CHARLA ASTROLOGÍA -->

    </div>
    <div align="center">
      <div style="height: auto; background-color: #ebebeb; max-width: 1600px;">
        <?php include('../../centroastrologico/site/footer.php');?>
      </div>
    </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>