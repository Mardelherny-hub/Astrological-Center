app.data.models.contactoModel = app.models.SectionModel.extend({
		name:'contactoModel',
		response:null,
	    setConsulta : function(params) {
			var $self = this;

			if(analytics){
				/*woopra.identify({
				    email: params.email,
				    name: params.nombre,
				    tel: params.telefono,
				    isnewsletter:params.newsletter,
				    source: websource,
				}).push();
*/
				var title = (params.newsletter == 1) ? "Newsletter Enviado " : 'Consulta enviada';

				/*woopra.track('pv', {
				    url: window.location.pathname + window.location.hash,
				    title: title
				});*/
			}

			this.url.app.setConsulta(params,function(data){
				//log("ON-RESPONSE");
				$self.set('response',data.consulta);
			});
		}
});