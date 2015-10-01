$(document).ready(function() {
$("#verifica").click(function() {
    
    email = $("#mail").val();
    senha = $("#senha").val();
    
    alert(email);
    alert(senha);
    
    $.ajax({
        type:  'post',
        data:  'email='+email+'&senha='+senha,
        url:   'http://localhost/testephp/verifica',
        success: function(acesso){
            if(acesso){
                window.location="http://localhost/testephp/painel";
            }else{
                alert('Acesso negado');
            }

        }
    });    
});
});
        