
	<div class="edit_slide_wrapper">

		<div class="editor_buttons_wrapper  postbox unite-postbox mw960">
			<h3 class="box-closed tp-accordion">
				<span class="postbox-arrow2">-</span><span><?php _e("Slider Main Image / Background",REVSLIDER_TEXTDOMAIN) ?></span>				
			</h3>
			<div class="toggled-content">
				<div class="inner_wrapper p10 pb0 pt0 boxsized">
					<div class="editor_buttons_wrapper_top">
						<h3 style="cursor:default !important; background:none !important;border:none;box-shadow:none !important;font-size:12px;padding:0px;margin:10px 0px 0px;"><?php _e("Background Source:",REVSLIDER_TEXTDOMAIN)?></h3>
						
						
						<!-- IMAGE FROM MEDIAGALLERY -->
						<input style="float:left" type="radio" name="radio_bgtype" class="bgsrcchanger" data-callid="tp-bgimagewpsrc" data-imgsettings="on" data-bgtype="image" id="radio_back_image" <?php if($bgType == "image") echo 'checked="checked"'?>>
						<label style="float:left;margin-left:5px;margin-top:2px;"  for="radio_back_image"><?php _e("Image BG",REVSLIDER_TEXTDOMAIN)?></label>
						<!-- THE BG IMAGE CHANGED DIV -->
						<div id="tp-bgimagewpsrc" class="bgsrcchanger-div" style="display:none;float:left;margin-top:-7px;">
							<a href="javascript:void(0)" id="button_change_image" class="button-primary revblue <?php if($bgType != "image") echo "button-disabled" ?>" style="margin-bottom:5px"><?php _e("Change Image",REVSLIDER_TEXTDOMAIN)?></a>
						</div>

						
						<!-- IMAGE FROM EXTERNAL -->
						<input type="radio" name="radio_bgtype" style="float:left;margin-left:15px;" data-callid="tp-bgimageextsrc" data-imgsettings="on" class="bgsrcchanger" data-bgtype="external" id="radio_back_external" <?php if($bgType == "external") echo 'checked="solid"'?>>
						<label style="float:left;margin-left:5px;margin-top:2px;"for="radio_back_external"><?php _e("External URL",REVSLIDER_TEXTDOMAIN)?></label>	
						<!-- THE BG IMAGE FROM EXTERNAL SOURCE -->
						<div id="tp-bgimageextsrc" class="bgsrcchanger-div" style="display:none;float:left;margin-top:-7px;">								
							<input type="text" name="bg_external" id="slide_bg_external" value="<?php echo $slideBGExternal?>" <?php echo ($bgType != 'external') ? ' class="disabled"' : ''; ?>>
							<a href="javascript:void(0)" id="button_change_external" class="button-primary revblue <?php if($bgType != "external") echo "button-disabled" ?>" style="margin-bottom:5px"><?php _e("Get External",REVSLIDER_TEXTDOMAIN)?></a>
						</div>
						
						
						<!-- TRANSPARENT BACKGROUND -->
						<input type="radio" name="radio_bgtype" style="float:left;margin-left:15px;" data-callid="" class="bgsrcchanger" data-bgtype="trans" id="radio_back_trans" <?php if($bgType == "trans") echo 'checked="checked"'?>>
						<label style="float:left;margin-left:5px;margin-top:2px;"for="radio_back_trans"><?php _e("Transparent",REVSLIDER_TEXTDOMAIN)?></label>

						
						<!-- COLORED BACKGROUND -->
						<input type="radio" name="radio_bgtype" style="float:left;margin-left:15px;" data-callid="tp-bgcolorsrc" class="bgsrcchanger" data-bgtype="solid" id="radio_back_solid" <?php if($bgType == "solid") echo 'checked="solid"'?>>
						<label style="float:left;margin-left:5px;margin-top:2px;"for="radio_back_solid"><?php _e("Solid Colored",REVSLIDER_TEXTDOMAIN)?></label>
						
						<!-- THE COLOR SELECTOR -->											
						<div id="tp-bgcolorsrc"  class="bgsrcchanger-div"  style="display:none;float:left;margin-top:-5px;">
							<input type="text" name="bg_color" id="slide_bg_color" <?php echo $bgSolidPickerProps?> value="<?php echo $slideBGColor?>">							
						</div>
						
						<a href="javascript:void(0)" id="button_preview_slide" class="button-primary revbluedark" style="float:right;margin-top:-9px !important;" title="Preview Slide"><i class="revicon-search-1"></i><?php _e("Preview Slide",REVSLIDER_TEXTDOMAIN)?></a>										
						
						<div style="clear:both"></div>
						
						<!-- PREVIEW BUTTON -->
						
						<!-- THE BG IMAGE SETTINGS -->
						<div id="tp-bgimagesettings" class="bgsrcchanger-div" style="margin-top:10px;display:none">
							<div id="bg-setting-wrap">
								<h3 style="cursor:default !important; background:none !important;border:none;box-shadow:none !important;font-size:12px;padding:0px;margin:17px 0px 0px;"><?php _e("Background Settings:",REVSLIDER_TEXTDOMAIN)?></h3>	
								<label for="slide_bg_fit"><?php _e("Background Fit:",REVSLIDER_TEXTDOMAIN)?></label>
								<select name="bg_fit" id="slide_bg_fit" style="margin-right:20px">
									<option value="cover"<?php if($bgFit == 'cover') echo ' selected="selected"'; ?>>cover</option>
									<option value="contain"<?php if($bgFit == 'contain') echo ' selected="selected"'; ?>>contain</option>
									<option value="percentage"<?php if($bgFit == 'percentage') echo ' selected="selected"'; ?>>(%, %)</option>
									<option value="normal"<?php if($bgFit == 'normal') echo ' selected="selected"'; ?>>normal</option>
								</select>
								<input type="text" name="bg_fit_x" style="<?php if($bgFit != 'percentage') echo 'display: none; '; ?> width:60px;margin-right:10px" value="<?php echo $bgFitX; ?>" />
								<input type="text" name="bg_fit_y" style="<?php if($bgFit != 'percentage') echo 'display: none; '; ?> width:60px;margin-right:10px"  value="<?php echo $bgFitY; ?>" />
								
								<label for="slide_bg_repeat"><?php _e("Background Repeat:",REVSLIDER_TEXTDOMAIN)?></label>
								<select name="bg_repeat" id="slide_bg_repeat" style="margin-right:20px">
									<option value="no-repeat"<?php if($bgRepeat == 'no-repeat') echo ' selected="selected"'; ?>>no-repeat</option>
									<option value="repeat"<?php if($bgRepeat == 'repeat') echo ' selected="selected"'; ?>>repeat</option>
									<option value="repeat-x"<?php if($bgRepeat == 'repeat-x') echo ' selected="selected"'; ?>>repeat-x</option>
									<option value="repeat-y"<?php if($bgRepeat == 'repeat-y') echo ' selected="selected"'; ?>>repeat-y</option>
								</select>
								<label for="slide_bg_position" id="bg-position-lbl"><?php _e("Background Position:",REVSLIDER_TEXTDOMAIN)?></label>
								<div id="bg-start-position-wrapper">
									<select name="bg_position" id="slide_bg_position">
										<option value="center top"<?php if($bgPosition == 'center top') echo ' selected="selected"'; ?>>center top</option>
										<option value="center right"<?php if($bgPosition == 'center right') echo ' selected="selected"'; ?>>center right</option>
										<option value="center bottom"<?php if($bgPosition == 'center bottom') echo ' selected="selected"'; ?>>center bottom</option>
										<option value="center center"<?php if($bgPosition == 'center center') echo ' selected="selected"'; ?>>center center</option>
										<option value="left top"<?php if($bgPosition == 'left top') echo ' selected="selected"'; ?>>left top</option>
										<option value="left center"<?php if($bgPosition == 'left center') echo ' selected="selected"'; ?>>left center</option>
										<option value="left bottom"<?php if($bgPosition == 'left bottom') echo ' selected="selected"'; ?>>left bottom</option>
										<option value="right top"<?php if($bgPosition == 'right top') echo ' selected="selected"'; ?>>right top</option>
										<option value="right center"<?php if($bgPosition == 'right center') echo ' selected="selected"'; ?>>right center</option>
										<option value="right bottom"<?php if($bgPosition == 'right bottom') echo ' selected="selected"'; ?>>right bottom</option>
										<option value="percentage"<?php if($bgPosition == 'percentage') echo ' selected="selected"'; ?>>(x%, y%)</option>
									</select><input type="text" name="bg_position_x" <?php if($bgPosition != 'percentage') echo ' style="display: none;"'; ?> value="<?php echo $bgPositionX; ?>" /><input type="text" name="bg_position_y" <?php if($bgPosition != 'percentage') echo ' style="display: none;"'; ?> value="<?php echo $bgPositionY; ?>" />	
								</div>
							</div>
							<div style="clear:both"></div>
							<h3 style="cursor:default !important; background:none !important;border:none;box-shadow:none !important;font-size:12px;padding:0px;margin:17px 0px 0px; float: left;"><?php _e("Ken Burns / Pan Zoom Settings:",REVSLIDER_TEXTDOMAIN)?></h3>
							
							<div style="margin-top: 15px; margin-left: 10px; float: left;">
								<input type="radio" name="kenburn_effect" value="on" <?php echo ($kenburn_effect == 'on') ? 'checked="checked"' : ''; ?> /> <?php _e("On",REVSLIDER_TEXTDOMAIN)?>&nbsp;&nbsp;<input type="radio" name="kenburn_effect" value="off" <?php echo ($kenburn_effect == 'off') ? 'checked="checked"' : ''; ?> /> <?php _e("Off",REVSLIDER_TEXTDOMAIN)?>
							</div>
							<div class="clear"></div>
								
							<table id="kenburn_wrapper" <?php echo ($kenburn_effect == 'off') ? 'style="display: none;"' : ''; ?>>
								<tr>
									<td><?php _e("Background",REVSLIDER_TEXTDOMAIN)?></td>
									<td></td>
									<td></td>
									<td style="width: 15px;">&nbsp;</td>
									<td></td>
									<td>&nbsp;<?php //_e("Start",REVSLIDER_TEXTDOMAIN)?></td>
									<td><?php //_e("End",REVSLIDER_TEXTDOMAIN)?></td>
									<td style="width: 15px;">&nbsp;</td>
									<td colspan="2"></td>
								</tr>
								<tr>
									<td><?php _e("Start Position:",REVSLIDER_TEXTDOMAIN)?></td>
									<td colspan="2" id="bg-start-position-wrapper-kb">
									
									</td>
									<td></td>
									<td><?php _e("Start Fit: (in %)",REVSLIDER_TEXTDOMAIN)?></td>
									<td colspan="2"><input type="text" name="kb_start_fit" value="<?php echo intval($kb_start_fit); ?>" /></td>
									<td></td>
									<td><?php _e("Easing:",REVSLIDER_TEXTDOMAIN)?></td>
									<td>
										<select name="kb_easing">
											<option <?php if($kb_easing == 'Linear.easeNone') echo ' selected="selected"'; ?> value="Linear.easeNone">Linear.easeNone</option>
											<option <?php if($kb_easing == 'Power0.easeIn') echo ' selected="selected"'; ?> value="Power0.easeIn">Power0.easeIn  (linear)</option>
											<option <?php if($kb_easing == 'Power0.easeInOut') echo ' selected="selected"'; ?> value="Power0.easeInOut">Power0.easeInOut  (linear)</option>
											<option <?php if($kb_easing == 'Power0.easeOut') echo ' selected="selected"'; ?> value="Power0.easeOut">Power0.easeOut  (linear)</option>
											<option <?php if($kb_easing == 'Power1.easeIn') echo ' selected="selected"'; ?> value="Power1.easeIn">Power1.easeIn</option>
											<option <?php if($kb_easing == 'Power1.easeInOut') echo ' selected="selected"'; ?> value="Power1.easeInOut">Power1.easeInOut</option>
											<option <?php if($kb_easing == 'Power1.easeOut') echo ' selected="selected"'; ?> value="Power1.easeOut">Power1.easeOut</option>
											<option <?php if($kb_easing == 'Power2.easeIn') echo ' selected="selected"'; ?> value="Power2.easeIn">Power2.easeIn</option>
											<option <?php if($kb_easing == 'Power2.easeInOut') echo ' selected="selected"'; ?> value="Power2.easeInOut">Power2.easeInOut</option>
											<option <?php if($kb_easing == 'Power2.easeOut') echo ' selected="selected"'; ?> value="Power2.easeOut">Power2.easeOut</option>
											<option <?php if($kb_easing == 'Power3.easeIn') echo ' selected="selected"'; ?> value="Power3.easeIn">Power3.easeIn</option>
											<option <?php if($kb_easing == 'Power3.easeInOut') echo ' selected="selected"'; ?> value="Power3.easeInOut">Power3.easeInOut</option>
											<option <?php if($kb_easing == 'Power3.easeOut') echo ' selected="selected"'; ?> value="Power3.easeOut">Power3.easeOut</option>
											<option <?php if($kb_easing == 'Power4.easeIn') echo ' selected="selected"'; ?> value="Power4.easeIn">Power4.easeIn</option>
											<option <?php if($kb_easing == 'Power4.easeInOut') echo ' selected="selected"'; ?> value="Power4.easeInOut">Power4.easeInOut</option>
											<option <?php if($kb_easing == 'Power4.easeOut') echo ' selected="selected"'; ?> value="Power4.easeOut">Power4.easeOut</option>
											<option <?php if($kb_easing == 'Back.easeIn') echo ' selected="selected"'; ?> value="Back.easeIn">Back.easeIn</option>
											<option <?php if($kb_easing == 'Back.easeInOut') echo ' selected="selected"'; ?> value="Back.easeInOut">Back.easeInOut</option>
											<option <?php if($kb_easing == 'Back.easeOut') echo ' selected="selected"'; ?> value="Back.easeOut">Back.easeOut</option>
											<option <?php if($kb_easing == 'Bounce.easeIn') echo ' selected="selected"'; ?> value="Bounce.easeIn">Bounce.easeIn</option>
											<option <?php if($kb_easing == 'Bounce.easeInOut') echo ' selected="selected"'; ?> value="Bounce.easeInOut">Bounce.easeInOut</option>
											<option <?php if($kb_easing == 'Bounce.easeOut') echo ' selected="selected"'; ?> value="Bounce.easeOut">Bounce.easeOut</option>
											<option <?php if($kb_easing == 'Circ.easeIn') echo ' selected="selected"'; ?> value="Circ.easeIn">Circ.easeIn</option>
											<option <?php if($kb_easing == 'Circ.easeInOut') echo ' selected="selected"'; ?> value="Circ.easeInOut">Circ.easeInOut</option>
											<option <?php if($kb_easing == 'Circ.easeOut') echo ' selected="selected"'; ?> value="Circ.easeOut">Circ.easeOut</option>
											<option <?php if($kb_easing == 'Elastic.easeIn') echo ' selected="selected"'; ?> value="Elastic.easeIn">Elastic.easeIn</option>
											<option <?php if($kb_easing == 'Elastic.easeInOut') echo ' selected="selected"'; ?> value="Elastic.easeInOut">Elastic.easeInOut</option>
											<option <?php if($kb_easing == 'Elastic.easeOut') echo ' selected="selected"'; ?> value="Elastic.easeOut">Elastic.easeOut</option>
											<option <?php if($kb_easing == 'Expo.easeIn') echo ' selected="selected"'; ?> value="Expo.easeIn">Expo.easeIn</option>
											<option <?php if($kb_easing == 'Expo.easeInOut') echo ' selected="selected"'; ?> value="Expo.easeInOut">Expo.easeInOut</option>
											<option <?php if($kb_easing == 'Expo.easeOut') echo ' selected="selected"'; ?> value="Expo.easeOut">Expo.easeOut</option>
											<option <?php if($kb_easing == 'Sine.easeIn') echo ' selected="selected"'; ?> value="Sine.easeIn">Sine.easeIn</option>
											<option <?php if($kb_easing == 'Sine.easeInOut') echo ' selected="selected"'; ?> value="Sine.easeInOut">Sine.easeInOut</option>
											<option <?php if($kb_easing == 'Sine.easeOut') echo ' selected="selected"'; ?> value="Sine.easeOut">Sine.easeOut</option>
											<option <?php if($kb_easing == 'SlowMo.ease') echo ' selected="selected"'; ?> value="SlowMo.ease">SlowMo.ease</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><?php _e("End Position:",REVSLIDER_TEXTDOMAIN)?></td>
									<td colspan="2">
										<select name="bg_end_position" id="slide_bg_end_position">
											<option value="center top"<?php if($bgEndPosition == 'center top') echo ' selected="selected"'; ?>>center top</option>
											<option value="center right"<?php if($bgEndPosition == 'center right') echo ' selected="selected"'; ?>>center right</option>
											<option value="center bottom"<?php if($bgEndPosition == 'center bottom') echo ' selected="selected"'; ?>>center bottom</option>
											<option value="center center"<?php if($bgEndPosition == 'center center') echo ' selected="selected"'; ?>>center center</option>
											<option value="left top"<?php if($bgEndPosition == 'left top') echo ' selected="selected"'; ?>>left top</option>
											<option value="left center"<?php if($bgEndPosition == 'left center') echo ' selected="selected"'; ?>>left center</option>
											<option value="left bottom"<?php if($bgEndPosition == 'left bottom') echo ' selected="selected"'; ?>>left bottom</option>
											<option value="right top"<?php if($bgEndPosition == 'right top') echo ' selected="selected"'; ?>>right top</option>
											<option value="right center"<?php if($bgEndPosition == 'right center') echo ' selected="selected"'; ?>>right center</option>
											<option value="right bottom"<?php if($bgEndPosition == 'right bottom') echo ' selected="selected"'; ?>>right bottom</option>
											<option value="percentage"<?php if($bgEndPosition == 'percentage') echo ' selected="selected"'; ?>>(x%, y%)</option>
										</select><input type="text" name="bg_end_position_x"