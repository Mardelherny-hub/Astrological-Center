<div class="rside-blog" id="cajaform" style="margin-bottom: 15px; background-color: #3277AE; border: none;">
	
	<div class="contacto">
                <div>
                  <form id="contact" action="contacto_taller_mindfulness.php" method="post">
                    <h3 style="margin-bottom: 10px; color: #fff;">Reservá tu lugar</h3>
                    <h4 style="margin: 0px 0px 15px 0px; font-size: 14px; color: #fff; text-transform: uppercase;">Reservas sujetas a disponibilidad</h4>
                    <fieldset>
                      <input name="nombre" placeholder="Nombre y Apellido" type="text" tabindex="1" required autofocus style="border-radius: 0px; border: none;" />
                    </fieldset>
                    <fieldset>
                      <input name="email" placeholder="Email" type="email" tabindex="2" required style="border-radius: 0px; border: none;" />
                    </fieldset>
                    <fieldset>
                      <input name="cel" placeholder="Celular" type="tel" tabindex="3" required style="border-radius: 0px; border: none;" />
                    </fieldset>
                    <fieldset>
                      <input name="dni" placeholder="DNI" type="tel" tabindex="4" required style="border-radius: 0px; border: none;" />
                    </fieldset>
                    <fieldset>
                      <input name="facebook" placeholder="Facebook" type="text" tabindex="5" required style="border-radius: 0px; border: none;" />
                    </fieldset>
                   
                    <fieldset>
                      <textarea name="comentario" placeholder="Escribe tu mensaje..." tabindex="6" required style="border:none; border-radius: 0px;"></textarea>
                    </fieldset>
                    <p style="color: red; margin-bottom: 0"><?php if(isset($error_message)){echo $error_message;} ?></p>
                    <fieldset>
                      <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando" style="display: block; margin: auto;">RESERVAR</button>
                    </fieldset>
                    
                  </form>
                </div>
                
              </div>
</div>
<!--VIDEOS
<div class="rside-blog" style="margin-bottom: 15px;">
	<h6>VIDEOS</h6>
	<iframe style="margin-bottom: 15px" class="img-responsive"  width="300" height="169" src="https://www.youtube.com/embed/aEipnTZa404" frameborder="0" allowfullscreen></iframe>
	<iframe style="margin-bottom: 15px" class="img-responsive"  width="300" height="169" src="https://www.youtube.com/embed/-2kQ1ISpvj4" frameborder="0" allowfullscreen></iframe>
	<iframe style="margin-bottom: 15px" class="img-responsive"  width="300" height="169" src="https://www.youtube.com/embed/-Gfs1ZNk34M" frameborder="0" allowfullscreen></iframe>
	<iframe style="margin-bottom: 15px" class="img-responsive"  width="300" height="169" src="https://www.youtube.com/embed/Zm1OU5gs0_g" frameborder="0" allowfullscreen></iframe>
</div>-->
<!--NEWSLETTER-->
<div class="rside-blog" style="margin-bottom: 15px;">
	<h6 style="text-align: left;margin-top: 0px;">SUSCRIBITE A NUESTRO NEWSLETTER</h6>
	<form action="" method="POST" class="form-inline" role="form">
		
		<div class="form-group">
			<label class="sr-only" for="">Ingresá tu email</label>
			<input style="max-width:156px;" type="email" class="form-control" id="rside_email" placeholder="Ingresá tu email">
		</div>
		<button id="rside_submit" type="submit" class="btn btn-primary">SUSCRIBIRME</button>
	</form>
	<div id="msgRsideNewsletter" style="bottom: 30px;left: 50px;color: green"></div>
</div>
<!--REDES-->
<div class="rside">
	<h6>SEGUINOS EN</h6>
	<ul class="list-inline" style="padding-bottom: 10px;" >
		<li>
			<a href="https://www.facebook.com/psicologiaholisticaztlan/">
				<img src="assets/images/footer/escuela_f.png" width="40px" class="img-responsive" alt="Image">
			</a>
		</li>
		<li>
			<a href="https://twitter.com/cculturalaztlan">
				<img src="assets/images/footer/escuela_t.png" width="40px" class="img-responsive" alt="Image">
			</a>
		</li>
		<li>
			<a href="https://www.instagram.com/psicologia_aztlan/">
				<img src="assets/images/footer/escuela_i.png" width="40px" class="img-responsive" alt="Image">
			</a>
		</li>
		<li>
			<a href="https://www.youtube.com/c/elescarabajodeoroaztlan">
				<img src="assets/images/footer/escuela_y.png" width="40px" class="img-responsive" alt="Image">
			</a>
		</li>
	</ul><!--
	<div style="padding-top: 10px;padding-bottom: 10px;" class="fb-page" data-href="https://www.facebook.com/psicologiaholisticaztlan/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/psicologiaholisticaztlan/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/psicologiaholisticaztlan/">Psicología Holística Aztlan</a></blockquote></div>-->
</div>
<!--BLOG-->
<div class="rside-blog" style="margin-bottom: 15px;"> <a href="http://www.aztlan.com.ar/blog" target="_blank"><img src="assets/images/general/banner-blog.jpg" class="img-responsive" alt="Image"></a>
</div>
<!--<div class="rside-blog">
	<h3 style="text-align: center">VISITÁ NUESTRO BLOG</h3>
	<div class="blog_btn">
									<a href="http://www.aztlan.com.ar/blog" target="_blank">
																	<img src="assets/images/rside/ir.png" class="img-responsive blog_btn" alt="Image">
									</a>
	</div>
</div>-->