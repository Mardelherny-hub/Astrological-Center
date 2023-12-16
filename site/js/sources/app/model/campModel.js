app.data.models.campModel = app.models.SectionModel.extend({
		name:'campModel',
	    initialize : function(){
	    	
	    },	
	    resolveQuery : function(query) {
			log('app.campModel:resolveQuery() ', query);
			
			if(query.route.length ==2){
				var campforms = new app.view.campPopupForms();
				campforms.model.getCamp({cid:query.route[0],so:query.route[1]});
			}	   		
			this.unset('query', {silent:true});
		},
	    resolveParams : function(params) {
				
		}
});