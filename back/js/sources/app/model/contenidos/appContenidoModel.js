app.models.AppContenidoModel = app.models.SectionModel.extend({
    defaults:{
    	seccion:'',
    	contenidos:null,
    	contenidosView:null
    },
    initialize : function(){
    	this.listenTo(this, "change:contenidos", this.onContenidosChange);
    },
    htmlspecialchars : function(str) {
    	if (typeof(str) == "string") {
    		  str = str.replace(/&gt;/ig, ">");
    		  str = str.replace(/&lt;/ig, "<");
    		  str = str.replace(/&#039;/g, "'");
    		  str = str.replace(/&quot;/ig, '"');
    		  str = str.replace(/&amp;/ig, '&'); /* must do &amp; last */
    		  }
    		 return str;
    },
    onContenidosChange : function(){
    	var self = this;
    	var contents = this.get('contenidos');
    	log("C",contents);
    	for(var key in contents){
    		if(contents[key].details){
    			contents[key].details.descripcion = self.htmlspecialchars(contents[key].details.descripcion);
    			contents[key].details.SEO_desc = self.htmlspecialchars(contents[key].details.SEO_desc);
    		}
    	}
    	this.set('contenidosView',contents);
    },
    resolveHash : function(route) {
		app.logger.log('app.models.AppContenidoModel:resolveHash() ', route);

		if(!route.length || route[0]=='0'){
			this.set('seccion',null);
			return;
		}
		
		var query = siteModel.getIdRoutes(route);
		app.logger.log('query',query);

		this.set('seccion',query);
		this.load(query);
	},
	resolveParams : function(params){
		var model = this;
		var seccion = this.get('seccion');
		var params = this.get('params');
		var self = this;

		this.url.contenido.getContent(
				{
					idContent:params.o,
					idSection:seccion.id
				},
			function(data){
					log("DATA",data);
					if(data.content.details){
						data.content.details.descripcion = self.htmlspecialchars(data.content.details.descripcion);
						data.content.details.SEO_desc = self.htmlspecialchars(data.content.details.SEO_desc);
					}
					model.set('contenidosView',[data.content]);
		});
	},
	/*reloadonShow : function(){
		var model = this;
		var seccion = this.get('seccion');
		var params = this.get('params');

		this.url.contenido.getContent(
				{
					idContent:params.o,
					idSection:seccion.id
				},
			function(data){
					data.content.descripcion = Utils.db64ToText(data.content.descripcion);
					model.set('contenidosView',[data.content]);
		});
	},*/

	clean : function(){
		this.unset('route', {silent:true});
		this.unset('params', {silent:true});
		this.unset('contenidosView', {silent:true});
		this.unset('contenidos', {silent:true});
	},

	load : function(seccion){
		//override for load content
	}

});