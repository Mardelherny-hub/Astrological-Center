app.data.models.verContenidosModel = app.models.AppContenidoModel.extend({
		name:'verContenidosModel',
		
		load : function(){
			var model = this;
			seccion = model.get('seccion');
			this.url.contenido.getContentsBySection(seccion.id,function(data){
				model.set('contenidos',data.contents);			
			});
			
		}

});