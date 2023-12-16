<?php header('Access-Control-Allow-Origin: http://api.nginov.com'); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include('site/head.php'); ?>
		
		<link rel="stylesheet" type="text/css" href="css/efemerides.css" />

		
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
							<div class="col-md-9">
								<h3 class="subsection_title">EFEM&Eacute;RIDES</h3>
								<h4 class="subsection_title">Los Planetas Ahora</h4>
								<p id="fecha"></p>
								<div class="row">
									<div class="col-sm-6" id="planetas">
										
									</div>
									<div class="col-sm-6">
										<div class="conteiner-carta-natal" style="background-color: white;">
											<h3 style="text-align: center;border-bottom: 0px;margin-bottom: -10px;">Consultoría Astrológica</h3>
											<img src="img/carta-natal.jpg" class="img-responsive" alt="Image">
											<a href="consultory-solicitar-carta-natal.php" class="request_button">
												<p class="big_line" >SOLICITAR MI CARTA NATAL</p>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 side_section">
								<?php include('site/events.php'); ?>
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

		<script type="text/javascript" src="js/efemerides.js" ></script>
		
	</body>
</html>