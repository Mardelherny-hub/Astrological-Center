app.data.models.popupModel = app.models.ModalModel.extend({
		name:'popupModel',
		idioma:null,
		popup:null,		
	    load : function(){
	    	var $self = this;
	    	this.url.app.getPopups(function(data){
	    		$self.set('idioma',data.idioma);
				$self.set('popup',data.popup);
			});
	    }
});

