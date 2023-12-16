<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include('site/head.php'); ?>
		<?php
			if($_GET['article'] == 'que-es-el-signo-ascendente'){
			echo '<meta property="og:url"                content="http://www.centroastrologico.com.ar/article.php?article=que-es-el-signo-ascendente" />';
		echo '<meta property="og:type"               content="article" />';
		echo '<meta property="og:title"              content="¿Qué es el Signo Ascendente?" />';
		echo '<meta property="og:description"        content="En la carta natal de cada uno de nosotros el signo Ascendente será de suma importancia. El Ascendente representa un aspecto importante del Destino personal, en el sentido en que nos marca el mejor modo en que debiéramos vivir y expresarnos, a fin de sentirnos libres y enteros." />';
		echo '<meta property="og:image"              content="http://www.centroastrologico.com.ar/img/articles_miniatures/que-es-el-signo-ascendente.jpg" />';
			}
		?>
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
			<!-- Sección con un textito sobre un signo. -->
			<!--
			<section id="sign_header">
				<figure class="sign_symbol"><img src="img/signs_images/sign_aries.jpg" /></figure>
				<div class="sign_description">
							<p class="description">Por ser el primer signo del Zodíaco, Aries representa el Arquetipo del Pionero, el iniciador, el que abre caminos. Es por ello que Aries exige movimiento ante todas las cosas. Nada peor para ellos que tener que estar mucho tiempo quietos. Aries nació para dar canal a su necesidad de autoexpresión...</p>
							<a class="keep_reading">SEGUIR LEYENDO SOBRE ARIES &raquo;</a>
				</div>
		</section>
		-->
		<section id="content_section">
			<!-- Sección principal > comienzo -->
			<section class="main_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-9">
							<section class="article_section">
								<h3>ART&Iacute;CULOS</h3>
								<article>
									<?php
									$article_variable = "not_found";
									$article_exists = false;
									
									if(isset($_GET['article']))
									{
										$article_variable = $_GET['article'];
										$article_exists = true;
									}
									if(file_exists('articles/'.$article_variable.'.php'))
									{
										include('articles/'.$article_variable.'.php');
										print('<div class="bottom_section">');
												print('<a href="" class="back_button">VOLVER A ART&Iacute;CULOS</a>');
										print('</div>');
									}
									else
									{
										print('<h2 class="title">No se ha encontrado dicho art&iacute;culo.</h2>');
									}
									?>
								</article>
							</section>
							<div class="center-box" style="border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 20px 0px 15px 0px;">
								<!-- Go to www.addthis.com/dashboard to customize your tools -->
								<div class="addthis_inline_share_toolbox"></div>
							</div>
							<?php
							if($article_exists == true)
							{
								print('<div class="fb-comments" data-href="http://www.centroastrologico.com.ar/articles/'.$article_variable.'.php" data-width="100%" data-numposts="10"></div>');
							}
							?>
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
						</div>
					</div>
				</section>
			</section>
			<?php include('site/footer.php'); ?>
			
		</div>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>