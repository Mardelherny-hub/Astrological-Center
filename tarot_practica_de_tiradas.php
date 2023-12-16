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
				margin-top: 1px !important;;
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
		font: bold 16px "Open Sans", sans-serif;
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
			margin: 0px 30px 40px 0px;
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
		<div id="container" style="background-color: #fff;">
			<?php include('site/header.php'); ?>
			<div class="col-sm-12" style="padding: 0px;">
				<img src="http://www.centroastrologico.com.ar/assets/images/Tarot_tiradas_php.jpg" width="100%">
			</div>
			<section id="content_section" style="width: 91%">
				<!-- Secci&oacute;n principal > comienzo -->
				<section class="main_section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-9" style="overflow: hidden; padding: 0px 10px 10px 0px; margin-bottom: 30px;">
								
								<!-- titulo -->
								<div class="page-header articulo_header" style="margin-top: 0">
									<!-- ADDTHIS
									Go to www.addthis.com/dashboard to customize your tools
									<div class="addthis_inline_share_toolbox" style="margin: 20px 0px 10px 0px;"></div>
									-->
									<a name="arriba"></a>
									<h1 class="articulo_text_header" style="font-size: 26px; font-weight: 700; margin-top: 0px;text-transform: uppercase;font-family: 'Open Sans', sans-serif; margin-bottom: 5px">Curso de Tarot: Práctica de Tiradas</h1>
									
									<p style="margin: 0px; padding: 0px; line-height: 100%;"><strong>Inicio:</strong>Martes 10 de Abril de 9 a 16 hs.</p>
								</div>
								<div class="row">
								<div class="col-xs-12">
									<div class="video-container">
										<div class="video-responsive">
											<iframe src="https://www.youtube.com/embed/34oG0w8tnW0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										</div>
									</div>

									<h3 class="h2sub" style="margin-bottom: 5px; margin-top: 0px; font-size: 17px !important; line-height: 24px!important;"><b>¿Querés aprender y dominar los significados de las cartas del Tarot y leer el Tarot con confianza?<br> ¿Conocés las cartas pero te falta práctica a la hora de interpretar?</b></h3>
									<p>En este curso, desarrollaremos habilidades de lectura e interpretación con distintas tiradas, desde las más simples a las más completas. <br>Cuáles son las tiradas más recomendadas para responder a las preguntas sobre el amor, la relaciones, las finanzas, el trabajo y la salud.</p>
									<p>Tirar las cartas es un verdadero Arte. Aprendé de manera personalizada, los secretos del arte de tirar, leer e interpretar las cartas.</p>
									<ul style="font-size: 15px; line-height: 30px; list-style-type: square;">
										<li>Tiradas con Arcanos Mayores</li>
										<li>Tiradas combinando Arcanos Mayores y Menores</li>
										<b style="font-size: 14px;">*Usaremos los mazos de Tarot Marsella y Rider Waite</b>
									</ul>
								</div>
							</div>
							<hr style="margin-top: 10px">
							<p style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'Open Sans', sans-serif;"><span style="font-family: 'Open Sans', sans-serif;font-weight: bold;">Duración:</span> 1 Jornada.</p>
							<br>
							<p style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'Open Sans', sans-serif;"><span style="font-family: 'Open Sans', sans-serif;font-weight: bold;">Valor:</span> $1.500</p>
							<br>
							<p style="display: block; font-size: 15px; line-height: 140%; margin-bottom: 4px; font-family: 'Open Sans', sans-serif;">Dictado por Lucía Pocosgnich – Consultora Astrológica y Profesora de Tarot, Psicología y Astrología de la <i><b>Escuela de Psicología y Filosofía Aztlan y del Centro Astrológico Aztlan.</i></p>
							<div class="row">
								<div class="col-sm-2">
									<table style="width: 100%; height: 100%;">
										<tr>
											<td style="text-align: center; vertical-align: middle;">
											</td>
										</tr>
									</table>
								</div>
								<div class="col-sm-10" style="overflow: hidden; padding-left: 0px;">
									
								</div>
							</div>
							<div style="text-align: center; margin: 60px 0px 0px 0px; border-radius: 2px;" class="mobile-visibility-none">
								<a href="#arriba" class="button solicita_btn" style="padding: 8px 13px;">SOLICITÁ MÁS INFORMACIÓN AQUÍ</a>
							</div>
						</div>
						<!--<a href="#top" class="button solicita_btn" style="margin-left: 450px;">SOLICITÁ MÁS INFORMACIÓN AQUÍ</a>-->
						<div style="text-align: center; margin: 0px 0px 0px 0px; border-radius: 2px;">
							
							<div class="col-xs-12 col-md-3 side_section">
								<?php include('site/form-tarot-tiradas.php'); ?>
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