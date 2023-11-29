validName = false
validCpf = false
validMaterno = false
validNumber = false
validCep = false
validIdade = false
validSenha = false

//Validador Nome
  const name = document.querySelector("#name");

  name.addEventListener("keypress", function(e) {
      if(!checkChar(e)) {
        e.preventDefault();
    }
    // FUNÇÃO PARA BLOQUEAR CARACTERES ESPECIAIS E NÚMEROS
  });
  function checkChar(e) {
      var char = String.fromCharCode(e.keyCode);
      var pattern = '[a-zA-Z ^~´`óòõãáàéèê]';
      if (char.match(pattern)) {
      return true;
    }
  }

  const nomeAttention = document.querySelector('#nome-attention');
  const nameIcon = document.querySelector('#nome-icon');
  // VALIDADOR DE TAMANHO DE NOME
  name.addEventListener('keyup', () => {
    if(name.value.length < 15){
      nomeAttention.setAttribute('style', 'visibility: visible;');
      nameIcon.setAttribute('style', 'color: red');
      name.setAttribute('style', 'color: red;');
      validName = false
    }
    else{
      nomeAttention.setAttribute('style', 'visibility: hidden;');
      nameIcon.setAttribute('style', 'color: green');
      name.setAttribute('style', 'color: green;')
      validName = true
    }
  })
  //Validador Nome



//MASCARA CPF
const cpf = document.querySelector('#cpf');

cpf.addEventListener('keypress', () => {
  let cpfLength = cpf.value.length;
  
  if(cpfLength <= 11){
    if(cpfLength === 3 || cpfLength === 7){
      cpf.value += '.';
    }
    else if(cpfLength === 11){
      cpf.value += '-'
    }
  }

})
//MASCARA CPF

//Validador CPF
const cpfColor = document.querySelector('#cpf-icon');
const checkCPF = document.querySelector('#cpf-attention');

function validarCPF(cpf) {
  cpf = cpf.replace(/\D/g, ''); // Remove caracteres não numéricos

  if (cpf.length !== 11 || /^(\d)\1{10}$/.test(cpf)) {
    return false;
  }

  var soma = 0;
  var resto;

  for (var i = 1; i <= 9; i++) {
    soma = soma + parseInt(cpf[i - 1]) * (11 - i);
  }

  resto = (soma * 10) % 11;

  if (resto === 10 || resto === 11) {
    resto = 0;
  }

  if (resto !== parseInt(cpf[9])) {
    return false;
  }

  soma = 0;

  for (var j = 1; j <= 10; j++) {
    soma = soma + parseInt(cpf[j - 1]) * (12 - j);
  }

  resto = (soma * 10) % 11;

  if (resto === 10 || resto === 11) {
    resto = 0;
  }

  if (resto !== parseInt(cpf[10])) {
    return false;
  }

  return true;
}

cpf.addEventListener('', function() {
  var cpf = this.value;

  if (validarCPF(cpf)) {
    checkCPF.setAttribute('style', 'visibility: hidden;')
    cpfColor.setAttribute('style', 'color: green;')
    cpf.setAttribute('style', 'color: green;')
    validCPF = true
  } else {
    checkCPF.setAttribute('style', 'visibility: visible;')
    cpfColor.setAttribute('style', 'color: red;')
    cpf.setAttribute('style', 'color: red;')
    validCPF = false
  }
});
//Validador CPF




//Validador Nome Materno
const nomeMaterno = document.querySelector("#nomeMaterno");

nomeMaterno.addEventListener("keypress", function(e) {
    if(!checkChar(e)) {
      e.preventDefault();
  }
  // FUNÇÃO PARA BLOQUEAR CARACTERES ESPECIAIS E NÚMEROS
});
function checkChar(e) {
    var char = String.fromCharCode(e.keyCode);
    var pattern = '[a-zA-Z ^~´`óòõãáàéèê]';
    if (char.match(pattern)) {
    return true;
  }
}

const maternoAttention = document.querySelector('#materno-attention');
const maternoIcon = document.querySelector('#materno-icon');
// VALIDADOR DE TAMANHO DE NOME
nomeMaterno.addEventListener('keyup', () => {
  if(nomeMaterno.value.length < 15){
    maternoAttention.setAttribute('style', 'visibility: visible;');
    maternoIcon.setAttribute('style', 'color: red');
    nomeMaterno.setAttribute('style', 'color: red;');
    validMaterno = false
  }
  else{
    maternoAttention.setAttribute('style', 'visibility: hidden;');
    maternoIcon.setAttribute('style', 'color: green');
    nomeMaterno.setAttribute('style', 'color: green;')
    validMaterno = true
  }
})
//Validador Nome Materno


// Validador Numero
var telefone = document.querySelector("#phone");
const numberAttention = document.querySelector('#number-attention');
var iti = window.intlTel(telefone, {
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-/17.0.8/js/utils.js" 
});

telefone.addEventListener('blur', () => {
    // Quando você for enviar o número para o backend
    if(iti.isValidNumber()) { // Verifica se o número é válido
        numberAttention.setAttribute('style', 'visibility: hidden;')
        telefone.setAttribute('style', 'color: green;')
        var fullNumber = iti.getNumber(); // Isso retornará o número completo, por exemplo "+5521964865400"
        validNumber = true
    } else {
        numberAttention.setAttribute('style', 'visibility: visible;')
        telefone.setAttribute('style', 'color: red;') // Mostra a mensagem de erro se o número for inválido
        validNumber = false
    }
});
$(document).ready(function(){
  $('#phone').mask('(00) 00000-0000');
});
// Validador Numero

const cep = document.querySelector('#cep');
const cepAttention = document.querySelector('#cep-attention');
const cepIcon = document.querySelector('#cep-icon')
const bairro = document.querySelector('#bairro');
const rua = document.querySelector('#rua');
const numero = document.querySelector('#numero');
const cidade = document.querySelector('#cidade');
const estado = document.querySelector('#estado');

// Função para validar o CEP
function validaCEP(cep) {
    // Remove qualquer caractere que não seja numérico
    cep = cep.replace(/\D/g, "");

    // Verifica se o CEP tem exatamente 8 dígitos
    if (cep.length != 8) {
      cepAttention.setAttribute('style', 'visibility: visible;');
      cep.setAttribute('style', 'color: red;');
      cepIcon.setAttribute('style', 'color: red;');
    }

    return true;
}

// Função para aplicar a máscara ao CEP
function mascaraCEP(cep) {
    // Remove qualquer caractere que não seja numérico
    cep = cep.replace(/\D/g, "");

    // Aplica a máscara
    cep = cep.replace(/^(\d{5})(\d)/, "$1-$2");

    return cep;
}

cep.addEventListener('focusout', () => {
  let cepValue = cep.value;

  // Valida o CEP e aplica a máscara
  if (validaCEP(cepValue)) {
    cepAttention.setAttribute('style', 'visibility: hidden');
    cep.setAttribute('style', 'color: green;');
    cepIcon.setAttribute('style', 'color: green;');
    cepValue = mascaraCEP(cepValue);
    cep.value = cepValue;

    let cepConsulta = cepValue.replace("-", "");
    const urlCep = `https://viacep.com.br/ws/${cepConsulta}/json/`;

    fetch(urlCep).then(function(response){
      response.json().then(function(data){
        rua.value = data.logradouro;
        bairro.value = data.bairro;
        cidade.value = data.localidade;
        estado.value = data.uf;
      });
    });
  } else {
    cepAttention.setAttribute('style', 'visibility: visible');
    cepIcon.setAttribute('style', 'color: red;');
    cep.setAttribute('style', 'color: red;');
  }
});




const dataAttention = document.querySelector('#data-attention')
const dataIcon = document.querySelector('#data-icon')
$(document).ready(function(){
  $('#birthdate').mask('00/00/0000');

  $('#birthdate').on('focusout', function() {
      var birthdate = $(this).val();
      var birthdateMoment = moment(birthdate, 'DD/MM/YYYY');
      
      if (!birthdateMoment.isValid()) {
        Swal.fire({
          position: "top-end",
          icon: "error",
          title: "Data inválida.",
          showConfirmButton: false,
          timer: 1500
        });
        dataIcon.setAttribute('style', 'color: red;')
        dataAttention.setAttribute('style', 'visibility: visible')
          validIdade = false
      } else {
      var years = moment().diff(birthdateMoment, 'years');
      
      if (years < 18) {
          Swal.fire({
              position: "top-end",
              icon: "error",
              title: "Você precisa ter 18 anos.",
              showConfirmButton: false,
              timer: 1500
            });
            dataIcon.setAttribute('style', 'color: red;')
            dataAttention.setAttribute('style', 'visibility: visible')
            validIdade = false
      } else if (years > 100) {
          Swal.fire({
              position: "top-end",
              icon: "error",
              title: "Você precisa ter no máximo 100 anos.",
              showConfirmButton: false,
              timer: 1500
            });
            dataIcon.setAttribute('style', 'color: red;')
            dataAttention.setAttribute('style', 'visibility: visible')
            validIdade = false
      } else {
        dataAttention.setAttribute('style', 'visibility: hidden')
        dataIcon.setAttribute('style', 'color: green;')
        validIdade = true
      }
      }
  });
  });


  //Validador SENHA
const senha = document.querySelector('#senha');
const senhaIcon = document.querySelector('#senha-icon');
const senhaAttention = document.querySelector('#senha-attention');

function validarSenha(input) {
  var senha = input.value;
  
  // Verificar o comprimento mínimo da senha
  if (senha.length < 8) {
    senhaAttention.setAttribute('style', 'visibility: visible;')
    senhaIcon.setAttribute('style', 'color: red;')
    senha.setAttribute('style', 'color: red;')
    validSenha = false
  }
  
  // Verificar se há pelo menos um caractere especial
  var caractereEspecial = /[\W_]/;  // Regex para verificar caractere especial
  if (!caractereEspecial.test(senha)) {
    senhaAttention.setAttribute('style', 'visibility: visible;')
    senhaIcon.setAttribute('style', 'color: red;')
    senha.setAttribute('style', 'color: red;')
    validSenha = false
  }
  
  // Verificar se há pelo menos um número
  var numero = /\d/;  // Regex para verificar número
  if (!numero.test(senha)) {
    senhaAttention.setAttribute('style', 'visibility: visible;')
    senhaIcon.setAttribute('style', 'color: red;')
    senha.setAttribute('style', 'color: red;')
    validSenha = false
  }

  senhaAttention.setAttribute('style', 'visibility: hidden;')
  senhaIcon.setAttribute('style', 'color: green;')
  senha.setAttribute('style', 'color: green;')
  validSenha = true
}
//Validador SENHA

//Validador ConfirmaSENHA
const confirmaSenha = document.querySelector('#confirmaSenha');
const confirmaSenhaIcon = document.querySelector('#confirmaSenha-icon');
const confirmaSenhaAttention = document.querySelector('#confirmaSenha-attention');

function validarConfirmaSenha(){

  if(confirmaSenha.value != senha.value){
    confirmaSenhaAttention.setAttribute('style', 'visibility: visible;')
    confirmaSenhaIcon.setAttribute('style', 'color: red;')
    confirmaSenha.setAttribute('style', 'color: red;')
  }
  else{
    confirmaSenhaAttention.setAttribute('style', 'visibility: hidden;')
    confirmaSenhaIcon.setAttribute('style', 'color: green;')
    confirmaSenha.setAttribute('style', 'color: green;')
  }
}
//Validador ConfirmaSENHA