app.data.models.editarSeccionModel = app.models.AppSectionModel.extend({
		name:'editarSeccionModel',

		guardar : function(name,active,toMainMenu,toMainName,type,showContent){
			var seccion = this.get('seccion');//para el id
			seccion.details = {};
			seccion.details.name = name;
			seccion.details.active = active;
			seccion.details.toMainMenu = toMainMenu;
			seccion.details.toMainName = toMainName;
			seccion.type = type;
			seccion.showContent = showContent;

			this.url.section.update(seccion,function(data){
				siteModel.set('site',data.site);
				Url.setHash('#/opciones-de-seccion/' + data.section.path);
				//var query = siteModel.getIdRoutes(route);
				app.logger.log("UPDATE SECION OK",data);
			});
		},
		clean : function(){
			this.unset('seccion', {silent:true});
		}

});