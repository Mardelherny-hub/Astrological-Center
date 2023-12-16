app.view.menuIdiomas = app.View.extend({
	el:'ul#menuIdiomas',

	initialize: function() {
		this.model = new app.data.models.idiomaModel();
	    this.listenTo(this.model, "change:currentIdioma", this.currentIdioma);
	    this.listenTo(this.model, "change:idiomas", this.render);
	    this.model.getIdiomas();
	},
	currentIdioma : function(){

		var idioma = this.model.get('currentIdioma');
		log("IDOIMA",idioma);
		$(this.el).find('.active').removeClass('active');
		$(this.el).find("a[idi='"+idioma.idioma+"']").addClass('active');
	},
	render:function(){

		$(this.el).empty();

		var idiomas = this.model.get('idiomas');

		for(var i=0;i<idiomas.length;i++)
		{
			var id = idiomas[i];
			$(this.el).append(' <li><a href="#" class="btnIdioma" idi="'+id.idioma+'">'+id.nombre+'</a></li>');
		}

		var self = this;

		$(this.el).find('.btnIdioma').click(function(e){
			//Url.setHash("#/crear-seccion/0");
			e.preventDefault();
			self.model.setIdioma($(this).attr('idi'));
		});
		//this.currentIdioma();
	}
});