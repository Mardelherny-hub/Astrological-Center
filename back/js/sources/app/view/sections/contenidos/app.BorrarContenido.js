app.view.sections.BorrarContenido =app.view.sections.absContenido.extend({
	el:'#borrar-contenido',
	initialize: function(){

		this.model = new app.data.models.borrarContenidoModel();
		this.model.onRegister();

		this.listeners();

		this.listenTo(this.model, "change:contenidosView", this.onContenidosChange);
		var model = this.model;
		$(this.el).find('.btnBorrar').click(function(){

			model.borrar();
		});

	},

	onContenidosChange : function(){
		var content = this.model.get('contenidosView')[0];
		//app.logger.log("CONTENIDOS CHANGE",contents);

		console.log("CONTENIDOS CHANGE",content);

		var ui = $(this.el);
		ui.find('.no-detail').removeClass('no-detail');

		var uic = ui.find('.contenido');

		if(content.details == null){
			uic.addClass('no-detail');
			ui.find('.titulo').text('Sin detalle');
			uic.find('.descripcion').html('Sin detalle');
		}
		else{
			ui.find('.titulo').text(content.titulo);
			uic.find('.descripcion').html(content.descripcion);
		}

		if(content.img !=''){
			var align = Utils.resolveImgAlign(content.imgAlign);
			var $img = $('<img class="' + align +'" src="../images/thumbs/'+ content.img +'" >');
			uic.find('.descripcion').prepend($img);
		}

		ui.show();
	},
	hide : function(){
		this.model.clean();
		$(this.el).hide();
	},
	show:function(){
		//this.model.	resolveParams();
		//var ui = $(this.el);
		//ui.show();
		//this.model.reloadonShow();
	}
});