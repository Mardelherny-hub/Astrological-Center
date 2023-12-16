$('body').ready(function(){
	
		
		 $('input#switch-state').bootstrapSwitch();	
		 
		 //lo usa Editar Popuptmb
		 $(".pick-a-color").pickAColor({
			  showSpectrum            : true,
				showSavedColors         : true,
				saveColorsPerElement    : true,
				fadeMenuToggle          : true,
				showAdvanced						: true,
				showBasicColors         : true,
				showHexInput            : true,
				allowBlank							: true,
				inlineDropdown					: true
			});
		 
		
		 $('.btn-popover').popover({
			 container:'body',
			 placement:'top',
			 trigger:'hover'
		 });
			
	
	//console.log($('#datetimepicker5'));
});