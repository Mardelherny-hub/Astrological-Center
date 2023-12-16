app.data.models.borrarSeccionModel = app.models.AppSectionModel.extend({
		name:'borrarSeccionModel',
		
		borrar : function(){
			var seccion = this.get('seccion');			
			
			this.url.section.borrar(seccion,function(data){
				siteModel.set('site',data.site);
				if(data.parent){
					Url.setHash('#/opciones-de-seccion/' + data.parent.path);
				}
				else{
					Url.setHash('#/');
				}			
			});
		}

});