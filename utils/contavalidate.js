$(document).ready(function() {
$("#validateconta").validate({
    rules: {
      Nome: {
        required: true,
        minWords: 2
      },
      CPF: {
        required: true,
        cpfBR: true

      },
      Endereco:{
          required:true,
          minWords: 2
      }
    },
    messages: {
      Nome: {
        required: "Por favor, insira seu nome completo.",
        minWords:"Por favor, forneça seu nome completo"
      },
      CPF: {
        required: "Por favor, insira o número do CPF.",
      },
      Endereco: {
        required: "Por favor, insira sua endereço.",
        minlength: "O endereço precisa ter no mínimo 2 palavras."
      }
    }
  });
});
