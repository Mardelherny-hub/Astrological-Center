app.view.sections.Popup = app.Section.extend({
	el:'#popups',	
	template:null,
	initialize : function(){		
		this.model = new app.data.models.popupModel();	
		
		var ui = $(this.el).find('table').find('tbody');
		this.template = ui.find('.trtemplate');
		ui.empty();

		this.listenTo(this.model, "change:popups", this.onPopupsChange);
		
		var self = this;
		$(this.el).find('button').click(function(){
			var popups = self.model.get('popups');
			var ui = $(self.el).find('table').find('tbody');
			for(var key in popups){
				var popup = popups[key];
				var tr = ui.find('tr#tr-'+popup.idPopup);	
				popup.traker = tr.find('.traker').find('input').val();
				popup.delay = tr.find('.delay').find('input').val();
				popup.active = ( tr.find('.active').find('input').prop('checked') == true) ? 1:0;
			}
			
			self.model.setAll(popups);
		});		
	},
	onPopupsChange:function(){
		var ui = $(this.el).find('table').find('tbody');
		ui.empty();
		var tr;		
		
		var popups = this.model.get('popups');
		
		for(var key in popups){
			var popup = popups[key];
			tr = this.template.clone();
			tr.attr('id','tr-'+popup.idPopup);
			tr.find('.id').text(popup.idPopup);
			tr.find('.nombre').text(popup.nombre);
			tr.find('.type').text(popup.popupType);
			tr.find('.traker').html('<input type="text" value="'+popup.traker+'">');
			tr.find('.active').find('input').prop('checked',(popup.active == 1) ? true : false);
			tr.find('.delay').html('<input type="text" value="'+popup.delay+'">');
			
			ui.append(tr);
		}
		
	},
	
	hide : function(){
		
		$(this.el).hide();
		$('#menuPopups').find('li').removeClass('active');
	},
	
	show : function(){
		
		$(this.el).show();
		$('#menuPopups').find('li').addClass('active');
		this.model.getAll();
	}
});