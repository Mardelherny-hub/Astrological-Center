$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 118) {
            $('.site').addClass('fixed');
            $('.menu').addClass('navbar-fixed-top');
         }
         else {
             $('.site').removeClass('fixed');
             $('.menu').removeClass('navbar-fixed-top');
         }
    });



function addFlash(id,flash){
    console.log("addFlash",id,flash);
    var params = {};
    params.quality = "high";
    params.wmode = "transparent";
    params.allowscriptaccess = "sameDomain"; 
    
    if (swfobject.hasFlashPlayerVersion("9.0.0") && $(window).width()){  
        swfobject.embedSWF(flash,id , "800px", "200px", "9.0.0",null,null,params);         
    }     
}

