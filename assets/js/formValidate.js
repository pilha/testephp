/* 
 * Validação dos campos do formulário
 */
$(document).ready(function() {
	$(".notify").hide();
	$('#formLogin #email').blur(function(){
		$("form").submit(function () { return false; });
		var sEmail = $("#email").val();
		var emailFilter = /^.+@.+\..{2,}$/;
		var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/;
		if(!(emailFilter.test(sEmail))||sEmail.match(illegalChars)){
			$(".notifyEmail").fadeIn().removeClass("ok").addClass("erro")
			.text('Insira seu e-mail corretamente.');
		}else{
			$(".notifyEmail").slideDown().addClass("ok")
			.text('Perfeito!');
		}
	});
	$('#email').focus(function(){
		$(".notifyEmail.erro").slideUp();
	});
        
        $('#formLogin #senha').blur(function(){
		$("form").submit(function () { return false; });
		var senha = $("#senha").val();
		if(senha == ""){
			$(".notifySenha").fadeIn().removeClass("ok").addClass("erro")
                        .text('Preencha com sua senha.');
		}else if(senha.length <= 5){
			$(".notifySenha").fadeIn().removeClass("ok").addClass("erro")
			.text('sua senha deve ter no mínimo 6 caracters');
		}else{
			$(".notifySenha").slideDown().addClass("ok")
			.text('Perfeito!');
		}
	});
	$('#senha').focus(function(){
		$(".notifySenha.erro").slideUp();
	});
   });	
