<?php include('youtube-videos-data.php'); ?>
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
							
							<!-- Captación del ID del video -->
							<?php
								if(isset($_GET['videoid']))
								{
									$videoid = $_GET['videoid'];
								}
								else
								{
									$videoid = "y_EWAP_OHZI";
								}
							?>
							<h4 class="subsection_title"><?php print($youtube_videos_names["$videoid"]); ?></h4>
							
							<section class="article_section" style="padding: 0px 30px">
								<div class="video-embed-section">
									<?php print('<iframe width="100%" height="500" src="https://www.youtube.com/embed/'.$videoid.'" frameborder="0" allowfullscreen></iframe>'); ?>
								</div>
								<div class="video-description-section" style="border-left: 3px solid #aaa; font-size: 1em; margin: 3em 0px; padding: 0px 2em;">
									<p><?php print($youtube_videos_descriptions["$videoid"]); ?></p>
								</div>
								
								<!-- Sección de compartir en redes sociales -->
								<div class="center-box" style="border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 20px 0px 15px 0px;">
									<!-- Go to www.addthis.com/dashboard to customize your tools -->
									<div class="addthis_inline_share_toolbox"></div>
								</div>
								<!-- Sección de comentarios de Facebook -->
								<?php echo '<div class="fb-comments" data-href="http://www.centroastrologico.com.ar/video.php?videoid=' . $videoid . '" data-width="100%" data-numposts="10"></div>'; ?>
								
							</section>
							<h4 class="subsection_title" style="border-top: 1px solid #ccc; font-size: 3em;">Otros videos recomendados:</h4>
							<section class="article_section">
								<section class="recomended_videos" style="overflow: hidden; margin: 0px 30px;">
									<a href="video.php?videoid=k0gEKoGrUs4">
										<article class="video" style="float: left; width: 30%;">
											<figure style="width: 100%;">
												<img style="width: 100%;" src="img/videos_miniatures/tu-profesion-ideal-segun-tu-signo.jpg" alt="" />
											</figure>
											<h5>Tu profesi&oacute;n Ideal seg&uacute;n tu signo</h5>
										</article>
									</a>
									<a href="video.php?videoid=03oePxDncgw">
										<article class="video" style="float: left; margin-left: 5%; margin-right: 5%; width: 30%;">
											<figure style="width: 100%;">
												<img style="width: 100%;" src="img/videos_miniatures/los-miedos-segun-tu-signo-del-zodiaco.jpg" alt="" />
											</figure>
											<h5>Los miedos seg&uacute;n tu Signo del Zod&iacute;aco</h5>
										</article>
									</a>
									<a href="video.php?videoid=y_EWAP_OHZI">
										<article class="video" style="float: left; width: 30%;">
											<figure style="width: 100%;">
												<img style="width: 100%;" src="img/videos_miniatures/astrologia-la-ciencia-de-las-energias.jpg" alt="" />
											</figure>
											<h5>Astrolog&iacute;a, la ciencia de las energ&iacute;as</h5>
										</article>
									</a>
								</section>
							</section>
						</div>
						<div class="col-md-3 side_section">
							<?php include('site/events-astro.php'); ?>
							<h5 style="font-size: 2em; font-weight: 700; margin: 1em 0px 0px 0px; text-align: center;">SEGUINOS EN:</h5>
							<!-- Go to www.addthis.com/dashboard to customize your tools -->
							<div class="center-box" style="border-top: none; margin-top: 0px;">
								<div class="addthis_inline_follow_toolbox"></div>
							</div>
						</div>
					</div>
				</div>
				</section><!-- Sección principal > final -->
			</section>
			<?php include('site/footer.php'); ?>
			
		</div>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>