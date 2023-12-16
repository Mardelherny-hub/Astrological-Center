$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 118) {
            $('.site').addClass('fixed');
            $('.menu').addClass('navbar-fixed-top');
         }
         else {
             $('.site').removeClass('fixed');
             $('.menu').removeClass('navbar-fixed-top');
         }
    });

$('body').ready(function(){
		
	if(isMobile.any())$('body').addClass('mobile');
	
	/*var menu = $('#menuLateral');
	menu.find('li').click(function(e){
			e.stopPropagation();
			var href = $(this).children('div').children('a').attr('href');
			Url.go(href);
			
	});*/
	
	$('div#navegacionSignos ul>li').click(function(e){		
		e.stopPropagation();
		var href = $(this).children('a').attr('href');
		Url.go(href);
	});

	
	var menu = $('div#navegacion').children('ul');
	var btns = menu.find('li');
	
	btns.each(function(){
		var ul = $(this).find('ul');
		$(this).attr('h',ul.height());
		ul.height(0);
		ul.show();
		
		$(this).hover(function(){
			//console.log('here');
			var ul = $(this).find('ul');
			ul.height($(this).attr('h'));
		},
		function(){
			//console.log('out');
			var ul = $(this).find('ul');
			ul.height(0);
		});
		
	});
	
	menu.children('li').children('div').click(function(e){
		e.stopPropagation();
		var href = $(this).children('a').attr('href');
		Url.go(href);
		//Url.setHash(href);
	});	
	
	menu.children('li').find('li').click(function(e){
		e.stopPropagation();
		var href = $(this).children('a').attr('href');
		Url.go(href);
		//Url.setHash(href);
	});	

	

	//$('#contents').addClass('inHome');
	$('div.ciz').height($('#contents').height()-200);	
	$(window).resize();//para heigth de videos
	
	
		/*
				   ga('send', 'pageview', {
					   'page': hash,
					   'title': section
					 });

			   }
			   */
	
	
	//sectionManagerModel.registerSections(new app.view.sections.Camp(), 'c');
	//app.router = new app.Router();
	
	Contacto.initialize();
	Contacto.show();
	
/*
	if(loadPopup==true){
		Popup.initialize();
	}
*/

	if(modal==true){
		setTimeout(function(){
			//$('.modal').show();
			$('.modal').modal();
			$('.modal').on('shown.bs.modal', function (e) {
				$(window).resize();//para el video
				$('.modal').animate({ scrollTop: 0 }, 'slow');				
			});
			//console.log('MODAL');
		},delay);
	}

});

//When the window is resized
$(window).resize(function() {

    var $el = $('.ytvideo');
    $el.each(function(){
    	 var w = $(this).parent().width();
    	 $(this).height(w*.60);
    	   // log('w',w);
    });

});

