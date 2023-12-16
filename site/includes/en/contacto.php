
<div id="contacto-section">

<?php  if(array_key_exists ('inputnombre',$_POST) && array_key_exists('inputemail',$_POST)){
	echo '<h2 class="hnews">Subscribe to our newsletterr</h2>';
	echo '<form class="form-horizontal" role="form" >';
	echo '<input id="inputNews" class="hidden" value="1">';
}
else {
	echo '<h2 class="hcontactenos">Contact Us</h2>';	
	echo '<form class="form-horizontal" role="form" >';
	echo '<input id="inputNews" class="hidden" value="0">';
}
?>
		<div class="form-group" >
			<label for="inputName" class="col-sm-2 control-label">Full name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputName" name="inputName"
					placeholder="Full Name" chars="3" validate msg value="<?php  if(array_key_exists("inputnombre",$_POST))echo $_POST['inputnombre']?>">
			</div>

		</div>

		<div class="form-group">
			<label for="inputTel" class="col-sm-2 control-label">Phone</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputTel"
					placeholder="Phone">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail" name="inputEmail"
					placeholder="Email" validate="email" msg value="<?php  if(array_key_exists('inputemail',$_POST))echo $_POST['inputemail']?>">
			</div>

		</div>
		<div class="form-group">
			<label for="inputConsulta" class="col-sm-2 control-label">Comments</label>
			<div class="col-sm-10">
				<textarea id="inputConsulta"  class="form-control" rows="3" cols="6"></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button class="btnSend btn btn-warning">Send</button>
				<div class="loading-form">
					<h4>Sending...</h4>
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
	<div class="col-sm-4">

		<h2>Aztlan</h2>
		<address>
		  <abbr title="Teléfono">Phone.:</abbr> (54) 11- 4981 - 2442/0592<br>
		  <a href="mailto:info@aztlan.com.ar">info@aztlan.com.ar</a><br>
		   Almagro, City of Buenos Aires.
		</address>
	</div>
	 
	<div class="col-sm-8">
		<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Av+Rivadavia+3900,+Buenos+Aires&amp;aq=&amp;sll=-34.612079,-58.422379&amp;sspn=0.006543,0.011362&amp;g=Av+Rivadavia+4000,+Buenos+Aires&amp;ie=UTF8&amp;hq=&amp;hnear=Av+Rivadavia+3900,+Almagro,+Buenos+Aires&amp;ll=-34.61208,-58.422375&amp;spn=0.006543,0.011362&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.ar/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Av+Rivadavia+3900,+Buenos+Aires&amp;aq=&amp;sll=-34.612079,-58.422379&amp;sspn=0.006543,0.011362&amp;g=Av+Rivadavia+4000,+Buenos+Aires&amp;ie=UTF8&amp;hq=&amp;hnear=Av+Rivadavia+3900,+Almagro,+Buenos+Aires&amp;ll=-34.61208,-58.422375&amp;spn=0.006543,0.011362&amp;t=m&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">See more</a></small>
	</div>


</div>