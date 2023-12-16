Popup = {
	el:'div#popup',
	opened:false,
	self:this,
	initialize: function() {	
		app.data.DataController.app.getPopups(function(data){
			Popup.loadPopup(data);
		});
	},
	closepopup : function(){
		if(this.opened == true){
			$('.modal').modal('hide');
		}
	},
	loadPopup : function(data){
		/*var idioma = this.model.get('idioma');
		if(idioma.idIdioma !=1)return;*/
		var popup = data.popup;
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
		$( this.el).load( "site/popup/load.php?file=cineclub",function(){
			Popup.onLoaded($('#cineclubModal'));
		});
	},
	loadEvento : function(){
		$( this.el).load( "site/popup/load.php?file=evento",function(){
			Popup.onLoaded($('#eventoModal'));
		});
	},
	loadCineclubMensual : function(){
		$( this.el).load( "site/popup/load.php?file=cineclubMensual",function(){
			Popup.onLoaded($('#cineclubMensualModal'));
		});
	},
	onLoaded:function($obj){

		var self = this;
	//	this.model.register();//a partir de ahora toma el hash
		$obj.modal();
		$obj.on('shown.bs.modal', function (e) {
			$(window).resize();//para el video
			$obj.animate({ scrollTop: 0 }, 'slow');
			 self.opened = true;
		});
		$obj.on('hidden.bs.modal', function (e) {
			//kill video
			 self.opened = false;
			// self.model.unregister();
		});

	}

};
