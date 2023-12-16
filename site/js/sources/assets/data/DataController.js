(function(app) {

	app.data.DataController = {
	app : {	

		setConsulta : function(parametros,callback){
			parametros.active = true;
			var params = {
					url : 'services/setConsulta/index.php',
					data: parametros,
					success : function(data) {
						callback(app.data.PersistentData.parse(data));
					}
				};
				app.data.Request.post(params);
		},
	
		getPopups: function(callback){
			var params = {					
					url : 'services/popups/getActives/index.php',
				success : function(data) {
					callback(app.data.PersistentData.parse(data));
				}
			};
			app.data.Request.post(params);
		},
	},
	
	camp: {
		getCamp : function(parametros,callback){		
			var params = {
					url : 'services/camp/getCamp/index.php',
					data: parametros,
					success : function(data) {
						callback(app.data.PersistentData.parse(data));
					}
				};
				app.data.Request.post(params);
		},
		insertCamp : function(parametros,callback){		
			var params = {
					url : 'services/camp/insertCamp/index.php',
					data: parametros,
					success : function(data) {
						callback(app.data.PersistentData.parse(data));
					}
				};
				app.data.Request.post(params);
		}
	},
	idioma:{
		get: function(callback){
			var params = {
					url : 'services/idioma/getIdioma/index.php',
				success : function(data) {
					callback(app.data.PersistentData.parse(data));
				}
			};
			app.data.Request.post(params);
		},
		set: function(idioma,callback){
			var params = {
					data:{idioma:idioma},
					url : 'services/idioma/setIdioma/index.php',
				success : function(data) {
					callback(app.data.PersistentData.parse(data));
				}
			};
			app.data.Request.post(params);
		}
	},

};

})(window.app);