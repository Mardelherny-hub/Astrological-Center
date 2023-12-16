<div class="contacto">
					                <div>
					                  <form id="contact" action="contacto_prueba.php" method="post">
					                    <h3 style="margin-bottom: 24px; color: #fff;">Solicitá más información</h3>
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
					                      <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando" style="display: block; margin: auto;">ENVIAR</button>
					                    </fieldset>
					                    
					                  </form>
					                </div>
					                
					              </div>