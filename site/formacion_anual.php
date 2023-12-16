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
			margin: 20px 0px 10px -10px;
			padding: 0px 0px 5px 0px;
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
			line-height: 110%;
			margin: 0px;
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
			color: #545454;
			font-family: "PT Sans", "Roboto", sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 145%;
			margin: 8px 0px;
			padding: 0px;
		}

		/* Subtítulo menor dentro del contenido */
		.harmonic-styles h6 {
			color: #545454;
			font-family: "PT Sans", "Roboto", sans-serif;
			font-size: 17px;
			font-weight: 700;
			line-height: 145%;
			margin: 8px 0px;
			padding: 0px;
		}

		/* Párrafos */
		.harmonic-styles p {
			color: #545454;
			font-family: "PT Sans", "Roboto", sans-serif;
			font-size: 15px;
			font-weight: 400;
			line-height: 145%;
			margin: 8px 0px;
		}

		/* Negritas dentro de los párrafos e items de listas no ordenadas */
		.harmonic-styles p strong,
		.harmonic-styles li strong
		{
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
		.harmonic-styles ul li {
			margin: 8px 0px;
			padding: 0px;
		}

		/* Listas ordenadas */
		.harmonic-styles ol {
			color: #545454;
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
				line-height: 145%;
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
				color: #545454;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 20px;
				font-weight: 700;
				line-height: 145%;
				margin: 8px 0px;
				padding: 0px;
			}

			/* Subtítulo menor dentro del contenido */
			.harmonic-styles h6 {
				color: #545454;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 17px;
				font-weight: 700;
				line-height: 145%;
				margin: 8px 0px;
				padding: 0px;
			}

			/* Párrafos */
			.harmonic-styles p {
				color: #545454;
				font-family: "PT Sans", "Roboto", sans-serif;
				font-size: 15px;
				font-weight: 400;
				line-height: 145%;
				margin: 15px 0px;
			}

			/* Los párrafos que estén inmediatamente después de un h5 */
			.harmonic-styles h5+p {
				margin-top: 8px;
			}

			/* Negritas dentro de los párrafos */
			.harmonic-styles p strong,
			.harmonic-styles li strong
			{
			color: #606060;
			font-weight: 700;
			}

		/* Links */
		.harmonic-styles p a,
		.harmonic-styles p a:active,
		.harmonic-styles p a:link,
		.harmonic-styles p a:visited
		{
		color: #3c59ea;
		font-family: "PT Sans", "Roboto", sans-serif;
		font-size: 15px;
		font-weight: 400;
		}

		/* Listas no ordenadas */
		.harmonic-styles ul {
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
		.harmonic-styles ul li {
			margin: 10px 0px;
			padding: 0px;
		}

		/* Listas no ordenadas */
		.harmonic-styles ol {
			color: #545454;
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

		<section id="content_section">
			<!-- Secci&oacute;n principal > comienzo -->
			<section class="main_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-md-9">
							<div class="harmonic-styles astro">
								<h1>Astrology and Self-Knowledge Degree and Short Course</h1>

								<p>The proposal of Aztlan Astrological Center is to teach Astrology in a dynamic way, giving value to both theoretical and practical aspects. Therefore, classes are theoretical-practical, teaching students the techniques of interpreting a natal chart.</p>

								<h5>Teaching Method</h5>

								<p>We have 2 teaching modalities: Module Courses of 4 classes or a Degree in three levels. Those who take the module modality can later use them as credits for the degree.</p>

								<h6>Starts in February 2018:</h6>

								<p><strong>Morning Shift:</strong></p>
								<ul>
									<li>Tuesday 20 at 11 am.</li>
								</ul>

								<p><strong>Evening Shift:</strong></p>
								<ul>
									<li>Tuesday 20 at 7 pm.</li>
								</ul>

								<h6>Starts in March 2018:</h6>

								<p><strong>Morning Shift:</strong></p>
								<ul>
									<li>Thursday 1 at 10:30 am.</li>
									<li>Tuesday 6 at 10:30 am.</li>
								</ul>

								<p><strong>Evening Shift:</strong></p>
								<ul>
									<li>Thursday 1 at 7 pm.</li>
									<li>Tuesday 6 at 7 pm.</li>
								</ul>

								<p><strong>Frequency:</strong> Once a week, 1 hour 30 minutes each class.</p>

								<p><strong>Duration:</strong> The program consists of 3 levels. Each level lasts one academic year.</p>

								<p><strong>Price:</strong> $1500 per month. Registration fee discounted until February 20.</p>

								<p><strong>Requirements:</strong> No previous knowledge is required.</p>

								<p><strong>Contact:</strong> Contact us at 011-2090-8805 or 15-5837-9788 from Monday to Friday from 10:00 am to 6:00 pm.</p>

								<h5>Study Program</h5>
								<p>Select the Level:</p>


								<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel with-nav-tabs panel-default">
									<div class="panel-heading">
										<ul class="nav nav-tabs" style="border-bottom: 1px #eee solid">
											<li class="tab active">
												<a href="#tab3default" data-toggle="tab">LEVEL I<span class="caret"></span></a>
											</li>
											<li class="tab">
												<a href="#tab4default" data-toggle="tab">LEVEL II<span class="caret"></span></a>
											</li>
											<li class="tab">
												<a href="#tab5default" data-toggle="tab">LEVEL III<span class="caret"></span></a>
											</li>
										</ul>
									</div>

									<div class="panel-body" style="padding: 0 15px;">
										<div class="tab-content">
											<div class="tab-pane fade" id="tab6default">
												<ul>
													<h3>Nivel I</h3>
													<li>Aprender las bases conceptuales y filosóficas de la astrología.</li>
													<li>Manejar el lenguaje simbólico de una carta natal: Signos, Planetas, Casas y Aspectos.</li>
													<li>Iniciarse en la interpretación general de una carta natal o carta astral.</li>
													<li>Comprender el alcance del saber astrológico.</li>
													<h3>Nivel II</h3>
													<li>Realizar la interpretación completa y minuciosa de un tema natal.</li>
													<li>Manejar el lenguaje simbólico de una carta natal: Signos, Planetas, Casas y Aspectos</li>
													<li>Iniciarse en la interpretación general de una carta natal o carta astral.</li>
													<li>Comprender el alcance del saber astrológico</li>
													<h3>Nivel III</h3>
													<li>Adquirir conocimientos de Psicología.</li>
													<li>Familiarizarse con la Psicología de Jung y el Cuarto Camino de Gurdjieff.</li>
													<li>Aplicar técnicas para el autoconocimiento y el desarrollo interior.</li>
												</ul>
											</div>
											<!-- PROGRAMA DE ESTUDIOS NIVEL I -->
											<div class="tab-pane fade in active" id="tab3default">
												<h5>Nivel I</h5>
												<h6>Objetivos:</h6>
												<ul>
													<li>Aprender las bases conceptuales y filos&oacute;ficas de la astrolog&iacute;a.</li>
													<li>Manejar el lenguaje simb&oacute;lico de una carta natal: Signos, Planetas, Casas y Aspectos.</li>
													<li>Iniciarse en la interpretaci&oacute;n general de una carta natal o carta astral.</li>
													<li>Comprender el alcance del saber astrol&oacute;gico.</li>
												</ul>
												<h5>PROGRAMA DE ESTUDIO</h5>
												<div class="panel-group" id="accordion">
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 0px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse1">
																	<h5>Introducci&oacute;n a la Astrolog&iacute;a</h5>

																	<h6>Su historia y desarrollo</h6>
																</a>
															</h4>
														</div>
														<div id=1" class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Definici&oacute;n de la Astrolog&iacute;a.</li>
																	<li>La astronom&iacute;a como base astrol&oacute;gica.</li>
																	<li>Historia b&aacute;sica de la astrolog&iacute;a.</li>
																	<li>Componentes del mandala astrol&oacute;gico.</li>
																	<li>Los 4 elementos o triplicidades.</li>
																	<li>Las cualidades o cuadruplicidades.</li>
																	<li>Las polaridades energ&eacute;ticas.</li>
																	<li>Formaci&oacute;n de los campos energ&eacute;ticos o signos zodiacales.</li>
																	<li>Leer e interpretar las efem&eacute;rides astrol&oacute;gicas.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse2">
																	<h5>El Zod&iacute;aco</h5>

																	<h6>Los doce capmos energ&eacute;ticos</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>La Rueda del Zod&iacute;aco y las Constelaciones.</li>
																	<li>Caracter&iacute;sticas de los 12 signos del Zod&iacute;aco.</li>
																	<li>La polaridad en los Signos.</li>
																	<li>Los Signos y el cuerpo f&iacute;sico.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse3">
																	<h5>Los Planetas</h5>

																	<h6>Las funciones b&aacute;sicas del Ser Humano</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Los cuerpos celestes y sus tipos.</li>
																	<li>Caracter&iacute;sticas de los 10 Planetas.</li>
																	<li>Cualidades de los Planetas.</li>
																	<li>Acci&oacute;n directa y retr&oacute;grada planetaria.</li>
																	<li>Per&iacute;odo orbital.</li>
																	<li>Dignidades planetarias.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse4">
																	<h5>Las doce Lunas</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Funci&oacute;n lunar.</li>
																	<li>Lo subconsciente.</li>
																	<li>Conductas Reactivas.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse42">
																	<h5>Los doce Ascendentes</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Los doce Ascendentes.</li>
																	<li>Matrices, herencia y Destino.</li>
																	<li>Comprensi&oacute;n del Camino de Individuaci&oacute;n o Camino del H&eacute;roe, paso a paso.</li>
																	<li>Ascendente/Descendente.</li>
																	<li>Medio Cielo/Fondo de Cielo.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse5">
																	<h5>T&eacute;cnicas de Interpretaci&oacute;n</h5>

																	<h6>Equilibrio/Desequilibrio de los 4 Elementos</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Fuego.</li>
																	<li>Tierra.</li>
																	<li>Aire.</li>
																	<li>Agua.</li>
																	<li>Reparto planetario.</li>
																	<li>Sobre el horizonte.</li>
																	<li>Bajo el horizonte.</li>
																	<li>Orientales.</li>
																	<li>Occidentales.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse6">
																	<h5>Las Casas o Sectores Terrestres</h5>
																	<!--<h5 style="font-weight: bold; margin: 6px 0;"></h5>-->
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>La Rueda de las Casas.</li>
																	<li>Distintos Sistemas de Casas.</li>
																	<li>Sistemas de Casas Iguales.</li>
																	<li>Menci&oacute;n a las Casas Solares.</li>
																	<li>Clasificaci&oacute;n de las Casas.</li>
																	<li>Caracter&iacute;sticas de los 12 sectores terrestres.</li>
																	<li>Casas cargadas y vac&iacute;as.</li>
																	<li>Planetas pr&oacute;ximos a las c&uacute;spides de las Casas.</li>
																	<li>Signos y Casas interceptadas.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse7">
																	<h5>Los Aspectos Planetarios I</h5>
																	<!--<h5 style="font-weight: bold; margin: 6px 0;"></h5>-->
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Definici&oacute;n de los aspectos</li>
																	<li>Aspectos Mayores</li>
																	<li>Aspectos sutiles o&nbsp; poco comunes</li>
																	<li>Orbes</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse8">
																	<h5>Los Planetas en los 12 Signos</h5>
																	<!--<h5 style="font-weight: bold; margin: 6px 0;"></h5>-->
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>C&oacute;mo la naturaleza de cada planeta es modificada por su presencia en cada uno de los 12 Signos del Zod&iacute;aco.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse9">
																	<h5>El Eje de la Evoluci&oacute;n</h5>

																	<h6>Los Nodos Lunares</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Relaci&oacute;n de los nodos con el Karma y con vidas pasadas.</li>
																	<li>El nodo norte. Mi misi&oacute;n en esta vida.</li>
																	<li>EL nodo sur: ataduras del pasado que debo soltar</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse11">
																	<h5>Pr&aacute;cticas de Interpretaci&oacute;n I</h5>
																	<!--<h5 style="font-weight: bold; margin: 6px 0;"></h5>-->
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Pasos a seguir: bases interpretativas</li>
																	<li>Tipos de Cartas</li>
																	<li>Estudio y pr&aacute;ctica de Cartas natales de Personajes famosos</li>
																	<li>Puesta en pr&aacute;ctica de los conocimientos adquiridos hasta el momento a trav&eacute;s del an&aacute;lisis de distintas cartas natales</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse12">
																	<h5>C&aacute;lculo del Ascendente</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Uso de Efem&eacute;rides y Tablas de casas</li>
																	<li>CONFECCI&Oacute;N DE LA CARTA ASTRAL</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse13">
																	<h5>Presentaci&oacute;n de los temas del segundo nivel</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Profundizaci&oacute;n en nuevos elementos de la carta natal</li>
																	<li>Revoluci&oacute;n Solar</li>
																	<li>Sinastr&iacute;as</li>
																	<li>T&eacute;cnicas predictivas</li>
																	<li>Tr&aacute;nsitos y los ciclos vitales en astrolog&iacute;a</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="tab4default">
												<!-- PROGRAMA DE ESTUDIOS NIVEL II -->
												<h5>Nivel II</h5>
												<h6>Pre-requisitos:</h6>

												<p>Para aquellos estudiantes que est&eacute;n cursando los estudios completos de astrolog&iacute;a, se requiere haber cursado y superado el primer nivel. Los estudiantes que se incorporen en este nivel habr&aacute;n de superar los conocimientos correspondientes al primer nivel.</p>

												<h6>Objetivos:</h6>
												<ul>
													<li>Realizar la interpretaci&oacute;n completa y minuciosa de un tema natal.</li>
													<li>Manejar el lenguaje simb&oacute;lico de una carta natal: Signos, Planetas, Casas y Aspectos</li>
													<li>Iniciarse en la interpretaci&oacute;n general de una carta natal o carta astral.</li>
													<li>Comprender el alcance del saber astrol&oacute;gico</li>
												</ul>

												<p><strong>Se realizar&aacute;n trabajos pr&aacute;cticos y ejercicios de evaluaci&oacute;n.</strong></p>

												<h5>PROGRAMA DE ESTUDIO</h5>

												<div class="panel-group" id="accordion">
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse20">
																	<h5>Interpretaci&oacute;n 2</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Contenidos: Los decanatos tradicionales.</li>
																	<li>Condiciones planetarias.</li>
																	<li>Dignidades Planetarias.</li>
																	<li>Domicilio-Exilio / Exaltaci&oacute;n - Ca&iacute;da.</li>
																	<li>Planetas peregrinos.</li>
																	<li>Fuerza o debilidad planetaria seg&uacute;n su posici&oacute;n en Signo, Casa y Aspectos.</li>
																	<li>Planeta regente o gobernador.</li>
																	<li>Planeta regente de una casa.</li>
																	<li>Planetas aislados.</li>
																	<li>Planetas estacionarios.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse21">
																	<h5>Los Aspectos Planetarios II</h5>

																	<h6>Aspectos Compuestos</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Gran tri&aacute;ngulo.</li>
																	<li>T cuadrada.</li>
																	<li>El Yod.</li>
																	<li>Cruz C&oacute;smica.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse22">
																	<h5>Planetas Retr&oacute;grados y Estacionarios</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Mercurio, Venus y Marte retr&oacute;grados.</li>
																	<li>El resto de los planetas retr&oacute;grados. Simbolismo e interpretaci&oacute;n.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse23">
																	<h5>Casas</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Las Casas y los Planetas.</li>
																	<li>C&uacute;spide de las casas y regencias.</li>
																	<li>Casas vac&iacute;as y regencias.</li>
																	<li>Casas sobrecargadas y regencias.</li>
																	<li>Casas interceptadas y regencias.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse24">
																	<h5>Autoconocimiento I</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Estudio de la propia carta natal.</li>
																	<li>Estudio y seguimiento continuo de los ciclos de transformaci&oacute;n personales.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse25">
																	<h5>Confecci&oacute;n de la Carta Natal</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>C&aacute;lculo de la Carta Astral manual o software.</li>
																	<li>Utilizaci&oacute;n de las Efem&eacute;rides y Tablas de Casas.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse26">
																	<h5>Sinastr&iacute;as o comparaci&oacute;n de Cartas</h5>

																	<h6>Primera Parte</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>A qu&eacute; se llama sinastr&iacute;a.</li>
																	<li>Tipos.</li>
																	<li>Pareja.</li>
																	<li>Familia (Padres, hermanos, t&iacute;os, etc.).</li>
																	<li>Amistad.</li>
																	<li>Trabajo (compa&ntilde;eros, jefes, etc.).</li>
																	<li>M&eacute;todo a seguir.</li>
																	<li>Configuraciones planetarias por sinastr&iacute;a.</li>
																	<li>Ejemplos y Pr&aacute;cticas.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse27">
																	<h5>Tr&aacute;nsitos</h5>

																	<h6>Primera Parte</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Los ciclos gen&eacute;ricos</li>
																	<li>Los ciclos de los nodos lunares</li>
																	<li>Los ciclos de los planetas personales</li>
																	<li>Los ciclos de los planetas sociales</li>
																	<li>Los ciclos de los planetas transpersonales</li>
																	<li>Planetas transitando</li>
																	<li>Configuraciones planetarias por transito</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse28">

																	<h5>Revoluci&oacute;n Solar</h5>
																	<h6>Primera Parte</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Definici&oacute;n</li>
																	<li>C&aacute;lculo de revoluci&oacute;n</li>
																	<li>Componentes</li>
																	<li>An&aacute;lisis de la revoluci&oacute;n solar</li>
																	<li>ASCENDENTE ANUAL</li>
																	<li>EL SOL y los planetas en las casas Anuales</li>
																	<li>Superposici&oacute;n de casas de la revoluci&oacute;n solar sobre la carta natal</li>
																	<li>Los ciclos de 4 a&ntilde;os</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse29">
																	<h5>El Planeta Regente del Ascendente</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Su importancia. Posici&oacute;n por Signo, Casa y Aspectos.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- PROGRAMA DE ESTUDIOS NIVEL III -->
											<div class="tab-pane fade" id="tab5default">
												<h5>Nivel III</h5>

												<h6>Pre-requisitos:</h6>
												<p>Para aquellos estudiantes que est&eacute;n cursando los estudios completos de astrolog&iacute;a, se requiere haber cursado y superado el segundo nivel. Los estudiantes que se incorporen en este nivel habr&aacute;n de superar los conocimientos correspondientes al segundo nivel.</p>
												<h6>Objetivos:</h6>
												<ul>
													<li>Adquirir conocimientos de Psicolog&iacute;a.</li>
													<li>Familiarizarse con la Psicolog&iacute;a de Jung y el Cuarto Camino de Gurdjieff.</li>
													<li>Aplicar t&eacute;cnicas para el autoconocimiento y el desarrollo interior.</li>
												</ul>
												<h5>PROGRAMA DE ESTUDIO</h5>
												<div class="panel-group" id="accordion">
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse30">
																	<h5>Sinastr&iacute;as II</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Puesta en Pr&aacute;ctica. Trabajos Pr&aacute;ctico.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse31">
																	<h5>Revoluci&oacute;n Solar II</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Puesta en Pr&aacute;ctica. Trabajos Pr&aacute;ctico.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse32">
																	<h5>Aspectos Sutiles</h5>

																	<h6>Indicadores del nivel espiritual</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>La Serie quintil</li>
																	<li>Septil y aspectos indicadores del destino</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse33">
																	<h5>Revoluciones Planetarias y Tr&aacute;nsitos II</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Revoluci&oacute;n de Saturno.</li>
																	<li>Revoluci&oacute;n de J&uacute;piter.</li>
																	<li>Revoluci&oacute;n de Marte, Venus y Mercurio.</li>
																	<li>Revoluci&oacute;n Lunar.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse34">
																	<h5>Enfoque K&aacute;rmico de la Astrolog&iacute;a</h5>

																	<h6>Fundamentos</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Nodos.</li>
																	<li>Planetas retr&oacute;grados.</li>
																	<li>Plut&oacute;n.</li>
																	<li>Casa lunar.</li>
																	<li>S&iacute;mbolos sabianos.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse35">
																	<h5>Quir&oacute;n</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Su influencia en la carta natal.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse36">
																	<h5>Astrolog&iacute;a y Psicolog&iacute;a</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Arquetipos del Inconsciente Colectivo de Carl Jung</li>
																	<li>La Sombra, El Anima Animus, El Personaje, El Self</li>
																	<li>Los 4 Tipos psicol&oacute;gicos: c&oacute;mo reconocerlos a trav&eacute;s de la carta natal</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse37">
																	<h5>Progresiones</h5>

																	<h6>Nociones b&aacute;sicas</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Simb&oacute;licas y Luna progresada. Aspecto te&oacute;rico.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse38">
																	<h5>La consulta Astrol&oacute;gica</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>&Eacute;tica del Astr&oacute;logo.</li>
																	<li>El Arte de dar Consejo.</li>
																	<li>Diferentes modelos de consulta. Las consultas &uacute;nicas; el seguimiento; las consultas anuales. El manejo del poder en la consulta: las relaciones astr&oacute;logo-cliente.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="youtube-video">
											<iframe width="100%" height="250" src="https://www.youtube.com/embed/d9QBxlqLV5w"></iframe>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="youtube-video">
											<iframe width="100%" height="250" src="https://www.youtube.com/embed/y_EWAP_OHZI"></iframe>
										</div>
									</div>
								</div>
							</div>
							<!-- /FIN NUEVOS ESTILOS -->
						</div>
						<div class="col-xs-12 col-md-3 side_section">
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