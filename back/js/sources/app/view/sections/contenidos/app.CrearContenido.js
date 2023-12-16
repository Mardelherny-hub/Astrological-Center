app.view.sections.CrearContenido =app.view.sections.absContenido.extend({	
	el:'#crear-contenido',
	uiactive:null,	
	uploadImage:null,
	initialize: function(){
		
		this.model = new app.data.models.crearContenidoModel();
		this.model.onRegister();
		
		this.listeners();
		
		var ui = $(this.el);
		var form = ui.find('form');
		this.uiactive = form.find('div.checkbox.toactive').find('input');
		var uiactive = this.uiactive;
				
		form.find('div.checkbox').find('input').on('click', function() {
			var ui = $(this);
		     if(ui.attr('checked'))ui.removeAttr('checked');	    	
		     else ui.attr('checked', true);	   	 
		});	
		
		this.uploadImage = new UploadImage();		
		
		var model = this.model;
		var self = this;
		$(this.el).find('.btnCrear').click(function(){
			
			var titulo = form.find('input#newtitulo').val();
			var SEO_desc = form.find('input#SEO_editorCrear').val();
			var active = ( uiactive.attr('checked')) ? 1 : 0;			
			var order = form.find('input#newOrder').val();
			if(order=='')order=0;
			var img =  self.uploadImage.getImageData();
			var thumb =  self.uploadImage.getThumbData();
			var align = form.find('input[name=optionsRadios]:radio:checked').val(); 
				
			var contenido = {};
			contenido.details = {};
			contenido.details.title = titulo;
			contenido.details.description = CKEDITOR.instances['editorCrear'].getData();
			contenido.details.SEO_desc = SEO_desc;
			contenido.details.active = active;
			contenido.order = order;
			contenido.img = img;
			contenido.thumb = thumb;
			contenido.align = align;
			log(contenido);
			model.crearContenido(contenido);						
		});
		
	},
	
	onSectionChange : function(seccion){
		console.log("SECTION CHANGE",seccion);		
		
	},	
	show:function(){		
		var ui = $(this.el);
		var form = ui.find('form');			
		this.uiactive.attr('checked',true);		
		form.find('input#newtitulo').val('');			
		form.find('input#newOrder').val('');	
		form.find('input#aleft').attr('checked',true);		
		Utils.CKupdate();
		
		this.uploadImage.destroy();
		this.uploadImage.addInput(ui.find('input.uploadImage'),ui.find('.targetInputImgSrc'),[200,200]);
		ui.show();		
	}
});