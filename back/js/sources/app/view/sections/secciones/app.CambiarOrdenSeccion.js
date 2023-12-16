app.view.sections.CambiarOrdenSeccion =app.view.sections.absSection.extend({	
	el:'#cambiar-orden-seccion',
	inputs:null,//ui
	target:null,
	initialize: function(){
		
		this.model = new app.data.models.cambiarOrdenModel();
		this.model.onRegister();
		
		this.listeners();
		
		this.listenTo(this.model, "change:secciones", function(){
			var  secciones = this.model.get('secciones');
			this.render(secciones);			
		});	
		
		this.inputs = $(this.el).find('div.uisectionorden');
		this.target = this.inputs.parent();
		this.target.empty();
		
		var model = this.model;
		var el = $(this.el);
		$(this.el).find('.btnGuardar').click(function(){		
			var secciones = [];			
			el.find('div.uisectionorden').each(function(){
				var ui = $(this);				
				secciones.push({
					idSection:ui.attr('sid'),
					order:ui.find('input.orden').val()
				});
			});
			model.cambiarOrden(secciones);			
		});
		
	},
	
	render : function(secciones){
		//console.log("SECTION CHANGE - ORDER LOADED",secciones);	
		var seccion = this.model.get('seccion');
		
		this.target.empty();
		var sec;
		var input;
		for(var key in secciones){
			sec = secciones[key];
			input = this.inputs.clone();
			this.target.append(input);
			input.attr('sid',sec.id);
			if(sec.id == seccion.id)input.addClass('strong');
			input.find('input.nombreSeccion').val(sec.name);
			input.find('input.orden').val(sec.sectionOrder);
		}
		
		$(this.el).show();
	},
	hide:function(){
		this.model.clean();
		$(this.el).hide();
	},
	show:function(){		
		$(this.el).show();
	}
});