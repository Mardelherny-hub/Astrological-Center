<div id="articulos-section">

<?php 
//Section::getContents();
$contents = Section::$contents;
//var_dump(Section::$contents);die;

echo '<h4 class="branch">';
//if(!is_null($contents->parent))echo '<span class="bparent"><a class="bclick" href="'.$contents->parent->path.Section::$extention.'">'.$contents->parent->details->name.'</a></span> > ';
echo '<span class="bparent"><a class="bclick" href="'.Section::host().Section::$section[0]->path.Section::$extention.'">'. utf8_decode(Section::$section[0]->details->name).'</a></span>';
if(count(Section::$section)>1) echo ' > <span class="bsection"><a class="bclick" href="'.Section::host().Section::$section[1]->path.Section::$extention.'">'. utf8_decode(Section::$section[1]->details->name).'</a></span>';
if(!is_null(Section::$selectedArticle)) echo ' > <span class="bsection"><a class="bclick" href="'.Section::host().Section::$selectedArticle->path .Section::$extention.'">'.utf8_decode(Section::$selectedArticle->details->titulo).'</a></span>';

echo '</h4>';
//var_dump(Section::$section);die;
echo '<div id="artContainer">';

$key;
$dataArticulo;
$short = false;
$cont = count($contents->contents);

if($cont>1){
	$short = true;
	foreach ($contents->contents as $content){
		//$content->datatext = Section.shortArticle($content->details->descripcion);
		//$content->details->descripcion
	}
}


//var_dump($contents->contents);die;

foreach ($contents->contents as $content){
	$content->details->descripcion =  htmlspecialchars_decode(utf8_decode($content->details->descripcion));
	if($short){
		//$content->details->descripcion = Section::check($content->details->descripcion);
	}
	echo '<div class="articulo row">';
		
	$h3 =  '<h3 class="artTitulo"><span class="inner"><a href="'.Section::host().$content->path.Section::$extention.'">'.utf8_decode($content->details->titulo).'</a></span></h3>';
	//echo '</div>';
	//var_dump($content);
	
		/**if(short){
			p.html(dataArticulo.datatext.text);
			//log(dataArticulo.descripcion);
			//log(dataArticulo.datatext.text);
		}*/
		
		//echo $content->details->descripcion;
		if($content->img && $content->img!='')
		{
			$path = Section::host()."images/images/" . $content->img;
			$clazz = Section::resolveImgAlign($content->imgAlign);
			$img = '<img src="'.$path.'" class="'.$clazz.'">';
		
			switch($content->imgAlign)
			{
				case 3:
					echo $h3;
					echo Section::getSocial(1,$cont,$content);
					echo '<div class="artContenido">';
					echo '<p>'. $content->details->descripcion.'</p>';
					echo '<p class="'.$clazz.'">';
					echo '<img src="'.$path.'">';	
					echo Section::getSocial(0,$cont,$content);				
					echo '</p>';					
					echo '</div>';
					break;
				
				case 1://img-middle
					echo $h3;
					echo Section::getSocial(1,$cont,$content);
					echo '<div class="artContenido">';
					echo '<p class="'.$clazz.'"><img src="'.$path.'"></p>';
					echo Section::getSocial(0,$cont,$content);	
					echo '<p>'.$content->details->descripcion.'</p>';
					echo '</div>';
					break;
				
				case 0://img-left
				case 2://img-right
					echo $h3;
					echo Section::getSocial(1,$cont,$content);
					echo '<div class="artContenido">';
					echo '<p class="'.$clazz.'">';
					echo '<img src="'.$path.'">';
					echo Section::getSocial(0,$cont,$content);	
					echo $content->details->descripcion;
					echo '</p>';					
					echo '</div>';
					break;
					
				case 4://img-super-left
				case 5://img-super-right
					echo $img;
					echo $h3;		
					echo Section::getSocial(1,$cont,$content);	
					echo Section::getSocial(0,$cont,$content);			
					echo '<div class="artContenido">';
					echo '<div>'.$content->details->descripcion.'</div>';
					echo '</div>';
					break;				
			}
		}
		else {
			
			echo $h3;
			echo Section::getSocial(1,$cont,$content);
			echo Section::getSocial(0,$cont,$content);	
			echo '<div class="artContenido">';
			echo '<div>'.$content->details->descripcion.'</div>';
			echo ' </div>';
		}
	

	
	
	
		/*
		if(short && dataArticulo.datatext.short == true){
			art.find('.verMas').attr('href',dataArticulo.path);
			art.find('.verMas').click(function(){
				Url.setHash(Utils.resolveRef(2,$(this).attr('href')));
			});
		}
		else art.find('button').remove();
	*/
		echo '</div>';//close articulo row
		if($short){
			echo '<div class="verMas">';
			if(DA_Abs::$idIdioma == 2) echo '<a class="btn btn-warning btn-xs pull-right" href="'.$content->path.Section::$extention.'"><span class="glyphicon glyphicon-chevron-right"></span>Continue</a>';
			else echo '<a class="btn btn-warning btn-xs pull-right" href="'.$content->path.Section::$extention.'"><span class="glyphicon glyphicon-chevron-right"></span>Seguir Leyendo</a>';
			echo '</div>';
			echo '<div class="clearfix"></div>';
			echo '<div class="hr"><hr></div>';
		}

echo '<div class="fb-like" data-href="'.Section::host().$content->path.Section::$extention.'" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>';
		
}
echo '</div>';

?>


</div>