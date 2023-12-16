app.data.models.borrarContenidoModel = app.models.AppContenidoModel.extend({
		name:'borrarContenidoModel',
		
		borrar : function(){
			var $cont = this.get('contenidosView')[0];
			var seccion = this.get('seccion');	
			
			this.url.contenido.borrar($cont.id,function(data){
				//siteModel.set('site',data.site);
				Url.setHash('#/ver-contenidos/' + seccion.path);
				
				app.logger.log("CONTENIDO BORRADO OK",data);
			});
		}

});