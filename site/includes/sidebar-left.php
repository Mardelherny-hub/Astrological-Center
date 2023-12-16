<div id="menuLateral">
<ul class="list-unstyled">
<?php 
			
	foreach (Section::getSite() as $value) {
		//if(Section::$section->level == 0 && Section::$section->furl == $value->furl || !is_null(Section::$contents->parent) && Section::$contents->parent->furl == $value->furl)
		if(!is_null(Section::$section) && Section::$section[0]->furl == $value->furl)
		{
			echo '<li class="mainMenuBtn active" id="'.$value->furl.'"><div><a href="'.Section::host().$value->path.Section::$extention.'" title="'. utf8_decode($value->details->name) .'">'. utf8_decode($value->details->name) .'</a></div>';
		
							
			if(count($value->sections))
			{
				echo '<ul class="list-unstyled" >';
				foreach ($value->sections as $sub) 
					{
						if(count(Section::$section)>1 && Section::$section[1]->furl == $sub->furl) {
							echo '<li class="mainMenuBtn active" id="'.$sub->furl.'"><div><a href="'.Section::host().$sub->path.Section::$extention.'"  title="'.utf8_decode($sub->details->name).'">'.utf8_decode($sub->details->name).'</a></div></li>';
							if(Section::$section[1]->showContent == 1){								
								echo '<ul class="articulos list-unstyled">';
								foreach (Section::$menuArticles as $articulo) 
								{
									if(count(Section::$section)>2 && Section::$section[2] == $articulo->furl){
										echo '<li class="mainMenuBtn active" id="'.$articulo->furl.'"><div><a href="'.Section::host().$articulo->path.Section::$extention.'" title="'.utf8_decode($articulo->details->titulo).'">'.utf8_decode($articulo->details->titulo).'</a></div></li>';
									}else  echo '<li class="mainMenuBtn" id="'.$articulo->furl.'"><div><a href="'.Section::host().$articulo->path.Section::$extention.'">'.utf8_decode($articulo->details->titulo).'</a></div></li>';
								}
								echo '</ul>';								
							}
						}
						else echo '<li class="mainMenuBtn" id="'.$sub->furl.'"><div><a href="'.Section::host().$sub->path.Section::$extention.'" title="'.utf8_decode($sub->details->name).'">'.utf8_decode($sub->details->name).'</a></div></li>';
					}
				echo '</ul>';
			}			
		} 
		else if($value->type == 7) echo '<li class="mainMenuBtn " id="'.$value->furl.'"><div><a href="'.Section::host().$value->path.'" title="'.utf8_decode( $value->details->toMainName) .'">'.utf8_decode( $value->details->toMainName) .'</a></div>';
		else echo '<li class="mainMenuBtn" id="'.$value->furl.'"><div><a href="'.Section::host().$value->path.Section::$extention.'" title="'. utf8_decode($value->details->name) .'">'. utf8_decode($value->details->name) .'</a></div>';
		
		
		echo '</li>';
	}	

?>
</ul>
</div>
<!--
<div>
<script type="text/javascript" async="async" defer="defer" src="http://chat.aztlan.org.ar/chat/cargar/wid/53765aa92e068049796461"></script>
<a style="margin-left:-15px;" href="javascript:;" onclick="dcJs.startSend()"><img style="border:0px;" id="dc_ImgStatus" src="http://chat.aztlan.org.ar/chat/img/wid/53765aa92e068049796461" /></a>
</div>
-->