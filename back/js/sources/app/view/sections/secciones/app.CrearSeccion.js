app.view.sections.CrearSeccion =app.view.sections.absSection.extend({
	el:'#crear-seccion',
	uiactive:null,
	uitomainmenu:null,
	showcontent:null,
	initialize: function(){

		this.model = new app.data.models.crearSeccionModel();
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


		/*form.find('select').on('change', function() {
    	 	log($(this).val());
    	 	log($(this).find('option:selected').val());
		});*/

		var model = this.model;
		$(this.el).find('.btnCrear').click(function(e){
			//e.preventDefault();
			var nombre = form.find('input#nuevoNombreSeccion').val();
			var active = ( uiactive.prop('checked')) ? 1 : 0;
			var toMain = ( uitomainmenu.prop('checked')) ? 1 : 0;
			var showcontenidos = ( showcontent.prop('checked')) ? 1 : 0;
			var toMainName = tomainname.find('input').val();
			var order = form.find('input#nuevoOrder').val();
			var type = form.find('option:selected').attr('value');
			if(order=='')order=0;

			model.crearSeccion(nombre,active,toMain,toMainName,order,type,showcontenidos);
		});

	},

	onSectionChange : function(seccion){
		console.log("SECTION CHANGE",seccion);

		var ui = $(this.el);
		var form = ui.find('form');
		var tomainname = form.find('div.nameinmain');		

		//si no hay seccion, es una seccion de root
		if(!seccion){
			this.uitomainmenu.removeAttr('disabled');
			tomainname.hide();
			ui.find('.nombreSeccion').text('');
			ui.find('.pathSeccion').text('');
		}
		else
		{
			ui.find('.pathSeccion').append(' > Nuevo Nombre');

			if(seccion.level == 0)
			{
				this.uitomainmenu.attr('disabled',true);//los hijos no van al main menu
				tomainname.hide();
			}
			else this.uitomainmenu.removeAttr('disabled');
		}
	},


	show:function(){

		var ui = $(this.el);
		var form = ui.find('form');
		var tomainname = form.find('div.nameinmain');

		this.showcontent.prop('checked',false);
		this.uiactive.prop('checked',true);
		this.uitomainmenu.prop('checked',false);
		form.find('input#nuevoNombreSeccion').val('');
		this.uitomainmenu.find('input').val('');
		form.find('input#nuevoOrder').val('');
		form.find('option#odefault').prop('selected',true);

		ui.show();
	}
});