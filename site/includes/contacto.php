
<div id="contacto-section">

<?php  if(array_key_exists ('inputnombre',$_POST) && array_key_exists('inputemail',$_POST)){
	echo '<h2 class="hnews">Suscríbase a nuestro Newsletter</h2>';
	echo '<form class="form-horizontal" role="form" >';
	echo '<input id="inputNews" class="hidden" value="1">';
}
else {
	echo '<h2 class="hcontactenos">Contáctenos</h2>';	
	echo '<form class="form-horizontal" role="form" >';
	echo '<input id="inputNews" class="hidden" value="0">';
}
?>
		<div class="form-group" >
			<label for="inputName" class="col-sm-2 control-label">Nombre y Apellido</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputName" name="inputName"
					placeholder="Nombre y Apellido" chars="3" validate msg value="<?php  if(array_key_exists("inputnombre",$_POST))echo $_POST['inputnombre']?>">
			</div>

		</div>
        
         <div class="form-group" >
		  <label for="inputDni" class="col-sm-2 control-label">DNI</label>
			<div class="col-sm-10">
				<input type="text" class="form-control"  id="inputDni" name="inputDni" validate chars="8"  value="DNI"
					placeholder="DNI" msg="Debes ingresar tu DNI"/>
			</div>
		</div>

	<div class="form-group">
			<label for="inputTel" class="col-sm-2 control-label">Celular</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputTel" name="inputTel" validate chars="8" msg="Debes ingresar tu celular" placeholder="Número de Celular">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail" name="inputEmail"
					placeholder="Email" validate="email" msg value="<?php  if(array_key_exists('inputemail',$_POST))echo $_POST['inputemail']?>">
			</div>

		</div>

		<div class="form-group" >
		  <label for="inputFacebook" class="col-sm-2 control-label">Facebook </label>
			<div class="col-sm-10">
				<input type="text" class="form-control"  id="inputFacebook" name="inputFacebook" validate chars="3" msg="Debes ingresar tu facebook" value="Usuario de  Facebook"
					placeholder="Usuario de Facebook" required/>
			</div>

		</div>
      <!--   <div class="form-group">
			<label for="inputCantidad" class="col-sm-2 control-label">Taller de inter&eacute;s</label>
			<div class="col-sm-10">
				<select class="form-control" name="lugares">
				   <option value="1">Psicolog&iacute;a</option>	
				  <option value="2">Astrolog&iacute;a</option>
				  <option value="3">Tarot</option>
				</select>
			</div>
		</div> -->

		
		<div class="form-group">
			<label for="inputConsulta" class="col-sm-2 control-label">Consulta</label>
			<div class="col-sm-10">
				<textarea id="inputConsulta"  class="form-control" rows="3" cols="6"></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button class="btnSend btn btn-warning">Enviar</button>
				<div class="loading-form">
					<h4>Enviando...</h4>
						<div class="slider">
							<div class="line"></div>
						  <div class="break dot1"></div>
						  <div class="break dot2"></div>
						  <div class="break dot3"></div>
						</div>
				</div>

			</div>
		</div>
	</form>

	<div class="col-sm-8 col-sm-offset-2 ">
	
	<?php  if(in_array ('inputnombre',$_POST) && in_array('inputemail',$_POST)){
	echo '<div class="newsOk panel panel-primary panel-response">
			<div class="panel-heading">
			    <h3 class="panel-title">CONSULTA ENVIADA</h3>
			</div>		
			<div class="panel-body">
	    		A partir de ahora recibirás nuestros newslleters con nuestras actividades
	  		</div>		
		</div>';
	}
	else echo '<div class="consultaOk panel panel-primary panel-response">
				<div class="panel-heading">
				    <h3 class="panel-title">CONSULTA ENVIADA</h3>
				</div>		
				<div class="panel-body">
		    		En breves nos comunicaremos con vos
		  		</div>		
			</div>';	
	?>	
		
		
		<div class="errorMsg panel panel-primary" style="display:none;">
			<div class="panel-heading">
			    <h3 class="panel-title">ERROR: Hubo un problema</h3>
			</div>		
			<div class="panel-body">
	    		Por favor, vuelve a intentarlo
	  		</div>		
		</div>
		
	</div>
	
	<div class="clearfix"></div>
	<div><hr></div>
	<div >

		<h4>Asociación Civil Aztlan Centro Cultural de Astrología</h4>
		<address>
		<!--  <abbr title="Teléfono">Tel.:</abbr> (54) 11- 4981 - 2442<br>
		  <abbr title="Teléfono">Cel.:</abbr> (54) 11- 3895 - 6730<br>
		  <a href="secretaria@aztlan.org.ar">secretaria@aztlan.org.ar</a><br>-->
		   Almagro, Ciudad de Buenos Aires.
		</address>
	</div>
	
	<!--
	<div class="col-sm-8">
		<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Av+Rivadavia+3900,+Buenos+Aires&amp;aq=&amp;sll=-34.612079,-58.422379&amp;sspn=0.006543,0.011362&amp;g=Av+Rivadavia+4000,+Buenos+Aires&amp;ie=UTF8&amp;hq=&amp;hnear=Av+Rivadavia+3900,+Almagro,+Buenos+Aires&amp;ll=-34.61208,-58.422375&amp;spn=0.006543,0.011362&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.ar/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Av+Rivadavia+3900,+Buenos+Aires&amp;aq=&amp;sll=-34.612079,-58.422379&amp;sspn=0.006543,0.011362&amp;g=Av+Rivadavia+4000,+Buenos+Aires&amp;ie=UTF8&amp;hq=&amp;hnear=Av+Rivadavia+3900,+Almagro,+Buenos+Aires&amp;ll=-34.61208,-58.422375&amp;spn=0.006543,0.011362&amp;t=m&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
	</div>
	-->
	

</div>