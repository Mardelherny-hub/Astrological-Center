<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include('site/head.php'); ?>
		<style>

		/* ESTILOS DEL FORMULARIO */
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
			.triada {
                margin-top: 0px;
                padding: 0px 10px 20px;
                margin: 0px 0 9px;
                }
                .triada div{
                border-radius: 5px;
                border: 1px solid #e0e0e0;
                padding: 15px 20px 0px;
                min-height: 110px;
                }

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
			border-bottom: 0px solid #eee;
		}
		.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover
		{
			color: white;
			cursor: default;
			background-color: #ff8b1e;
			border: 0px solid #ddd;
			border-bottom-color: #eee;
		}
		.nav-tabs>li>a:hover
		{
			border-color: #eee;
			font-size: 16px;
		}
		.nav-tabs>li>a
		{
			border-color: #eee;
			font-size: 16px;
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
			font: bold 16px "PT Sans", sans-serif;
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
			font-size: 16px !important;
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
		.panel-body li:before
		{
			content: "● ";
			color: #ff8b1e; /* or whatever color you prefer */
		}
		.panel-body li
		{
			padding-left: 1em;
			text-indent: -.7em;
			font-size: 15px;
		}
		.panel-body ul
		{
			list-style: none;
			padding:0;
			margin:0;
		}
		.panel-default
		{
			color:#333333;
			font-size: 16px;
		}
		.panel-default h2
		{
			color:#333333;
			font-weight: normal;
			margin-top:30px;
		}
		.panel-default h3
		{
			font-size: 15px;
			border-bottom: 0px;
		}
		.panel-default h4
		{
			color:#ff8b1e;
			font-weight: bold;
			font-size: 21px;
		}
		.panel-default h5
		{
			color:#333333;
			font-size: 17px;
			padding-bottom: 5px;
		}
		.col-sm-6
		{
			padding-bottom: 15px;
		}
		.panel-heading>h4>a
		{
			color: #ff8b1e;
		}
		.panel
		{
			border:0px;
		}
		.youtube-video
		{
			padding: 15px;
			min-width: : 420px;
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
				line-height: 120%;
				margin: 0px;
			}

			/* Subtítulo */
			.harmonic-styles h2
			{
				color: #414141;
				font-family: "Roboto", Arial, sans-serif;
				font-size: 22px;
				font-weight: 300;
				line-height: 110%;
				margin: 8px 0px 8px 0px;
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
				line-height: 120%;
				margin: 7px 0px 10px 0px;
			}
			.harmonic-styles.psico h4
			{
				font-weight: 400;
			}

			/* Título menor dentro del contenido */
			.harmonic-styles h5
			{
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 18px;
				font-weight: 700;
				line-height: 145%;
				margin: 8px 0 -10px;
				padding: 0px;
			}

			/* Subtítulo menor dentro del contenido */
			.harmonic-styles h6
			{
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 17px;
				font-weight: 700;
				line-height: 145%;
				margin: 8px 0 0;
				padding: 0px;
			}

			/* Párrafos */
			.harmonic-styles p
			{
				color: #2A2B2C;
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
			.harmonic-styles p a
			{
				color: #3c59ea;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 15px;
				font-weight: 400;
			}

			/* Listas no ordenadas */
			.harmonic-styles ul
			{
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 15px;
				font-weight: 400;
				line-height: 145%;
				padding: 0px 0px 0px 15px;
				margin: 0px;
			}

			/* Items de las listas no ordenadas */
			.harmonic-styles ul li
			{
				margin: 8px 0px;
				padding: 0px;
			}

			/* Listas ordenadas */
			.harmonic-styles ol
			{
				color: #2A2B2C;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 15px;
				font-weight: 400;
				line-height: 145%;
				list-style-type: decimal;
				padding: 0px 0px 0px 15px;
				margin: 0px;
			}

			.harmonic-styles ol li
			{
				margin: 8px 0px;
				padding: 0px;
			}

			.harmonic-styles .panel-body ul
			{
				list-style-type: none;
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
					font-size: 21px;
					font-weight: 500;
					line-height: 85%;
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
					color: #2A2B2C;
					font-family: "PT Sans", "Roboto", sans-serif;
					font-size: 20px;
					font-weight: 700;
					line-height: 145%;
					margin: 8px 0 -10px;
					padding: 0px;
				}

				/* Subtítulo menor dentro del contenido */
				.harmonic-styles h6
				{
					color: #2A2B2C;
					font-family: "PT Sans", "Roboto", sans-serif;
					font-size: 17px;
					font-weight: 700;
					line-height: 145%;
					margin: 8px 0 0;
					padding: 0px;
				}

				/* Párrafos */
				.harmonic-styles p
				{
					color: #2A2B2C;
					font-family: "PT Sans", "Roboto", sans-serif;
					font-size: 15px;
					font-weight: 400;
					line-height: 145%;
					margin: 8px 0px;
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
					font-family: "PT Sans", "Roboto", sans-serif;
					font-size: 15px;
					font-weight: 400;
				}

				/* Listas no ordenadas */
				.harmonic-styles ul
				{
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
				.harmonic-styles ul li
				{
					margin: 0 0 0 -12px;
					padding: 0px;
				}

				/* Listas no ordenadas */
				.harmonic-styles ol
				{
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
				.harmonic-styles ol li
				{
					margin: 10px 0px;
					padding: 0px;
				}

				/* El primer li de los ul que estén inmediatamente después de un h5 */
				.harmonic-styles h5 + ul li:first-child
				{
					margin-top: 8px;
				}
				.harmonic-styles .panel-body ul
				{
					list-style-type: none;
				}
			}
		/* Estilos para que los videos de YouTube sean responsive */
			.video-container
			{
			  display: block;
			  margin: 20px auto 30px;
			  max-width: 560px;
			  max-height: 315px;
			  width: 100% !important;
			}
			@media screen and (min-width: 360px)
			{
			  .video-container
			  {
			      width: 50%;
			  }
			}
			@media screen and (min-width: 768px)
			{
			  .video-container
			  {
			      float: left;
			      margin: 0px 0px 20px 0px;
			      max-width: auto;
			  }
			}
			.video-container .video-responsive
			{
			  background-color: lightblue;
			  position: relative;
			  padding-bottom: 40%; /* 16/9 ratio */
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
		/* FIN Estilos para que los videos de YouTube sean responsive */
			@media screen and (min-width: 500px)
			{
				.astrology-video
				{
					display: none;
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
			<div class="col-sm-12" style="padding: 0px;">
				<img src="assets/images/home-novedades/home/tarot-Jung-slide.jpg" width="100%">	
			</div>
			<section id="content_section" style="margin: 0px 10px 0px 20px;">
				<!-- Secci&oacute;n principal > comienzo -->
				<section class="main_section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-md-9" style="padding-left: 0px;">
								<div class="harmonic-styles astro" style="margin-top: 10px;">
									<!--h2></h2-->

									<div class="row">
										<div class="col-12 col-md-6 col-lg-6" style="padding-right: 5px;">
											<div class="video-container">
												<div class="video-responsive">
													<iframe width="565" height="300" src="https://www.youtube.com/embed/X1FSvj4Z8tU" frameborder="0" allowfullscreen></iframe>
												</div>
											</div>
										</div>

										<div class="col-12 col-md-6 col-lg-6">
											<div class="row">
												<div class="col-12">
												<h1 class="articulo_text_header" style="font-size: 25px; font-weight: 700; margin-top: 0px;text-transform: uppercase;font-family: 'pt_sansbold', sans-serif; margin-bottom: 7px; text-align: center;">CURSO DE 3 MESES</h1>
												</div>

												<hr style="margin-bottom: 10px; margin-right: 10px; margin-top: 2px;">

										<div class="col-12 col-md-6 col-lg-12">
										   <h4 class="h2sub" style="margin-bottom: 5px; margin-top: 0px; font-size: 17px !important; background-color: #f7efef">TEMARIO:</h4>
											<ul class="font18" style="margin: 0px; padding-left: 16px; font-size: 16px; line-height: 26px;">
												<p>¿Cómo funciona el Tarot? Los Arquetipos de Carl Jung y la Ley de Sincronicidad.</p>
												<p>Cartas Invertidas. ¿Cuál es su mensaje?</p>
												<p>La Lectura Diaria. ¿Cómo preguntar al Tarot y conectarnos con nuestro guía interior?</p>
												<p>Tipos de Tiradas.</p>
												<!--li>Cómo son las relaciones Armónicas y tensas entre los diferentes aspectos de nuestra Personalidad y situaciones de la Vida.</li-->
											</ul>
										</div>
											</div>
											
										</div>
										
										<div class="col-xs-12 col-md-12">
										<p style="font-weight: bold; margin-top: 0px; margin-bottom: 0">TEMARIO:</p>
										<ul style="line-height: 1.6">
										<li>Origen y usos del Tarot. Tarot Predictivo y para el Autoconocimiento.</li>
										<li>Los distintos tipos de mazos: Egipcio, Marsellés, Rider-Waite, etc. ¿Qué diferencias hay entre ellos?</li>
										<li>El Recorrido del Loco. El Viaje del Héroe. Simbolismo de cada Arcano.</li>
										<li>¿Cómo funciona el Tarot? Los Arquetipos de Carl Jung y la Ley de Sincronicidad.</li>
										<li>Cartas Invertidas. ¿Cuál es su mensaje?</li>
										<li>La Lectura Diaria. ¿Cómo preguntar al Tarot y conectarnos con nuestro guía interior?</li>
										<li>Arcanos Menores: Simbología / Adivinación</li>
										<li>Numerología y Tarot. El significado de los números del 1 al 10</li>
										<li>La Energía de los 4 Elementos en el Tarot. Los 4 Palos: Bastos, Espadas, Copas y Oros</li>
										<li>Palabras y conceptos claves de cada una de las 56 cartas</li>
										<li>Las Figuras de la Corte: Reyes, Reinas, Caballeros, Sotas</li>
										<li>Tiradas</li>
										</ul>
										</br>
										</div>
									</div>

			<div class="row" style="clear: both; margin: 15px 0 9px;">
				<div class="col-12">
				  <h2 class="h2sub" style="margin-bottom: 5px;font-size: 18px; padding-left: 10px;"><strong>INICIO ENERO 2021</strong></h2>
				  
				</div>


				<div class="col-12 col-md-6 triada " style="padding-left: 10px">
				  <div>
					
				  
				  
				  <p style="margin: 0px 0px 10px 0px; font-size: 15px; line-height: 21px">
					<strong>Días y Horarios</strong>
					Fecha: Jueves 7 de Enero
					<br>
					Horarios: 12:30 a 13:30 hs. (Hora Argentina).
				  </p>
				  </div>
				</div>
			   
				<div class="col-12 col-md-6 triada ">
				  <div>
				  <p style="margin: 0px 0px 10px 0px; font-size: 15px; line-height: 21px"><strong>Frecuencia</strong> <br / >1 vez por semana,<br> 1 hora cada clase.
				  </p>
				  </div>
				</div>
				<!--div class="col-12 col-md-4 triada ">
				  <div>
				  <p style="margin: 0px 0px 10px 0px; font-size: 15px; line-height: 21px"><strong>Precio</strong> <br / >Valor: $16.500 (pesos)</p>
				  </div>
				</div-->


				<!--div class="col-md-12 col-12" style="display: flex; padding-left: 0; margin: 0 auto; margin-bottom: 20px">
				  <div style="flex: " >
				  <p style="font-size: 15px; line-height: 19px; margin-bottom: 0px; display: block; margin: 15px 10px"><strong>* Las inscripciones a los cursos se realizan mediante entrevista presencial. </strong></p>
				  </div>
				  <br /><br />
				  <div class="mobile-visibility-none" style="text-align: center; margin: 0px 0px 20px 0px; display: inline-block;">
					
					<a href="#arriba" class="button solicita_btn" style="padding: 8px 13px; border-radius: 5px; display: inline-block; ">SOLICITÁ MÁS INFORMACIÓN AQUÍ</a>
				  </div>
				</div-->

			</div>
									

									<!--div>
									<h5 style="background-color: #F7EEF7; border-radius: 2px;margin-bottom: 15px; padding-left: 10px;" class="col-xs-12">CURSO DE UN MÓDULO:</h5>
									</div-->


				<div class="col-12" style="padding: 10px;">
					<!--p style="font-size: 15px; margin-top: 30px;">En la primera clase te entregaremos el dibujo de tu carta natal. Con tu carta natal vas a empezar a trabajar el poder alcanzar el logro de tus objetivos en 3 niveles.</p-->

					<ul style="font-size: 15px;">
						<!--li style="margin-bottom: 8px;"><b>Profesional y Económico:</b> Cómo descubrir tu vocación o si ya la has descubierto mejorar tu desempeño profesional. Cómo manejar y obtener recursos económicos para tener una vida más próspera.</li>
						<li style="margin-bottom: 8px;"><b>Afectivo:</b> Mejorar el modo de relacionarte con los demás. Pareja, amistades y grupos.</li>
						<li style="margin-bottom: 8px;"><b>Salud:</b> incrementar tu vitalidad y mejorar la relación con tu cuerpo utilizando las energias inscriptas en tu carta natal. Desarrollá un programa integral de salud hecho a tu medida.</li-->
					</ul>
				</div>

						<div>
						   <h5 style="background-color: #F7EEF7; border-radius: 2px;padding-left: 10px;" class="col-xs-12">
						</div>


                                <div>
									
									<!--div>
									<h5 style="background-color: #F7EEF7; border-radius: 2px;margin-bottom: 15px;padding-left: 10px;" class="col-xs-12">TEMARIO:</h5><br>
									</div>
									<div class="col-12">
									<p style="font-size: 15px; padding-left: 10px;"><!--strong>*Cada módulo dura un mes (1 clase semanal).</strong></p>
									</div-->


										<!--div class="row">

											  <div class="col-md-6">
												<h6 style="background-color: #E6E6E6">1&deg; Módulo</h6>
												<ul style="font-size: 15px;">
													<li>Introducción a los componentes de la Carta Natal</li>
													<li>Los 4 Elementos y los 12 Signos - Los Doce Campos Energéticos</li>
													<li>Los 10 Planetas - Las Funciones Básicas del Ser Humano</li>
													<li>Las 12 Casas Astrológicas - Los Campos de la Experiencia</li>
													<li>Los Aspectos Planetarios - Definición de los Aspectos Mayores</li>
												</ul>
											</div>
											<div class="col-md-6">

												<h6 style="background-color: #E6E6E6">2&deg; Módulo</h6>
												<ul style="font-size: 15px;">
													<li>Los 12 Ascendentes.</li>
													<ul style="font-size: 15px;">
														<li>Ascendente - Descendente - Medio Cielo - Fondo Cielo</li>
													</ul>
													<li>Las 12 Lunas: Función lunar - Lo subconsciente - Conductas Reactivas</li>
													<li>Dignidades Planetarias</li>
													<li>Leer e interpretar las efemérides astrológicas</li>
												</ul>
											</div>
										</div-->
								<div class="row">
		                              <div class="col-md-12">
										<div>
										   <!--h4>Horario de la transmisión del Curso: 12:30 hs. (Hora Argentina)</h4-->
										   <!--img src="http://www.aztlan.com.ar/assets/images/home/mapamundi_online_13.jpg" alt="Image" class="img-responsive" width="80%" height="80%"-->

								  <!--div class="row" style="margin-top: 20px; margin-bottom: 30px;">
									  <div class="col-xs-12 col-md-6">
										<ul style="line-height: 120%; padding-left: 0"><strong style="font-family: 'pt_sansbold', sans-serif!important;">Te dejamos a continuación algunos horarios en otros paises</strong>
										  <li>EE.UU:   <br>Hora Este (NY): 12 am.<br>   Hora Oeste (CL): 9 am.<br>   Hora Central (TX): 11 am.</li>
										  <li>México D.F: 11 am.</li>
										  <li>Colombia: 12 am.</li>

										</ul>
									  </div>


									  
									  <div class="col-xs-12 col-md-6">
										<ul style="line-height: 130%; list-style-position: outside;  padding-left: 0">
										
										<li>Inglaterra: 5 pm.</li>
										<li>Italia: 6 pm.</li>
										<li>España: 6 pm.</li>
										<li>Australia: 4 am.</li>
										<li>Suecia: 6 pm.</li>
									  </ul>
									 </div>
									 
									 
									 
								  </div-->
								  
											<!--p><b>Dicta Prof. Lucía Pocosgnich</b> – Astróloga y profesora de Psicología y Astrología de la Escuela de Psicología y Filosofía Aztlan y del Centro Astrológico Aztlan</p-->

										<!--p><strong>Duración:</strong> 3 meses (12 Clases).<br>
										<strong>Modalidad:</strong> 1 Clase por semana de 1 hora.</p-->


										<p><strong>El Curso incluye:</strong></p>
										<ul>
										  <li>Participación en el chat en vivo para que respondamos todas tus dudas en el momento.</li>
										  <li>Las clases quedan activas los 3 días siguientes para que las puedas ver las veces que necesites.</li>
										</ul>
										<p><i>(En caso de inconvenientes con el servidor de Internet durante la transmisión se compartirá la grabación al finalizar la misma).</i></p>
											
											
										   <p style="margin-top: 2px;"><b>Una vez que hayas realizado la reserva te daremos la hora exacta del mismo en tu localidad.</b></p>
										   
										   
									   </div>
		                              </div>
		                              <!--div class="col-md-6">

										<h6 style="background-color: #E6E6E6">3&deg; Módulo</h6>
										<ul style="font-size: 15px;">
											<li>Equilibrio/Desequilibrio de los 4 Elementos</li>
											<li>Reparto Planetario: Hemisferios y Cuadrantes</li>
											<li>Mercurio, Venus y Marte en los 12 Signos</li>
											<li>Casas cargadas y vacías</li>
										</ul>
		                              </div-->

		                              <!--div class="col-md-6">
		                              	<h6 style="background-color: #E6E6E6">4&deg; Módulo</h6>
										<ul style="font-size: 15px;">
											<li>Clasificación de las Casas</li>
											<li>Júpiter y Saturno en la Carta Natal</li>
											<li>Los Signos y el cuerpo físico</li>
											<li>Prácticas de Interpretación: pasos a seguir</li>
										</ul>
									</div-->
								</div>

								<!--div class="row">
		                              <div class="col-md-6">

										<h6 style="background-color: #E6E6E6">5&deg; Módulo</h6>
										<ul style="font-size: 15px;">
											<li>Los Planetas Transpersonales: Urano, Neptuno y Plutón</li>
											<li>Nodos Lunares: el Eje de la Evolución</li>
											<ul style="font-size: 15px;">
												<li>Relación de los nodos con el Karma y con vidas pasadas</li>
												<li>El Nodo Norte: mi misión en esta vida</li>
												<li>El Nodo Sur: ataduras del pasado que debo soltar</li>
											</ul>
											<li>Estudio y práctica de Cartas natales de personajes famosos</li>
										</ul>
										<br>
		                              </div>
		                        </div-->

		                        </div>

								</div>
							</div>

							<!--<a href="#top" class="button solicita_btn" style="margin-left: 450px;">SOLICITÁ MÁS INFORMACIÓN AQUÍ</a>-->
							<div style="margin: 0px 0px 0px 0px; border-radius: 2px;" class="mobile-visibility-none">
             				 
							<div class="col-xs-12 col-md-3 side_section" style="margin-top: 20px;padding-left: 20px;">
                                 <?php include('site/rside_videos_2019.php'); ?>
							</div>
							<a name="arriba"></a>
							<div class="col-xs-12 col-md-3 side_section" style="margin-top: 20px;padding-left: 20px;">
                                 <?php include('site/form-astro.php'); ?>
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