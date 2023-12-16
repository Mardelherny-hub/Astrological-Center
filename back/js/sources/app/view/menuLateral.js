app.view.MenuLateral = app.View.extend({
	el:'div#menuLateral',
	sectionPopover:null,
	currentSection:null,
	currentSub:null,

	render:function(){
		//this.model.set('seccionActiva');
		//this.model.set('subActiva');
		$(this.el).empty();
		var btn = $('<button class="btn btn-warning" id="btnCrearRootSection">CREAR SECCION</button>');
		$(this.el).append(btn);


		var s;
		var subs;
		var li;
		var li2;
		var ul;
		var d;
		var a;
		var menu = $('<ul class="list-unstyled">');
		$(this.el).append(menu);

		var site = this.model.get('site');

		for(var i=0;i<site.length;i++)
		{
			s = site[i];

				var spanIcon = '<span class="btnEditSection glyphicon glyphicon-edit">';
				//console.log(s);
				li = $('<li class="mainMenuBtn rootBtn">');

				li.append(spanIcon);
				menu.append(li);
				d = $('<div>');
				a = $('<a>');
				a.attr('href',Utils.resolveRef(s.type,s.path));
				if(s.details){
					a.append(s.details.name);
					if(s.details.active==0)li.addClass('inActive');
				}
				else{
					li.addClass('no-detail');
					a.append(s.referenceName);
					//if(s.active==0)li.addClass('inActive');
				}
				li.append(d);
				d.append(a)
				li.attr('id',s.furl);
				if(s.sections.length)
				{
					ul = $('<ul class="list-unstyled">');
					li.append(ul);
					for(var j=0;j<s.sections.length;j++)
					{
						subs = s.sections[j];
						li2 = $('<li class="mainMenuBtn subBtn">');
						if(subs.details && subs.details.active==0)li2.addClass('inActive');
						li2.append(spanIcon);
						ul.append(li2);
						d = $('<div>');
						li2.append(d);
						a = $('<a>');
						a.attr('href',Utils.resolveRef(subs.type,subs.path));
						if(subs.details)a.append(subs.details.name);
						else{
							li2.addClass('no-detail');
							a.append(subs.referenceName);
						}
						//a.append(subs.name);
						d.append(a);
						li2.attr('id',subs.furl);
					}

				}
			}

		var self = this;
		/*
		menu.find('li.rootBtn').children('div').click(function(e){
				e.stopPropagation();
				e.preventDefault;
				self.model.set('seccionActiva',$(this).parent());
				self.model.set('subActiva',null);
		});

		menu.find('li.subBtn').children('div').click(function(e){
			e.stopPropagation();
			e.preventDefault;
			self.model.set('subActiva',$(this).parent());
		});*/


		btn.click(function(){
			Url.setHash("#/crear-seccion/0");
		});

		menu.find('span.btnEditSection').click(function(){
			var href =  $(this).parent().children('div').children('a').attr('href');
			Url.setHash(href);
		});

		this.updateSectionActiva();
		this.updateSubActiva();
	},
	initialize: function() {

		this.sectionPopover = $('.sectionPopover');
		this.sectionPopover.remove();

	    this.listenTo(this.model, "change:site", this.render);
	    this.listenTo(this.model, "change:seccionActiva", this.updateSectionActiva);
	    this.listenTo(this.model, "change:subActiva", this.updateSubActiva);
	    this.listenTo(this.model, "change:currentContents", this.updateCurrentContents);//para mostrar articulos
	    this.listenTo(this.model, "change:articulo", this.updateArtActivo);
	},
	updateArtActivo : function(){
		var art = this.model.get('articulo');		
		var articulos = this.currentSection.find('ul.articulos');
		articulos.find('.active').removeClass('active');
		if(art==null)return;
		articulos.find('#'+art.n).addClass('active');
	},
	updateCurrentContents : function(){	
		
		var contents = this.model.get('currentContents');
		var currentSection = $(this.el).find('li#'+contents.id);
		currentSection.find('ul.articulos').remove();
		var ul = $('<ul class="articulos list-unstyled">');
		var li,d,a;
		var key,content;		
		for(key in contents.contents){
			content = contents.contents[key];			
			
			li = $('<li class="mainMenuBtn">');
			ul.append(li);
			d = $('<div>');
			li.append(d);
			a = $('<a>');
			a.attr('href',Utils.resolveRef(content.type,content.path,true));
			if(content.details){
				a.append(content.details.titulo);
			}
			else{
				a.append(content.referenceName);
				li.addClass('no-detail');
			}
			d.append(a);
			li.attr('id',content.furl);			
		}
		currentSection.append(ul);
		
		
		ul.find('li').click(function(e){
			e.stopPropagation();
			var href = $(this).children('div').children('a').attr('href');
			Url.setHash(href);
		});
		
		
	},
	updateSectionActiva : function(){
		if(this.currentSection){
			this.currentSection.removeClass('active');
			//por si tiene articulos
			this.currentSection.children('ul.articulos').remove();			
		}
		var current = this.model.get('seccionActiva');
		this.currentSection = $(this.el).find('li#'+current);
		this.currentSection.addClass('active');
	},
	updateSubActiva : function(){
		if(this.currentSub){
			this.currentSub.removeClass('active');
			//por si tiene articulos
			this.currentSub.children('ul.articulos').remove();
		}
		var current = this.model.get('subActiva');
		this.currentSub = $(this.el).find('ul>li>ul>li#'+current);
		this.currentSub.addClass('active');
	}
});