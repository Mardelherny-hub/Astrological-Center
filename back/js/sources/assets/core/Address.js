app.Address = {

		subscriptores:[],
		register : function(subscriptor){
			this.subscriptores.push(subscriptor);
		},
		hashChange : function(section,route,params){
			for(subs in this.subscriptores)
				{
					app.logger.log("subscriptor(modelo): ",this.subscriptores[subs].name);
					this.subscriptores[subs].hashChange(section,route,params);
				}
		}
};