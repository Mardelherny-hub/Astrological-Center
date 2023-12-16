app.view.sections.EditarSeccion =app.view.sections.absSection.extend({
	el:'#editar-seccion',
	uiactive:null,
	uitomainmenu:null,
	showcontent:null,
	initialize: function(){

		this.model = new app.data.models.editarSeccionModel();
		this.model.onRegister();

		this.listeners();

		var ui = $(this.el);
		var form = ui.find('form');
		this.uiactive = form.find('div.checkbox.toactive').find('input');
		this.uitomainmenu  = form.find('div.checkbox.tomainmenu').find('input');
		this.showcontent  = form.find('div.checkbox.showcontent').find('input');
		var tomainname = form.find('div.nameinmain');

		var uiactive = this.uiactive;
		var uitomainmenu = this.uitomainmenu;
		var showcontent = this.showcontent;

		form.find('div.checkbox').find('input').on('click', function() {
    	 	if(uitomainmenu.prop('checked'))tomainname.show();
    	 	else tomainname.hide();
		});

		var model = this.model;
		$(this.el).find('.btnGuardar').click(function(e){
			e.preventDefault();
			var nombre = form.find('input#nuevoNombreSeccion').val();
			var active = ( uiactive.prop('checked')) ? 1 : 0;
			var showcontenidos = ( showcontent.prop('checked')) ? 1 : 0;
			var toMain = ( uitomainmenu.prop('checked')) ? 1 : 0;
			var toMainName = tomainname.find('input').val();
			var type = form.find('option:selected').attr('value');

			model.guardar(nombre,active,toMain,toMainName,type,showcontenidos);
		});

	},

	onSectionChange : function(seccion){
		console.log("SECTION CHANGE",seccion);

		var ui = $(this.el);
		var form = ui.find('form');
		var tomainname = form.find('div.nameinmain');
		if(seccion.details == null){
			seccion.details = {name:'',type:2,toMainMenu:0,active:0};//lo que deberia venir en la seccion;; si no tiene detalles, es porq es otro idioma, por ende esta inactivo por defecto
		}
		//log(sec);return;

		form.find('input#nuevoNombreSeccion').val(seccion.details.name);
		form.find('option[value='+seccion.type +']').prop('selected',true);
		
		if(seccion.showContent == 1)this.showcontent.prop('checked',true);
		else this.showcontent.prop('checked',false);

		if(seccion.details.active == 1)this.uiactive.prop('checked',true);
		else this.uiactive.prop('checked',false);

		if(seccion.details.toMainMenu == 1)
		{
			this.uitomainmenu.prop('checked',true);
			tomainname.show();
		}
		else
		{
			this.uitomainmenu.prop('checked',false);
			tomainname.hide();
		}

		if(seccion.details.toMainName)tomainname.find('input').val(seccion.details.toMainName);
		else tomainname.find('input').val('');

		//bloqueo los cheboxs q no pertenecen a un determinado nivel
		if(seccion.level !=0)
		{
			this.uitomainmenu.prop('disabled',true);
			tomainname.hide();
			//this.showcontent.prop('disabled',false);
		}
		else
		{			
			this.uitomainmenu.prop('disabled',false);
			//this.showcontent.prop('disabled',true);
		}
	},
	hide:function(){
		//this.model.clear({silent:true});
		this.model.cleanRoute();
		$(this.el).hide();
	}
});