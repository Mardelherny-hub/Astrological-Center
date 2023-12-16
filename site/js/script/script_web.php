<?php
$desarrollo=true;

$files = array();

$files[]="../sources/assets/funciones.js";

$files[]="../sources/assets/libs/jquery-1.10.2.min.js";
addFiles("../sources/assets/libs/plugins");

$files[]="../sources/assets/Application.js";
addFiles("../sources/assets/core");
addFiles("../sources/assets/data");

addFiles("../sources/assets/utils");



$files[]=("../sources/app/view/sections/app.Contacto.js");
$files[]=("../sources/app/view/popup.js");
//addFiles("./sources/HX");


function addFiles($d){
	global $files;
	foreach (glob("$d/*.js") as $f){
		$files[]="$f";
	}
}

if($desarrollo){
	header ('Content-type: text/javascript; charset=UTF-8');
	//header("Cache-Control", "no-cache,no-store,must-revalidate");
	//header("Pragma", "no-cache");
	//header("Expires", -1);
	header("Expires: Sat, 26 Jul 2011 05:20:00 GMT");
	ob_start('ob_gzhandler');

	foreach($files as $file) {

		if($desarrollo)
			echo "\n// start -> $file **************************************************\n";
		include($file);

		if($desarrollo)
			echo "\n// end -> $file **************************************************\n";
	}

	ob_end_flush();
	die;
}

require_once 'jsmin.php';

$modified = 0;

foreach($files as $file) {
	$age = filemtime($file);
	if($age > $modified) {
		$modified = $age;
	}
}

$offset = 60 * 60 * 24 * 7; // Cache for 1 weeks
header ('Expires: ' . gmdate ("D, d M Y H:i:s", time() + $offset) . ' GMT');

if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $modified) {
	header("HTTP/1.0 304 Not Modified");
	header ('Cache-Control:');
} else {
	header ('Cache-Control: max-age=' . $offset);
	header ('Content-type: text/javascript; charset=UTF-8');
	header ('Pragma:');
	header ("Last-Modified: ".gmdate("D, d M Y H:i:s", $modified )." GMT");

	function compress($buffer) {

		return JSMin::minify($buffer);
	}

	ob_start('ob_gzhandler');

	foreach($files as $file) {

		if(strpos(basename($file),'.min.')===false) { //compress files that aren't minified
			ob_start("compress");
			include($file);
			ob_end_flush();
		} else {
			include($file);
		}
	}

	ob_end_flush();
}

?>
