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
    margin: 0 0 5px;
    padding: 10px 19px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    font: bold 16px "PT Sans", sans-serif;
    text-transform: uppercase;
    }
    .solicita_btn:hover {
    background: #be0f34;
    -webkit-transition: background 0.3s ease-in-out;
    -moz-transition: background 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
    }
    .tab-content p{
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
    #tab1default>a:hover {
    color: white;
    }
    .youtube-video{
      padding: 15px;
      min-width: : 420px;
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
        <div style="height: auto;background-color: #ebebeb;max-width: 1600px;">
          <img class="img-responsive" src="assets/images/articulos/formacion-corta.jpg" alt=""/>
        </section>
        <!-- Page Content -->
        <div class="container-fluid cont-section" style="padding-top:20px" id="articulo">
          <!-- /.row -->
          <div class="row">
            <div class="col-sm-9">
              
              <!-- titulo -->
              <div class="page-header articulo_header">
                <h2 class="articulo_text_header">Formación Corta</h2>
                <div class="panel with-nav-tabs panel-default">
                  <div class="panel-heading">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab1default" data-toggle="tab">MODALIDAD DE CURSADA</a></li>
                      <li><a href="#tab2default" data-toggle="tab">PLAN DE ESTUDIOS</a></li>
                      <li><a href="#tab4default" data-toggle="tab">OBJETIVOS</a></li>
                      <li><a href="#tab5default" data-toggle="tab">ORIENTADO a...</a></li>
                    </ul>
                  </div>
                  <div class="panel-body">
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="tab1default">
                        <span class="curso">Psicología Holística del Siglo XXI</span>
                        <h6>D&iacute;as y Horarios:</h6>
                        <ul>
                          <li>Turno Matutino:&nbsp;Martes 10:30 a 12:15hs.</li>
                          <li>Turno Vespertino:&nbsp;Martes 19 hs. a 20:45 hs. o Sábados 11 hs. a 12:45 hs.</li>
                          
                          <li>Duraci&oacute;n:&nbsp;3 meses.</li>
                          <li>Frecuencia: 1 vez por semana. </li>
                          <li>Duraci&oacute;n de la clase: 1 hora 30 min cada clase.</li>
                        </ul>
                        <p style="font-weight: bold;">ABIERTA LA INSCRIPCIÓN a la formación en Psicología Holística.</p>
                        <a href="contacto.php" class="button solicita_btn">SOLICITÁ MÁS INFORMACIÓN AQUÍ</a>
                        <!-- <button class="solicita_btn">SOLICITÁ MÁS INFORMACIÓN AQUÍ</button> -->
                      </div>
                      <div class="tab-pane fade" id="tab2default">
                        <p><span style="color:#000000;"><strong><span style="font-size:16px;">Temas de la Psicolog&iacute;a Arquet&iacute;pica de Carl G. Jung</span></strong></span></p>
                        <img src="assets/images/formation/FORMACION-CORTA-PSICOsmall.jpg" style="float:right;" class="img-responsive" alt="Image">
                        <ul>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">La Psique como Alma.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">La concepci&oacute;n de la Mente para Jung.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">El Ego y lo que hay m&aacute;s all&aacute; del Ego.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">El Inconsciente Personal: los Complejos.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">El Inconsciente Colectivo.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Arquetipos: Personaje - Anima / Animus - La Sombra - El S&iacute; Mismo.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">La L&iacute;bido como Energ&iacute;a Ps&iacute;quica.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Valores Ps&iacute;quicos.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Canalizaci&oacute;n de Energ&iacute;a.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Iniciaci&oacute;n (Individualizaci&oacute;n).</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Funci&oacute;n Trascendente.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Tipos Psicol&oacute;gicos.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Mitos, Simbolismo y Sue&ntilde;os.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Principio de Sincronicidad.</span></li>
                        </ul>
                        <p><span style="font-size:16px;"><span style="color:#000000;"><strong>Temas de la Psicolog&iacute;a Para el Despertar del Cuarto Camino de G. I. Gurdjieff</strong></span></span></p>
                        <ul>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">El Cuarto Camino.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Yoes. La ausencia de unidad en el Hombre.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Personalidad. Falsa Personalidad y Esencia.<span style="color:#000000;">Observaci&oacute;n de s&iacute;.</span></span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">El trabajo sobre los Shock.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">El Recuerdo de S&iacute;. El Yo Real.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Los Cuatro Estados de Consciencia. - Sue&ntilde;o - Vigilia - Consciencia de S&iacute; -Consciencia Objetiva.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Los Niveles de Consciencia.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Las Funciones Psicol&oacute;gicas y los Centros: Intelectual &ndash; Emocional &ndash; Vegetativo - Motriz.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Emociones negativas. Transformaci&oacute;n. - No represi&oacute;n.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">No Consideraci&oacute;n interna y Consideraci&oacute;n externa.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">No identificaci&oacute;n.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Cosmolog&iacute;a: El Rayo de Creaci&oacute;n.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">La Relaci&oacute;n Cuerpo-Mente y su alquimia (&ldquo;Hidr&oacute;genos&rdquo;).</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Los 3 Alimentos.</span></li>
                          <li style="margin-left: -15pt;"><span style="color:#000000;">Los Eventos y los Estados.</span></li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="tab4default">
                        <ul class="formation_list">
                          <li><span style="color:#000000;">Conocer los principales sistemas que componen la Psicolog&iacute;a Integral: la Psicolog&iacute;a del Inconsciente colectivo de Jung y el Cuarto Camino de Gurdjieff.</span></li>
                          <li><span style="color:#000000;">Comprender las diferencias de la Psicolog&iacute;a integral con otras teor&iacute;as psicol&oacute;gicas materialistas.</span></li>
                          <li><span style="color:#000000;">Aplicar t&eacute;cnicas pr&aacute;cticas para el autoconocimiento y el desarrollo de la consciencia.</span></li>
                          <li><span style="color:#000000;">Conocer los mecanismos de la mente y aprender a gestionar las emociones.</span></li>
                          <li><span style="color:#000000;">Combinar los principios y los m&eacute;todos de la Psicolog&iacute;a moderna con las tradiciones espirituales del mundo, acerca de la transformaci&oacute;n de la conciencia tanto de Oriente como de Occidente.</span></li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="tab5default">
                        <ul class="formation_list">
                          <li><span style="color:#000000;">Estudiantes y profesionales de todas las ramas del conocimiento.</span></li>
                          <li><span style="color:#000000;">Todos aquellos que deseen obtener instrumentos &uacute;tiles para conocer las causas de nuestros desequilibrios y tener una mayor comprensi&oacute;n de nuestra mente.</span></li>
                          <li><span style="color:#000000;">Quienes busquen adquirir nuevas herramientas para mejorar la calidad de sus relaciones, desempe&ntilde;o laboral y vida personal.</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="youtube-video">
                    <iframe width="100%" height="250"
                    src="https://www.youtube.com/embed/aEipnTZa404">
                    </iframe>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="youtube-video">
                    <iframe width="100%" height="250"
                    src="https://www.youtube.com/embed/-2kQ1ISpvj4">
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="youtube-video">
                    <iframe width="100%" height="250"
                    src="https://www.youtube.com/embed/-Gfs1ZNk34M">
                    </iframe>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="youtube-video">
                    <iframe width="100%" height="250"
                    src="https://www.youtube.com/embed/Zm1OU5gs0_g">
                    </iframe>
                  </div>
                </div>
              </div>
            </div>
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