<?php 
	if(isset($live_broadcast) and $live_broadcast === true)
	{
		include('../site/redessociales.php');
	}
	else
	{
		include('site/redessociales.php');
	}
?>
<footer>
	<div class="presentation_section">
		<div class="title_section">
			<figure class="logo">
				<img src="http://centroastrologico.com.ar/img/logo.png" />
			</figure>
			<h5>Aztlán Astrological Center</h5>
		</div>
		<p class="director_name">Dir. León Azulay</p>
		<p class="legal_info">Civil Association registered in the I.G.J. N°748</p>
		<p class="legal_info">National Center of Community Organizations N° 16528</p>
		
		<div class="follow_us_section">
			<h6 style="color: #fff">FOLLOW US ON</h6>
			<a target="_blank" href="https://www.facebook.com/AstrologiaAztlan/" class="facebook">
				<img src="http://www.centroastrologico.com.ar/img/follow_us_facebook.png" />
			</a>
			<a target="_blank" href="https://twitter.com/AstrologiAztlan" class="twitter">
				<img src="http://www.centroastrologico.com.ar/img/follow_us_twitter.png" />
			</a>
			<a target="_blank" href="https://www.instagram.com/centro.astrologico.aztlan/" class="instagram">
				<img src="http://www.centroastrologico.com.ar/img/follow_us_instagram.png" />
			</a>
			<a target="_blank" href="https://www.youtube.com/user/sedecentral" class="youtube">
				<img src="http://www.centroastrologico.com.ar/img/follow_us_youtube.png" />
			</a>
		</div>
	</div>
	
	<div class="contacts_section" style="vertical-align: top;">
		<h6 style="color: #fff">CONTACT US</h6>
		<ul>
			<div class="line">
				<li class="image"><img src="http://centroastrologico.com.ar/img/footer_whatsapp_icon.png" /></li>
				<li class="info"><a target="_blank" href="https://api.whatsapp.com/send?phone=5491151776826&text=Hello,%20I%20would%20like%20to%20receive%20more%20information%20about%20Aztlan%20Astrological%20Center's%20courses.">Mobile: +54 9 11 5177 6826</a></li>
			</div>
			<!--div class="line">
				<li class="image"><img src="http://centroastrologico.com.ar/img/footer_phone_icon.png" /></li>
				<li class="info"><a href="tel:+541120908805">Phone: +54 11 2090 8805</a></li>
			</div-->
			<div class="line">
				<li class="image"><img src="http://centroastrologico.com.ar/img/footer_mail_icon.png" /></li>
				<li class="info"><a href="https://mail.google.com/mail/u/0/">Email: secretaria@aztlan.org.ar</a></li>
			</div>
		</ul>
	</div>
	
	<div class="mini_site_map" style="vertical-align: top;">
		<h6 style="margin-top: 40px; color: #fff">OUR ASTROLOGICAL CENTER</h6>
		<ul>
			<a href="http://centroastrologico.com.ar/article.php?article=por-que-estudiar-astrologia"><li>Why Study Astrology?</li></a>
			<a href="http://centroastrologico.com.ar/quienes-somos.php"><li>Who We Are</li></a>
			<a href="http://centroastrologico.com.ar/contacto.php"><li>Contact</li></a>
		</ul>
	</div>
	
	<div class="subscribe_section" style="vertical-align: top;">
		<div class="box" style="margin-top: 30px;">
			<h6 style="color: #fff">SUBSCRIBE TO OUR NEWSLETTER</h6>
			<h6 class="subtitle">And receive the latest updates on:</h6>
			<ul style="text-align: left;">
				<li>Promotions and discounts</li>
				<li>Free talks</li>
				<li>Courses and workshops</li>
				<li>Articles and more</li>
			</ul>
			<form id="sendnewsletter">
				<input name="email" id="footer_email" class="text_field" type="text" placeholder="Enter your Email">
				<input id="footer_submit" class="send_button" type="submit" value="SUBSCRIBE">
			</form>
			<div id="msgFooterNewsletter" style="bottom: 30px;padding-left: 16px;color: #339633;font-size: 17px;"></div>
		</div>
	</div>
</footer>

<p style="padding-top: 20px;padding-bottom: 20px;text-align: center;margin: 0 0 0px;background-color: #1a0e26;color: white;font-size: 12px">
	© 2021 Civil Association Aztlan, Cultural Center of Psychology, Philosophy, and Humanities. All rights reserved. Buenos Aires, Argentina.
</p>
