<div class="rside-blog" id="cajaform" style="margin-bottom: 15px; background-color: #5E397A; border: none;">
	
  <div class="contacto">
    <div>
      <form id="contact" action="contacto_charla_astrologia_2017_07_02.php" method="post">
        <h3 style="margin-bottom: 10px; color: #fff; padding: 20px 10px 0px;">Reservá tu lugar</h3>
        <h4 style="margin: 0px 0px 15px 0px; font-size: 14px; color: #fff; text-transform: uppercase; padding: 0px 10px;">Reservas sujetas a disponibilidad</h4>
        <fieldset>
          <input name="nombre" placeholder="Nombre y Apellido" type="text" tabindex="1" required autofocus style="border-radius: 0px; border: none; font-size: 16px; padding:10px; display: block; width: 90%; margin: 10px auto 15px;" />
        </fieldset>
        
        <fieldset>
          <input name="email" placeholder="Email" type="email" tabindex="2" required style="border-radius: 0px; border: none; font-size: 16px; padding:10px; display: block; width: 90%; margin: 10px auto 15px;" />
        </fieldset>
        
        <fieldset>
          <input name="cel" placeholder="Celular" type="tel" tabindex="3" required style="border-radius: 0px; border: none; font-size: 16px; padding:10px; display: block; width: 90%; margin: 10px auto 15px;" />
        </fieldset>
        
        <fieldset>
          <input name="dni" placeholder="DNI" type="tel" tabindex="4" required style="border-radius: 0px; border: none; font-size: 16px; padding:10px; display: block; width: 90%; margin: 10px auto 15px;" />
        </fieldset>
        
        <fieldset>
          <input name="facebook" placeholder="Facebook" type="text" tabindex="5" required style="border-radius: 0px; border: none; font-size: 16px; padding:10px; display: block; width: 90%; margin: 10px auto 15px;" />
        </fieldset>

        <fieldset>
          <textarea name="comentario" placeholder="Escribe tu mensaje..." tabindex="6" required style=" min-height: 140px; border:none; border-radius: 0px; font-size: 16px; padding:10px; display: block; width: 90%; margin: 10px auto 15px;"></textarea>
        </fieldset>
        
        <p style="color: red; margin-bottom: 0"><?php if(isset($error_message)){echo $error_message;} ?></p>
  
        <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando" style="border: none; background-color: #E97100; display: block; margin: auto; font-size: 16px; padding:10px; display: block; width: 44%; margin: 10px auto 15px; color: #fff;">RESERVAR</button>
        </fieldset>
      </form>
    </div>
  </div>
</div>