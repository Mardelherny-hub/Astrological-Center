<?php
//error_reporting(E_ALL); 
//ini_set("display_errors", 1); 
//ini_set("display_startup_errors", 1); 


include "../../php/HX_Fmwk/load.php";

class Index extends AppPageController {

	private $tmp;
	private $colLabel = 3;
	private $colInput = 7;
	
	private $btColLabelClasses = '{bt-col-label-classes}';
	private $btColInputClasses = '{bt-col-input-classes}';
	private $iLabel = '{i-label}';
	private $iName = '{i-name}';
	private $iPlaceholder = '{i-placeholder}';
	private $iId = '{i-id}';
	private $iContent = '{i-content}';
	private $iValue= '{i-value}';

  public function onLoad() {	

  	ob_clean();
  	$updated = false;
  	
  	if(isset($_POST['id'])){
  		$content = array();
  		foreach ($_POST as $key => $value){
  			if($key == 'texto') $content[$key] = htmlspecialchars(utf8_encode($value));
  			else $content[$key] = utf8_encode($value);
  		}
  		$json = json_encode($content);
  		//var_dump($json);
  		$id = $_POST['id'];
  		GET_CustomContent::setCustomContent($id,$json);
  		$_POST = null;
  		$updated = true;
  	}
  	else $id = $_GET['idContent'];
  	
  	$content = GET_CustomContent::getCustomContentById($id);
  	//$content->inputs = json_decode($content->inputs)->inputs;
  	
  	include('./includes/header.php');
  	include('./includes/form-include.php');
  	include('./includes/closehtml.php');
  }

 
  
  public function onUnLoad() {}
  

	private function formatInput($json,$content){
		//var_dump($json);		
		return $this->parseInput(file_get_contents('./includes/inputs/'.$json->type.'.html'),$json,$content);
	}
	

	
	private function parseInput($html,$json,$content){
		//echo $content;                          
		$html = preg_replace('/'.$this->btColLabelClasses.'/','col-sm-'.$this->colLabel,$html);
		$html = preg_replace('/'.$this->btColInputClasses.'/','col-sm-'.$this->colInput,$html);
		$html = preg_replace('/'.$this->iId.'/',$json->id,$html);
		$html = preg_replace('/'.$this->iName.'/',$json->name,$html);
		
		if(isset($json->label))$html = preg_replace('/'.$this->iLabel.'/',$json->label,$html);		
		if(isset($json->placeholder))$html = preg_replace('/'.$this->iPlaceholder.'/',$json->placeholder,$html);
		
		if($json->type == 'h-area')$html =  preg_replace('/'.$this->iContent.'/',htmlspecialchars_decode($content),$html);
		else if($json->type == 'h-checkbox' && $content == 'on') $html =  preg_replace('/'.$this->iContent.'/','checked',$html);
		else $html = preg_replace('/'.$this->iContent.'/',$content,$html);
		
		return $html;
	}
	

}

Controller::load("Index");


?>

