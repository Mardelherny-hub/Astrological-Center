<div class="rside-blog" id="cajaform" style="margin-bottom: 15px; background-color: #001c3d; border: none;    border-radius: 3px;">
	
  <div class="contacto">
    <div>
      <form id="contact" action="contacto_libro-rojo.php" method="post">
        <h3 class="h2sub" style="margin-bottom: 5px; margin-top: 0px; font-size: 18px !important; line-height: 24px!important; color: #fff">Solicitá más información</h3>
        <fieldset>
          <input style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif;" name="nombre" placeholder="Nombre y Apellido" type="text" tabindex="1" required style="border-radius: 0px; border: none;" />
        </fieldset>
        <fieldset>
          <input style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif;" name="email" placeholder="Email" type="email" tabindex="2" required style="border-radius: 0px; border: none;" />
        </fieldset>
        <fieldset>
          <input style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif;" name="cel" placeholder="Celular" type="tel" tabindex="3" required style="border-radius: 0px; border: none;" />
        </fieldset>
        <fieldset>
          <input style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif;" name="dni" placeholder="DNI" type="tel" tabindex="4" required style="border-radius: 0px; border: none;" />
        </fieldset>
        <fieldset>
          <input style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif;" name="facebook" placeholder="Facebook" type="text" tabindex="5" required style="border-radius: 0px; border: none;" />
        </fieldset>
       
        <fieldset>
          <textarea  name="comentario" placeholder="Escribe tu mensaje..." tabindex="6" required style="display: block; font-size: 15px; line-height: 100%; margin-bottom: 4px; font-family: 'PT Sans', sans-serif; margin-top: 0px; height: 130px;"></textarea>
        </fieldset>
        <p style="color: red; margin-bottom: 0"><?php if(isset($error_message)){echo $error_message;} ?></p>
        <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando" style="display: block; margin: auto; color: #fff; background-color: #337ab7; width: 100%;">ENVIAR</button>
        </fieldset>
        
      </form>
    </div>
    
  </div>

</div>

<!--NEWSLETTER-->
<div class="rside-blog" style="margin-bottom: 15px;">
	<h6 style="text-align: left;margin-top: 0px; text-transform: none;">Suscribite a Nuestro Newsletter</h6>
	<form action="" method="POST" class="form-inline" role="form">
		
		<div class="form-group">
			<label class="sr-only" for="">Ingresá tu email</label>
			<input style="max-width:136px; padding: 6px 8px; margin-top: 1px;" type="email" class="form-control" id="rside_email" placeholder="Ingresá tu email">
		</div>
		<button id="rside_submit" type="submit" class="btn btn-primary" style="padding: 7px 8px; font-size: 13px;">SUSCRIBIRME</button>
	</form>
	<div id="msgRsideNewsletter" style="bottom: 30px;left: 50px;color: green"></div>
</div>

<!--REDES-->
<div class="rside" style="margin-bottom: 15px;">
	<h6 style="text-transform: none;">Seguinos en</h6>
	<ul class="list-inline" style="padding-bottom: 0px;" >
		<li style="padding-right: 0;">
			<a href="https://www.facebook.com/psicologiaholisticaztlan/">
				<img src="assets/images/footer/escuela_f.png" width="35px" class="img-responsive" style="padding-right: 0px;" alt="Image">
			</a>
		</li>
		<li style="padding-right: 0; padding-left: 3px;">
			<a href="https://twitter.com/cculturalaztlan">
				<img src="assets/images/footer/escuela_t.png" width="35px" class="img-responsive" style="padding-right: 0px;" alt="Image">
			</a>
		</li>
		<li style="padding-right: 0; padding-left: 3px;">
			<a href="https://www.instagram.com/psicologia_aztlan/">
				<img src="assets/images/footer/escuela_i.png" width="35px" class="img-responsive" style="padding-right: 0px;" alt="Image">
			</a>
		</li>
		<li style="padding-right: 0; padding-left: 3px;">
			<a href="https://www.youtube.com/c/elescarabajodeoroaztlan">
				<img src="assets/images/footer/escuela_y.png" width="35px" class="img-responsive" style="padding-right: 0px;" alt="Image">
			</a>
		</li>
	</ul>

</div>

<!--BLOG-->
<div class="rside-blog" style="margin-bottom: 15px;"> <a href="http://www.aztlan.com.ar/blog" target="_blank"><img src="assets/images/general/banner-blog.jpg" class="img-responsive" alt="Image"></a>
</div>