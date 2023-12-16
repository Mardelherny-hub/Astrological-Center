Utils = {
		timestp : function(){
			return new Date().getTime();
		},
		resolveImgAlign : function(n){
			switch(Number(n)){
				case 0:return "img-left";
				case 1:return "img-middle";
				case 2:return "img-right";
				case 3:return "img-bottom";
				case 4:return "img-super-left";
				case 5:return "img-super-right";
			}
		},
		resolveRef : function(sectionType,ref,isContent)
		{
			if(isContent) return '#/editar-contenido/' + ref;
			return '#/opciones-de-seccion/' + ref;
		},

		to64 : function ($text)
		{
			return $.base64.encode($text);
		},

		db64ToText : function ($text)
		{
			return $.base64.decode($text);
		},

		db64ToPreviewText : function ($text,$cant)
		{
			return Utils.shortStr($.base64.decode($text),$cant);
		},

		shortStr : function($text,$cant){
			if(!$cant)$cant=250;
			$cant = Math.min($cant,$text.length);
			return $text.substr(0,$cant);
		},
		addFirstLarge : function($text){
			var f = $text.substr(0,1);
			$text = '<h4>'+f.touppercase()+'</h4>' + $text;
			return $text;
		},

		validateNumber : function (evt) {

			  var theEvent = evt || window.event;
			  var key = theEvent.keyCode || theEvent.which;

			  if(theEvent.keyCode == 8)return true;//for delete

			  key = String.fromCharCode( key );

			  var regex = /[0-9]|\./;
			  if( !regex.test(key) ) {
			    theEvent.returnValue = false;
			    if(theEvent.preventDefault) theEvent.preventDefault();
			  }
		},

		CKupdate : function (){
			for ( instance in CKEDITOR.instances )
				{
					CKEDITOR.instances[instance].updateElement();
				    CKEDITOR.instances[instance].setData('');
				}
		}

}

// static class Encode

function Encode() {
}

Encode.encode = function(t) {
	return t.replace(/[^a-z0-9_\/]+/gi, '_');
};

Encode.friendlyUrl = function(url) {
	url = '#!' + this.encode(url) + '.html';
	return url;
};
// end static class Encode


function Url(){}

Url.setHash = function($hash){
	window.location.hash = $hash;
};

Url.reload = function(){
	window.location = 'index.html';
};

