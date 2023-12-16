app.models.SectionModel = app.models.Model.extend({
    defaults: {
    	route:'',
    	params:'',
    },
    onRegister: function(){
		    this.on('change:route',function(){this.resolveHash(this.get('route'))});
		    this.on('change:params',function(){
		    	var params = this.get('params');
		    	/*if(params && params!="")*/this.resolveParams(params);		    	
		    	});
	},
    resolveHash : function(route) {
		app.logger.log('app.models.SectionModel:resolveHash() ', route);
	},
	resolveParams : function(params) {
		app.logger.log('app.models.SectionModel:resolveParams() ', params);
	}
});