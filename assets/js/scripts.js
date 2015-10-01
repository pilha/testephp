$(document).ready( function() {
  $("#formLogin").validate({
    // Define as regras
    rules:{
      email:{
        // campoEmail será obrigatório (required) e precisará ser um e-mail válido (email)
        required: true, email: true
      },
      senha:{
        // campoMensagem será obrigatório (required) e terá tamanho mínimo (minLength)
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
        required: "Digite a sua senha",
        minLength: "A sua senha deve conter no mínimo 6 caracters"
      }
    }
  });
});