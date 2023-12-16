<?php
//error_reporting(E_ALL); 
//ini_set("display_errors", 1); 
//ini_set("display_startup_errors", 1); 


include "../php/HX_Fmwk/load.php";

class Index extends AppPageController {

  public function onLoad() {	
  	 ob_clean();  
  	 $images = Array();
	
  	$obj = new stdClass();
  	$obj->sname = 'Curso de Verano';
  	$obj->name = 'astrologia-curso-de-verano.jpg';
  	$obj->path = '../images/images/';	
	$images[]=$obj;
	
	$obj = new stdClass();
	$obj->sname = 'Curso de Verano 2';
	$obj->name = 'psicologia-transpersonal-curso-de-verano-2.jpg';
	$obj->path = '../images/images/';
	//$images[]=$obj;
	//var_dump($images);
  	
  	include('includesimages/form.php');
  }

 
  
  public function onUnLoad() {}
  
}
Controller::load("Index");

?>
