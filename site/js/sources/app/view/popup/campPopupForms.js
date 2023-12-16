app.view.campPopupForms = app.View.extend({
	el:'div#popup',
	opened:false,
	initialize: function() {
		var ui = $(this.el);

		this.model = new app.data.models.campPopupModel();
		this.listenTo(this.model, "change:camp", this.loadPopup);	
		this.listenTo(this.model, "change:closepopup", this.closepopup);

	},
	closepopup : function(){
		if(this.opened == true){
			$('.modal').modal('hide');
		}
	},
	loadPopup : function(){
		//console.log('HERE');
		var self = this;
		var camp = this.model.get('camp');
		var file;
		console.log('camp.evento.tipoEvento_idTipo',camp.evento.tipoEvento_idTipo);
		switch(Number(camp.evento.tipoEvento_idTipo)){
			case 1:file='forms/cineclub';break;
			case 2:file='forms/reservas';break;
			case 3:
			case 4:file='forms/charlas';break;
			case 5:
			case 6:file='forms/consultas';break;
		}
		$( this.el).load( "popup/load.php?file="+file,function(){
			self.onLoaded($('#formsModal'));
		});
	},
	onLoaded:function($obj){
		var self = this;
		
		var camp = this.model.get('camp');
		$obj.find('.titulo').text(camp.evento.titulo);
		$obj.find('.subtitulo').text(camp.evento.subtitulo);
		$obj.find('.fecha').text(camp.evento.fechaStr);
		$obj.find('.panel-body').html(Utils.db64ToText(camp.evento.texto));
		//$obj.find('.panel-body').text(camp.evento.texto);
		//console.log(camp);
		$obj.find('.close').click(function(){
			self.model.set('closepopup',true);
			//console.log('closepopup');
		});
		
		$obj.on('hidden.bs.modal', function (e) {
			  if(self.model.get('redirect') == true){
				  var camp = self.model.get('camp');
				  Url.setHash(camp.redirec);
			  }
			  else Url.setHash('#/home');
			});
			
		self.opened = true;
				
		var ui = $(this.el);
		ui.find("form").validate(Validation.validate(ui.find("form"),function(form){
			
			self.model.send(form);    
			return false;

		}));
	
		this.model.setModal($obj);
	}

});
