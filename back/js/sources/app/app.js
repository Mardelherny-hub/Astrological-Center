
app.Router = Backbone.Router.extend({

	routes : {
		":query(/*params)" : "hashChange", // #search/kiwis/p7
		"" : "hashChange"
	},

	hashChange : function(section, url) {

		var route = [];
		var params;// = {};
		var hash;
		if (url)hash= url.split('?');

		if(hash && hash.length>1){
			eval('params={'
					+ hash[1].replace(/=/g, ':\'').replace(/&/g, '\',')
					+ '\'}');
		}

		//if (url)route = url.split('/');
		if (hash)route = hash[0].split('/');

		if(section==undefined)section='home';
		app.logger.log('ROUTER --> ',"S: ", section,"-R: ", route,"-P: ",params);
		app.Address.hashChange(section,route,params);
	}

});


var siteModel = new app.data.models.siteModel();

$(function() {
	app.router = new app.Router();

	//console.log(app.error);
	//SECCIONES QUE MANEJA VIEWCONTROLLERMODEL

	var sectionManagerModel = new app.models.SectionManagerModel();
	app.Address.register(sectionManagerModel);

	sectionManagerModel.registerSections(new app.view.sections.Home(), 'home');
	sectionManagerModel.registerSections(new app.view.sections.Error(), 'error');
	sectionManagerModel.registerSections(new app.view.sections.OpcionesSeccion(), 'opciones-de-seccion');
	sectionManagerModel.registerSections(new app.view.sections.EditarSeccion(), 'editar-seccion');
	sectionManagerModel.registerSections(new app.view.sections.BorrarSeccion(), 'borrar-seccion');
	sectionManagerModel.registerSections(new app.view.sections.CambiarOrdenSeccion(), 'ordenar-secciones');
	sectionManagerModel.registerSections(new app.view.sections.CrearSeccion(), 'crear-seccion');

	sectionManagerModel.registerSections(new app.view.sections.CrearContenido(), 'crear-contenido');
	sectionManagerModel.registerSections(new app.view.sections.VerContenidos(), 'ver-contenidos');
	sectionManagerModel.registerSections(new app.view.sections.EditarContenido(), 'editar-contenido');
	sectionManagerModel.registerSections(new app.view.sections.BorrarContenido(), 'borrar-contenido');
	
	sectionManagerModel.registerSections(new app.view.sections.Popup(), 'popups');
//	sectionManagerModel.registerSections(new app.view.sections.Articulo(), 'article');



	//COMPONENTES QUE REACCIONAN AL HASH
	//var menu = new app.view.Menu({model:siteModel});
	var menuLateral = new app.view.MenuLateral({model:siteModel});
	//app.Address.register(siteModel);

	siteModel.bind('change',startSite);
	siteModel.loadSite();

	new app.view.menuIdiomas();

});

function startSite(){
	siteModel.unbind('change',startSite);
	Backbone.history.start();
	log('start');
}

function log(){
	var e = 'console.log(\'Log->\',';

	for ( var x = 0; x < arguments.length; x++) {
		e += 'arguments[' + x + '],';
	}
	eval(e.replace(/,$/, ')'));
}