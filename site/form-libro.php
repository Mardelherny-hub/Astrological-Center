<div class="contacto">
					                <div>
					                  <form id="contact" action="contacto_libro.php" method="post">
					                    <h3 style="margin-bottom: 24px; color: #fff; font-weight: bold;">PEDÍ TU LIBRO</h3>
					                    <fieldset>
										<input type="hidden" name='asunto' value='<?php echo($asunto); ?>'>
					                      <input name="nombre" placeholder="Nombre y Apellido" type="text" tabindex="1" required autofocus style="border-radius: 0px; border: none;" />
					                    </fieldset>
					                    <fieldset>
					                      <input name="email" placeholder="Email" type="email" tabindex="2" required style="border-radius: 0px; border: none;" />
					                    </fieldset>
					                    <fieldset>
					                      <input name="cel" placeholder="Celular" type="tel" tabindex="3" required style="border-radius: 0px; border: none;" />
					                    </fieldset>

					                    <fieldset>
					                      <select id="pay" name="pago" style="padding: 10px; margin: 10px 0px; font-size: 1.5em; width: 100%; height: 42px !important; color: #757575;">
											  <option value="" selected="selected">- Seleccioná tu medio de pago -</option>
											  <option value="PayPal">PayPal</option>
											  <option value="Mercado Pago">Mercado Pago</option>
											  <option value="Transferencia Bancaria">Transferencia Bancaria</option>
											  <option value="Efectivo">Efectivo</option>
											</select>
					                    </fieldset>
					                   
					                    <fieldset>
					                      <textarea name="comentario" placeholder="Comentarios" tabindex="6" required style="border:none; border-radius: 0px;"></textarea>
					                    </fieldset>
					                    <p style="color: red; margin-bottom: 0"><?php if(isset($error_message)){echo $error_message;} ?></p>
					                    <fieldset>
					                      <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando" style="display: block; margin: auto;">ENVIAR</button>
					                    </fieldset>
					                    
					                  </form>
					                </div>
					                
					              </div>