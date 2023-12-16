app.data.models.editarContenidoModel = app.models.AppContenidoModel.extend({
		name:'editarContenidoModel',

		updateContenido : function(contenido){
			var $cont = this.get('contenidosView')[0];
			var seccion = this.get('seccion');
			contenido.idSection = seccion.id;
			contenido.details.description = Utils.to64(contenido.details.description);
			contenido.details.SEO_desc = Utils.to64(contenido.details.SEO_desc);
			contenido.referenceName = $cont.referenceName;
			contenido.id = $cont.id;

			this.url.contenido.crearContenido(contenido,function(data){
				siteModel.set('site',data.site);
				Url.setHash('#/ver-contenidos/' + seccion.path);

				app.logger.log("CONTENIDO EDITADO OK",data);
			});
		}

});