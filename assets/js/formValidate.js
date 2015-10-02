/* 
 * Validação dos campos do formulário
 */
$(document).ready(function () {
    $("#formLogin").click(function () {
        
        
    });
    
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
      });
      $( "#formLogin" ).validate({
        rules: {
            email: {
              required: true,
              email: true
            }
          },
          messages: {
            email: {
              required: "",
              email: "Your email address must be in the format of name@domain.com"
            }
          }
      });
    
    $("#formLogin input").blur(function(){
        $("#email").mask("99/99/9999");
     if($(this).val() == "")
         {
             $(this).css({"border-color" : "#D86400", "padding": "2px"});
             $(this).before("<span class='notify'>Campo Obrigatório</span>").slideDown('last');
             return false;
         }
    });
    
});

