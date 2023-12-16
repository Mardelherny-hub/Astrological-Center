app.view.sections.absContenido = app.Section.extend({

	listeners : function(){

		this.listenTo(this.model, "change:seccion", function(){
			var  seccion = this.model.get('seccion');

			if(seccion)
			{
				this.updateSection(seccion);
				this.onSectionChange(seccion);
			}
			else this.onSectionChange(null);

		});
	},
	onSectionChange : function(){
		//SOBREESCRIBIR
	},
	updateSection : function(seccion){
		var ui = $(this.el);
		ui.find('.no-detail').removeClass('no-detail');
		//app.logger.log(seccion);
		if(seccion.details==null){
			ui.find('.nombreSeccion').addClass('no-detail');
			ui.find('.nombreSeccion').text(seccion.referenceName);
		}else{
			ui.find('.nombreSeccion').text(seccion.details.name);
		}

		app.logger.log('updateSection',seccion);

		//if(!seccion.path)return;
		var pathArr = seccion.path.split('/');
		var str='';
		for(var key in pathArr){
			str+=pathArr[key];
			if(pathArr[key]!=pathArr[pathArr.length-1])str+=" > ";
		}

		ui.find('.pathSeccion').text(str);
	}

	/*,onEmptySection : function(){
		//sobreercribir
	}*/
});