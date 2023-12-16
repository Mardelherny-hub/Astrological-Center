<!DOCTYPE html>
<html lang="es"><head>
<title>POPUP - Edicion</title>
<link rel="icon" type="../../image/png" href="favicon.png">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-switch.min.css" rel="stylesheet">
<link rel="stylesheet" href="colorpicker/css/pick-a-color-1.2.3.min.css">	  

<!-- The main CSS file -->
<link href="includeshome/mini-upload-form/assets/css/style.css" rel="stylesheet" />

<link href="includeshome/estilos.css" rel="stylesheet">


<script src="js/sources/assets/libs/jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/bootstrap-switch.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/adapters/jquery.js" type="text/javascript" ></script>

<!-- jQuery File Upload Dependencies -->
<script src="includeshome/mini-upload-form/assets/js/jquery.knob.js"></script>
<script src="includeshome/mini-upload-form/assets/js/jquery.ui.widget.js"></script>
<script src="includeshome/mini-upload-form/assets/js/jquery.iframe-transport.js"></script>
<script src="includeshome/mini-upload-form/assets/js/jquery.fileupload.js"></script>
		
<!-- Our main JS file -->
<script src="includeshome/mini-upload-form/assets/js/script.js"></script>

<script src="colorpicker/js/pick-a-color-1.2.3.min.js"></script>
<script src="colorpicker/js/tinycolor-0.9.15.min.js"></script>
	
<script src="js/editarHome.js"></script>

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
<h2>Editar POPUP</h2>
<?php if($updated==1) echo '<div class="alert alert-success" role="alert"><strong>Popup actualizado</strong></div>';?>
<?php if(isset($_GET['img'])) echo '<div class="alert alert-success" role="alert"><strong>Imagen actualizada</strong></div>';?>
</div>	

		<div id="form" class="container" style="padding-top:50px;">
		
		  		<form class="upload" id="upload-1" method="post" action="includeshome/mini-upload-form/upload-1.php" enctype="multipart/form-data">
					<div id="drop" class="col-sm-3 col-sm-offset-1">
					
						Foto popup</br>		
						<a>Cargar foto</a>
						<input type="file" name="upl" multiple />
						
					</div>
					<div class="col-sm-8 text-center">
						<img class="back-img" src="../images/popup/popup.jpg?k=<?php echo uniqid();?>">
					</div>
					<ul>
						<!-- The file uploads will be shown here -->
					</ul>
		
		</form>
		<div class="clearfix"></div>			
  	   <form id="form-popup" class="form-horizontal" role="form" action="popup.php" method="POST">
  	 
  	 <div class="form-group">  	  
		     <label for="activo" class="col-sm-3 control-label">Activo 		<button type="button" class="btn btn-default btn-popover" data-content="Se muestra o no en la home"><span class="glyphicon glyphicon-exclamation-sign"></span></button></label>
		     <div class="col-sm-8">
		      <div class="switch-wrapper">		     	
		     	<?php		
		      		echo '<input  style="max-height: 30px;" id="switch-state" type="checkbox" name="activo"';
		      		if($content->activo  == 1) echo 'checked';
		      		echo ' >';		      	
		     	?>	
		     </div> 
		     </div>
	   </div> 
	   
	   <div class="form-group">
    	<label for="delay" class="col-sm-3 control-label">Color de Borde <button type="button" class="btn btn-default btn-popover" data-content="Color de borde y fondo del titulo del popup"><span class="glyphicon glyphicon-exclamation-sign"></span></button></label>
    	<div class="col-sm-8">
      	<input type="text" class="form-control pick-a-color" id="bordercolor" placeholder="Color de Borde" name="bordercolor" <?php echo 'value="'.utf8_decode($content->bordercolor).'"'?> >
		</div>
    </div> 
	   
	   <div class="form-group">
    	<label for="delay" class="col-sm-3 control-label">Delay <button type="button" class="btn btn-default btn-popover" data-content="Los segundos que tarda en abrir el popup una vez que carga la home. EN MILISEGUNDOS"><span class="glyphicon glyphicon-exclamation-sign"></span></button></label>
    	<div class="col-sm-8">
      	<input type="number" class="form-control" id="delay" placeholder="Delay" name="delay" <?php echo 'value="'.utf8_decode($content->delay).'"'?> >
		</div>
    </div>  
	   
  	 <div class="form-group">
    	<label for="titulo" class="col-sm-3 control-label">Título <button type="button" class="btn btn-default btn-popover" data-content="(OPCIONAL) Si no se escribe nada, no aparece el bloque del titulo"><span class="glyphicon glyphicon-exclamation-sign"></span></button></label>
    	<div class="col-sm-8">
      	<input type="text" class="form-control" id="titulo" placeholder="Título" name="titulo" <?php echo 'value="'.utf8_decode($content->titulo).'"'?> >
		</div>
    </div>  	
    
    <div class="form-group">
    	<label for="delay" class="col-sm-3 control-label">Tamaño de Fuente de Título <button type="button" class="btn btn-default btn-popover" data-content="El tamaño de fuente del titulo"><span class="glyphicon glyphicon-exclamation-sign"></span></button></label>
    	<div class="col-sm-8">
      	<input type="number" class="form-control" id="fontsize" placeholder="Tamaño de Fuente de Título" name="fontsize" <?php echo 'value="'.utf8_decode($content->fontsize).'"'?> >
		</div>
    </div>     

    <div class="form-group">
    	<label for="textoboton" class="col-sm-3 control-label">Texto Botón <button type="button" class="btn btn-default btn-popover" data-content="El texto del boton del link del popup"><span class="glyphicon glyphicon-exclamation-sign"></span></button></label>
    	<div class="col-sm-8">
      <input type="text" class="form-control" id="textoboton" placeholder="Texto Botón"  name="textoboton"  <?php echo 'value="'.utf8_decode($content->textoboton).'"'?>>
		</div>
    </div>
    
    
    <div class="form-group">
    	<label for="link" class="col-sm-3 control-label">Link de Botón <button type="button" class="btn btn-default btn-popover" data-content="El link del popup"><span class="glyphicon glyphicon-exclamation-sign"></span></button></label>
    	<div class="col-sm-8">
      <input type="text" class="form-control" id="link" placeholder="Link de Botón"  name="link"  <?php echo 'value="'.utf8_decode($content->link).'"'?>>
		</div>
    </div>
    
    <div class="form-group">  	  
		     <label for="isblank" class="col-sm-3 control-label">Abrir en una ventana aparte <button type="button" class="btn btn-default btn-popover" data-content="Si el link abre en una nueva pesataña o redirecciona la actual"><span class="glyphicon glyphicon-exclamation-sign"></span></button></label>
		     <div class="col-sm-8">
		      <div class="switch-wrapper">		     	
		     	<?php		
		      		echo '<input  style="max-height: 30px;" id="switch-state" type="checkbox" name="isblank"';
		      		if($content->isblank  == 1) echo 'checked';
		      		echo ' >';		      	
		     	?>	
		     </div> 
		     </div>
	   </div>  
	   
	   <div class="form-group">  	  
		     <label for="mostrarfooter" class="col-sm-3 control-label">Mostrar Footer <button type="button" class="btn btn-default btn-popover" data-content="Muestra o no el footer con los telefonos"><span class="glyphicon glyphicon-exclamation-sign"></span></button></label>
		     <div class="col-sm-8">
		      <div class="switch-wrapper">		     	
		     	<?php		
		      		echo '<input  style="max-height: 30px;" id="switch-state" type="checkbox" name="mostrarfooter"';
		      		if($content->mostrarfooter  == 1) echo 'checked';
		      		echo ' >';		      	
		     	?>	
		     </div> 
		     </div>
	   </div>  
   
    <div class="form-group">
    	<label for="fechaVisible" class="col-sm-3 control-label">Texto <button type="button" class="btn btn-default btn-popover" data-content="El contenido"><span class="glyphicon glyphicon-exclamation-sign"></span></button></label>
    	<div class="col-sm-8">
      		
      		<textarea name="texto" id="editorEditar"  rows="10" class="ckeditor required form-control" ><?php echo utf8_decode(htmlspecialchars_decode($content->texto))  ?></textarea>
		</div>		
		
    </div>
 	<button type="submit" class="btn btn-warning btn-lg col-sm-offset-3">GUARDAR</button>
</form>




</div>

</body>
</html>