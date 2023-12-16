<nav class="footer hidden-xs hidden-sm" role="navigation">
	<div class="inner-footer">
		<div class="container">	
			<div class="row">
				<div class="footer-escuela col-xs-4">	  			
					<h4 class="t-escuela"><strong>Asociación Civil Aztlan Centro Cultural de Astrología, Psicología, Filosofía y Humanidades</strong></h4>
					<h4>Dir. León Azulay</h4>
				</div>
				<div class="col-xs-4 footer-redes">
					<h4><strong>Seguinos</strong></h4>
					<ul class="list-unstyled list-inline social-34 footer-social">
						<li class="fb"><a href="https://www.facebook.com/escuelaaztlanargentina" target="blank"><span></span></a></li>
						<li class="tw"><a href="https://twitter.com/AstrologiAztlan" target="blank"><span></span></a></li>
						<li class="gplus"><a href="https://plus.google.com/+aztlanorgarPsicologia" target="blank"><span></span></a></li>
						<li class="yt"><a href="https://www.youtube.com/c/elescarabajodeoroaztlan" target="blank"><span></span></a></li>
						<li class="in"><a href="https://www.linkedin.com/company/asociaci%C3%B3n-civil-aztlan" target="blank"><span></span></a></li>
						<li class="sky"><a href="skype://info.aztlan?chat" target="blank"><span></span></a></li>
					</ul>
					<!--  <div class="fb-like-box" data-href="https://www.facebook.com/carlgjungbuenosaires" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="true"></div> -->
				</div>
				<div class="footer-contacto col-xs-4">
					<ul class="list-unstyled">
						<li><span class="glyphicon glyphicon-earphone"></span>Tel.: +54-11- 4981-2442</li>
						<li><span class="glyphicon glyphicon-envelope"></span>info@aztlan.com.ar</li>
						<li><span class="skype glyphicon"></span>info.aztlan</li>
					</ul>
				</div>
			</div>
			<div class="row">
					<div class="col-xs-12">
						<ul class="list-unstyled list-inline menu-footer">					
						<?php 
						
							foreach (Section::getSite() as $value) {
								if($value->details->toMainMenu==1)
								{
									if(!is_null(Section::$section)  && Section::$section[0]->furl == $value->furl)echo '<li class="mainMenuBtn active" id="'.$value->furl.'"><div><a href="'.Section::host().$value->path.Section::$extention.'">'.utf8_decode( $value->details->toMainName) .'</a></div>';
									else if($value->type == 7) echo '<li class="mainMenuBtn " id="'.$value->furl.'"><div><a href="'.Section::host().$value->path.'">'.utf8_decode( $value->details->toMainName) .'</a></div>';
									else echo '<li class="mainMenuBtn" id="'.$value->furl.'"><div><a href="'.Section::host().$value->path.Section::$extention.'">'.utf8_decode( $value->details->toMainName) .'</a></div>';					
									
								}
								echo '</li>';
							}	
						
						?>
					</ul>
					</div>
				</div>		  		
			</div>	  		
		</div>	  
	<div class="copy">
		<div class="container">
		Copyright 2016 Asociación Civil Aztlan Centro Cultural de Astrología, Psicología, Filosofía y Humanidades. Todos los derechos reservados. Buenos Aires, Argentina.	  	
		</div>
	</div>
</nav>


<nav class="footer visible-xs visible-sm" role="navigation">
	<div class="">
		<div id="footer-mobile" class="container">	
			<div class="footer-escuela">	  			
				<h5 class="t-escuela"><strong>Asociación Civil Aztlan Centro Cultural de Astrología, Psicología, Filosofía y Humanidades</strong></h5>
				<h5>Dir. León Azulay</h5>
			</div>
			<hr>
			<div class="footer-redes">
				<h5><strong>Seguinos</strong></h5>
				<ul class="list-unstyled list-inline social-34 footer-social">
					<li class="fb"><a href="https://www.facebook.com/escuelaaztlanargentina" target="blank"><span></span></a></li>
					<li class="tw"><a href="https://twitter.com/escuelaztlan" target="blank"><span></span></a></li>
					<li class="gplus"><a href="https://plus.google.com/+aztlanorgarPsicologia" target="blank"><span></span></a></li>
					<li class="yt"><a href="https://www.youtube.com/user/sedecentral" target="blank"><span></span></a></li>
					<li class="in"><a href="https://www.linkedin.com/company/asociaci%C3%B3n-civil-aztlan" target="blank"><span></span></a></li>
					<li class="sky"><a href="skype://info.aztlan?chat" target="blank"><span></span></a></li>
				</ul>
				<!--  <div class="fb-like-box" data-href="https://www.facebook.com/carlgjungbuenosaires" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="true"></div> -->
			</div>
			<hr>
			<div class="footer-contacto">
				<ul class="list-unstyled">
					<li><span class="glyphicon glyphicon-earphone"></span>Tel.: +54-11- 4981-2442</li>
					<li><span class="glyphicon glyphicon-envelope"></span>info@aztlan.com.ar</li>
					<li><span class="skype glyphicon"></span>info.aztlan</li>
				</ul>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-12">
					<ul class="list-unstyled list-inline menu-footer">					
					<?php 					
						foreach (Section::getSite() as $value) {
							if($value->details->toMainMenu==1)
							{
								if(!is_null(Section::$section)  && Section::$section[0]->furl == $value->furl)echo '<li class="mainMenuBtn active" id="'.$value->furl.'"><div><a href="'.Section::host().$value->path.Section::$extention.'">'.utf8_decode( $value->details->toMainName) .'</a></div>';
								else if($value->type == 7) echo '<li class="mainMenuBtn " id="'.$value->furl.'"><div><a href="'.Section::host().$value->path.'">'.utf8_decode( $value->details->toMainName) .'</a></div>';
								else echo '<li class="mainMenuBtn" id="'.$value->furl.'"><div><a href="'.Section::host().$value->path.Section::$extention.'">'.utf8_decode( $value->details->toMainName) .'</a></div>';			
							}
							echo '</li>';
						}						
					?>
					</ul>
				</div>
			</div>		  		
		</div>	  		
	</div>	  
	<div class="copy">
		<div class="container" style="text-align: center!important;font-size: 12px!important">
			Copyright 2016 Asociación Civil Aztlan Centro Cultural de Astrología, Psicología, Filosofía y Humanidades. Todos los derechos reservados. Buenos Aires, Argentina.	  	
		</div>
	</div>
</nav>