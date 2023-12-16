// this is the id of the form
/*$("#sendnewsletter").submit(function(e) {

    var url = "../php/sendNewsletter.php"; // the script where you handle the form input.

    $.ajax({
           type: "post",
           url: url,
           data: $("#sendnewsletter").serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});*/

$(document).ready(function(){
  $("#footer_submit").click(function(){

    var email = $("#footer_email").val();


    // Returns successful data submission message when the entered information is stored in database.
    var dataString = '&email='+ email;
    if(email=='')
    {
      $('#msgFooterNewsletter').text('Ingresa tu Email')
      $('#msgFooterNewsletter').css('color','red')
    }
    else
    {
      // AJAX Code To Submit Form.
      $.ajax({
          type: "POST",
          url: "php/sendnewsletter.php",
          data: dataString,
          cache: false,
          success: function(result){
            //alert(result);
            /*$('#msgFooterNewsletter').css('color','green')
            $('#msgFooterNewsletter').text('Mail Enviado')*/
            //window.location.replace("http://centroastrologico.com.ar/autoreplynewsletter.php");
            $(location).attr('href', 'http://aztlan.org.ar/autoreplynewsletter.php')
          }
        });
    }
    return false;
  });
});

$(document).ready(function(){
  $("#rside_submit").click(function(){

    var email = $("#rside_email").val();


    // Returns successful data submission message when the entered information is stored in database.
    var dataString = '&email='+ email;
    if(email=='')
    {
      $('#msgRsideNewsletter').text('Ingresa tu Email')
      $('#msgRsideNewsletter').css('color','red')
    }
    else
    {
      // AJAX Code To Submit Form.
      $.ajax({
          type: "POST",
          url: "php/sendnewsletter.php",
          data: dataString,
          cache: false,
          success: function(result){
            //alert(result);
            /*$('#msgRsideNewsletter').css('color','green')
            $('#msgRsideNewsletter').text('Mail Enviado')*/
            //window.location.replace("http://centroastrologico.com.ar/autoreplynewsletter.php");
            $(location).attr('href', 'http://aztlan.org.ar/autoreplynewsletter.php')
          }
        });
    }
    return false;
  });
});