<!--788-->
<!--Curso de Astrología-->
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
      .solicita_btn
      {
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
      .solicita_btn:hover
      {
          color: white;
          background: #be0f34;
          -webkit-transition: background 0.3s ease-in-out;
          -moz-transition: background 0.3s ease-in-out;
          transition: background-color 0.3s ease-in-out;
      }
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
      .video-container
      {
          display: block;
          margin: 0px auto 30px;
          max-width: 560px;
          max-height: 315px;
          width: 100%;
      }
      /* Antiguos estilos
      @media screen and (min-width: 360px)
      {
          .video-container
          {
              min-width: 300px;
              width: 50%;
          }
      }
      */
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
      @media screen and (max-width: 600px)
      {
          .articulo_text_header
          {
              font-size: 26px;
          }
          .mobile-visibility-none
          {
              display: none;
          }
      }

      /* ▼▼▼▼▼▼▼▼▼▼ NOTAS ▼▼▼▼▼▼▼▼▼▼
      SHORTHAND > font: font-style // font-variant // font-weight // font-size // font-family;

      Tamaños Bootstrap:
      xs: <768 (hasta 767)
      sm: >=768 (hasta 991)
      md: >=992 (hasta 1199)
      lg: >=1200 (en adelante)
      ▲▲▲▲▲▲▲▲▲▲ FIN NOTAS ▲▲▲▲▲▲▲▲▲▲ */

      /* ▼▼▼▼▼▼ Estilos <768 (tamaño xs en Bootstrap) ▼▼▼▼▼▼ */
      /* Contenedor de la sección de contenido */
      .harmonic-styles
      {
        border-bottom: 1px solid #ddd;
        margin: 20px 0px 10px -10px;
        padding: 0px 0px 5px 0px;
        width: 100%;
      }

      /* Cabecera del contenido donde está
         la información operativa del evento */
      .harmonic-styles .header-section
      {
        border-bottom: 1px solid #ddd;
        margin: 0px;
        padding: 0px;
      }

      /* Título */
      .harmonic-styles h1
      {
        color: #414141;
        font-family: "Roboto", Arial, sans-serif;
        font-size: 27px;
        font-weight: 500;
        line-height: 110%;
        margin: 0px;
      }

      /* Subtítulo */
      .harmonic-styles h2
      {
        color: #414141;
        font-family: "Roboto", Arial, sans-serif;
        font-size: 22px;
        font-weight: 500;
        line-height: 110%;
        margin: 8px 0px 0px 0px;
      }

      /* Tipo de evento (CHARLA, CLASE PRESENCIAL, etc.) */
      .harmonic-styles .header-section h3
      {
        border-left-style: solid;
        border-left-width: 2px;
        font-family: "Roboto", Arial, sans-serif;
        font-size: 16px;
        font-weight: 600;
        line-height: 145%;
        margin: 0px 0px 7px 0px;
        padding: 0px 0px 0px 7px;
      }

      /* Color lila del tipo de evento, en eventos de astrología */
      .harmonic-styles.astro .header-section h3
      {
        border-left-color: #9f6cf7;
        color: #9f6cf7;
      }

      /* Color azul claro del tipo de evento, en eventos de psicología */
      .harmonic-styles.psico .header-section h3
      {
        border-left-color: #3c59ea;
        color: #3c59ea;
      }

      /* Fecha */
      .harmonic-styles h4
      {
        color: #414141;
        font-family: "Roboto", Arial, sans-serif;
        font-size: 15px;
        font-weight: 300;
        line-height: 145%;
        margin: 7px 0px 10px 0px;
      }

      /* Título menor dentro del contenido */
      .harmonic-styles h5
      {
        color: #545454;
        font-family: "PT Sans", "Roboto", sans-serif;
        font-size: 18px;
        font-weight: 700;
        line-height: 145%;
        margin: 8px 0px;
        padding: 0px;
      }

      /* Párrafos */
      .harmonic-styles p
      {
        color: #545454;
        font-family: "PT Sans", "Roboto", sans-serif;
        font-size: 15px;
        font-weight: 400;
        line-height: 145%;
        margin: 8px 0px;
      }

      /* Negritas dentro de los párrafos e items de listas no ordenadas */
      .harmonic-styles p strong,
      .harmonic-styles li strong,
      {
        color: #606060;
        font-weight: 700;
      }

      /* Links */
      .harmonic-styles p a,
      .harmonic-styles p a:active,
      .harmonic-styles p a:link,
      .harmonic-styles p a:visited,
      {
        color: #3c59ea;
        font-weight: 400;
      }

      /* Listas no ordenadas */
      .harmonic-styles ul
      {
        color: #545454;
        font-family: "PT Sans", "Roboto", sans-serif;
        font-size: 15px;
        font-weight: 400;
        line-height: 145%;
        list-style-type: none;
        padding: 0px 0px 0px 15px;
        margin: 0px;
      }

      /* Items de las listas no ordenadas */
      .harmonic-styles ul li
      {
        margin: 5px 0px;
        padding: 0px;
      }

      @media screen and (min-width: 768px)
      {
        /* ▼▼▼▼▼▼ Estilos para >=768 (tamaños sm, md y lg en Bootstrap) ▼▼▼▼▼▼ */
        /* Contenedor de la sección de contenido */
        .harmonic-styles
        {
          margin: 30px auto 30px 20px;
          width: 100%;
        }

        /* Cabecera del contenido donde está
           la información operativa del evento */
        .harmonic-styles .header-section
        {
          border-bottom: 1px solid #ddd;
          margin: 0px;
          padding: 0px;
        }

        /* Título */
        .harmonic-styles h1
        {
          color: #414141;
          font-family: "Roboto", Arial, sans-serif;
          font-size: 27px;
          font-weight: 500;
          line-height: 145%;
          margin: 0px;
        }

        /* Subtítulo */
        .harmonic-styles h2
        {
          color: #414141;
          font-family: "Roboto", Arial, sans-serif;
          font-size: 22px;
          font-weight: 300;
          line-height: 145%;
          margin: 0px;
        }

        /* Tipo de evento (CHARLA, CLASE PRESENCIAL, etc.) */
        .harmonic-styles h3
        {
          border-left: 2px solid #9f6cf7;
          color: #9f6cf7;
          font-family: "Roboto", Arial, sans-serif;
          font-size: 16px;
          font-weight: 600;
          line-height: 145%;
          margin: 0px;
          padding: 0px 0px 0px 7px;
        }

        /* Fecha */
        .harmonic-styles h4
        {
          color: #414141;
          font-family: "Roboto", Arial, sans-serif;
          font-size: 15px;
          font-weight: 300;
          line-height: 145%;
          margin: 7px 0px 10px 0px;
        }

        /* Título menor dentro del contenido */
        .harmonic-styles h5
        {
          color: #545454;
          font-family: "PT Sans", "Roboto", sans-serif;
          font-size: 20px;
          font-weight: 700;
          line-height: 145%;
          margin: 8px 0px;
          padding: 0px;
        }

        /* Párrafos */
        .harmonic-styles p
        {
          color: #545454;
          font-family: "PT Sans", "Roboto", sans-serif;
          font-size: 15px;
          font-weight: 400;
          line-height: 145%;
          margin: 15px 0px;
        }

        /* Los párrafos que estén inmediatamente después de un h5 */
        .harmonic-styles h5 + p
        {
          margin-top: 8px;
        }

        /* Negritas dentro de los párrafos */
        .harmonic-styles p strong,
        .harmonic-styles li strong,
        {
          color: #606060;
          font-weight: 700;
        }

        /* Links */
        .harmonic-styles p a,
        .harmonic-styles p a:active,
        .harmonic-styles p a:link,
        .harmonic-styles p a:visited,
        {
          color: #3c59ea;
          font-weight: 400;
        }

        /* Listas no ordenadas */
        .harmonic-styles ul
        {
          color: #545454;
          font-family: "PT Sans", "Roboto", sans-serif;
          font-size: 15px;
          font-weight: 400;
          line-height: 145%;
          list-style-type: disc;
          padding: 0px 0px 0px 30px;
          margin: 0px;
        }

        /* Items de las listas no ordenadas */
        .harmonic-styles ul li
        {
          margin: 5px 0px;
          padding: 0px;
        }

        /* El primer li de los ul que estén inmediatamente después de un h5 */
        .harmonic-styles h5 + ul li:first-child
        {
          margin-top: 8px;
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
            <a href="#" name="form-desde-abajo"></a>
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
        <div class="container-fluid" style="background-color: #fff; padding: 0px 30px 0px 30px;">
            <div class="row">
                <div class="col-xs-12 col-md-9" style="margin-bottom: 0px; padding-right: 40px;">
                  <!-- ELEMENTOS CON UN ESTILO EN MÓVILES Y UN ESTILO EN ORDENADORES -->
                  <div class="harmonic-styles astro">
                    <div class="header-section">
                      <h3>CURSO</h3>
                      <h1>El Alfabeto Astrológico</h1>                      
                      <h4><strong>Fecha Inicio:</strong> Lunes 6 de Enero a las 19 hs.</h4>
                      <P>Solicitá tu descuento de $400 sobre el valor total - Sujeto a disponibilidad</p>
                    </div>

                <div class="row" style="margin-bottom: 0px; padding-bottom: 0px;">
                  <div class="col-xs-12 col-md-6" style="width: 486px">
                    <div class="iframe-global-responsive-container">
                      <div class="iframe-container">
                        <iframe width="460" height="260" src="https://www.youtube.com/embed/kK8DIuCGzR0" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>


                  <div class="col-xs-12 col-md-6">
                    <p>
                      <strong>TEMARIO:</strong>
                      <br>
                      - <b>Signos:</b> La Psicología y la Correspondencia Física de cada uno de los 12 arquetipos zodiacales.
                      <br>
                      - <b>Planetas:</b> Qué son los planetas en sentido Astrológico. Su significado en el plano Psicológico y Físico.
                      <br>
                      - <b>Casas:</b> Qué campos de la experiencia se destacan en nuestro Destino y cuáles podemos hacer más consciente.
                      <br>
                      - <b>Aspectos:</b> Cómo son las relaciones Armónicas y tensas entre los diferentes aspectos de nuestra Personalidad y situaciones de la Vida.
                    </p>
                  </div>  
                </div>

                    <!--p><strong>Valor:</strong> $150</p-->
                    
                    <div>
                      <p style="font-size: 18px;">Con tu carta natal vas a empezar a trabajar el poder alcanzar el logro de tus objetivos en 3 niveles:</p>
                      <ul>
                        <li><b>Profesional y Económico:</b> Cómo descubrir tu vocación o si ya la has descubierto mejorar tu desempeño profesional. Cómo manejar y obtener recursos económicos para tener una vida más próspera.</li>
                        <li><b>Afectivo:</b> Mejorar el modo de relacionarte con los demás. Pareja, amistades y grupos.</li>
                        <li><b>Salud:</b> incrementar tu vitalidad y mejorar la relación con tu cuerpo utilizando las energías inscriptas en tu carta natal. Desarrollá un programa integral de salud hecho a tu medida.</li>
                      </ul>

                      <p>De regalo el dibujo de tu Carta Natal.</p>

                      <p>- Duración: 4 Clases de 1 hs. 30 m. Una vez por semana.<br>- Valor: $2800.</p>

                    </div>

                    <a href="#form-desde-abajo" class="button solicita_btn mobile-visibility-none hidden-sm" style="display: inline-block; padding: 8px 13px; text-align: center; margin: 0px 0px 30px 0px; border-radius: 2px;">RESERVAR LUGAR</a>
                  </div>
                  <!-- /FIN ELEMENTOS CON UN ESTILO EN MÓVILES Y UN ESTILO EN ORDENADORES -->
            
                  <div class="visible-xs" id="mobile-contents">
                    
                    <div class="col-xs-12 visible-xs visible-sm" style="background-color: #fff;">
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

                <div class="col-xs-12 col-md-3" style="padding-top: 10px;">
                  <?php include('../../includes/rside-talleres-astro.php');?>
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