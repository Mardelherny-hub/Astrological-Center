<div  class="container" >
<h2>Editar HOME</h2>
<?php if($updated==true) echo '<div class="alert alert-success" role="alert"><strong>Contenido actualizado</strong> <a class=btn btn-default" href="index.php">VOLVER</a></div>';?>
</div>	

<div id="form" class="container" style="padding-top:50px;">
  	   <form class="form-horizontal" role="form" action="form.php?idContent=<?php echo $id?>" method="POST">
  	   <?php 
  	   $content->content = json_decode($content->content);
  	  // var_dump($content);die;
  	   	foreach(json_decode($content->inputs)->form as $input){
  			echo utf8_decode($this->formatInput($input,@$content->content->{$input->name})); //@puede no venir contenido por input switch off
  	   	}
  	   ?>
 	<button type="submit" class="btn btn-warning btn-lg col-sm-offset-3">GUARDAR</button>
</form>