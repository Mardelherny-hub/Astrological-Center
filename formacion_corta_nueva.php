<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include('site/head.php'); ?>
		<style>
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
				font-size: 16px;
			}
			.nav-tabs>li>a
			{
				border-color: white white white;
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
				font-size: 16px!important;
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
				font-size: 17px;
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
			.panel-heading >h4>a
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
			<section id="content_section">
				<!-- Secci&oacute;n principal > comienzo -->
				<section class="main_section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-9">
								<section class="article_section">
									<h3 style="background-color: brown; border: none; color: #333; font-family: 'Pt Sans', 'Open Sans', Arial, sans-serif; font-size: 40px; font-weight: 700; margin: 10px 0px;">Curso de Astrología</h3>
									<div class="page-header articulo_header" style="background-color: brown; margin: 0px;">
										<p style="font-size: 16px;">La propuesta del Centro Astrológico Aztlan es ense&ntilde;ar Astrolog&iacute;a de una manera din&aacute;mica, d&aacute;ndole valor tanto a los aspectos te&oacute;ricos como a las pr&aacute;cticas. Es por ello que las clases son Te&oacute;rico-Pr&aacute;cticas, ense&ntilde;ando al alumno las t&eacute;cnicas de interpretaci&oacute;n de una carta natal.</p>
									</div>
									<div>
										<p><strong>Frecuencia: </strong>1 vez por semana, 1 h 30 m cada clase.</p>
										<p><strong>Días y horarios:</strong></p>
										
										<ul style="margin-bottom: 20px;">
											<li><strong>Turno Mañana:</strong> Lunes, Martes, Miércoles o Jueves a las 10.30 hs.</li>
											<li><strong>Turno Tarde:</strong> Lunes, Martes, Miércoles o Jueves a las 19 hs.</li>
										</ul>
										<p><strong>Duraci&oacute;n: </strong>3 meses.</p>
										<p><strong>Requisitos: </strong>No se necesitan conocimientos previos.</p>
										
										<p><strong>Precio: </strong>$1000 mensual.</p>
										<p> <strong>Inicio: </strong>Junio 2017</p>
									</div>
										<div class="panel with-nav-tabs panel-default">
											<div class="panel-heading">
												<ul class="nav nav-tabs">
													
													<li class="tab"><a href="#tab6default" data-toggle="tab">PROGRAMA</a></li>
													
													<li class="tab"><a href="#tab1default" data-toggle="tab">MODALIDAD DE CURSADA</a></li>
													
													
												</ul>
											</div>
											<div class="panel-body">
												<div class="tab-content">
													<div class="tab-pane fade in active" id="tab6default">
														<h2>Nivel I</h2>
														<h4 style="color:#ff8b1e;font-weight: bold">Objetivos:</h4>
														<ul>
															<li>Aprender las bases conceptuales y filos&oacute;ficas de la astrolog&iacute;a.</li>
															<li>Manejar el lenguaje simb&oacute;lico de una carta natal: Signos, Planetas, Casas y Aspectos.</li>
															<li>Iniciarse en la interpretaci&oacute;n general de una carta natal o carta astral.</li>
															<li>Comprender el alcance del saber astrol&oacute;gico.</li>
														</ul>
														<h2>PROGRAMA DE ESTUDIO</h2>
														<div class="panel-group" id="accordion">
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
																		<p style="float:right">&#x25BC;</p>
																		<h4>Introducci&oacute;n a la Astrolog&iacute;a</h4>
																		
																		<h5>Su historia y desarrollo</h5>
																	</a>
																	</h4>
																</div>
																<div id="collapse1" class="panel-collapse collapse">
																	<div class="panel-body">
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
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
																		<p style="float:right">&#x25BC;</p>
																		<h4>El Zod&iacute;aco</h4>
																		
																	<h5>Los doce campos energ&eacute;ticos</h5></a>
																	</h4>
																</div>
																<div id="collapse2" class="panel-collapse collapse">
																	<div class="panel-body">
																		<ul>
																			<li>La Rueda del Zod&iacute;aco y las Constelaciones.</li>
																			<li>Caracter&iacute;sticas de los 12 signos del Zod&iacute;aco.</li>
																			<li>La polaridad en los Signos.</li>
																			<li>Los Signos y el cuerpo f&iacute;sico.</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
																		<p style="float:right">&#x25BC;</p>
																		<h4>Los Planetas</h4>
																		
																		<h5>Las funciones b&aacute;sicas del Ser Humano</h5>
																	</a>
																	</h4>
																</div>
																<div id="collapse3" class="panel-collapse collapse">
																	<div class="panel-body">
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
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
																		<p style="float:right">&#x25BC;</p>
																		<h4>Las doce Lunas</h4>
																		<h5></h5>
																	</a>
																	</h4>
																</div>
																<div id="collapse4" class="panel-collapse collapse">
																	<div class="panel-body">
																		<ul>
																			<li></li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse42">
																		<p style="float:right">&#x25BC;</p>
																		<h4>Los doce Ascendentes</h4>
																		<h5></h5>
																	</a>
																	</h4>
																</div>
																<div id="collapse42" class="panel-collapse collapse">
																	<div class="panel-body">
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
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
																		<p style="float:right">&#x25BC;</p>
																		<h4>T&eacute;cnicas de Interpretaci&oacute;n</h4>
																		
																		<h5>Equilibrio/Desequilibrio de los 4 Elementos</h5>
																	</a>
																	</h4>
																</div>
																<div id="collapse5" class="panel-collapse collapse">
																	<div class="panel-body">
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
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
																		<p style="float:right">&#x25BC;</p>
																		<h4>Las Casas o Sectores Terrestres</h4>
																		<h5></h5>
																	</a>
																	</h4>
																</div>
																<div id="collapse6" class="panel-collapse collapse">
																	<div class="panel-body">
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
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
																		<p style="float:right">&#x25BC;</p>
																		<h4>Los Aspectos Planetarios I</h4>
																		<h5></h5>
																	</a>
																	</h4>
																</div>
																<div id="collapse7" class="panel-collapse collapse">
																	<div class="panel-body">
																		<ul>
																			<li>Definici&oacute;n de los aspectos</li>
																			<li>Aspectos Mayores</li>
																			<li>Aspectos sutiles o&nbsp; poco comunes</li>
																			<li>Orbes</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
																		<p style="float:right">&#x25BC;</p>
																		<h4>Los Planetas en los 12 Signos</h4>
																		<h5></h5>
																	</a>
																	</h4>
																</div>
																<div id="collapse8" class="panel-collapse collapse">
																	<div class="panel-body">
																		<ul>
																			<li>C&oacute;mo la naturaleza de cada planeta es modificada por su presencia en cada uno de los 12 Signos del Zod&iacute;aco.</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
																		<p style="float:right">&#x25BC;</p>
																		<h4>El Eje de la Evoluci&oacute;n</h4>
																		
																		<h5>Los Nodos Lunares</h5>
																	</a>
																	</h4>
																</div>
																<div id="collapse9" class="panel-collapse collapse">
																	<div class="panel-body">
																		<ul>
																			<li>Relaci&oacute;n de los nodos con el Karma y con vidas pasadas.</li>
																			<li>El nodo norte. Mi misi&oacute;n en esta vida.</li>
																			<li>EL nodo sur: ataduras del pasado que debo soltar</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
																		<p style="float:right">&#x25BC;</p>
																		<h4>Pr&aacute;cticas de Interpretaci&oacute;n I</h4>
																		<h5></h5>
																	</a>
																	</h4>
																</div>
																<div id="collapse11" class="panel-collapse collapse">
																	<div class="panel-body">
																		<ul>
																			<li>Pasos a seguir: bases interpretativas</li>
																			<li>Tipos de Cartas</li>
																			<li>Estudio y pr&aacute;ctica de Cartas natales de Personajes famosos</li>
																			<li>Puesta en pr&aacute;ctica de los conocimientos adquiridos hasta el momento a trav&eacute;s del an&aacute;lisis de distintas cartas natales</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
																		<p style="float:right">&#x25BC;</p>
																		<h4>C&aacute;lculo del Ascendente</h4>
																		<h5></h5>
																	</a>
																	</h4>
																</div>
																<div id="collapse12" class="panel-collapse collapse">
																	<div class="panel-body">
																		<ul>
																			<li>Uso de Efem&eacute;rides y Tablas de casas</li>
																			<li>CONFECCI&Oacute;N DE LA CARTA ASTRAL</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																	<a data-toggle="collapse" data-parent="#accordion" href="#collapse13">
																		<p style="float:right">&#x25BC;</p>
																		<h4>Presentaci&oacute;n de los temas del segundo nivel</h4>
																		<h5></h5>
																	</a>
																	</h4>
																</div>
																<div id="collapse13" class="panel-collapse collapse">
																	<div class="panel-body">
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
													
													
												</div>
												
												<div class="row">
													<div class="col-sm-6">
														<div class="youtube-video">
															<iframe width="100%" height="250"
															src="https://www.youtube.com/embed/d9QBxlqLV5w">
															</iframe>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="youtube-video">
															<iframe width="100%" height="250"
															src="https://www.youtube.com/embed/y_EWAP_OHZI">
															</iframe>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
							<div class="col-md-3 side_section">
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