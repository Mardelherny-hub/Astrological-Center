<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('site/head.php'); ?>

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
		.video-container {
			display: block;
			margin: 0px auto 30px;
			max-width: 560px;
			max-height: 315px;
			width: 100%;
		}

		@media screen and (min-width: 360px) {
			.video-container {
				max-width: 464px;
				min-width: 300px;
				width: 100%;
			}
		}

		@media screen and (min-width: 768px) {
			.video-container {
				float: right;
				margin: 0px 0px 20px 20px;
				width: 50%;
			}
		}

		.video-container .video-responsive {
			background-color: lightblue;
			position: relative;
			padding-bottom: 56%;
			/* 16/9 ratio */
			padding-top: 30px;
			/* IE6 workaround*/
			height: 0;
			overflow: hidden;
			width: 100%;
		}

		.video-container .video-responsive iframe,
		.video-container .video-responsive object,
		.video-container .video-responsive embed {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}

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
			<img src="img/Curso_anual.jpg" width="100%">
		</div>

		<section id="content_section">
			<!-- Secci&oacute;n principal > comienzo -->
			<section class="main_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-md-9">
							<div class="harmonic-styles astro">
								<div class="video-container">
									<div class="video-responsive">
										<iframe src="https://www.youtube.com/embed/eb904vgYf5c" frameborder=”0″ allowfullscreen></iframe>
									</div>
								</div>
								<div class="header-section" style="padding-bottom: 10px;">
									<h1>Astrology Career</h1>
								</div>

								<p>The proposal of Centro Astrológico Aztlan is to teach Astrology in a dynamic way, giving value to both theoretical and practical aspects. Therefore, classes are theoretical-practical, teaching students the techniques of interpreting a natal chart.</p>

								<hr style="margin: 10px 0">

								<div class="row">
									<div class="col-md-6">
										<!-- <p><strong>Days and Hours:</strong>
      <br>
      Monday 10:30 AM or 7 PM
      <br>
      Thursday 10:30 AM or 7 PM.</p> -->
									</div>
								</div>

								<p style=" margin-bottom: -5px;"><strong>Frequency:</strong> Once a week, 1 hour 30 minutes each class.</p>

								<p style=" margin-bottom: -5px"><strong>Duration:</strong> The training consists of 3 levels. Each level lasts one academic year.</p>

								<!--p style=" margin-bottom: -5px"><strong>Price:</strong></p-->

								<p style=" margin-bottom: -5px"><strong>Requirements:</strong> No previous knowledge is required.</p>

								<p style=" margin-bottom: 5px"><strong>Contact:</strong> Contact us at +54 9 11 5837-9788 or +54 9 11 2090-8805 from Monday to Friday from 10:00 AM to 6:00 PM.</p>
								<h5 style="margin-bottom: 5px;">Study Program</h5>
								<p>Select the Level:</p>

								<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel with-nav-tabs panel-default">
									<div class="panel-heading">
										<ul class="nav nav-tabs" style="border-bottom: 1px #eee solid">
											<li class="tab active" style="margin-left: 0">
												<a href="#tab3default" data-toggle="tab">LEVEL I<span class="caret"></span></a>
											</li>
											<li class="tab" style="margin-left: 0">
												<a href="#tab4default" data-toggle="tab">LEVEL II<span class="caret"></span></a>
											</li>
											<li class="tab" style="margin-left: 0">
												<a href="#tab5default" data-toggle="tab">LEVEL III<span class="caret"></span></a>
											</li>
										</ul>
									</div>

									<div class="panel-body" style="padding: 0 15px;">
										<div class="tab-content">
											<div class="tab-pane fade" id="tab6default">
												<ul>
													<li>
														<h3>Level I</h3>
														<ul>
															<li>Learn the conceptual and philosophical foundations of astrology.</li>
															<li>Handle the symbolic language of a natal chart: Signs, Planets, Houses, and Aspects.</li>
															<li>Initiate in the general interpretation of a natal chart or horoscope.</li>
															<li>Understand the scope of astrological knowledge.</li>
														</ul>
													</li>
													<li>
														<h3>Level II</h3>
														<ul>
															<li>Perform a complete and detailed interpretation of a natal chart.</li>
															<li>Handle the symbolic language of a natal chart: Signs, Planets, Houses, and Aspects.</li>
															<li>Initiate in the general interpretation of a natal chart or horoscope.</li>
															<li>Understand the scope of astrological knowledge.</li>
														</ul>
													</li>
													<li>
														<h3>Level III</h3>
														<ul>
															<li>Acquire knowledge of Psychology.</li>
															<li>Familiarize yourself with Jung's Psychology and Gurdjieff's Fourth Way.</li>
															<li>Apply techniques for self-knowledge and inner development.</li>
														</ul>
													</li>
												</ul>

											</div>
											<!-- PROGRAMA DE ESTUDIOS NIVEL I -->
											<div class="tab-pane fade in active" id="tab3default">

												<h6 style="margin-bottom: -5px">Objectives:</h6>
												<ul>
													<li>Learn the conceptual and philosophical foundations of astrology.</li>
													<li>Understand the symbolic language of a natal chart: Signs, Planets, Houses, and Aspects.</li>
													<li>Initiate in the overall interpretation of a natal chart or horoscope.</li>
													<li>Comprehend the scope of astrological knowledge.</li>
												</ul>

												<h5 style="margin-bottom: -5px">STUDY PROGRAM</h5>
												<div class="panel-group" id="accordion">
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 0px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse1">
																	<h5 style="margin-top: -10px;margin-bottom: -5px">Introduction to Astrology</h5>
																	<h6 style="margin-bottom: -5px">Its history and development</h6>
																</a>
															</h4>
														</div>
														<div id=1" class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Definition of Astrology.</li>
																	<li>Astronomy as the astrological foundation.</li>
																	<li>Basic history of astrology.</li>
																	<li>Components of the astrological mandala.</li>
																	<li>The 4 elements or triplicities.</li>
																	<li>The qualities or quadruplicities.</li>
																	<li>Energetic polarities.</li>
																	<li>Formation of energetic fields or zodiacal signs.</li>
																	<li>Reading and interpreting astrological ephemerides.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse2">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">The Zodiac</h5>
																	<h6 style="margin-bottom: -5px">The twelve energetic fields</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>The Wheel of the Zodiac and the Constellations.</li>
																	<li>Characteristics of the 12 signs of the Zodiac.</li>
																	<li>Polarity in the Signs.</li>
																	<li>The Signs and the physical body.</li>
																</ul>

															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse3">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">The Planets</h5>
																	<h6 style="margin-bottom: -5px">The basic functions of the Human Being</h6>

																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Celestial bodies and their types.</li>
																	<li>Characteristics of the 10 Planets.</li>
																	<li>Qualities of the Planets.</li>
																	<li>Direct and retrograde planetary motion.</li>
																	<li>Orbital period.</li>
																	<li>Planetary dignities.</li>
																</ul>

															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse4">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">The Twelve Moons</h5>

																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Lunar function.</li>
																	<li>The subconscious.</li>
																	<li>Reactive behaviors.</li>
																</ul>

															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse42">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">The Twelve Ascendants</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>The twelve Ascendants.</li>
																	<li>Matrices, inheritance, and Destiny.</li>
																	<li>Understanding the Path of Individuation or Hero's Journey, step by step.</li>
																	<li>Ascendant/Descendant.</li>
																	<li>Midheaven/Nadir.</li>
																</ul>
															</div>
														</div>

													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse5">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Interpretation Techniques</h5>
																	<h6 style="margin-bottom: -5px">Balance/Imbalance of the 4 Elements</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Fire.</li>
																	<li>Earth.</li>
																	<li>Air.</li>
																	<li>Water.</li>
																	<li>Planetary distribution.</li>
																	<li>Above the horizon.</li>
																	<li>Below the horizon.</li>
																	<li>Oriental.</li>
																	<li>Occidental.</li>
																</ul>
															</div>
														</div>
													</div>

													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse6">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Houses or Terrestrial Sectors</h5>
																	<!--<h5 style="font-weight: bold; margin: 6px 0;"></h5>-->
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>The Wheel of Houses.</li>
																	<li>Different House Systems.</li>
																	<li>Equal House Systems.</li>
																	<li>Mention of Solar Houses.</li>
																	<li>Classification of Houses.</li>
																	<li>Characteristics of the 12 terrestrial sectors.</li>
																	<li>Loaded and empty houses.</li>
																	<li>Planets near house cusps.</li>
																	<li>Intercepted Signs and Houses.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse7">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Planetary Aspects I</h5>
																	<!--<h5 style="font-weight: bold; margin: 6px 0;"></h5>-->
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Definition of aspects</li>
																	<li>Major Aspects</li>
																	<li>Subtle or uncommon aspects</li>
																	<li>Orbs</li>
																</ul>
															</div>
														</div>
													</div>

													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse8">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Planets in the 12 Signs</h5>
																	<!--<h5 style="font-weight: bold; margin: 6px 0;"></h5>-->
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>How the nature of each planet is modified by its presence in each of the 12 Signs of the Zodiac.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse9">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">The Axis of Evolution</h5>
																	<h6 style="margin-bottom: -5px">Lunar Nodes</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Relationship of the nodes with Karma and past lives.</li>
																	<li>The North Node. My mission in this life.</li>
																	<li>The South Node: bindings from the past that I must release.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse11">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Interpretation Practices I</h5>
																	<!--<h5 style="font-weight: bold; margin: 6px 0;"></h5>-->
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Steps to follow: interpretative foundations.</li>
																	<li>Types of Charts.</li>
																	<li>Study and practice of natal charts of famous personalities.</li>
																	<li>Implementation of the knowledge acquired so far through the analysis of different natal charts.</li>
																</ul>
															</div>
														</div>
													</div>

													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse12">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Calculation of the Ascendant</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Use of Ephemeris and House Tables.</li>
																	<li>PREPARATION OF THE NATAL CHART</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse13">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Presentation of Topics for the Second Level</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Deepening into new elements of the natal chart.</li>
																	<li>Solar Revolution.</li>
																	<li>Synastry.</li>
																	<li>Predictive Techniques.</li>
																	<li>Transits and life cycles in astrology.</li>
																</ul>
															</div>
														</div>
													</div>

												</div>
											</div>
											<div class="tab-pane fade" id="tab4default">
												<!-- PROGRAMA DE ESTUDIOS NIVEL II -->

												<h6 style="margin-bottom: -5px">Prerequisites:</h6>

												<p>For those students who are taking the complete astrology studies, it is required to have completed and passed the first level. Students joining this level must surpass the knowledge corresponding to the first level.</p>

												<h6 style="margin-bottom: -5px">Objectives:</h6>
												<ul>
													<li>Perform a complete and thorough interpretation of a natal chart.</li>
													<li>Handle the symbolic language of a natal chart: Signs, Planets, Houses, and Aspects.</li>
													<li>Initiate in the general interpretation of a natal chart or birth chart.</li>
													<li>Understand the scope of astrological knowledge.</li>
												</ul>

												<p><strong>Practical work and evaluation exercises will be carried out.</strong></p>

												<h5 style="margin-bottom: -5px">STUDY PROGRAM</h5>

												<div class="panel-group" id="accordion">
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse20">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Interpretation 2</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Contents: Traditional decans.</li>
																	<li>Planetary conditions.</li>
																	<li>Planetary dignities.</li>
																	<li>Domicile-Exile / Exaltation - Fall.</li>
																	<li>Peregrine planets.</li>
																	<li>Planetary strength or weakness based on their position in Sign, House, and Aspects.</li>
																	<li>Ruling planet or governor.</li>
																	<li>Ruling planet of a house.</li>
																	<li>Isolated planets.</li>
																	<li>Stationary planets.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse21">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Planetary Aspects II</h5>

																	<h6 style="margin-bottom: -5px">Composite Aspects</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Grand trine.</li>
																	<li>Square aspect.</li>
																	<li>The Yod.</li>
																	<li>Cosmic Cross.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse22">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Retrgrade and Stationary Planets</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Mercury, Venus, and Mars in retrograde motion.</li>
																	<li>Other planets in retrograde motion. Symbolism and interpretation.</li>
																</ul>
															</div>
														</div>
													</div>

													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse23">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Houses</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Houses and Planets.</li>
																	<li>House cusps and rulerships.</li>
																	<li>Empty houses and rulerships.</li>
																	<li>Overloaded houses and rulerships.</li>
																	<li>Intercepted houses and rulerships.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse24">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Self-Knowledge I</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Study of one's own natal chart.</li>
																	<li>Study and continuous monitoring of personal transformation cycles.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse25">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Creation of the Natal Chart</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Manual or software calculation of the birth chart.</li>
																	<li>Use of Ephemerides and House Tables.</li>
																</ul>
															</div>
														</div>
													</div>

													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse26">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Synastry or Chart Comparison</h5>

																	<h6 style="margin-bottom: -5px">Part One</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>What is called synastry.</li>
																	<li>Types.</li>
																	<li>Partnership.</li>
																	<li>Family (Parents, siblings, uncles, etc.).</li>
																	<li>Friendship.</li>
																	<li>Work (colleagues, bosses, etc.).</li>
																	<li>Method to follow.</li>
																	<li>Planetary configurations by synastry.</li>
																	<li>Examples and Practices.</li>
																</ul>
															</div>
														</div>
													</div>

													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse27">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">Transits</h5>

																	<h6 style="margin-bottom: -5px">Part One</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Generic cycles</li>
																	<li>Cycles of lunar nodes</li>
																	<li>Cycles of personal planets</li>
																	<li>Cycles of social planets</li>
																	<li>Cycles of transpersonal planets</li>
																	<li>Transiting planets</li>
																	<li>Planetary configurations by transit</li>
																</ul>
															</div>
														</div>
													</div>

													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse28">

																	<h5 style="margin-top: -10px; margin-bottom: -5px">Solar Revolution</h5>
																	<h6 style="margin-bottom: -5px">Part One</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Definition</li>
																	<li>Calculation of revolution</li>
																	<li>Components</li>
																	<li>Analysis of the solar revolution</li>
																	<li>ANNUAL ASCENDANT</li>
																	<li>THE SUN and planets in Annual houses</li>
																	<li>Overlay of solar revolution houses on the natal chart</li>
																	<li>4-year cycles</li>
																</ul>
															</div>
														</div>
													</div>

													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse29">
																	<h5 style="margin-top: -10px; margin-bottom: -5px">The Ruling Planet of the Ascendant</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Its importance. Position by Sign, House, and Aspects.</li>
																</ul>
															</div>
														</div>
													</div>

												</div>
											</div>
											<!-- PROGRAMA DE ESTUDIOS NIVEL III -->
											<div class="tab-pane fade" id="tab5default">

												<h6 style="margin-bottom: -5px">Prerequisites:</h6>
												<p>For those students who are completing the full astrology studies, it is required to have completed and passed the second level. Students joining this level must surpass the knowledge corresponding to the second level.</p>
												<h6 style="margin-bottom: -5px">Objectives:</h6>
												<ul>
													<li>Acquire knowledge of Psychology.</li>
													<li>Familiarize oneself with Jung's Psychology and Gurdjieff's Fourth Way.</li>
													<li>Apply techniques for self-awareness and inner development.</li>
												</ul>
												<h5 style="margin-bottom: -5px">STUDY PROGRAM</h5>

												<div class="panel-group" id="accordion">
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse30">
																	<h5 style="margin-top: -10px;margin-bottom: -5px">Synastry II</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Implementation. Practical Work.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse31">
																	<h5 style="margin-top: -10px;margin-bottom: -5px">Solar Revolution II</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Implementation. Practical Work.</li>
																</ul>
															</div>
														</div>
													</div>

													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse32">
																	<h5 style="margin-top: -10px;margin-bottom: -5px">Subtle Aspects</h5>

																	<h6 style="margin-bottom: -5px">Indicators of the spiritual level</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>The Quintile Series</li>
																	<li>Septile and aspects indicating destiny</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse33">
																	<h5 style="margin-top: -10px;margin-bottom: -5px">Planetary Revolutions and Transits II</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Saturn Revolution.</li>
																	<li>Jupiter Revolution.</li>
																	<li>Mars, Venus, and Mercury Revolution.</li>
																	<li>Lunar Revolution.</li>
																</ul>
															</div>
														</div>
													</div>

													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse34">
																	<h5 style="margin-top: -10px;margin-bottom: -5px">Karmic Approach to Astrology</h5>

																	<h6 style="margin-bottom: -5px">Fundamentals</h6>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Nodes.</li>
																	<li>Retrgrade Planets.</li>
																	<li>Pluto.</li>
																	<li>Lunar House.</li>
																	<li>Sabian Symbols.</li>
																</ul>
															</div>
														</div>
													</div>
													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
														<div class="panel-heading" style="padding: 10px 15px 0;">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse35">
																	<h5 style="margin-top: -10px;margin-bottom: -5px">Chiron</h5>
																</a>
															</h4>
														</div>
														<div class="">
															<div class="panel-body" style="padding: 0 15px;">
																<ul>
																	<li>Its influence in the natal chart.</li>
																</ul>
															</div>
														</div>
													</div>

													<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
    <div class="panel-heading" style="padding: 10px 15px 0;">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse36">
                <h5 style="    margin-top: -10px;margin-bottom: -5px">Astrology and Psychology</h5>
            </a>
        </h4>
    </div>
    <div class="">
        <div class="panel-body" style="padding: 0 15px;">
            <ul>
                <li>Archetypes of Carl Jung's Collective Unconscious</li>
                <li>The Shadow, The Anima/Animus, The Persona, The Self</li>
                <li>The 4 Psychological Types: How to Recognize Them through the Natal Chart</li>
            </ul>
        </div>
    </div>
</div>

<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
    <div class="panel-heading" style="padding: 10px 15px 0;">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse37">
                <h5 style="    margin-top: -10px;margin-bottom: -5px">Progressions</h5>
                <h6 style="margin-bottom: -5px">Basic Notions</h6>
            </a>
        </h4>
    </div>
    <div class="">
        <div class="panel-body" style="padding: 0 15px;">
            <ul>
                <li>Symbolic Progressions and Progressed Moon. Theoretical Aspect.</li>
            </ul>
        </div>
    </div>
</div>

<div style="-webkit-box-shadow: none; box-shadow: none;" class="panel panel-default">
    <div class="panel-heading" style="padding: 10px 15px 0;">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" style="cursor: default;" href="#collapse38">
                <h5 style="    margin-top: -10px;margin-bottom: -5px">Astrological Consultation</h5>
            </a>
        </h4>
    </div>
    <div class="">
        <div class="panel-body" style="padding: 0 15px;">
            <ul>
                <li>Ethics of the Astrologer.</li>
                <li>The Art of Giving Advice.</li>
                <li>Different Consultation Models. Single consultations; follow-ups; annual consultations. Managing power in the consultation: astrologer-client relationships.</li>
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