app.view.sections.Camp = app.Section.extend({
	
	initialize : function(){
		this.model = new app.data.models.campModel();
		this.model.onRegister();
	},
	resolveHash : function(route) {
		app.logger.log('app.home:resolveHash() ', route);
		
	}

});