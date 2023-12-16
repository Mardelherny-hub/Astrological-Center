Utils = {
		urlParams : function(url){
			if(url==null)url = window.location.href;			
			var params;			
			var hash= url.split('?');
			if(hash && hash.length>1){
				eval('params={'
						+ hash[1].replace(/=/g, ':\'').replace(/&/g, '\',')
						+ '\'}');
			}
			return params;
		},
		timestp : function(){
			return new Date().getTime();
		},
	
		serialize : function(obj){
			return $.base64.encode(JSON.stringify(obj));
		},
		unserialize : function(data){
			return JSON.parse($.base64.decode(data));
		}

}


function Url(){}

Url.setHash = function($hash){
	window.location.hash = $hash;
};

Url.reload = function(){
	window.location = 'index.php';
};

Url.go = function(url){
	//log(window.location);return;
	//console.log(window.location);return;
	//console.log(url);return;
	//window.location.pathname = "/aztlanback/es/" + url;// + ".html";
	window.location.href=url;
};
