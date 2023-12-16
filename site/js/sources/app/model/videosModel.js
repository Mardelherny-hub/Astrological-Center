app.data.models.videosModel = app.models.SectionModel.extend({
		name:'videosModel',
		seccion:'',
		parent:'',
		forClean:null,
		contenidos:null,
		contenidosView:null,
	    initialize : function(){
	    	this.listenTo(this, "change:contenidos", this.onContenidosChange);
	    },
	    onContenidosChange : function(){
	    	var contents = this.get('contenidos');
	    	for(var key in contents)contents[key].details.descripcion = Utils.db64ToText(contents[key].details.descripcion);
	    	this.set('contenidosView',contents);
	    },
	    resolveQuery : function(query) {
			app.logger.log('app.articleModel:resolveQuery() ', query);
			this.set('forClean',Utils.timestp());
			var parent = siteModel.getIdRoutes([query.route[0]]);
			this.set('parent',parent);
			
			var seccion = siteModel.getIdRoutes(query.route);
			this.set('seccion',seccion);
			
			var $self = this;

			this.url.app.getArticles({idSection:seccion.id},function(data){

				$self.set('contenidos',data.contents);
			});

		},
	    resolveParams : function(params) {

		}
});