$(document).ready(function() {
    $("#formvalidate").validate({
      rules: {
        nome: {
          required: true
        },
        NAgencia: {
          required: true,
          minlength: 4,
          maxlength: 5
        },
        Endereco:{
            required:true,
            minWords: 2
        }
      },
      messages: {
        nome: {
          required: "Por favor, insira o nome do banco."
        },
        NAgencia: {
          required: "Por favor, insira sua agencia com mínimo 4 caracteres.",
          minlength: "A agencia precisa ter no mínimo 4 caracteres.",
          maxlength: "A agencia precisa ter no máximo 5 caracteres."
        },
        Endereco: {
          required: "Por favor, insira sua endereço.",
          minlength: "O endereço precisa ter no mínimo 2 palavras."
        }
      }
    });
  });
  