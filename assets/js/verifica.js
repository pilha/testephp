$(document).ready(function() {
    $("#verifica").click(function() {
        email = $("#email").val();
        senha = $("#senha").val();
        $.ajax({
            type:  'post',
            data:  'email='+email+'&senha='+senha,
            url:   'http://localhost/testephp/welcome/verificar',
            success: function(acesso){
                 if(acesso==1){
                    window.location="http://localhost/testephp/welcome/painel";
                }else{
                    $("#negado").html('<h3>Acesso negado</h3>');
                }
            }
        });    
    });
});
        