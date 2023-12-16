<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include('site/head.php'); ?>
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
				<!-- Sección principal > comienzo -->
				<section class="main_section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-9">
								<h4 class="subsection_title" style="margin: 0px 0px 0.5em 0px;">&iquest;Qui&eacute;nes Somos&quest;</h4>
								<figure class="who-are-we">
									<img src="img/quienes-somos-astro.jpg" alt="imagen ilustrativa" />
								</figure>
								<h5 class="subtitle">Nuestro Centro Astrológico</h5>
								<p>El Centro Cultural de Astrología, Psicología, Filosofía y Humanidades Aztlan (Asociación Civil, personería jurídica nº 748) fue fundado por el Prof. León Azulay, Astrólogo y Filósofo, quien se ha dedicado a la enseñanza desde hace más de cincuenta años.</p>
								<h5 class="subtitle">Objetivos</h5>
								<p>El objetivo del Centro Astrológico Aztlan es recuperar la Astrología como una disciplina profunda, retomando conocimientos perdidos actualmente debido a la vulgarización, mercantilización y difusión errada de la misma en los últimos tiempos. Dice el Maestro Hindú P. Yogananda: “Los charlatanes han aportado a la antigua ciencia estelar su actual descrédito, sin embargo la Astrología es muy extensa tanto matemática como filosóficamente.“</p>
								<p>Consideramos que la Astrología y la Psicología debieran estudiarse siempre en forma conjunta y complementaria, ya que tanto la una como la otra estudiadas aisladamente pierden parte de su valiosísimo significado. El gran Psiquiatra Suizo Carl G. Jung, quien además estudió y escribió libros de Astrología dijo: <strong>“La Astrología representa la suma de todos los conocimientos psicológicos de la antigüedad.”</strong></p>
								<h5 class="subtitle">¿Qué enfoque de la Astrología se enseña en la formación?</h5>
								<p>En la formación en Astrología, enseñamos y promovemos un enfoque de la astrología donde cada carta natal se estudia profundamente desde la perspectiva de la <strong>Astrología Humanista ó Psico-Astrología.</strong></p>
								<p>Creemos que la <strong>interpretación</strong> de una Carta Natal no puede hacerse de un modo mecánico, como lo hace una computadora u ordenador, que carece de la capacidad de tener una visión global u holística, más intuitiva y creativa de los individuos y los procesos con que se enfrenta. Es el Astrólogo entrenado en diversas técnicas de la Astrología, quien deberá llenar de significado el mapa de símbolos que es una carta natal. Para ello es fundamental una buena formación en las bases, técnicas y secretos de interpretación de la Astrología.</p>
								<h5 class="subtitle">Actividades</h5>
								<p>Algunas de las actividades que desarrolla el Centro Astrológico Aztlan son la Formación de 3 años en Astrología, Talleres y Conferencias. Complementariamente realiza Ciclos de películas en el Cine Club Aztlan donde se proyectan películas de alto valor cultural, y películas del circuito independiente o alternativo, así como también documentales inéditos en la Argentina y Latinoamérica. Además el Centro Astrológico Aztlan edita la Revista Aztlan, una revista de distribución gratuita que puede adquirirse en formato impreso o digital.</p>
								<h5 class="subtitle">Conocé nuestra Sede</h5>
								<iframe width="843" height="474" src="https://www.youtube.com/embed/NRl3jEgLpX4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
								<div class="center-box" style="border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 20px 0px 15px 0px;">
									<!-- Go to www.addthis.com/dashboard to customize your tools -->
									<div class="addthis_inline_share_toolbox"></div>
								</div>
							</div>
							<div class="col-md-3 side_section">
								<?php include('site/events.php'); ?>
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
							</div>
						</div>
					</div>
				</section>
				<!-- Sección principal > final -->
				
			</section>
			<?php include('site/footer.php'); ?>
			
		</div>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>