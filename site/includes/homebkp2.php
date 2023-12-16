<div id="home-section">
<div class="row" style="width: 100%;">
	 	 <!--	<a title="Taller de Verano 2016" target='blank' href="http://www.centroastrologico.com.ar/talleres/taller-de-astrologia-de-verano.html" style="margin:0 auto;"><img src="site/images/home/bannertaller2016_astro.gif"  /></a>
	 	 /site/includes</div>-->
         <table width="730" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="230"><img src="site/images/home/WEB_PSICO_EVENTO.jpg" width="230" height="180" /></td>
    <td width="20">&nbsp;</td>
    <td width="230"><img src="site/images/home/WEB_ASTRO_EVENTO.jpg" width="230" height="180" /></td>
    <td width="20">&nbsp;</td>
    <td width="230"><img src="site/images/home/WEB_TAROT_EVENTO.jpg" width="230" height="180" /></td>
  </tr>
  <tr>
    <td height="10" colspan="5"></td>
  </tr>
  <tr>
    <td valign="top"><strong>CHARLA GRATUITA – PSICOLOGIA HOLISTICA del Siglo XXI</strong><br />
      Domingo 6/3 – 19:30 hs.<br />
      <br />
      Reservá tu lugar <span style="color:#28278d"><a style="color:#28278d" href="http://aztlan.com.ar/blog/landing-reservas" target="_blank">AQUI</a></span>
    </td>
    <td valign="top">&nbsp;</td>
    <td valign="top"><strong>CHARLA GRATUITA – ASTROLOGIA del Siglo XXI</strong><br />
      Domingo 6 de Marzo – 19:30 hs.<br />
      <br />
Reservá tu lugar <span style="color:#28278d"><a style="color:#28278d" href="http://www.centroastrologico.com.ar/blog/landing-reservas" target="_blank">AQUI</a></span></td>
    <td valign="top">&nbsp;</td>
    <td valign="top"><strong>CHARLA GRATUITA<br />
      El TAROT y los Arquetipos de Jung</strong><br />
Domingo 6/3 – 19:30 hs.<br />
<br />
Reservá tu lugar <span style="color:#28278d"><a style="color:#28278d" href="http://www.centroastrologico.com.ar/blog/landing-reservas-tarot">AQUI</a></span></td>
  </tr>
  <tr>
    <td height="30" colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td><img src="site/images/home/WEB_PSICO_ENTREVISTA.jpg" width="230" height="180" /></td>
    <td>&nbsp;</td>
    <td><img src="site/images/home/WEB_ASTRO_ENTREVISTA.jpg" width="230" height="180" /></td>
    <td>&nbsp;</td>
    <td><img src="site/images/home/WEB_TAROT_ENTREVISTA.jpg" width="230" height="180" /></td>
  </tr>
  <tr>
    <td height="10" colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><strong>ENTREVISTAS INFORMATIVAS – PSICOLOGIA HOLISTICA del Siglo XXI</strong><br />
      <br />
    Solicitá más Información <span style="color:#28278d"><a style="color:#28278d" href="http://aztlan.com.ar/blog/landing_psico" target="_blank">AQUI</a></span></td>
    <td valign="top">&nbsp;</td>
    <td valign="top"><strong>ENTREVISTAS INFORMATIVAS ASTROLOGIA del Siglo XXI</strong><br />
      <br />
      Solicitá más Información <span style="color:#28278d"><a style="color:#28278d" href="http://www.centroastrologico.com.ar/blog/landing-info-astrologia">AQUI</a></span></td>
    <td valign="top">&nbsp;</td>
    <td valign="top"><strong>ENTREVISTAS INFORMATIVAS<br />
El TAROT y los Arquetipos de Jung</strong><br />
      <br />
      Solicitá más Información <span style="color:#28278d"><a style="color:#28278d" href="http://www.centroastrologico.com.ar/blog/landing-info-tarot" target="_blank">AQUI</a></span></td>
  </tr>
</table>
</div>
         
 <script type="text/javascript">
         
         window.open("http://www.centroastrologico.com.ar/site/popup/popup_charla_astro.html", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=300, left=300, width=600, height=450");
      </script>
<div class="row">
			<div class="col-md-6">
			<?php 
			$content = GET_CustomContent::getJsonContentById(4);
			if(isset($content->activo) && $content->activo=='on'){
				echo '<h3>'.utf8_decode($content->titulo).'</h3>';
				if(isset($content->hasVideo) && $content->hasVideo == 'on')echo '<iframe class="ytvideo" width="100%" height="500" src="//www.youtube.com/embed/'.$content->video.'?version=3&hl=es_ES&rel=0&wmode=transparent" frameborder="0" allowfullscreen></iframe>';
				echo '<div>'.utf8_decode(htmlspecialchars_decode($content->texto)).'</div>';
			}
			?>
			</div>
			<div class="col-md-6">
			<?php 
			$content = GET_CustomContent::getJsonContentById(2);
			if(isset($content->activo) && $content->activo=='on'){
				echo '<h3>'.utf8_decode($content->titulo).'</h3>';
				if(isset($content->hasVideo) && $content->hasVideo == 'on')echo '<iframe class="ytvideo" width="100%" height="500" src="//www.youtube.com/embed/'.$content->video.'?version=3&hl=es_ES&rel=0&wmode=transparent" frameborder="0" allowfullscreen></iframe>';
				echo '<div>'.utf8_decode(htmlspecialchars_decode($content->texto)).'</div>';
			}
			?>
			</div>			
			<div class="hr"><hr></div>
		</div>



		<?php 
		$eventos = GET_eventos::getHomeEventosAstro();
		if(count($eventos) >0 ) echo '<div class="row row-last" id="eventos"><h3>Próximas Actividades</h3></div>';
		//var_dump($eventos);		

foreach (array_reverse($eventos) as $evento){	
	//var_dump($evento);
	$strTipo = "Charla";
	$url = "psi";
	if($evento->tipoEvento_idTipo == 1){
		$strTipo = "Cineclub Aztlan";
		$url = "cineclub";
	}
	echo '<div class="row contenido" style="padding-top:0px;border-bottom:0px solid;">';
	echo '<div style="margin:0 20px; padding-top:0px">';
	echo '<div style="padding-top:20px;border-top-color:#b16919; border-top-style:solid; border-top-width:2px;">';
	echo '<div class="col-xs-6"><img alt="" src="http://www.aztlan.org.ar/images/eventos/home/'.$evento->idEvento.'.jpg" width="330" height="258"></div>';
	echo '<div class="col-xs-6">';
	echo '<span style="display: block; font-size:15px;margin-bottom:5px;"><strong>'.$strTipo.'</strong></span>';			
	echo '<span style="display: block; font-size:20px;margin-bottom:5px;font-weight: 400;"><strong>'.utf8_decode($evento->titulo).'</strong></span>';
	echo '<p style="font-size:13px;font-weight: 400;">'.utf8_decode(htmlspecialchars_decode($evento->texto)).'</p>';
	echo '<span style="display: block; font-size:15px;margin-bottom:5px;margin-top:20px;">Más información <a target="blank" href="http://www.aztlan.org.ar/pages/'.$url.'/?c='.$evento->idEvento.'/3/7">aquí</a></span>';
	//echo '<span style="display: block; font-size:13px;margin-bottom:5px;font-weight: 400;">En Almagro, Rivadavia y Medrano</span>';
					/*</p>*/
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
}
?>

		
		<div class="hr"><hr></div>
				<?php 
			$content = GET_CustomContent::getJsonContentById(3);
			if(isset($content->activo) && $content->activo=='on'){
				echo '<div class="row"><div class="col-md-12 consultas">';
				echo '<h3>'.utf8_decode($content->titulo).'</h3>';
				echo '<img src="http://centroastrologico.com.ar/site/images/cartanatal.jpg" class="pull-left" style="margin-right:20px;">';
				if(isset($content->hasVideo) && $content->hasVideo == 'on')echo '<iframe class="ytvideo" width="100%" height="500" src="//www.youtube.com/embed/'.$content->video.'?version=3&hl=es_ES&rel=0&wmode=transparent" frameborder="0" allowfullscreen></iframe>';
				echo '<div>'.utf8_decode(htmlspecialchars_decode($content->texto)).'</div>';
				echo '</div></div>';
			}
			?>
	
		<div class="row row-last">
		
			<div class="col-md-6">
			<?php 
			$content = GET_CustomContent::getJsonContentById(1);
			if(isset($content->activo) && $content->activo=='on'){
				echo '<h3>'.utf8_decode($content->titulo).'</h3>';
				if(isset($content->hasVideo) && $content->hasVideo == 'on')echo '<iframe class="ytvideo" width="100%" height="500" src="//www.youtube.com/embed/'.$content->video.'?version=3&hl=es_ES&rel=0&wmode=transparent" frameborder="0" allowfullscreen></iframe>';
				echo '<div>'.utf8_decode(htmlspecialchars_decode($content->texto)).'</div>';
			}
			?>
			<p class="fb"><a href="https://www.facebook.com/asociacioncivilaztlan" target="blank">Seguinos en Facebook</a>.</p>
			</div>
			
			<div class="col-md-6">
			<?php 
			$content = GET_CustomContent::getJsonContentById(5);
			if(isset($content->activo) && $content->activo=='on'){
				echo '<h3>'.utf8_decode($content->titulo).'</h3>';
				if(isset($content->hasVideo) && $content->hasVideo == 'on')echo '<iframe class="ytvideo" width="100%" height="500" src="//www.youtube.com/embed/'.$content->video.'?version=3&hl=es_ES&rel=0&wmode=transparent" frameborder="0" allowfullscreen></iframe>';
				echo '<div>'.utf8_decode(htmlspecialchars_decode($content->texto)).'</div>';
			}
			?>
			</div>				
		</div>
</div>

<?php 
$popup = GET_content::getCustomPopup();
if($popup->activo==1){
	echo '<script>var modal=true,delay='.$popup->delay.';</script>';
	echo '<div class="modal fade" id="eventoModal">';
    echo '<div class="modal-dialog">';
    echo '<div class="modal-content" style="background-color:#'.$popup->bordercolor.'">';
    echo '<div class="modal-body">';
	echo '<div class="row contenido">';
	echo '<button type="button" class="close btn  btn-info" data-dismiss="modal" aria-hidden="true">Cerrar &times;</button>';
	echo '<img src="http://centroastrologico.com.ar/images/popup/popup.jpg?k='.uniqid().'"/>';
	if($popup->titulo != '') echo '<div class="mod-titulo" style="font-size:'.utf8_decode($popup->fontsize).'px;background-color:#'.$popup->bordercolor.'">'.utf8_decode($popup->titulo).'</div>';
	echo '<div style="padding:20px 50px">';	
	echo '<p>'.utf8_decode(htmlspecialchars_decode($popup->texto)).'</p>';
	echo '</div>';
	if($popup->textoboton !='')echo '<div style="text-align:center;"><a class="btn btn-primary btn-lg" href="'.utf8_decode($popup->link).'" role="button">'.utf8_decode($popup->textoboton).'</a></div>';
	echo '</div>';
	if($popup->mostrarfooter == 1) echo '<div class="mod-footer"><ul class="list-inline list-unstyled"><li>Tel.: +54-11- 4981-7935 / 2442</li><li>-</li><li>Cel.:15-3895-6730</li><li>-</li><li><a href="" >info@aztlan.com.ar</a></li></ul></div>';		 
    echo '</div>';	  
    echo '</div>';	
  	echo '</div>';	
	echo '</div>';	
}
?>