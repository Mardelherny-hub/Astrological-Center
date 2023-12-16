app.view.sections.VerContenidos =app.view.sections.absContenido.extend({
	el:'#ver-contenidos',
	template:null,
	container:null,
	initialize: function(){

		this.model = new app.data.models.verContenidosModel();
		this.model.onRegister();

		var ui = $(this.el);
		this.template = ui.find('.contenido');
		this.container = ui.find('.contenidosContainer');
		this.container.empty();

		this.listeners();
		this.listenTo(this.model, "change:contenidosView", this.onContenidosChange);
	},

	onContenidosChange : function(){
		var contents = this.model.get('contenidosView');
		app.logger.log("CONTENIDOS CHANGE",contents);
		this.container.empty();
		var ui = $(this.el);
		var uic;
		var content;
		var img;
		for(var key in contents){
			content = contents[key];
			uic = this.template.clone();
			uic.find('span.btnEditContent').attr('href','#/editar-contenido/' + content.path + "?o="+content.id);
			uic.find('span.btnDelete').attr('href','#/borrar-contenido/' + content.path + "?o="+content.id);

			if(content.details){
				if(content.details.activo ==0)uic.addClass('inActive');

				uic.find('.titulo').text(content.details.titulo);
				uic.find('.descripcion').html(content.details.descripcion);
				uic.find('.SEO_descripcion').html(content.details.SEO_desc);
			}else{
				uic.addClass('no-detail');
				uic.find('.titulo').text(content.referenceName);
				uic.find('.descripcion').html();
			}

			if(content.img != ''){
				img = $('<img src="../images/thumbs/' + content.img + '?h=' + Utils.timestp() +'" class="' + Utils.resolveImgAlign(content.imgAlign) + '">');
				uic.find('.descripcion').prepend(img);
			}
			app.logger.log(content.img);
			this.container.append(uic);
			this.container.append('<hr>');
		}

		this.container.find('span.btnEdit').click(function(){
			Url.setHash($(this).attr('href'));
		});

		this.container.find('span.btnEdit').click(function(){
			Url.setHash($(this).attr('href'));
		});

		$(this.el).show();
	},
	show:function(){
		//this.container.empty();
		//this.model.reloadonShow();
		//$(this.el).show();
	},
	hide:function(){
		//this.model.clear({silent:true});
		this.model.clean();
		$(this.el).hide();
	}
});