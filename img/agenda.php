<!DOCTYPE html>
<html lang="es">
	<head>
		<link rel="stylesheet" type="text/css" href="css/components.min.css" />
		<?php include('site/head.php'); ?>
		<script src="js/main.js"></script>
		<!-- <link rel="stylesheet" href="js/dist/assets/css/tabella.css"> -->
		<style type="text/css">
			#screenshot{
				position:absolute;
				border:1px solid #ccc;
				background:#333;
				padding:5px;
				display:none;
				color:#fff;
			}
			.table-scrollable{
				font-size: 14px!important;
			}
			.table-scrollablea,.table-scrollable a:link,.table-scrollable a:visited,.table-scrollable a:hover,.table-scrollable a:focus {
			color: #5d5d5d;
			}
			.table-scrollablea a:hover {
			text-decoration: underline;
			}
			.table th{
				max-width: 90px;
				width: 90px;
			}
			.table td{
				max-width: 118px;
				width: 90px;
			}
			.table td, .table th {
			font-size: 12px;
			}
			.thead>tr>th:first-child {
			max-width: 70px;
				width: 70px;
			}
			thead{
				background-color: orange;
			color: white;
			}
			.table-scrollable table .hour-column
			{
				text-align: center;
				width: 55px;
			}
			.table-scrollable table .column-2,
			.table-scrollable table .column-3,
			.table-scrollable table .column-4,
			.table-scrollable table .column-6,
			.table-scrollable table .column-7
			{
				width: 100px;
			}
			.table-scrollable table .column-1,
			.table-scrollable table .column-5
			{
				width: 60px;
			}
			@media (max-width: 600px) {
				#container #content_section .main_section {
				padding: 0px 0em!important;
				}
			}
			hr{
			margin-top: 5px;
			margin-bottom: 5px;
			}
			tbody tr td
			{
				vertical-align: middle;
			}
			.table-scrollable::-webkit-scrollbar
			{
				height: 8px;
			}
			.table-scrollable::-webkit-scrollbar-thumb
			{
				background: #FFA500;
				border-radius: 3px;
				height: 8px;
			}
			td.hour-column
			{
				min-width: 100px;
			}
			td.column-1,
			td.column-2,
			td.column-3,
			td.column-4,
			td.column-5,
			td.column-6,
			td.column-7
			{
				min-width: 100px;
				width: 12.5%;
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
		<div id="container">
			<?php include('site/header.php'); ?>
			<section id="content_section">
				<!-- Sección principal > comienzo -->
				<section class="main_section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-9" style="margin-bottom: 40px;">
								<h4 class="subsection_title" style="margin: 0px 0px 0.5em 0px;">Agenda semanal<br>
								</h4>
								<!-- <img class="article_image img-responsive" src="img/articles_miniatures/agenda.jpg"> -->
								<div style="margin-bottom:30px;" class="subagenda"> Si no podés asistir a una charla, solicitá tu <a href="http://centroastrologico.com.ar/contacto.php">Entrevista Personalizada</a>
								<hr>
							</div>
							<div class="table-scrollable">
								<table class="table table-striped table-bordered table-hover" style="margin-bottom:60px;">
									<thead>
										<tr>
											<th scope="col" class="column-1" style="text-align: center;"></th>
											<!-- Semana 1 -->
											<th scope="col" class="column-1" style="text-align: center;">Dom 17/02</th>
											<th scope="col" class="column-1" style="text-align: center;">Lun 18/02</th>
											<th scope="col" class="column-2" style="text-align: center;">Mar 19/02</th>
											<th scope="col" class="column-3" style="text-align: center;">Mie 20/02</th>
											<th scope="col" class="column-4" style="text-align: center;">Jue 21/02</th>
											<th scope="col" class="column-5" style="text-align: center;">Vie 22/02</th>
											<th scope="col" class="column-6" style="text-align: center;">Sab 23/02</th>
											<th scope="col" class="column-7" style="text-align: center;">Dom 24/02</th>
											<!-- Semana 2 -->
											<th scope="col" class="column-1" style="text-align: center;">Lun 25/02</th>
											<th scope="col" class="column-2" style="text-align: center;">Mar 26/02</th>
											<th scope="col" class="column-3" style="text-align: center;">Mie 27/02</th>
											<th scope="col" class="column-4" style="text-align: center;">Jue 28/02</th>
											<th scope="col" class="column-5" style="text-align: center;">Vie 29/02</th>
											<th scope="col" class="column-6" style="text-align: center;">Sab 30/02</th>
											<th scope="col" class="column-7" style="text-align: center;">Dom 31/02</th>
										</tr>
									</thead>
									<tbody>
										<tr><!--10:30-->
										<td class="hour-column">10:30 hs</td>
										<!-- DOMINGO -->
										<td class="column-7" style="vertical-align: middle;"></td>
										<!-- LUNES -->
										<td class="column-1" style="vertical-align: middle;">
											<div style="text-align: center;">
												<a href="http://www.aztlan.org.ar/pages/psi/?c=3260/30/7" target="_blank">
													<strong>CHARLA</strong>
													<br>
													Las Claves de la Astrología para la Vida Cotidiana
												</a>
											</div>
										</td>
										<!-- MARTES -->
										<td class="column-2" style="vertical-align: middle;"></td>
										<!-- MIÉRCOLES -->
										<td class="column-3" style="vertical-align: middle;"></td>
										<!-- JUEVES -->
										<td class="column-4" style="vertical-align: middle;">
											<div style="text-align: center;">
												<a href="http://www.aztlan.org.ar/pages/psi/?c=3266/3/7" target="_blank">
													<strong>CHARLA</strong>
													<br>
													Las Claves de la Astrología para la Vida Cotidiana
												</a>
											</div>
										</td>
										<!-- VIERNES -->
										<td class="column-5" style="vertical-align: middle;"></td>
										<!-- SÁBADO -->
										<td class="column-6" style="vertical-align: middle;"></td>
										<!-- DOMINGO -->
										<td class="column-7" style="vertical-align: middle;"></td>
										<!-- LUNES -->
										<td class="column-1" style="vertical-align: middle;"></td>
										<!-- MARTES -->
										<td class="column-2" style="vertical-align: middle;"></td>
										<!-- MIÉRCOLES -->
										<td class="column-3" style="vertical-align: middle;"></td>
										<!-- JUEVES -->
										<td class="column-4" style="vertical-align: middle;"></td>
										<!-- VIERNES -->
										<td class="column-5" style="vertical-align: middle;"></td>
										<!-- SABADO -->
										<td class="column-6" style="vertical-align: middle;"></td>
										<!-- DOMINGO -->
										<td class="column-7" style="vertical-align: middle;"></td>
									</tr>


									<tr><!--11 hs-->
									<td class="hour-column" style="vertical-align: middle;">11 hs</td>
									<!-- Semana 2 -->
									<!-- DOMINGO -->
									<td class="column-7" style="vertical-align: middle;"></td>
									<!-- Semana 3 -->
									<!-- LUNES -->
									<td class="column-1" style="vertical-align: middle;"></td>
									<!-- MARTES -->
									<td class="column-2" style="vertical-align: middle;">
										<div style="text-align: center;">
											<a href="http://www.aztlan.org.ar/pages/psi/?c=3262/30/7" target="_blank">
												<strong>CHARLA</strong>
												<br>
												Las Claves de la Astrología para la Vida Cotidiana
											</a>
										</div>
									</td>
									<!-- MIÉRCOLES -->
									<td class="column-3" style="vertical-align: middle;">
										<div style="text-align: center;">
											<a href="http://www.aztlan.org.ar/pages/psi/?c=3264/30/7" target="_blank">
												<strong>CHARLA</strong>
												<br>
												Las Claves de la Astrología para la Vida Cotidiana
											</a>
										</div>
									</td>
									<!-- JUEVES -->
									<td class="column-4" style="vertical-align: middle;"></td>
									<!-- VIERNES -->
									<td class="column-5" style="vertical-align: middle;">
										<div style="text-align: center;">
											<a href="http://www.aztlan.org.ar/pages/psi/?c=3250/30/7" target="_blank">
												<strong>CHARLA</strong>
												<br>
												Las Claves de la Astrología para la Vida Cotidiana
											</a>
										</div>
									</td>
									<!-- SÁBADO -->
									<td class="column-6" style="vertical-align: middle;"></td>
									<!-- DOMINGO -->
									<td class="column-7" style="vertical-align: middle;"></td>
									<!-- LUNES -->
										<td class="column-1" style="vertical-align: middle;"></td>
										<!-- MARTES -->
										<td class="column-2" style="vertical-align: middle;"></td>
										<!-- MIÉRCOLES -->
										<td class="column-3" style="vertical-align: middle;"></td>
										<!-- JUEVES -->
										<td class="column-4" style="vertical-align: middle;"></td>
										<!-- VIERNES -->
										<td class="column-5" style="vertical-align: middle;"></td>
										<!-- SABADO -->
										<td class="column-6" style="vertical-align: middle;"></td>
										<!-- DOMINGO -->
										<td class="column-7" style="vertical-align: middle;"></td>
								</tr>

								<tr><!--18:00-->
								<td class="hour-column" style="vertical-align: middle;">18:00 hs</td>
								<!-- Semana 2 -->
								<!-- DOMINGO -->
								<td class="column-7" style="vertical-align: middle;"></td>
								<!-- Semana 3 -->
								<!-- LUNES -->
								<td class="column-1" style="vertical-align: middle;"></td>
								<!-- MARTES -->
								<td class="column-2" style="vertical-align: middle;"></td>
								<!-- MIÉRCOLES -->
								<td class="column-3" style="vertical-align: middle;"></td>
								<!-- JUEVES -->
								<td class="column-4" style="vertical-align: middle;"></td>
								<!-- VIERNES -->
								<td class="column-5" style="vertical-align: middle;"></td>
								<!-- SÁBADO -->
								<td class="column-6" style="vertical-align: middle;"></td>
								<!-- DOMINGO -->
								<td class="column-7" style="vertical-align: middle;"></td>
								<!-- LUNES -->
										<td class="column-1" style="vertical-align: middle;"></td>
										<!-- MARTES -->
										<td class="column-2" style="vertical-align: middle;"></td>
										<!-- MIÉRCOLES -->
										<td class="column-3" style="vertical-align: middle;"></td>
										<!-- JUEVES -->
										<td class="column-4" style="vertical-align: middle;"></td>
										<!-- VIERNES -->
										<td class="column-5" style="vertical-align: middle;"></td>
										<!-- SABADO -->
										<td class="column-6" style="vertical-align: middle;"></td>
										<!-- DOMINGO -->
										<td class="column-7" style="vertical-align: middle;"></td>
							</tr>
							<tr><!--18:30-->
							<td class="hour-column" style="vertical-align: middle;">18:30 hs</td>
							<!-- Semana 2 -->
							<!-- DOMINGO -->
							<td class="column-7" style="vertical-align: middle;"></td>
							<!-- Semana 3 -->
							<!-- LUNES -->
							<td class="column-1" style="vertical-align: middle;"></td>
							<!-- MARTES -->
							<td class="column-2" style="vertical-align: middle;"></td>
							<!-- MIÉRCOLES -->
							<td class="column-3" style="vertical-align: middle;"></td>
							<!-- JUEVES -->
							<td class="column-2" style="vertical-align: middle;"></td>
							<!-- VIERNES -->
							<td class="column-5" style="vertical-align: middle;"></td>
							<!-- SÁBADO -->
							<td class="column-6" style="vertical-align: middle;"></td>
							<!-- DOMINGO -->
							<td class="column-7" style="vertical-align: middle;"></td>
							<!-- LUNES -->
										<td class="column-1" style="vertical-align: middle;"></td>
										<!-- MARTES -->
										<td class="column-2" style="vertical-align: middle;"></td>
										<!-- MIÉRCOLES -->
										<td class="column-3" style="vertical-align: middle;"></td>
										<!-- JUEVES -->
										<td class="column-4" style="vertical-align: middle;"></td>
										<!-- VIERNES -->
										<td class="column-5" style="vertical-align: middle;"></td>
										<!-- SABADO -->
										<td class="column-6" style="vertical-align: middle;"></td>
										<!-- DOMINGO -->
										<td class="column-7" style="vertical-align: middle;"></td>
						</tr>
						<tr><!--19:00-->
						<td class="hour-column" style="vertical-align: middle;">19:00 hs</td>
						<!-- Semana 2 -->
						<!-- DOMINGO -->
						<td class="column-7" style="vertical-align: middle;"></td>
						<!-- Semana 3 -->
						<!-- LUNES -->
						<td class="column-1" style="vertical-align: middle;"></td>
						<!-- MARTES -->
						<td class="column-2" style="vertical-align: middle;">
							<div style="text-align: center;">
								<a href="http://www.aztlan.org.ar/pages/psi/?c=3189/30/7" target="_blank">
									<strong>Taller</strong>
									<br>
									Tarot: Las Tiradas
								</a>
							</div>
						</td>
						<!-- MIÉRCOLES -->
						<td class="column-3" style="vertical-align: middle;"></td>
						<!-- JUEVES -->
						<td class="column-4" style="vertical-align: middle;">
							<div style="text-align: center;">
								<a href="http://www.aztlan.org.ar/pages/psi/?c=3193/30/7" target="_blank">
									<strong>Taller</strong>
									<br>
									El Significado Oculto de los Sueños
								</a>
							</div>
						</td>
						<!-- VIERNES -->
						<td class="column-5" style="vertical-align: middle;"></td>
						<!-- SÁBADO -->
						<td class="column-6" style="vertical-align: middle;"></td>
						<!-- DOMINGO -->
						<td class="column-7" style="vertical-align: middle;"></td>
						<!-- LUNES -->
										<td class="column-1" style="vertical-align: middle;"></td>
										<!-- MARTES -->
										<td class="column-2" style="vertical-align: middle;"></td>
										<!-- MIÉRCOLES -->
										<td class="column-3" style="vertical-align: middle;"></td>
										<!-- JUEVES -->
										<td class="column-4" style="vertical-align: middle;"></td>
										<!-- VIERNES -->
										<td class="column-5" style="vertical-align: middle;"></td>
										<!-- SABADO -->
										<td class="column-6" style="vertical-align: middle;"></td>
										<!-- DOMINGO -->
										<td class="column-7" style="vertical-align: middle;"></td>
					</tr>
					<tr><!--19:30-->
					<td class="hour-column" style="vertical-align: middle;">19:30 hs</td>
					<!-- Semana 2 -->
					<!-- DOMINGO -->
					<td class="column-7" style="vertical-align: middle;">
						<div style="text-align: center;">
							<a href="http://www.aztlan.org.ar/pages/psi/?c=3252/30/7" target="_blank">
								<strong>CHARLA</strong>
								<br>
								Las Claves de la Astrología para la Vida Cotidiana
							</a>
						</div>
					</td>
					<!-- Semana 3 -->
					<!-- LUNES -->
					<td class="column-1" style="vertical-align: middle;">
						<div style="text-align: center;">
							<a href="http://www.aztlan.org.ar/pages/psi/?c=3261/30/7" target="_blank">
								<strong>CHARLA</strong>
								<br>
								Las Claves de la Astrología para la Vida Cotidiana
							</a>
						</div>
					</td>
					<!-- MARTES -->
					<td class="column-2" style="vertical-align: middle;">
						<div style="text-align: center;">
							<a href="http://www.aztlan.org.ar/pages/psi/?c=3263/30/7" target="_blank">
								<strong>CHARLA</strong>
								<br>
								Las Claves de la Astrología para la Vida Cotidiana
							</a>
						</div>
					</td>
					<!-- MIÉRCOLES -->
					<td class="column-3" style="vertical-align: middle;">
						<div style="text-align: center;">
							<a href="http://www.aztlan.org.ar/pages/psi/?c=3265/30/7" target="_blank">
								<strong>CHARLA</strong>
								<br>
								Las Claves de la Astrología para la Vida Cotidiana
							</a>
						</div>
					</td>
					<!-- JUEVES -->
					<td class="column-4" style="vertical-align: middle;">
						<div style="text-align: center;">
							<a href="http://www.aztlan.org.ar/pages/psi/?c=3267/30/7" target="_blank">
								<strong>CHARLA</strong>
								<br>
								Las Claves de la Astrología para la Vida Cotidiana
							</a>
						</div>
					</td>
					<!-- VIERNES -->
					<td class="column-5" style="vertical-align: middle;"></td>
					<!-- SÁBADO -->
					<td class="column-6" style="vertical-align: middle;"></td>
					<!-- DOMINGO -->
					<td class="column-7" style="vertical-align: middle;">
						<div style="text-align: center;">
							<a href="http://www.aztlan.org.ar/pages/psi/?c=3251/3/7" target="_blank">
								<strong>CHARLA</strong>
								<br>
								Las Claves de la Astrología para la Vida Cotidiana
							</a>
						</div>
					</td>
					<!-- LUNES -->
										<td class="column-1" style="vertical-align: middle;"></td>
										<!-- MARTES -->
										<td class="column-2" style="vertical-align: middle;"></td>
										<!-- MIÉRCOLES -->
										<td class="column-3" style="vertical-align: middle;"></td>
										<!-- JUEVES -->
										<td class="column-4" style="vertical-align: middle;"></td>
										<!-- VIERNES -->
										<td class="column-5" style="vertical-align: middle;"></td>
										<!-- SABADO -->
										<td class="column-6" style="vertical-align: middle;"></td>
										<!-- DOMINGO -->
										<td class="column-7" style="vertical-align: middle;"></td>
				</tr>
			</tbody>
		</table>
	</div>
	<!--<p style="color: #555;">&raquo; Deslizá hacia la derecha para ver d&iacute;as posteriores &raquo;</p-->
</div>
<div class="col-md-3 side_section">
	<ul class="destacados">
		<div class="title">ARTÍCULOS DESTACADOS</div>
		<a href="article.php?article=destino-o-libre-albedrio"><li>
			<p>¿Destino o Libre Albedrío?</p>
		</li></a>
		<a href="article.php?article=que-es-el-signo-ascendente"><li><p>¿Qué es el Ascendente?</p></li></a>
		<a href="article.php?article=planetas-retrogrados"><li><p>¿Qué pasa si tengo muchos retrógrados en<br />mi carta natal?</p></li></a>
		<a href="article.php?article=que-son-los-transitos"><li><p>¿Qué son los tránsitos?</p></li></a>
		<a href="article.php?article=arquetipos-y-la-astrologia"><li><p>Arquetipos y Astrología</p></li></a>
		<a href="article.php?article=ascendente-cancer-en-la-revolucion-solar"><li><p>Ascendente Cáncer en la Revolución<br />Solar</p></li></a>
	</ul>
	<!--CURSOS ONLINE -->
	<div style="margin: 15px 0; padding: 15px 30px;">
		<a target="_blank" class="fancybox-media" href="http://www.aztlan.org.ar/cursosonline/">
			<img src="http://www.aztlan.org.ar/assets/images/rside/cursosonline.jpg" alt="Image" class="img-responsive">
		</a>
	</div>
</div>

</div>
</div>
</section>
</section>
<?php include('site/footer.php'); ?>
</div>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!--
<script type="text/javascript" src="js/dist/tabella.min.js"></script>
<script type="text/javascript">
	!(function(){
	var myTabella = new Tabella(
	document.getElementById('tablaTabella'),
	{
	tableHeader: [
	['Lunes']
	,['Martes']
	,['Miércoles']
	,['Jueves']
	,['Viernes']
	,['Sábado']
	,['Domingo']
	],
	rows : [
	{
	/*rowHeader: 'Single bed room',*/
	rowVal: [["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"]],
	rowDesc : ['10:30 hs']
	},
	{
	/*rowHeader: 'Single bed room',*/
	rowVal: [["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"]],
	rowDesc : ['11 hs']
	},
	{
	/*rowHeader: 'Single bed room',*/
	rowVal: [["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"]],
	rowDesc : ['18 hs']
	},
	{
	/*rowHeader: 'Single bed room',*/
	rowVal: [["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"]],
	rowDesc : ['18:30 hs']
	},
	{
	/*rowHeader: 'Single bed room',*/
	rowVal: [["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"]],
	rowDesc : ['19 hs']
	},
	{
	/*rowHeader: 'Single bed room',*/
	rowVal: [["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"]],
	rowDesc : ['19:30 hs']
	},
	]
	});
	})();
</script>
-->
</body>
</html>+