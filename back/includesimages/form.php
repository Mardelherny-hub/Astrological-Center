<!DOCTYPE html>
<html lang="es"><head>
<title>IMAGES - Edicion</title>
<link rel="icon" type="../../image/png" href="favicon.png">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-switch.min.css" rel="stylesheet">

<!-- The main CSS file -->

<link href="includesimages/estilos.css" rel="stylesheet">
<link href="includesimages/mini-upload-form/assets/css/style.css" rel="stylesheet" />

<script src="js/sources/assets/libs/jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/bootstrap-switch.min.js"></script>

<!-- jQuery File Upload Dependencies -->
<script src="includesimages/mini-upload-form/assets/js/jquery.knob.js"></script>
<script src="includesimages/mini-upload-form/assets/js/jquery.ui.widget.js"></script>
<script src="includesimages/mini-upload-form/assets/js/jquery.iframe-transport.js"></script>
<script src="includesimages/mini-upload-form/assets/js/jquery.fileupload.js"></script>		
		
<!-- Our main JS file -->
<script src="includesimages/mini-upload-form/assets/js/script.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if IE ]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<link href="http://aztlan.com.ar/site/css/ie.css" rel="stylesheet">
			<![endif]-->

</head>
	<body>	
	
	<nav class="header-nav">
<div class="header container">
    <div class="row">
    
    	<div class="logo col-xs-2 col-sm-3 col-md-4 hidden-xs ">
    		<img src="images/logo.png"  class="pull-left">
    		<div  class="pull-left hidden-sm">
    			<h1 class="h1Header">Aztlan</h1>
    			<h4 class="h4Header">Director León Azulay</h4>
    		</div>    		
    	</div>    	
     	
    	<div class="slogan col-xs-8 col-sm-8 col-md-6">
    		<h1 class="h1Header">Escuela de Filosofía y Psicología</h1>
    		<h4 class="h4Header"><strong>Enseñanza Privada Nivel Terciario - No oficial</strong></h4>
    		<p class="pHeader hidden-xs">Personería Jurídica Nº I.G.J. 748</p>
    		<p class="pHeader hidden-xs">Centro Nacional de Organizaciones de la Comunidad C.E.N.O.C. Nº 16528</p>
    	</div>
    	<div  class="slogan col-xs-2 col-sm-2 col-md-2">
    	<a href="index.html" ><span style="font-size:50px;" class="glyphicon glyphicon-home"></span></a>
    	</div>
    </div>
</div>  
 </nav>
	
<div  class="container" >
<h2>Editar Imagenes</h2>
</div>	

<div  class="container" >
<?php 

for ($i = 0;$i<= count($images) ; $i++) {
   $image = array_shift($images);
   $col = 12;
   echo '<div class="row">';
   echo '<div class="col-sm-'.$col.'">';
   echo '<div id="form">';   
   echo '<form class="upload" id="upload" method="post" action="includesimages/mini-upload-form/upload.php?path='.$image->path.'&name='.$image->name.'" enctype="multipart/form-data">';
   echo '<div class="col-sm-3 col-sm-offset-1"><div id="drop" >';
   echo $image->sname.'</br>';
   echo '<a>Cargar foto</a>';
   echo '<input type="file" name="upl" multiple />';   
   echo '</div><ul></ul></div>';
   echo '<div class="col-sm-8 text-center">';
   echo '<img class="back-img" src="'.$image->path.$image->name.'?k='.uniqid().'">';
   echo '';
   echo '</div></form>';  
   echo '</div></div></div>';
}
?>
</div>	
</body>
</html>