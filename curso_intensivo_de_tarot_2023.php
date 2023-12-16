<!DOCTYPE html>
<html lang="es">

<head>
	<?php include('site/head.php');
	$asunto = 'Solicitud de Información - Curso de Tarot'; ?>

	<style>
		/* ESTILOS DEL FORMULARIO */
		.contacto {
			background: #5E397A;
			width: 100%;
			padding: 20px;
			margin-top: 30px;
			margin-bottom: 50px;
		}

		input,
		textarea {
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
			margin-top: 10px !important;
		}

		/*  FIN ESTILOS DEL FORMULARIO */

		.dropdown-menu>.active>a,
		.dropdown-menu>.active>a:focus,
		.dropdown-menu>.active>a:hover,
		.dropdown-menu>li>a:hover {
			color: #ff8b1e;
			text-decoration: none;
			background-color: #f5f5f5;
			outline: 0;
		}

		.panel-default {
			border-color: white;
		}

		.panel-default>.panel-heading {
			color: #333;
			background-color: white;
			border-color: white;
		}

		.nav-tabs {
			border-bottom: 0px solid #eee;
		}

		.nav-tabs>li.active>a,
		.nav-tabs>li.active>a:focus,
		.nav-tabs>li.active>a:hover {
			color: white;
			cursor: default;
			background-color: #ff8b1e;
			border: 0px solid #ddd;
			border-bottom-color: #eee;
		}

		.nav-tabs>li>a:hover {
			border-color: #eee;
			font-size: 16px;
		}

		.nav-tabs>li>a {
			border-color: #eee;
			font-size: 16px;
			color: #ff8b1e;
		}

		.solicita_btn {
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

		.tab-content p {
			font-size: 16px !important;
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

		a,
		a:link,
		a:visited,
		a:hover,
		a:focus {
			color: #fff;
		}

		.article_image {
			max-width: 100%;
		}

		.panel-body li:before {
			content: "● ";
			color: #ff8b1e;
			/* or whatever color you prefer */
		}

		.panel-body li {
			padding-left: 1em;
			text-indent: -.7em;
			font-size: 15px;
		}

		.panel-body ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.panel-default {
			color: #333333;
			font-size: 16px;
		}

		.panel-default h2 {
			color: #333333;
			font-weight: normal;
			margin-top: 30px;
		}

		.panel-default h3 {
			font-size: 15px;
			border-bottom: 0px;
		}

		.panel-default h4 {
			color: #ff8b1e;
			font-weight: bold;
			font-size: 21px;
		}

		.panel-default h5 {
			color: #333333;
			font-size: 17px;
			padding-bottom: 5px;
		}

		.col-sm-6 {
			padding-bottom: 15px;
		}

		.panel-heading>h4>a {
			color: #ff8b1e;
		}

		.panel {
			border: 0px;
		}

		.youtube-video {
			padding: 15px;
			min-width: 420px;
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
		.harmonic-styles {
			border-bottom: 1px solid #ddd;
			margin: 0px 40px 10px 0px;
			padding: 0px 0px 5px 0px;
			width: 100%;
		}

		/* Cabecera del contenido donde está
			la información operativa del evento */
		.harmonic-styles .header-section {
			border-bottom: 1px solid #ddd;
			margin: 0px;
			padding: 0px;
			width: 90%;
		}

		/* Título */
		.harmonic-styles h1 {
			color: #414141;
			font-family: "Roboto", Arial, sans-serif;
			font-size: 27px;
			font-weight: 500;
			line-height: 135%;
			margin: 0px;
			width: 90%;
		}

		/* Subtítulo */
		.harmonic-styles h2 {
			color: #414141;
			font-family: "Roboto", Arial, sans-serif;
			font-size: 22px;
			font-weight: 300;
			line-height: 110%;
			margin: 8px 0px 0px 0px;
		}

		/* Tipo de evento (CHARLA, CLASE PRESENCIAL, etc.) */
		.harmonic-styles .header-section h3 {
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
		.harmonic-styles.astro .header-section h3 {
			border-left-color: #9f6cf7;
			color: #9f6cf7;
		}

		/* Color azul claro del tipo de evento, en eventos de psicología */
		.harmonic-styles.psico .header-section h3 {
			border-left-color: #3c59ea;
			color: #3c59ea;
		}

		/* Fecha */
		.harmonic-styles h4 {
			color: #414141;
			font-family: "Roboto", Arial, sans-serif;
			font-size: 15px;
			font-weight: 300;
			line-height: 145%;
			margin: 7px 0px 10px 0px;
		}

		.harmonic-styles.psico h4 {
			font-weight: 400;
		}

		/* Título menor dentro del contenido */
		.harmonic-styles h5 {
			color: #2A2B2C;
			font-family: "PT Sans", "Roboto", sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 145%;
			margin: 8px 0px;
			padding: 0px;
		}

		/* Subtítulo menor dentro del contenido */
		.harmonic-styles h6 {
			color: #2A2B2C;
			font-family: "PT Sans", "Roboto", sans-serif;
			font-size: 17px;
			font-weight: 700;
			line-height: 145%;
			margin: 8px 0px;
			padding: 0px;
		}

		/* Párrafos */
		.harmonic-styles p {
			color: #2A2B2C;
			font-family: "PT Sans", "Roboto", sans-serif;
			font-size: 15px;
			font-weight: 400;
			line-height: 145%;
			margin: 8px 0px;
		}

		/* Negritas dentro de los párrafos e items de listas no ordenadas */
		.harmonic-styles p strong,
		.harmonic-styles li strong {
			color: #606060;
			font-weight: 700;
		}

		/* Links */
		.harmonic-styles p a {
			color: #3c59ea;
			font-family: "PT Sans", "Roboto", sans-serif;
			font-size: 15px;
			font-weight: 400;
		}

		/* Listas no ordenadas */
		.harmonic-styles ul {
			color: #2A2B2C;
			font-family: "PT Sans", "Roboto", sans-serif;
			font-size: 15px;
			font-weight: 400;
			line-height: 145%;
			list-style-type: none;
			padding: 0px 0px 0px 15px;
			margin: 0px;
		}

		/* Items de las listas no ordenadas */
		.harmonic-styles ul li {
			margin: 8px 0px;
			padding: 0px;
		}

		/* Listas ordenadas */
		.harmonic-styles ol {
			color: #2A2B2C;
			font-family: "PT Sans", "Roboto", sans-serif;
			font-size: 15px;
			font-weight: 400;
			line-height: 145%;
			list-style-type: decimal;
			padding: 0px 0px 0px 15px;
			margin: 0px;
		}

		.harmonic-styles ol li {
			margin: 8px 0px;
			padding: 0px;
		}

		.harmonic-styles .panel-body ul {
			list-style-type: none;
		}

		@media screen and (min-width: 768px) {

			/* ▼▼▼▼▼▼ Estilos para >=768 (tamaños sm, md y lg en Bootstrap) ▼▼▼▼▼▼ */
			/* Contenedor de la sección de contenido */
			.harmonic-styles {
				margin: 30px auto 30px 20px;
				width: 100%;
			}

			/* Cabecera del contenido donde está
				la información operativa del evento */
			.harmonic-styles .header-section {
				border-bottom: 1px solid #ddd;
				margin: 0px;
				padding: 0px;
			}

			/* Título */
			.harmonic-styles h1 {
				color: #414141;
				font-family: "Roboto", Arial, sans-serif;
				font-size: 27px;
				font-weight: 500;
				line-height: 85%;
				margin: 0px;
			}

			/* Subtítulo */
			.harmonic-styles h2 {
				color: #414141;
				font-family: "Roboto", Arial, sans-serif;
				font-size: 22px;
				font-weight: 300;
				line-height: 145%;
				margin: 0px;
			}

			/* Tipo de evento (CHARLA, CLASE PRESENCIAL, etc.) */
			.harmonic-styles h3 {
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
			.harmonic-styles h4 {
				color: #414141;
				font-family: "Roboto", Arial, sans-serif;
				font-size: 15px;
				font-weight: 300;
				line-height: 145%;
				margin: 7px 0px 10px 0px;
			}

			/* Título menor dentro del contenido */
			.harmonic-styles h5 {
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 20px;
				font-weight: 700;
				line-height: 145%;
				margin: 8px 0px;
				padding: 0px;
			}

			/* Subtítulo menor dentro del contenido */
			.harmonic-styles h6 {
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 17px;
				font-weight: 700;
				line-height: 145%;
				margin: 8px 0px;
				padding: 0px;
			}

			/* Párrafos */
			.harmonic-styles p {
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 15px;
				font-weight: 400;
				line-height: 145%;
				margin: 8px 0px;
			}

			/* Los párrafos que estén inmediatamente después de un h5 */
			.harmonic-styles h5+p {
				margin-top: 8px;
			}

			/* Negritas dentro de los párrafos */
			.harmonic-styles p strong,
			.harmonic-styles li strong {
				color: #606060;
				font-weight: 700;
			}

			/* Links */
			.harmonic-styles p a,
			.harmonic-styles p a:active,
			.harmonic-styles p a:link,
			.harmonic-styles p a:visited {
				color: #3c59ea;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 15px;
				font-weight: 400;
			}

			/* Listas no ordenadas */
			.harmonic-styles ul {
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 15px;
				font-weight: 400;
				line-height: 145%;
				list-style-type: disc;
				padding: 0px 0px 0px 30px;
				margin: 0px;
			}

			/* Items de las listas no ordenadas */
			.harmonic-styles ul li {
				margin: 0 0 0 -12px;
				padding: 0px;
			}

			/* Listas no ordenadas */
			.harmonic-styles ol {
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 15px;
				font-weight: 400;
				line-height: 145%;
				list-style-type: decimal;
				padding: 0px 0px 0px 30px;
				margin: 0px;
			}

			/* Items de las listas no ordenadas */
			.harmonic-styles ol li {
				margin: 10px 0px;
				padding: 0px;
			}

			/* El primer li de los ul que estén inmediatamente después de un h5 */
			.harmonic-styles h5+ul li:first-child {
				margin-top: 8px;
			}

			.harmonic-styles .panel-body ul {
				list-style-type: none;
			}
		}

		/* Estilos para que los videos de YouTube sean responsive */

		.iframe-global-responsive-container {
			clear: both;
			float: left;
			margin-bottom: 30px;
			width: 100%;
		}

		.iframe-container {
			position: relative;
			width: 100%;
			padding-bottom: 59.25%;
			height: 0;
		}

		.iframe-container iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}

		@media screen and (min-width: 360px) {
			.video-container {
				min-width: 300px;
				width: 50%;
			}
		}

		@media screen and (max-width: 600px) {
			.articulo_text_header {
				font-size: 26px;
			}

			.mobile-visibility-none {
				display: none;
			}
		}

		@media screen and (min-width: 768px) {
			/* FIN Estilos para que los videos de YouTube sean responsive */
			@media screen and (min-width: 500px) {
				.astrology-video {
					display: none;
				}
			}
	</style>
</head>

<body>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="container" style="background-color: #fff;">
		<?php include('site/header.php'); ?>
		<div class="col-sm-12" style="padding: 0px;">
			<img src="https://aztlan.org.ar/images/eventos/landing/3803.jpg" width="100%">
		</div>

		<section id="content_section">
			<!-- Secci&oacute;n principal > comienzo -->
			<section class="main_section">
				<div class="container-fluid" style="background-color: #fff; padding: 0px 30px 0px 30px;">
					<div class="row">
						<div class="col-xs-12 col-md-9 col-lg-8" style="margin-bottom: 0px;">
							<div class="harmonic-styles astro">
								<div class="header-section" style="margin-bottom: 10px;">
									<h3>ONLINE COURSE</h3>
									<h1 style="line-height:30px">THERAPEUTIC TAROT AND JUNG ARCHETYPES</h1>
									<!--h2 style="font-size: 17px;">Free drawing of your Natal Chart by Centro Astrológico Aztlan</strong><h2-->
									<h4 style="font-size:17px;"> <b>Start:</b> Tuesday, January 9th at 2 pm (Argentine Time)</h4>
									<!--h4 style="font-size:17px;"> <b>2x1 Promotion!</b></h4-->
								</div>

								<!-- Contenido -->
								<div class="row" style="margin-bottom: 0px; padding-bottom: 0px;">
									<div class="col-xs-12 col-md-6">
										<div class="iframe-global-responsive-container cancel-width">
											<div class="iframe-container">
												<iframe src="https://www.youtube.com/embed/X1FSvj4Z8tU" frameborder="0" allowfullscreen></iframe>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<h4 class="h2sub" style="margin-bottom: 5px; margin-top: 0px; font-size: 17px !important; background-color: #f7efef">AGENDA:</h4>
										<ul class="font18" style="margin: 0px; padding-left: 16px; font-size: 16px; line-height: 26px;">
											<li>Origin and uses of Tarot. Predictive Tarot and Self-Knowledge Tarot.</li>
											<li>Different types of decks: Egyptian, Marseille, Rider-Waite, etc. What are the differences between them?</li>
											<li>Numerology and Tarot. The meaning of numbers from 1 to 10.</li>
											<li>The Fool's Journey. Symbolism of each Major Arcana.</li>
										</ul>
									</div>
								</div>

								<div style="margin: 0px 0px 15px 0px">
									<!--p style="font-weight: bold; margin-top: 0px; margin-bottom: 0">AGENDA:</p-->
									<ul class="font18" style="margin: 0px; padding-left: 16px; font-size: 16px; line-height: 26px;">
										<li>Minor Arcana: key words and concepts for each of the 56 cards.</li>
										<li>The Energy of the 4 Elements in Tarot. The 4 Suits: Wands, Swords, Cups, and Coins.</li>
										<li>Court Figures: Kings, Queens, Knights, Pages.</li>
										<li>How does Tarot work? Carl Jung's Archetypes and the Law of Synchronicity.</li>
										<li>Reversed Cards. What is their message?</li>
										<li>The Daily Reading. How to ask the Tarot and connect with our inner guide?</li>
										<li>Types of Spreads.</li>
									</ul>
								</div>


								<div class="row">
									<div class="col-xs-12 col-sm-12">
										<div class="col-xs-12 col-sm-12">
											<p style="font-size:16px;"><strong>Duration:</strong> 3 months (12 Classes).<br>
												<strong>Mode:</strong> One class per week, 1 hour each. Live classes and available for 72 hours.
											</p>
											<p style="font-size: 16px;"><strong>Includes:</strong></p>
											<ul style="font-size:15px;">
												<li>Notes sent with each class.</li>
												<li>Classes available for 3 days so you can watch them as many times as needed.</li>
											</ul><br>

										</div>
										<div class="col-xs-12 col-sm-12">
										</div>
										<!-- <p><strong>Valor:</strong> <s>u$s 70 Dólares</s> / Ahora: u$s 25 Dólares
												<i><b>¡Descuento Especial!</b></i>
												<br>(Consultar por valor en Argentina)</p<> -->


									</div>
									<!-- Video acompañante -->
									<!-- <div class="col-xs-12 col-md-6">
                      </div> -->

									<!-- Texto -->
									<!-- <div class="col-xs-12 col-md-6">
                      </div> -->

									<!-- Cierre -->
									<!-- <div class="col-xs-12 col-sm-12">
                      </div> -->
								</div>

							</div>

							<!-- <div class="visible-xs" id="mobile-contents">
                      
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
                    </div> -->

							<!-- <div class="page-header articulo_header" style="border-bottom: none; padding-bottom: 0 !important; margin: 0 !important; border-bottom: 0 !important">
                    </div> -->

							<br><br><br>
						</div>
						<div class="col-xs-12 col-md-3 side_section">
							<?php include('site/form-astro.php'); ?>

							<?php include('site/events-astro.php'); ?>
						</div>
					</div>


				</div>
				<!-- TERMINA TEXTO CHARLA ASTROLOGÍA -->

	</div>


	</section>
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<div class="follow_us_section" style="margin: 14px 0 9px">
		<a target="_blank" href="https://www.facebook.com/AstrologiaAztlan/" class="facebook">
			<img style="width: 36px; margin-right: 5px;" src="img/follow_us_facebook.png" />
		</a>
		<a target="_blank" href="https://twitter.com/AstrologiAztlan" class="twitter">
			<img style="width: 36px; margin-right: 5px;" src="img/follow_us_twitter.png" />
		</a>
		<a target="_blank" href="https://www.instagram.com/centro.astrologico.aztlan/" class="instagram">
			<img style="width: 36px; margin-right: 5px;" src="img/follow_us_instagram.png" />
		</a>
		<a target="_blank" href="https://www.youtube.com/user/sedecentral" class="youtube">
			<img style="width: 36px;" src="img/follow_us_youtube.png" />
		</a>
	</div>
	</section>
	</div>
	<?php include('site/footer.php'); ?>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>