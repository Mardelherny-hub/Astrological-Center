app.view.sections.Home = app.Section.extend({

	el:'#home',
	hasFlash : false,
	initialize : function(){
		
		this.hide();
	},
	render:function(){
		
	},
	
	hide : function(){
		
		$(this.el).hide();
	},
	
	show : function(){
		
		$(this.el).show();
	}
});