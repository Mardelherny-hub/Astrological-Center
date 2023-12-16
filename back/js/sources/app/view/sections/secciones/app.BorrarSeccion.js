app.view.sections.BorrarSeccion =app.view.sections.absSection.extend({	
	el:'#borrar-seccion',
	initialize: function(){
		
		this.model = new app.data.models.borrarSeccionModel();
		this.model.onRegister();
		
		this.listeners();
		
		var model = this.model;
		$(this.el).find('.btnBorrar').click(function(){		
			
			model.borrar();			
		});
		
	}
});