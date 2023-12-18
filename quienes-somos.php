<!DOCTYPE html>
<html lang="es">

<head>
	<?php include('site/head.php'); ?>
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
			<!-- Sección principal > comienzo -->
			<section class="main_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-9">
							<h4 class="subsection_title" style="margin: 0px 0px 0.5em 0px;">About Us</h4>
							<figure class="who-are-we">
								<img src="img/quienes-somos-astro.jpg" alt="illustrative image" />
							</figure>
							<h5 class="subtitle">Our Astrological Center</h5>
							<p>The Cultural Center of Astrology, Psychology, Philosophy, and Humanities Aztlan (Civil Association, legal entity No. 748) was founded by Prof. León Azulay, Astrologer, and Philosopher, who has been dedicated to teaching for more than fifty years.</p>
							<h5 class="subtitle">Objectives</h5>
							<p>The objective of the Aztlan Astrological Center is to recover Astrology as a profound discipline, reclaiming knowledge currently lost due to its vulgarization, commercialization, and misinformed dissemination in recent times. The Hindu Master P. Yogananda says: "Charlatans have contributed to the current discredit of the ancient star science; however, Astrology is very extensive both mathematically and philosophically."</p>
							<p>We believe that Astrology and Psychology should always be studied jointly and complementarily since both, when studied in isolation, lose part of their valuable meaning. The great Swiss Psychiatrist Carl G. Jung, who also studied and wrote books on Astrology, said: <strong>"Astrology represents the sum of all psychological knowledge of antiquity."</strong></p>
							<h5 class="subtitle">What Approach to Astrology is Taught in the Training?</h5>
							<p>In Astrology training, we teach and promote an approach to astrology where each natal chart is deeply studied from the perspective of <strong>Humanistic Astrology or Psycho-Astrology.</strong></p>
							<p>We believe that the <strong>interpretation</strong> of a Natal Chart cannot be done mechanically, as done by a computer, which lacks the ability to have a more intuitive and creative global or holistic view of individuals and the processes they face. It is the Astrologer trained in various Astrology techniques who must imbue the map of symbols that is a natal chart with meaning. For this, a good foundation in the basics, techniques, and secrets of Astrology interpretation is fundamental.</p>
							<h5 class="subtitle">Activities</h5>
							<p>Some of the activities carried out by the Aztlan Astrological Center include a 3-year Astrology Training, Workshops, and Conferences. Additionally, it organizes film cycles in the Aztlan Film Club where culturally valuable films, independent or alternative circuit films, as well as unpublished documentaries in Argentina and Latin America, are screened. Furthermore, the Aztlan Astrological Center publishes the Aztlan Magazine, a free distribution magazine available in print or digital format.</p>
							<h5 class="subtitle">Visit Our Headquarters</h5>

							<iframe width="843" height="474" src="https://www.youtube.com/embed/NRl3jEgLpX4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							<div class="center-box" style="border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 20px 0px 15px 0px;">
								<!-- Go to www.addthis.com/dashboard to customize your tools -->
								<div class="addthis_inline_share_toolbox"></div>
							</div>
						</div>
						<div class="col-md-3 side_section">
							<?php include('site/events.php'); ?>
							<ul class="featured">
								<div class="title">FEATURED ARTICLES</div>
								<a href="article.php?article=fate-or-free-will">
									<li>
										<p>Fate or Free Will?</p>
									</li>
								</a>
								<a href="article.php?article=what-is-the-ascendant-sign">
									<li>
										<p>What is the Ascendant?</p>
									</li>
								</a>
								<a href="article.php?article=retrograde-planets">
									<li>
										<p>What if I have many retrogrades in<br />my natal chart?</p>
									</li>
								</a>
								<a href="article.php?article=what-are-transits">
									<li>
										<p>What are transits?</p>
									</li>
								</a>
								<a href="article.php?article=archetypes-and-astrology">
									<li>
										<p>Archetypes and Astrology</p>
									</li>
								</a>
								<a href="article.php?article=cancer-ascendant-in-solar-revolution">
									<li>
										<p>Cancer Ascendant in the Solar<br />Revolution</p>
									</li>
								</a>
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