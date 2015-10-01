$(document).ready( function() {
  $("#formLogin").validate({
    // Define as regras
    rules:{
      email:{
        required: true, email: true
      },
      senha:{
        required: true, minlength: 6
      }
    },
    // Define as mensagens de erro para cada regra
    messages:{
      email:{
        required: "Digite o seu e-mail de cadastro",
        email: "Digite um e-mail válido"
      },
      senha:{
        required: "Digite sua senha",
        senha:"A sua senha deve conter no mínimo 6 caracters",
        minLength: "A sua senha deve conter no mínimo 6 caracters"
      }
    }
  });
});
