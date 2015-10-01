$(document).ready(function() {
$("#verifica").click(function() {
    
    email = $("#email").val();
    senha = $("#senha").val();
    
    //alert(email);
    //alert(senha);
    
    $.ajax({
        type:  'post',
        data:  'email='+email+'&senha='+senha,
        url:   'http://localhost/testephp/welcome/verificar',
        success: function(acesso){
           // alert(acesso);
            if(acesso){
                window.location="http://localhost/testephp/welcome/painel";
            }else{
                alert('Acesso negado');
            }

        }
    });    
});
});
        