function ConvertDDToDMS(D){
	return [0|D, '° ', 0|(D<0?D=-D:D)%1*60, "' ", 0|D*60%1*60, '"'].join('');
}

$.getJSON( "https://cors-anywhere.herokuapp.com/http://api.nginov.com/shared/ws/astro/?lat=-34.61315&lon=-58.37723&out=json", function( data ) {
	var items = [];
	var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
	var planetas = ['Sol','Luna','Mercurio','Venus','Marte','Jupiter','Saturno','Urano','Neptuno','Plutón'];
	var planetasPng = ['sol','luna','mercurio','venus','marte','jupiter','saturno','urano','neptuno','pluton'];
	var signos = ['Aries','Tauro','Géminis','Cancer','Leo','Virgo','Libra','Escorpio','Sagitario','Capricornio','Acuario','Piscis'];
	var grados = [0,30,60,90,120,150,180,210,240,270,300,330,360];
	$.each( data, function( key, val ) {
		if(key='astropositions' && val.positions){
			var fecha = new Date();
			var dia = fecha.getDate()+" de "+(meses[fecha.getMonth()])+" "+fecha.getFullYear();
			var hora = fecha.getHours()+":"+fecha.getMinutes()+":"+fecha.getSeconds();
			$( "#fecha" ).append( dia + ' - ' + hora +' hs. (UT)' );
			for(var i = 0; i< val.positions.length; i++)
			{
				var longitude = parseInt(val.positions[i].longitude);
				var calculo = longitude / 30;
				var grado = grados[parseInt(calculo)]
				var retrograde = '';
				if(val.positions[i].speed<0){
					retrograde = 'R';
				}
					items.push( "<li class='list-group-item' id='" + i + "'><img style='float:left;width:25px;height25px;' src='signs_sources/planetas-regentes/"+ planetasPng[i] +".png'>" + '<p class="n-planetas">' + planetas[i] + '</p>' +  '<figure class="sign_symbol"><img src="img/signs/'+( parseInt(calculo) + 1 ) +'.png"></figure>' + '<p class="n-signos">' +signos[parseInt(calculo)] + '</p><p class="grados">' +ConvertDDToDMS(val.positions[i].longitude - grado) + retrograde +"</p></li>" );
			}
		}
	});

	$( "<ul/>", {
		"class": "list-group",
		html: items.join( "" )
	}).appendTo( "#planetas" );
});