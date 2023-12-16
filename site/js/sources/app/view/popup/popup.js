app.view.Popup = app.View.extend({
	el:'div#popup',
	initialize: function() {
		var ui = $(this.el);

		this.model = new app.data.models.popupModel();
		this.listenTo(this.model, "change:popup", this.loadPopup);		
		this.model.load();
	},
	loadPopup : function(){
		var idioma = this.model.get('idioma');
		if(idioma.idIdioma !=1)return;
		var popup = this.model.get('popup');
		if(popup == null)return;
		var myfunct;
		var self = this;
		switch(Number(popup.popupType)){
			case 1:
				setTimeout(function(){self.loadCineclub()},popup.delay);
				break;
			case 2:
				setTimeout(function(){self.loadEvento()},popup.delay);
				break;
			case 3:
				setTimeout(function(){self.loadCineclubMensual()},popup.delay);
				break;
		}
	},
	loadCineclub : function(){
		var self = this;
		$( this.el).load( "popup/load.php?file=cineclub",function(){
			self.onLoaded($('#cineclubModal'));
		});
	},
	loadEvento : function(){
		var self = this;
		$( this.el).load( "popup/load.php?file=evento",function(){
			self.onLoaded($('#eventoModal'));
		});
	},
	loadCineclubMensual : function(){
		var self = this;
		$( this.el).load( "popup/load.php?file=cineclubMensual",function(){
			self.onLoaded($('#cineclubMensualModal'));
		});
	},
	onLoaded:function($obj){		
		var self = this;		
		this.model.set('modal', $obj);
		this.model.register();//a partir de ahora toma el hash
		$obj.modal();
		$obj.on('shown.bs.modal', function (e) {
			$(window).resize();//para el video
			$obj.animate({ scrollTop: 0 }, 'slow');
			 self.model.set('opened',true);
		});		

	}

});
