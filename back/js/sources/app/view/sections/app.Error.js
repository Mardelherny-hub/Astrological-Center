app.view.sections.Error = app.Section.extend({

	el:'#error',
	resolveHash : function(route) {
		console.log('app.error:resolveHash() ', route);
	},
	render:function(){
		//$(this.el).empty();
		//$(this.el).append('ERROR');
	}
});