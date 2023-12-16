app.data.models.cambiarOrdenModel = app.models.AppSectionModel.extend({
		name:'cambiarOrdenModel',
		secciones:null,
		load: function(seccion){
			var model = this;
			this.url.section.getOrden(seccion,function(data){
				model.set('secciones',data.orders);
			});

		},

		cambiarOrden : function(secciones){
			var model = this;
			this.url.section.cambiarOrden(secciones,function(data){
				siteModel.updateSite(data.site);
				model.load(model.get('seccion'));
			});
		},
		clean : function(){
			this.unset('route', {silent:true});
			this.unset('secciones', {silent:true});
		}


});