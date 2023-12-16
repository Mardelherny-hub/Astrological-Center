<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
	//echo "<br/><br />" . "Admin <a href='logout.php'>Logout</a>";
}
else
{
header('Location: login.php');

exit;
}
$now = time(); // checking the time now when home page starts

if($now > $_SESSION['expire'])
{
session_destroy();
header('Location: login.php');
exit;
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Backend</title>

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet/less" type="text/css" href="less/estilos.less" />
	<script src="less/less-1.4.1.min.js"></script>

	<script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/adapters/jquery.js" type="text/javascript" ></script>

  </head>

  <body>

<!--   	TEMPLATES -->

<!--   	END TEMPLATES -->

    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Backend</a>
        </div>
        <div class="collapse navbar-collapse">
        
          <ul class="nav navbar-nav" id="menuIdiomas">

<!--             <li><a href="#" idi="2">Inglés</a></li> -->
<!--             <li><a href="#" idi="3">Franchute</a></li> -->
          </ul>
          <ul class="nav navbar-nav pull-right" id="menuPopups">
					<li><a href="home/index.php">EDITAR HOME</a></li>
          			<li><a href="popup.php">EDITAR POPUP</a></li>
				<li><a href="images.php">EDITAR IMAGENES</a></li>
				<li><a href="logout.php"><?php echo $_SESSION['username']; ?>(LOGOUT)</a></li>
			</ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container" id="mainContainer">

      <div class="row">

       <div class="col-xs-3  " id="menuLateral" role="navigation">
        </div><!--/span-->

        <div class="col-xs-9" id='sections'>
        
	        <div id="popups">
	        	<h3 class="tituloSeccion">ACTIVAR POPUPS</h3>
	        	<table class="table table-hover">
				 <thead>
				 	<tr>
					 	<td>ID</td>
					 	<td>NAME</td>
					 	<td>TYPE</td>
					 	<td>TRAKER</td>
					 	<td>ACTIVE</td>
					 	<td>DELAY</td>
				 	</tr>
				 </thead>
				 <tbody>
				 	<tr class="trtemplate">
					 	<td class="id">n</td>
					 	<td class="nombre">CINECLUB</td>
					 	<td class="type">TYPO</td>
					 	<td class="traker"><input type="text"></td>
					 	<td class="active"><input type="checkbox"></td>
					 	<td class="delay"><input type="text"></td>
				 	</tr>
				 </tbody>
				</table>
	        	
	        	<button  class="btn btn-warning btnGuardar">Editar Popups</button>
	        </div>

        	<div id="opciones-seccion">
        		<h3 class="tituloSeccion">OPCIONES DE SECCION:</h3>
        		<h3 class="nombreSeccion">nombre seccion</h3>
        		<h4 class="pathSeccion">Part Seccion</h4>
        		<div class="btn-group-horizontal">
        			<div class="btn-group-vertical">
	        			<div class="btn btn-warning">SECCION</div>
						<button type="button"  class="btn btn-primary btnEditarSeccion">Editar</button>
						<button type="button"  class="btn btn-primary btnBorrarSeccion">Borrar</button>
						<button type="button"  class="btn btn-primary btnOrdenarSeccion">Cambiar Orden</button>
						<button type="button"  class="btn btn-primary btnCrearSubseccion">Crear Subseccion</button>
					</div>
					<div class="btn-group-vertical">
						<div class="btn btn-warning">CONTENIDOS</div>
						<button type="button"  class="btn btn-primary btnVerContenidosSeccion">Ver Contenidos</button>
						<button type="button"  class="btn btn-primary btnOrdenarContenidosSeccion">Ordenar Contenidos</button>
						<button type="button"  class="btn btn-primary btnCrearContenidoSeccion">Crear Contenido</button>
					</div>
        		</div>


        	</div>

        	<div id="editar-seccion">
        		<h3 class="tituloSeccion">EDITAR SECCION:</h3>
        		<h3 class="nombreSeccion">nombre seccion</h3>
        		<h4 class="pathSeccion">Part Seccion</h4>

        		<form autocomplete="off" action="">

        			<div class="form-group">
					    <label for="exampleInputEmail1">Nombre se seccion: </label>
					    <input type="text" class="form-control" id="nuevoNombreSeccion">
					 </div>

					<div class="checkbox toactive">
						<label> <input type="checkbox" > Activo	</label>
					</div>

					 <select class="form-control">
						  <option value="1">Home</option>
						  <option value="2" id="odefault">Articulo</option>
						  <option value="3">Foto</option>
						  <option value="4">Video</option>
						  <option value="5">Contacto</option>
						  <option value="6">Form</option>
						  <option value="7">Link</option>
					</select>
					
					<div class="checkbox showcontent">
						<label> <input type="checkbox" > Show Contents </label>
					</div>
					
					<div class="checkbox tomainmenu">
						<label> <input type="checkbox" > ToMainMenu	</label>
					</div>

					<div class="form-group nameinmain">
					    <label for="exampleInputEmail1">Nombre se seccion en MenuPrincipal: </label>
					    <input type="text" class="form-control" id="nuevonameinmain">
					 </div>

					
					</form>
					<button  class="btn btn-warning btnGuardar">Guardar</button>
        	</div>

        	<div id="crear-seccion">
        		<h3 class="tituloSeccion">CREAR SECCION:</h3>
        		<h3 class="nombreSeccion">nombre seccion</h3>
        		<h4 class="pathSeccion">Part Seccion</h4>

        		<form autocomplete="off" action="">

        			<div class="form-group">
					    <label for="exampleInputEmail1">Nombre se seccion: </label>
					    <input type="text" class="form-control" id="nuevoNombreSeccion">
					 </div>

					 <select class="form-control">
						  <option value="1">Home</option>
						  <option value="2" id="odefault">Articulo</option>
						  <option value="3">Foto</option>
						  <option value="4">Video</option>
						  <option value="5">Contacto</option>
						  <option value="6">Form</option>
					</select>

					 <div class="form-group">
					    <label for="exampleInputEmail1">Orden de seccion: </label>
					    <input type="number" class="form-control" id="nuevoOrder" onkeypress="Utils.validateNumber(event)">
					 </div>

					<div class="checkbox toactive">
						<label> <input type="checkbox" > Activo	</label>
					</div>
					
					<div class="checkbox showcontent">
						<label> <input type="checkbox" > Show Contents </label>
					</div>

					<div class="checkbox tomainmenu">
						<label> <input type="checkbox" > ToMainMenu	</label>
					</div>

					<div class="form-group nameinmain">
					    <label for="exampleInputEmail1">Nombre se seccion en MenuPrincipal: </label>
					    <input type="text" class="form-control" id="nuevonameinmain">
					 </div>

					
					</form>
					<button  class="btn btn-warning btnCrear">CREAR</button>
        	</div>

        	<div id="borrar-seccion">
        		<h3 class="tituloSeccion">BORRAR SECCION:</h3>
        		<h3 class="nombreSeccion">nombre seccion</h3>
        		<h4 class="pathSeccion">Part Seccion</h4>

				<p>¿Deseas borrar la seccion y sus subsecciones?<br>
					Se borrará la seccion y sus subsecciones de todos los IDIOMAS.<br>
					No se borrarán los contenidos, pero ya no estarás disponibles.
				</p>

				<button  class="btn btn-warning btnBorrar">BORRAR!!!</button>

        	</div>

        	<div id="cambiar-orden-seccion">
        		<h3 class="tituloSeccion">CAMBIAR ORDEN DE SECCIONES:</h3>
        		<h3 class="nombreSeccion">nombre seccion</h3>
        		<h4 class="pathSeccion">Part Seccion</h4>

				<form autocomplete="off">

					<div class="uisectionorden">
						<input class="nombreSeccion" type="text" disabled="disabled">
						<input class="orden" type="number" onkeypress="Utils.validateNumber(event)">
					</div>

				</form>

				<button  class="btn btn-warning btnGuardar">Guardar</button>

        	</div>

        	<div id="crear-contenido">
        		<h3 class="tituloSeccion">CREAR CONTENIDO PARA:<span class="nombreSeccion"></span></h3>
        		<h4 class="pathSeccion">Part Seccion</h4>


        		<form autocomplete="off" action="">

        			<div class="checkbox toactive">
						<label> <input type="checkbox" > Activo	</label>
					</div>

        			<div class="form-group ">
					    <label >Titulo: </label>
					    <input type="text" class="form-control" id="newtitulo">
					 </div>

					 <div class="form-group">
					    <label>Orden de contenido: </label>
					    <input type="number" class="form-control" id="newOrder" onkeypress="Utils.validateNumber(event)">
					 </div>

					 <div class="form-group">
					    <label>Cargar Imágen:</label>
					    <input type='file' name='imagen' class='uploadImage' autocomplete="off"/>
					 </div>

					 <div class="form-group">
					  <label>Alineacion:</label>
					    <label class="radio-inline">
						  <input type="radio" name="optionsRadios" id="aleft" value="0"> left
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optionsRadios"  value="1"> center
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optionsRadios"  value="2"> rigth
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optionsRadios"  value="3"> bottom
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optionsRadios"  value="4"> super left
						</label>
						<label class="radio-inline">
						  <input type="radio" name="optionsRadios"  value="5"> super right
						</label>
					 </div>

					 <div class="form-group">
					 	<div class="targetInputImgSrc"></div>
					 </div>
					 
					 <div class="form-group">
					    <label>SEO Descripción</label>
					    <textarea name="SEO_editor" id="SEO_editorCrear"  class="required form-control" ></textarea>
					 </div>

					 <div class="form-group">
					    <label>Descripción</label>
					    <textarea name="editor" id="editorCrear"  class="ckeditor required"></textarea>
					 </div>
					 
					 


					</form>

					<button class="btn btn-warning btnCrear">CREAR CONTENIDO</button>
        	</div>

        	<div id="editar-contenido">
        		<h3 class="tituloSeccion">EDITAR CONTENIDO PARA:<span class="nombreSeccion"></span></h3>
        		<h4 class="pathSeccion">Part Seccion</h4>
        		<br>
        		<h4>Nombre de referencia: <span class="rname"></span></h4>

        		<form autocomplete="off" action="">

        			<div class="checkbox toactive">
						<label> <input type="checkbox" > Activo	</label>
					</div>

        			<div class="form-group ">
					    <label >Titulo: </label>
					    <input type="text" class="form-control" id="newtitulo">
					 </div>

					 <div class="form-group">
					    <label>Orden de contenido: </label>
					    <input type="number" class="form-control" id="newOrder" onkeypress="Utils.validateNumber(event)">
					 </div>

					 <div class="form-group">
					    <label>Cargar Imágen:</label>
					    <input type='file' name='imagen' class='uploadImage' autocomplete="off"/>
					 </div>

					 <div class="form-group">
					  <label>Alineacion:</label>
					    <label class="radio-inline">
						  <input type="radio" class="img-left" name="optionsRadios" id="aleft" value="0"> left
						</label>
						<label class="radio-inline">
						  <input type="radio" class="img-middle" name="optionsRadios"  value="1"> center
						</label>
						<label class="radio-inline">
						  <input type="radio" class="img-right" name="optionsRadios"  value="2"> right
						</label>
						<label class="radio-inline">
						  <input type="radio" class="img-bottom" name="optionsRadios"  value="3"> bottom
						</label>
						<label class="radio-inline">
						  <input type="radio" class="img-super-left" name="optionsRadios"  value="4"> super left
						</label>
						<label class="radio-inline">
						  <input type="radio" class="img-super-right" name="optionsRadios"  value="5"> super right
						</label>
					 </div>

					 <div class="form-group">
					 	<div class="targetInputImgSrc"></div>
					 </div>
					 
					 <div class="form-group">
					    <label>SEO Descripción</label>
					    <textarea name="SEO_editor" id="SEO_editorEditar"  class="required form-control" ></textarea>
					 </div>

					 <div class="form-group">
					    <label>Descripción</label>
					    <textarea name="editor" id="editorEditar"  class="ckeditor required"></textarea>
					 </div>
					 
					 


					</form>

					<button class="btn btn-warning btnEditar">EDITAR CONTENIDO</button>
        	</div>

        	<div id="ver-contenidos">
        		<h3 class="tituloSeccion">CONTENIDOS PARA:<span class="nombreSeccion"></span></h3>
        		<h4 class="pathSeccion">Part Seccion</h4>
        		<hr>

        		<div class="contenidosContainer">
        			<div class="contenido">
        				<h2 ><span class="btnEditContent btnEdit glyphicon glyphicon-edit"></span><span class="btnDelete btnEdit glyphicon glyphicon-trash"></span><span class="titulo">TITULO</span></h2>
        				<div class="bs-callout bs-callout-danger">
        					  <h5 class=""><strong>SEO Description</strong></h5>
        					 <p class="SEO_descripcion"></p>
        				</div>
        				
        				<p class="descripcion"></p>
        				
        			</div>
        		</div>


        	</div>

        	<div id="borrar-contenido">
        		<h3>BORRAR CONTENIDO :<span class="titulo"></span></h3>
        		<h4 class="pathSeccion">Part Seccion</h4>

				<p>¿Deseas borrar el contenido?<br>
					Se borrará de todos los IDIOMAS.<br>
				</p>

				<div class="contenido">
        			<h2 ><span class="titulo">TITULO</span></h2>
        			<p class="descripcion"></p>
        		</div>

				<button  class="btn btn-warning btnBorrar">BORRAR!!!</button>

        	</div>
        </div><!--/span-->


      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Aztlan 2014</p>
      </footer>

    </div><!--/.container-->



<!--     <script src="bootstrap/js/bootstrap.min.js"></script> -->

  </body>
</html>