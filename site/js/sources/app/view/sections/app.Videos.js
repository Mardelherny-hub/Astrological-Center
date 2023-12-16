app.view.sections.Videos = app.Section.extend({
	el:'#videos-section',
	contenedor:null,//ui
	template:null,
	ulcont:null,
	initialize: function(){

		this.model = new app.data.models.videosModel();
		this.model.onRegister();

		var ui = $(this.el);
		this.template = ui.find('div.artVideo');
		this.template.remove();

		this.contenedor = ui.find('div.tab-content');
		this.ulcont = ui.find('ul.nav-tabs');

		this.listenTo(this.model, "change:parent", this.renderTab);
		this.listenTo(this.model, "change:seccion", this.renderSeccion);
		this.listenTo(this.model, "change:contenidosView", this.renderVideos);

		/*
		this.listenTo(this.model, "change:contenidosView", this.renderArt);
		this.listenTo(this.model, "change:seccion", this.renderSeccion);
		this.listenTo(this.model, "change:parent", this.renderParent);
		this.listenTo(this.model, "change:forClean", this.clean);
		*/

	},
	clean : function(){
		this.contenedor.empty();
	},
	renderTab:function(){
		this.contenedor.empty();
		this.ulcont.empty();

		var seccion = this.model.get('parent');
		for(var sub in seccion.sections){
			var sec = seccion.sections[sub];
			var tab = $('<li class=""><a idt="'+sec.furl+'" href="'+Utils.resolveRef(4,sec.path)+'" >'+sec.details.name+'</a></li>');
			this.ulcont.append(tab);
		}

		$('#myTab a').click(function (e) {
			  e.preventDefault();
			  Url.setHash($(this).attr('href'));
			 // $(this).tab('show');
			});

	},

	renderSeccion:function(){
		this.contenedor.empty();
		var seccion = this.model.get('seccion');
		//log("RSEC",seccion,$(this.el).find('a[idt='+seccion.furl+']'));
		$(this.el).find('li.active').removeClass('active');
		$(this.el).find('a[idt='+seccion.furl+']').parent().addClass('active');

	},
	renderVideos : function(){
		this.contenedor.empty();

		var contents = this.model.get('contenidosView');
		for (var key in contents){
			var content = contents[key];
			var video = this.template.clone();
			video.find('.titulo').text(content.titulo);
			video.find('.descripcion').html(content.details.descripcion);
			video.find('.descripcion').find('iframe').width('100%');
			video.find('.descripcion').find('iframe').addClass('ytvideo');
			video.find('.descripcion').find('iframe').attr('src',video.find('.descripcion').find('iframe').attr('src') + '&wmode=transparent');
			
			//video.find('.descripcion').find('iframe').height('500px');
			this.contenedor.append(video);
		}
		$(window).resize();//para heigth de videos
	}

});