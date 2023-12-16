app.data.models.popupModel = app.models.Model.extend({
		name: 'popupModel',
		popups:null,

    	getAll : function(){
    		var $self = this;
    		this.url.popups.getAll(function(data){
    			$self.set('popups',data.popups);    			
    			
    		});
    	},
    	setAll : function(popups){
    		
    		var $self = this;
    		this.url.popups.setAll(popups,function(data){
    			$self.set('popups',data.popups);  
    		});

    	}
});