<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include('site/head.php'); ?>
		<style>

			/*  ESTILOS DEL FORMULARIO */
			.contacto {
				background: #5E397A;
				width: 100%;
				padding: 20px;
				margin-top: 50px;
				margin-bottom: 50px;
			}

			input, textarea {
				padding: 10px;
				margin: 10px 0px;
				font-size: 1.5em;
				width: 100%;
			}

			button {
				background: #4C0B5F;
				color: #fff;
				border-radius: 2px;
				border: none;
				padding: 10px 20px;
				font-size: 1.5em;
				font-weight: bold;
				margin-top: 10px!important;
			}

			/*  FIN ESTILOS DEL FORMULARIO */

			.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover, .dropdown-menu>li>a:hover
			{
				color: #ff8b1e;
				text-decoration: none;
				background-color: #f5f5f5;
				outline: 0;
			}
			.panel-default
			{
				border-color: white;
			}
			.panel-default>.panel-heading
			{
				color: #333;
				background-color: white;
				border-color: white;
			}
			.nav-tabs
			{
				border-bottom: 0px solid white;
			}
			.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover
			{
				color: white;
				cursor: default;
				background-color: #ff8b1e;
				border: 0px solid #ddd;
				border-bottom-color: transparent;
			}
			.nav-tabs>li>a:hover
			{
				border-color: white white white;
				font-size: 17px;
			}
			.nav-tabs>li>a
			{
				border-color: white white white;
				font-size: 17px;
				color:#ff8b1e;
			}
			.solicita_btn
			{
				cursor: pointer;
				border: none;
				background: #3277ae;
				color: #FFF;
				margin: 0 0 5px;
				padding: 10px 19px;
				-webkit-border-radius: 3px;
				-moz-border-radius: 3px;
				border-radius: 3px;
				font: bold 17px "PT Sans", sans-serif;
				text-transform: uppercase;
			}
			.solicita_btn:hover
			{
				background: #be0f34;
				-webkit-transition: background 0.3s ease-in-out;
				-moz-transition: background 0.3s ease-in-out;
				transition: background-color 0.3s ease-in-out;
			}
			.tab-content p
			{
				font-size: 17px!important;
			}
			img.program_image
			{
				float: left;
				margin-right: 20px;
				width: 100px;
			}
			ul.program_list
			{
				margin-left: 120px;
				width: auto;
				padding-bottom: 30px;
			}
			a, a:link, a:visited, a:hover, a:focus
			{
				color: #fff;
			}
			.article_image
			{
				max-width: 100%;
			}
			h2.title
			{
				font-size: 20px;
				color:#333333;
				font-weight: normal;
				margin-top:28px;

			}
			.panel-default h3
			{
				font-size: 17px;
				border-bottom: 0px;
			}
			h4.subtitle
			{
				color:#ff8b1e;
				font-weight: bold;
				font-size: 19px;
			}
			.panel-default h5
			{
				color:#333333;
				font-size: 17px;
				padding-bottom: 5px;
			}

			.col-sm-6
			{
				padding-bottom: 17px;
			}
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
                    width: 50%;
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
          padding-bottom: 50%; /* 16/9 ratio */
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
			.main_section .container-fluid .row .col-md-9 section p
			{
				font-size: 1.8em;
			}

			@media only screen and (max-width: 460px) {
            .titulo-mobile 
            {
                font-size: 17px!important;
            }
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
		<section>
        <div style="background-color: #ebebeb;" class="videoint">
          <img src="http://www.aztlan.org.ar/assets/images/formation/Astro2019-Slide.jpg"width="100%" height="auto" />
        </div>
      </section>
			<section id="content_section" style="margin-left: 30px;">
				<!-- Secci&oacute;n principal > comienzo -->
				<section class="main_section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-9" style="padding: 0px;">
								<section class="article_section" style="padding-right: 80px; padding-bottom: 50px;">
                       <h2 id="top" class="articulo_text_header titulo-mobile" style="font-size: 25px; font-weight: 700; margin-bottom: 0; margin-top: 0px; text-transform: uppercase;">El Alfabeto Astrológico</h2>
								
                        <p  style="font-size: 21px; padding: 0px; margin-top: 5px;">-Curso de Verano-</p>
                        <!--p style="font-size: 17px;">- Averiguá por Descuentos -</p-->
                        <div class="texto" style="margin-right: 0px;">

                        <hr style="margin-top: 5px;">

                      <div class="video-container">
                        <div class="video-responsive">
                        <iframe width="565" height="300" src="https://www.youtube.com/embed/kK8DIuCGzR0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </div>
                  	  </div>
						<br>
						<!--p style="font-size: 16px; margin-bottom: 0; margin-top: -15px"><strong>INICIO: ENERO.</strong><br>Turno mañana:</p>
						<ul style="margin-bottom: 10px; list-style-position: inside;">
							<li style="font-size: 15px;margin-bottom: 10px;">Jueves 24 de Enero, 10:30 hs.</li>
						</ul>
						<br>

						<p style="font-size: 16px; margin-bottom: 0;">Turno tarde:</p>
						<ul style="margin-bottom: 10px; list-style-position: inside;">
							<li style="font-size: 15px;">Jueves 24 de Enero, 19 hs.</li>
						</ul>
						<br-->

						<p style="font-size: 16px; margin-bottom: 0; margin-top: -15px"><strong>INICIO: FEBRERO.</strong><br>Turno mañana:</p>
						<ul style="margin-bottom: 10px; list-style-position: inside;">
							<li style="font-size: 15px;margin-bottom: 10px;">Lunes 11 y Jueves 14 de Febrero, 10:30 hs.</li>
						</ul>
						<br>
						<p style="font-size: 16px; margin-bottom: 0;">Turno tarde:</p>
						<ul style="margin-bottom: 10px; list-style-position: inside;">
							<li style="font-size: 15px;">Lunes 11 y Jueves 14 de Febrero, 19 hs.</li>
						</ul>
						
						<p style="font-size: 15px; margin-bottom: 0;">
	                        <strong>Duración: </strong> 1 Módulo de 4 clases.</p>
	                    
						<p style="font-size: 15px; margin-bottom: 0;">
							<strong>Frecuencia: </strong>1 vez por semana, 1 h 30 m cada clase.</p>
						<p style="font-size: 15px; margin-bottom: 0;">
							<strong>Precio: </strong>$2000.</p><br><br>
						<p style="font-size: 15px; margin-bottom: 0; text-align: center;">
							<strong>Matrícula bonificada</strong></p> 
						<p style="font-size: 15px; margin-bottom: 0; text-align: center;">
							<strong>Las inscripciones a los cursos se realizan mediante entrevista presencial.</strong></p>  
					
                    <hr>
            <h4 class="h2sub" style="margin-bottom: 5px; margin-top: 0px; font-size: 20px !important;">TEMARIO:<br><br>
            El Alfabeto Astrológico:</h4>
            <ul class="font18" style="margin: 0px; padding-left: 16px; font-size: 15px; line-height: 25px;">
              <li><strong>Signos:</strong> La Psicología y la Correspondencia Física de cada uno de los 12 arquetipos zodiacales.</li>
              <li><strong>Planetas:</strong> Qué son los planetas en sentido Astrológico. Su significado en el plano Psicológico y Físico.</li>
              <li><strong>Casas:</strong> Qué campos de la experiencia se destacan en nuestro Destino y cuáles podemos hacer más consciente.</li>
              <li><strong>Aspectos:</strong> Cómo son las relaciones Armónicas y tensas entre los diferentes aspectos de nuestra Personalidad y situaciones de la Vida.</li>
            </ul>
            <br>
            <p style="font-size: 15px;"><strong>**De regalo el dibujo de tu Carta Natal**</strong></p>
            <br>
            <h4 class="h2sub" style="margin-bottom: 5px; margin-top: 0px; font-size: 20px !important;">Con tu carta natal vas a empezar a trabajar el poder alcanzar el logro de tus objetivos en 3 niveles:</h4>
            <ul class="font18" style="margin: 0px; padding-left: 16px; font-size: 15px;  line-height: 25px;">
              <li><strong>Profesional y Económico:</strong> Cómo descubrir tu vocación o si ya la has descubierto mejorar tu desempeño profesional. Cómo manejar y obtener recursos económicos para tener una vida más próspera.</li>
              <li><strong>Afectivo:</strong> Mejorar el modo de relacionarte con los demás. Pareja, amistades y grupos.</li>
              <li><strong>Salud:</strong> incrementar tu vitalidad y mejorar la relación con tu cuerpo utilizando las energías inscriptas en tu carta natal. Desarrollá un programa integral de salud hecho a tu medida.</li>
          </ul>
          <br>

            <p>Este Curso de Astrología te dará las herramientas tanto para usar esta ciencia a nivel personal como con los demás.</p>

<hr>
<!--p style="font-size: 17px; margin: 20px 0px 20px 0px; line-height: 175%;">Te llevás, ya en la segunda clase, el dibujo de tu <b>Carta Natal</b>. Con tu carta natal vas a empezar a trabajar el poder alcanzar el logro de tus objetivos en 3 niveles.</p>
                    <ul class="font18" style="font-size: 17px;">
                      <li>Profesional y Económico: Cómo descubrir tu vocación o si ya la has descubierto mejorar tu desempeño profesional. Cómo manejar y obtener recursos económicos para tener una vida más prospera.</li>
                      <li>Afectivo: Mejorar el modo de relacionarte con los demás. Pareja, amistades y grupos.</li>
                      <li>Salud: incrementar tu vitalidad y mejorar la relación con tu cuerpo utilizando las energías inscriptas en tu carta natal. Desarrollá un programa integral de salud hecho a tu medida.</li>
                    </ul-->

								</section>
								<div style="display: flex;" class="mobile-visibility-none hidden-xs hidden-s">
									<a href="#top" class="button solicita_btn" style=" margin: 0 auto">SOLICITÁ MÁS INFORMACIÓN AQUÍ</a>
								</div>
					    </div>

							<div class="col-md-3 side_section">

								<?php include('site/form-astro.php'); ?>

								<?php include('site/events-astro.php'); ?>

							</div>
						</div>
					</div>
				</section>
				<!-- Go to www.addthis.com/dashboard to customize your tools -->
				<div class="addthis_inline_share_toolbox"></div>
			</section>
		</div>
		<?php include('site/footer.php'); ?>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>