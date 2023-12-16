app.view.sections.EditarContenido =app.view.sections.absContenido.extend({
	el:'#editar-contenido',
	uiactive:null,
	uploadImage:null,
	initialize: function(){

		this.model = new app.data.models.editarContenidoModel();
		this.model.onRegister();

		this.listeners();

		this.listenTo(this.model, "change:contenidosView", this.onContenidosChange);

		var ui = $(this.el);
		var form = ui.find('form');
		this.uiactive = form.find('div.checkbox.toactive').find('input');
		var uiactive = this.uiactive;

//		form.find('div.checkbox').find('input').on('click', function() {
//			var ui = $(this);
//		     if(ui.attr('checked'))ui.removeAttr('checked');
//		     else ui.attr('checked', true);
//		});

		this.uploadImage = new UploadImage();

		var model = this.model;
		var self = this;
		$(this.el).find('.btnEditar').click(function(){

			var titulo = form.find('input#newtitulo').val();
			var SEO_desc = form.find('textarea#SEO_editorEditar').val();
			log('uiactive.val()',uiactive.val());
			var active = ( uiactive.prop('checked')) ? 1 : 0;
			var order = form.find('input#newOrder').val();
			if(order=='')order=0;
			var img =  self.uploadImage.getImageData();
			var thumb =  self.uploadImage.getThumbData();
			var align = form.find('input[name=optionsRadios]:radio:checked').val();
			if(!align)align=0;

			//log(align);return;

			var contenido = {};
			contenido.details = {};
			contenido.details.title = titulo;
			contenido.details.description = CKEDITOR.instances['editorEditar'].getData();
			contenido.details.SEO_desc = SEO_desc;
			contenido.details.active = active;
			contenido.order = order;
			contenido.img = img;
			contenido.thumb = thumb;
			contenido.align = align;

			model.updateContenido(contenido);
		});

	},

	onContenidosChange : function(){
		var content = this.model.get('contenidosView')[0];
		//app.logger.log("CONTENIDOS CHANGE",contents);

		console.log("CONTENIDOS CHANGE",content);

		var ui = $(this.el);
		var form = ui.find('form');
		ui.find('.no-detail').removeClass('no-detail');

		this.uploadImage.destroy();
		this.uploadImage.addInput(ui.find('input.uploadImage'),ui.find('.targetInputImgSrc'),[200,200]);

		ui.find('.rname').text(content.referenceName);
		form.find('input#newOrder').val(content.orden);
		this.uiactive.prop('checked',false);

		if(content.details){
			if(content.details.activo==1)this.uiactive.prop('checked',true);
			form.find('input#newtitulo').val(content.details.titulo);

			CKEDITOR.instances['editorEditar'].setData(content.details.descripcion);
			form.find('textarea#SEO_editorEditar').val(content.details.SEO_desc);
		}
		else{
			form.addClass('no-detail');
			form.find('input#newtitulo').val('');
			form.find('input#newOrder').val('');
			CKEDITOR.instances['editorEditar'].setData('');
		}

		var align = Utils.resolveImgAlign(content.imgAlign);
		if(content.img !=''){

			var $img = $('<img class="' + align +'" src="../images/thumbs/'+ content.img + "?k="+Utils.timestp() + '" >');
			ui.find('.targetInputImgSrc').append($img);
		}
		else{

		}

		form.find('input[name=optionsRadios]:radio:checked').prop('checked',false);
		form.find('input.'+align).prop('checked',true);

		//form.find('input#aleft').attr('checked',true);
		//Utils.CKupdate();


		ui.show();
	},

	onSectionChange : function(seccion){


	},
	show:function(){
		//this.model.	resolveParams();
		//var ui = $(this.el);
		//ui.show();
		//this.model.reloadonShow();
	},

	hide : function(){
		this.model.clean();
		$(this.el).hide();
	}
});