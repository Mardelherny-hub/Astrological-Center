app.models.AppSectionModel = app.models.SectionModel.extend({
    defaults:{
    	seccion:''
    },
    resolveHash : function(route) {
		app.logger.log('app.models.AppSectionModel:resolveHash() ', route);

		if(!route.length || route[0]=='0'){
			this.set('seccion',null);
			return;
		}
		var query = siteModel.getIdRoutes(route);
		app.logger.log('query',query);

		this.set('seccion',query);
		this.load(query);
	},
	load : function(seccion){
		//override for load content
	},
	cleanRoute : function(){
		this.unset('route', {silent:true});
		this.unset('seccion', {silent:true});
		this.unset('params', {silent:true});
	}

});