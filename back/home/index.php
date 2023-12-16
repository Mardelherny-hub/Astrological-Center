<?php
//error_reporting(E_ALL); 
//ini_set("display_errors", 1); 
//ini_set("display_startup_errors", 1); 


include "../../php/HX_Fmwk/load.php";

class Index extends AppPageController {

  public function onLoad() {	

  	ob_clean();
  	
  	$content_1 = GET_CustomContent::getCustomContentById(1);
  	$content_2 = GET_CustomContent::getCustomContentById(2);  
  	$content_3 = GET_CustomContent::getCustomContentById(3); 
  	$content_4 = GET_CustomContent::getCustomContentById(4); 
  	$content_5 = GET_CustomContent::getCustomContentById(5);  	
  	
  	include('./includes/header.php'); 
	
  	echo '<div  class="container" ><h2>Editar HOME</h2></div>';
  	echo $this->printRow(array($content_1,$content_2));
  	echo $this->printRow(array($content_3));
  	echo $this->printRow(array($content_4,$content_5));
  	include('./includes/closehtml.php');
  }

 
  
  public function onUnLoad() {}
 
	
	private function printRow($contents){
		$str = '<div class="row">';
		$col = (count($contents) == 2)?6:12;		
		foreach ($contents as $sqlobj ){					
			$content = json_decode($sqlobj->content);	
			$clazz = '';			
			if(!isset($content->activo))$clazz.= ' inactive';					
			$str .= '<div class="col-md-'.$col.$clazz.'">';	
			$str .= '<div class="content">';	
			$str .= '<h3>'.utf8_decode($content->titulo).'</h3>';
			if(isset($content->hasVideo) && $content->hasVideo == 'on')$str .= '<iframe class="ytvideo" width="100%" height="500" src="//www.youtube.com/embed/'.$content->video.'?version=3&amp;hl=es_ES&amp;rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen="" style="height: 246px;"></iframe>';
			$str .= '<div>'.utf8_decode(htmlspecialchars_decode($content->texto)).'</div>';						
			$str.='<a class="btn btn-warning" href="form.php?idContent='.$sqlobj->id.'" >Editar</a>';	
			$str .= '</div></div>';
		}		
		$str .= '</div>';
		return $str;
	}

}

Controller::load("Index");

/*
{
    "id": 1,
    "nombre": "home_1",
    "form": [
        {
            "type": "h-text",
            "id": "titulo",
            "label": "Título",
            "placeholder": "Título",
            "name": "titulo"
        },
        {
            "type": "chebox",
            "id": "hasVideo",
            "label": "Mostrar Video",
            "placeholder": "Mostrar Video",
            "name": "hasVideo"
        },
        {
            "type": "h-text",
            "id": "video",
            "label": "Video",
            "placeholder": "Video",
            "name": "video"
        },
        {
            "type": "h-area",
            "id": "Texto",
            "name": "texto"
        }
    ]
}
*/


?>

