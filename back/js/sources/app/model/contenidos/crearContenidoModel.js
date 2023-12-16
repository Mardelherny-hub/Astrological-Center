app.data.models.crearContenidoModel = app.models.AppContenidoModel.extend({
		name:'crearContenidoModel',
		
		crearContenido : function(contenido){
			
			var seccion = this.get('seccion');
			contenido.idSection = seccion.id;
			contenido.details.description = Utils.to64(contenido.details.description);
			contenido.details.SEO_desc = Utils.to64(contenido.details.SEO_desc);
			
			this.url.contenido.crearContenido(contenido,function(data){
				siteModel.set('site',data.site);
				Url.setHash('#/opciones-de-seccion/' + seccion.path);
				
				app.logger.log("CONTENIDO CREADA OK",data);
			});
		}

});