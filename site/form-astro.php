<div class="contact" style="background: #DCDCDC; width: 100%; padding: 12px; margin-top: 7px; margin-bottom: 50px; border-radius: 10px;">
    <div>
        <form id="contact" action="contact_astrology.php" method="post">
            <h3 style="margin-bottom: 24px; color: #8E15A1; font-weight: bold; margin: 2px 0; font-size: 15px; text-align: left; text-align: center;">REQUEST MORE INFORMATION</h3>
            <fieldset>
                <input type="hidden" name='subject' value='<?php echo($subject); ?>'>
                <input name="name" placeholder="Name and Surname" type="text" tabindex="1" required style="border-radius: 3px; margin: 5px 0px; border: none; font-size: 14px" />
            </fieldset>
            <fieldset>
                <input name="email" placeholder="Email" type="email" tabindex="2" required style="border-radius: 3px; margin: 5px 0px; border: none; font-size: 14px" />
            </fieldset>
            <fieldset>
                <input name="phone" placeholder="Phone" type="tel" tabindex="3" required style="border-radius: 3px; margin: 5px 0px; border: none; font-size: 14px" />
            </fieldset>
            <fieldset>
                <input name="country" placeholder="Country" type="text" tabindex="4" required style="border-radius: 3px; margin: 5px 0px; border: none; font-size: 14px" />
            </fieldset>
            <fieldset>
                <input name="facebook" placeholder="Facebook" type="text" tabindex="5" required style="border-radius: 3px; margin: 5px 0px; border: none; font-size: 14px" />
            </fieldset>

            <fieldset>
                <textarea name="comment" placeholder="Comments" tabindex="4" required style="border: none; border-radius: 3px; margin: 5px 0px -4px; height: 150px;"></textarea>
            </fieldset>
            <p style="color: red; margin-bottom: 0"><?php if(isset($error_message)){echo $error_message;} ?></p>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" style="display: block; margin: auto; width: 100%; border-radius: 3px;">SEND</button>
            </fieldset>

        </form>
    </div>

</div>
