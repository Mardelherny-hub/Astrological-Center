<div class="contacto" style="background: #DCDCDC;
    width: 100%;
    padding: 12px;
    margin-top: 7px;
    margin-bottom: 50px;
    border-radius: 10px;">
	<div>
	  <form id="contact" action="contacto_astrologia.php" method="post">
	    <h3 style="margin-bottom: 24px; color: #8E15A1;font-weight: bold; margin: 2px 0; font-size: 15px; text-align: left; text-align: center;">SOLICITÁ MAS INFORMACIÓN</h3>
	    <fieldset>
	      <input name="nombre" placeholder="Nombre y Apellido" type="text" tabindex="1" required style="border-radius: 3px; margin: 5px 0px; border: none; font-size: 14px" />
	    </fieldset>
	    <fieldset>
	      <input name="email" placeholder="Email" type="email" tabindex="2" required style="border-radius: 3px; margin: 5px 0px; border: none; font-size: 14px" />
	    </fieldset>
	    <fieldset>
	      <input name="cel" placeholder="Celular" type="tel" tabindex="3" required style="border-radius: 3px; margin: 5px 0px; border: none; font-size: 14px" />
	    </fieldset>
	    <fieldset>
	      <input name="dni" placeholder="DNI" type="tel" tabindex="4" required style="border-radius: 3px; margin: 5px 0px; border: none; font-size: 14px" />
	    </fieldset>
	    <fieldset>
	      <input name="facebook" placeholder="Facebook" type="text" tabindex="5" required style="border-radius: 3px; margin: 5px 0px; border: none; font-size: 14px" />
	    </fieldset>
	   
	    <fieldset>
	      <textarea name="comentario" placeholder="Escribe el Curso que es de tu interés..." tabindex="4" required style="border:none; border-radius: 3px; margin: 5px 0px -4px; height: 150px;"></textarea>
	    </fieldset>
	    <p style="color: red; margin-bottom: 0"><?php if(isset($error_message)){echo $error_message;} ?></p>
	    <fieldset>
	      <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando" style="display: block; margin: auto; width: 100%; border-radius: 3px;">ENVIAR</button>
	    </fieldset>
	    
	  </form>
	</div>

</div>