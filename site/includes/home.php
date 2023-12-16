<script>
   $(document).ready(function(){
   	if(!detectmob())
   	{
   		//setTimeout(function(){$.colorbox({href:"/site/popup/popup_charla_psico.html"});}, 3000);	
   	}
   	
   });
   
   function detectmob() { 
    if( navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)
    ){
       return true;
     }
    else {
       return false;
     }
   }
</script>
<div id="home-section">
	<?php 
      $content = GET_CustomContent::getJsonContentById(1);
      if(isset($content->activo) && $content->activo=='on'){
      	echo '<div class="row" style="margin-bottom: -15px!important;"><div class="col-md-6 home-inside">';
      	echo '<h3  id="nuestra-escuela" style="font-size: 17px;padding-top: 14px;height: 46px;">'.utf8_decode($content->titulo).'</h3>';
      	if(isset($content->hasVideo) && $content->hasVideo == 'on')echo '<iframe class="ytvideo" width="100%" height="500" src="//www.youtube.com/embed/'.$content->video.'?version=3&hl=es_ES&rel=0&showinfo=0&wmode=transparent" frameborder="0" allowfullscreen></iframe>';
      	echo '<div>'.utf8_decode(htmlspecialchars_decode($content->texto)).'</div>';
      	echo '</div>';
      }
      ?>
    <?php 
      $content = GET_CustomContent::getJsonContentById(4);
      if(isset($content->activo) && $content->activo=='on'){
      	echo '<div class="col-md-6 home-inside">';
      	echo '<h3 style="font-size: 17px;padding-top: 14px;height: 46px;">'.utf8_decode($content->titulo).'</h3>';
      	if(isset($content->hasVideo) && $content->hasVideo == 'on')echo '<iframe class="ytvideo" width="100%" height="500" src="//www.youtube.com/embed/'.$content->video.'?version=3&hl=es_ES&rel=0&showinfo=0&wmode=transparent" frameborder="0" allowfullscreen></iframe>';
      	echo '<div>'.utf8_decode(htmlspecialchars_decode($content->texto)).'</div>';
      	echo '</div></div>';
      }
      ?>
   <div class="row home-inside">
      <div class="col-md-12 home-inside" id="home-cursos">
         <?php 
            $content = GET_CustomContent::getJsonContentById(3);
            if(isset($content->activo) && $content->activo=='on'){
            	echo '<h3 style="font-size: 18px!important;background-color: #EB9824!important;">'.utf8_decode($content->titulo).'</h3>';
            	/*if(isset($content->mostrardescuento) && $content->mostrardescuento=='on')echo '<p style="text-align:center;padding:10px;background-color:#670E0E;color:white"><strong class="">'.utf8_decode($content->descuento).'</strong></p>';*/
            	echo '<p><img class="img-rounded" style="float:left;margin-right:15px;"src="site/images/home/imagen_curso-psico.jpg" alt="Escuela de Filosofía y psicología transpersonal">';
            	echo utf8_decode(htmlspecialchars_decode($content->texto)).'</p>';
            }
            ?>
      </div>
      
   </div>
   <?php 
      $eventos = GET_eventos::getHomeEventosPsico();
      if(count($eventos) >0 ) echo '<div class="row row-last" style="margin-bottom: -15px!important;"id="eventos"><h3>Próximas Actividades</h3></div>';
      //var_dump($eventos);		
      
      foreach ($eventos as $evento){	
      /*var_dump($evento);*/
      if($evento->tipoEvento_idTipo == 17){
      	$strTipo = "Charla";
      	$url = "psi";
      }
      if($evento->tipoEvento_idTipo == 16){
      	$strTipo = "Charla";
      	$url = "psi";
      }
      if($evento->tipoEvento_idTipo == 15){
      	$strTipo = "Charla";
      	$url = "psi";
      }
      if($evento->tipoEvento_idTipo == 14){
      	$strTipo = "Charla";
      	$url = "psi";
      }
      
      if($evento->tipoEvento_idTipo == 13){
      	$strTipo = "Charla";
      	$url = "psi";
      }
      
      if($evento->tipoEvento_idTipo == 12){
      $strTipo = "Charla";
      $url = "psi";
      }
      
      if($evento->tipoEvento_idTipo == 11){
      $strTipo = "Charla";
      $url = "psi";
      }
      
      if($evento->tipoEvento_idTipo == 10){
      $strTipo = "Charla";
      $url = "psi";
      }
      
      if($evento->tipoEvento_idTipo == 9){
      $strTipo = "Charla";
      $url = "psi";
      }
      
      if($evento->tipoEvento_idTipo == 8){
      $strTipo = "Charla";
      $url = "consultoria";
      }
      
      if($evento->tipoEvento_idTipo == 7){
      $strTipo = "Charla";
      $url = "psi";
      }
      
      if($evento->tipoEvento_idTipo == 3){
      $strTipo = "Charla";
      $url = "psi";
      }
      
      if($evento->tipoEvento_idTipo == 2){
      $strTipo = "Taller";
      $url = "astro";
      }
      
      if($evento->tipoEvento_idTipo == 1){
      $strTipo = "Cine Club";
      $url = "cineclub";
      }
      echo '<div class="row contenido" style="padding-top:0px;border-bottom:0px solid;">';
      echo '<div style="margin:0 20px; padding-top:0px">';
      echo '<div style="padding-top:20px;border-top-color:#b16919; border-top-style:solid; border-top-width:2px;">';
      echo '<div class="col-xs-6"><img alt="" src="images/eventos/home/'.$evento->idEvento.'.jpg" width="330" height="258"></div>';
      echo '<div class="col-xs-6">';
      echo '<span style="display: block; font-size:15px;margin-bottom:5px;"><strong>'.$strTipo.'</strong></span>';			
      echo '<span style="display: block; font-size:20px;margin-bottom:5px;font-weight: 400;"><strong>'.utf8_decode($evento->titulo).'</strong></span>';
      /*echo '<span style="display: block; font-size:13px;margin-bottom:5px;font-style:italic">Psicología Transpersonal para la Vida Cotidiana</span>';*/
      echo '<p style="font-size:13px;font-weight: 400;">'.utf8_decode(htmlspecialchars_decode($evento->texto)).'</p>';
      if($evento->link == '')	echo '<span style="display: block; font-size:15px;margin-bottom:5px;margin-top:20px;">Más información <a href="pages/'.$url.'/?c='.$evento->idEvento.'/3/7">aquí</a></span>';
      else echo '<span style="display: block; font-size:15px;margin-bottom:5px;margin-top:20px;">Más información <a href="'.$evento->link.'">aquí</a></span>';
      //echo '<span style="display: block; font-size:13px;margin-bottom:5px;font-weight: 400;">En Almagro, Rivadavia y Medrano</span>';
      			/*</p>*/
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      }
      ?>
   
   <div class="row" style="margin-bottom: -15px!important;">
      <div class="col-md-12 home-inside" id="quienes-somos">
         <?php 
            $content = GET_CustomContent::getJsonContentById(2);
            if(isset($content->activo) && $content->activo=='on'){
            	echo '<h3 style="font-size: 17px;padding-top: 14px;height: 46px;">'.utf8_decode($content->titulo).'</h3>';
            	echo '<p><img class="img-rounded" style="float:left;margin-right:15px;margin-top:5px;margin-bottom:2px;"src="images/manual/programa/filosofia.jpg" alt="Aztlan, Escuela del cuarto camino, Carl Gustav Jung">';
            	echo utf8_decode(htmlspecialchars_decode($content->texto)).'</p>';
            }
            ?>
      </div>
      <div class="hr">
         <hr>
      </div>
   </div>
   
</div>
