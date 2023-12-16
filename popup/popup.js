$(function() {
    $(window).load(function() {
        $('#overlay').fadeIn('fast',function(){
            $('#box').animate({'top':'160px'},500);
        });
    });
    $('#boxclose').click(function(){
        $('#box').animate({'top':'-1000px'},500,function(){
            $('#overlay').fadeOut('fast');
        });
    });

});