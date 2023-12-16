(function(app) {

	app.data.DataController = {

	section:{

		update : function(section,callback){
			var params = {
						data:section,
						url : '../services/section/updateSection/index.php',
					success : function(data) {
						callback(app.data.PersistentData.parse(data));
					}
				};
				app.data.Request.post(params);
		},

		crearSeccion : function(section,callback){
			var params = {
						data:section,
						url : '../services/section/create/index.php',
					success : function(data) {
						callback(app.data.PersistentData.parse(data));
					}
				};
				app.data.Request.post(params);
		},

		borrar : function(section,callback){
			var params = {
						data:section,
						url : '../services/section/deleteSection/index.php',
					success : function(data) {
						callback(app.data.PersistentData.parse(data));
					}
				};
				app.data.Request.post(params);
		},

		getOrden : function(section,callback){
			var params = {
						data:section,
						url : '../services/section/getOrders/index.php',
					success : function(data) {
						callback(app.data.PersistentData.parse(data));
					}
				};
				app.data.Request.post(params);
		},

		cambiarOrden : function(sectiones,callback){
			var params = {
						data:{
							secciones:sectiones
						},
						url : '../services/section/changeOrder/index.php',
					success : function(data) {
						callback(app.data.PersistentData.parse(data));
					}
				};
				app.data.Request.post(params);
		}



	},

	contenido:{

		crearContenido : function(content,callback){
			var params = {
						data:content,
						url : '../services/content/create/index.php',
					success : function(data) {
						callback(app.data.PersistentData.parse(data));
					}
				};
				app.data.Request.post(params);
		},

		getContentsBySection : function(idSection,callback){
			var params = {
					data:{idSection:idSection},
					url : '../services/content/getContentsBySection/index.php',
				success : function(data) {
					callback(app.data.PersistentData.parse(data));
				}
			};
			app.data.Request.post(params);
		},

		getContent : function(query,callback){
			var params = {
					data:{idContent:query.idContent,
						idSection: query.idSection},
					url : '../services/content/getContent/index.php',
				success : function(data) {
					callback(app.data.PersistentData.parse(data));
				}
			};
			app.data.Request.post(params);
		},

		borrar : function(cid,callback){
			var params = {
					data:{idContent:cid},
					url : '../services/content/delete/index.php',
				success : function(data) {
					callback(app.data.PersistentData.parse(data));
				}
			};
			app.data.Request.post(params);
		},

	},

	idioma:{
		get: function(callback){
			var params = {
					url : '../services/idioma/getIdioma/index.php',
				success : function(data) {
					callback(app.data.PersistentData.parse(data));
				}
			};
			app.data.Request.post(params);
		},
		set: function(idioma,callback){
			var params = {
					data:{idioma:idioma},
					url : '../services/idioma/setIdioma/index.php',
				success : function(data) {
					callback(app.data.PersistentData.parse(data));
				}
			};
			app.data.Request.post(params);
		}
	},
	
	popups : {
		getAll: function(callback){
			var params = {					
					url : '../services/popups/getAll/index.php',
				success : function(data) {
					callback(app.data.PersistentData.parse(data));
				}
			};
			app.data.Request.post(params);
		},
		setAll: function(thepopups,callback){
			var params = {
					data:{popups:thepopups},
					url : '../services/popups/setAll/index.php',
				success : function(data) {
					callback(app.data.PersistentData.parse(data));
				}
			};			
			app.data.Request.post(params);
		}
	},

	app : {
		init : function(callback) {
			var params = {
				url : '../services/getSite/index.php',
				success : function(data) {
					callback(app.data.PersistentData.parse(data));
				}
			};
			app.data.Request.post(params);
		},

		getArticles : function(params,callback){
			var params = {
					url : '../services/getArticlesBySection/index.php',
					data: params,
					success : function(data) {
						callback(app.data.PersistentData.parse(data));
					}
				};
				app.data.Request.post(params);
			}
		}


	};

})(window.app);