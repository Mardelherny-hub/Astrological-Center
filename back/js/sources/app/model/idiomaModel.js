app.data.models.idiomaModel = app.models.Model.extend({
		name: 'idiomaModel',
		idiomas:null,
		currentIdioma:null,

    	getIdiomas : function(){
    		var $self = this;
    		this.url.idioma.get(function(data){
    			$self.set('idiomas',data.idiomas);
    			$self.set('currentIdioma',data.idioma);
    			//onsole.log(data);
    		});
    	},
    	setIdioma : function(idioma){
    		var $self = this;
    		this.url.idioma.set(idioma,function(data){
    			//$self.set('currentIdioma',data.idioma);
    			//onsole.log(data);
    			Url.reload();
    		});

    	}
});