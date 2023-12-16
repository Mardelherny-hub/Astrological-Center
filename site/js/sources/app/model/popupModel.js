app.data.models.popupModel = app.models.HashModel.extend({
		name:'popupModel',
		closepopup:false,
		idioma:null,
		popup:null,
	    load : function(){
	    	var $self = this;
	    	this.url.app.getPopups(function(data){
	    		$self.set('idioma',data.idioma);
				$self.set('popup',data.popup);
			});
	    },
	    hashChange: function(section,route){
    		this.set('closepopup',true);
    	}
});

