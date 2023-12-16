app.data.models.siteModel = app.models.HashModel.extend({
		name: 'siteModel',
		seccionActiva:null,
		subActiva:null,
		currentContents:null,
		articulo:null,
        defaults: {
            site: ''
        },
        initialize : function(){
        	this.register();
        },
    	hashChange: function(section,route,params){
    	//app.logger.log("MENU hashChange,update",section,route);
    		var seccion = route[0];
    		var sub = null;    		
    		if(route.length>1) sub = route[1];    		
    		var query = this.getIdRoutes(route);
    		var self = this;
    		//si tiene que mostrar los contenidos, cargo los contenidos para el menu
    		if(query && query.showContent==1){
    			
    			self.url.contenido.getContentsBySection(query.id,function(data){    				
    				self.set('seccionActiva',seccion);
    				self.set('subActiva',sub);
    				self.set('currentContents',{id:query.furl,contents:data.contents}); 
    				self.set('articulo',params);
        		});
    		}
    		else{
    			self.unset('currentContents', {silent:true});
    			self.set('seccionActiva',seccion);
    			self.set('subActiva',sub);   
    			self.set('articulo',params);
    		}
    		    		
    	},
    	loadSite : function(){
    		var $self = this;
    		this.url.app.init(function(data){
    			$self.set('site',data.site);
    			//onsole.log(data);
    		});
    	},
    	updateSite: function(site){
    		//this.set('seccionActiva',null);
    		//this.set('subActiva',null);
    		this.set('site',site);
    	},
    	getIdRoutes : function(route)
    	{
    		//articulo es en realidad seccion...me confundo las secciones con el contenido articulo
    		var seccion = route[0];
    		var articulo;
    		if(route.length>1)articulo=route[1];
    		var site = this.get('site');
    		for(var key in site)
    			{
    				if(site[key]['furl'] == seccion)
    					{
    						//console.log(site[key]['furl'] + " : " + site[key]['id']);}
    						var seccion = site[key];
    						if(articulo)
    							{
	    							for(var k in seccion['sections'])
	    							{
	    								if(seccion['sections'][k]['furl'] == articulo)
	    									{
	    										articulo = seccion['sections'][k];
	    										break;
	    									}	    								
	    							}
    							}
    						if(articulo && !articulo.hasOwnProperty('path'))articulo = site[key];
    						break;
    					}
    			}
    		
    		if(articulo) seccion = articulo;
    		//var obj = {seccion:seccion.id,path:seccion.path};    		
    		return seccion;
    	}
});