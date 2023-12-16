app.view.sections.OpcionesSeccion = app.view.sections.absSection.extend({	
	el:'#opciones-seccion',
	initialize: function(){
		
		this.model = new app.data.models.opcionesSeccionModel();
		this.model.onRegister();
		
		this.listeners();
		this.render();
		
		this.listenTo(this.model, "change:seccion", this.renderSection);		
	},
	
	renderSection : function(){
		var seccion = this.model.get('seccion');	
		if(seccion.level != 0)$(this.el).find('.btnCrearSubseccion').hide();
		else $(this.el).find('.btnCrearSubseccion').show();
	},	
	
	render:function(){
		
		var path;
		var self = this;
		
		$(this.el).find('.btnEditarSeccion').click(function(){
			path =  self.model.get('seccion').path;
			Url.setHash('#/editar-seccion/' + path);			
		});
		
		$(this.el).find('.btnBorrarSeccion').click(function(){
			path =  self.model.get('seccion').path;
			Url.setHash('#/borrar-seccion/' + path);			
		});
		
		$(this.el).find('.btnOrdenarSeccion').click(function(){
			path =  self.model.get('seccion').path;
			Url.setHash('#/ordenar-secciones/' + path);			
		});
		
		$(this.el).find('.btnCrearSubseccion').click(function(){
			path =  self.model.get('seccion').path;
			Url.setHash('#/crear-seccion/' + path);			
		});
		
		$(this.el).find('.btnVerContenidosSeccion').click(function(){
			path =  self.model.get('seccion').path;
			Url.setHash('#/ver-contenidos/' + path);			
		});
		
		$(this.el).find('.btnCrearContenidoSeccion').click(function(){
			path =  self.model.get('seccion').path;
			Url.setHash('#/crear-contenido/' + path);			
		});		
	}
});