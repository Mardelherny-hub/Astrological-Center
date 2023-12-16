$('body').ready(function(){	
		
	 $('input#switch-state').bootstrapSwitch();
	 var allowSubmit = false;
	 $('form').submit (function(event) {
			 if(!allowSubmit){
				 	event.preventDefault();
				 	allowSubmit = true;
					$('form').find('button').prop('disabled','disabled');
					$('form').submit();
			 }			
		});
		 
});