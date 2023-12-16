<div class="modal fade" id="formsModal" data-backdrop="static">
  <div class="modal-dialog ">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" aria-hidden="true">Cerrar &times;</button>
        <h2>CINECLUB AZTLAN</h2>
		<h2 class="titulo"></h2>
		<h3 class="fecha">Jueves 11 de Febrero</h3>
      </div>

      <div class="modal-body">
    	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    		<form class="form-horizontal" role="form">

		<div class="form-group" >
			<label for="inputName" class="col-sm-2 control-label">Nombre</label>
			<div class="col-sm-10">
				<input type="text" class="form-control"  name="nombre" validate chars="4" msg="Debes ingresar tu nombre" value="Sergio"
					placeholder="Nombre">
			</div>

		</div>

		<div class="form-group" >
			<label for="inputLastname" class="col-sm-2 control-label">Apellido</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="apellido" validate chars="4" msg="Debes ingresar tu apellido" value="Makaruk"
					placeholder="Apellido">
			</div>

		</div>

		<div class="form-group">
			<label for="inputTel" class="col-sm-2 control-label">Teléfono</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="telefono" validate  msg="Debes ingresar tu teléfono" value="15.6378.5701"
					placeholder="Teléfono">
			</div>
		</div>

		<div class="form-group">
			<label for="inputEmail" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" name="email" validate="email"  msg="Debes ingresar tu email" value="maka_idei@hotmail.com"
					placeholder="Email">
			</div>

		</div>

		<div class="form-group">
			<label for="inputCantidad" class="col-sm-2 control-label">Lugares</label>
			<div class="col-sm-10">
				<select class="form-control" name="lugares">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				</select>
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

	<div class="consultaOk panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title">CONSULTA ENVIADA</h3>
			</div>
			<div class="panel-body">
	    		En breves nos comunicaremos con vos
	  		</div>
		</div>


		<div class="errorMsg panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title">ERROR: Hubo un problema</h3>
			</div>
			<div class="panel-body">
	    		Por favor, vuelve a intentarlo
	  		</div>
		</div>


    </div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title titulo"></h3>
			</div>
			<div class="panel-body">
				Domingo 09 de febrero - 16:00 hs.
				<br><br>
				 Apart Hotel Congreso - Bartolomé Mitre 1824 -
				<br><br>
				<strong>IMPORTANTE:</strong> Complete correctamente todos los campos o de lo contrario no podremos confirmar su reserva.
				<br><strong>Para que la reserva quede confirmada es necesario abonar con anterioridad.</strong>

	  		</div>

		</div>
		</div>
      </div>
      <div class="clearfix"></div>
<!--       <div class="modal-footer"> -->
<!--          footer -->
<!--       </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
