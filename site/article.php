<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Centro Astrol&oacute;gico Aztlan</title>

	<?php 
		if($_GET['article'] == 'que-es-el-signo-ascendente'){
		echo '<meta property="og:url"                content="http://www.centroastrologico.com.ar/article.php?article=que-es-el-signo-ascendente" />';
    	echo '<meta property="og:type"               content="article" />';
    	echo '<meta property="og:title"              content="¿Qué es el Signo Ascendente?" />';
    	echo '<meta property="og:description"        content="En la carta natal de cada uno de nosotros el signo Ascendente será de suma importancia. El Ascendente representa un aspecto importante del Destino personal, en el sentido en que nos marca el mejor modo en que debiéramos vivir y expresarnos, a fin de sentirnos libres y enteros." />';
    	echo '<meta property="og:image"              content="http://www.centroastrologico.com.ar/img/articles_miniatures/que-es-el-signo-ascendente.jpg" />';
		}
	?>


	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<link rel="stylesheet" type="text/css" href="css/texts.css" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="js/scripts.js"></script>
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58252bfe33a5cbce"></script> 
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
				print('<div class="fb-comments" data-href="http://www.aztlan.org.ar/elescarabajodeoro/articulo-1.php" data-width="100%" data-numposts="10"></div>');
			}
			?>

		</section>
		<!-- Sección principal > final -->

		<!-- Sección lateral > comienzo -->
		<section class="side_section">

			<!-- Sección de eventos -->
            <?php include('site/events.php'); ?>

			<ul class="destacados">
				<div class="title">ARTÍCULOS DESTACADOS</div>
				<a href=""><li><p>¿Destino o Libre Albedrío?</p></li></a>
				<a href=""><li><p>¿Qué es el Ascendente?</p></li></a>
				<a href=""><li><p>¿Qué pasa si tengo muchos retrógrados en<br />mi carta natal?</p></li></a>
				<a href=""><li><p>¿Qué son los tránsitos?</p></li></a>
				<a href=""><li><p>Armonía y tensión en la carta natal</p></li></a>
				<a href=""><li><p>Arquetipos y Astrología</p></li></a>
				<a href=""><li><p>Ascendente Cáncer en la Revolución<br />Solar</p></li></a>
			</ul>

        </section>
		<!-- Sección lateral > final -->

	</section>

<?php include('site/footer.php'); ?>
  
</div>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>