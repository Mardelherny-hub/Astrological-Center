app.data.models.crearSeccionModel = app.models.AppSectionModel.extend({
		name:'crearSeccionModel',

		crearSeccion : function(name,active,toMainMenu,toMainName,order,type,showContent){
			var seccion = {};
			seccion.details = {};
			seccion.id = 0;
			seccion.details.name = name;
			seccion.details.active = active;
			seccion.details.toMainMenu = toMainMenu;
			seccion.details.toMainName = toMainName;
			seccion.order = order;
			seccion.type = type;
			seccion.showContent = showContent;

			var parent = this.get('seccion');
			if(parent)
			{
				seccion.parent = parent.id;
				seccion.level = 1;
			}
			else
			{
				seccion.level = 0;
				seccion.parent = null;
			}

			this.url.section.crearSeccion(seccion,function(data){
				siteModel.set('site',data.site);
				Url.setHash('#/opciones-de-seccion/' + data.section.path);

				app.logger.log("SECCION CREADA OK",data);
			});
		}

});