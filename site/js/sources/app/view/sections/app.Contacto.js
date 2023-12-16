Contacto = {

	el:'div#contacto-section',
	name:null,
	email:null,
	tel:null,
	consulta:null,
	isNews:false,
	error:null,
	panel:null,
	initialize: function(){
		
		var ui = $(this.el);
		var self = this;
		this.name = ui.find('input#inputName');
		this.dni = ui.find('input#inputDni');
		this.facebook = ui.find('input#inputFacebook');
		this.email = ui.find('input#inputEmail');
		this.tel = ui.find('input#inputTel');
		this.consulta = ui.find('textarea');
		this.panel = ui.find('.panel-response');
		this.error = ui.find('.errorMsg');		
		
		ui.find("form").validate(Validation.validate(ui.find("form"),function(){
			
        	var params = {};
        	params.newsletter = ui.find('input#inputNews').val();
        	params.nombre = self.name.val();
        	params.dni = self.dni.val();
        	params.facebook = self.facebook.val();
        	params.email = self.email.val();
        	params.telefono = self.tel.val();
        	params.consulta = self.consulta.val();
        	
        	app.data.DataController.app.setConsulta(params,function(response){
        		$(self.el).find("form").hide();
        		//var response = this.model.get('response');
        		if(response.consulta != 0){
        			window.location = 'http://www.aztlan.com.ar/entrevistas/site/autoreply/autoreply_fb_astro.html';
        			self.panel.show();

         	   }
         	   else self.error.show();
        	});
		}));
	},

	show : function(){
		var ui = $(this.el);
		this.panel.hide();
	}
};
