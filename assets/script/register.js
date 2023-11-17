validName = false
validCPF = false
validMaterno = false
validNumber = false

//Validador Nome
  const nameInput = document.querySelector("#name");

  nameInput.addEventListener("keypress", function(e) {
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
  nameInput.addEventListener('keyup', () => {
    if(nameInput.value.length < 15){
      nomeAttention.setAttribute('style', 'visibility: visible;');
      nameIcon.setAttribute('style', 'color: red');
      nameInput.setAttribute('style', 'color: red;');
      validName = false
    }
    else{
      nomeAttention.setAttribute('style', 'visibility: hidden;');
      nameIcon.setAttribute('style', 'color: green');
      nameInput.setAttribute('style', 'color: green;')
      validName = true
    }
  })
  //Validador Nome



//MASCARA CPF
const cpfInput = document.querySelector('#cpf');

cpfInput.addEventListener('keypress', () => {
  let cpfLength = cpfInput.value.length;
  
  if(cpfLength <= 11){
    if(cpfLength === 3 || cpfLength === 7){
      cpfInput.value += '.';
    }
    else if(cpfLength === 11){
      cpfInput.value += '-'
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

cpfInput.addEventListener('input', function() {
  var cpf = this.value;

  if (validarCPF(cpf)) {
    checkCPF.setAttribute('style', 'visibility: hidden;')
    cpfColor.setAttribute('style', 'color: green;')
    cpfInput.setAttribute('style', 'color: green;')
    validCPF = true
  } else {
    checkCPF.setAttribute('style', 'visibility: visible;')
    cpfColor.setAttribute('style', 'color: red;')
    cpfInput.setAttribute('style', 'color: red;')
    validCPF = false
  }
});
//Validador CPF




//Validador Nome Materno
const nomeMaternoInput = document.querySelector("#nomeMaternoInput");

nomeMaternoInput.addEventListener("keypress", function(e) {
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
nomeMaternoInput.addEventListener('keyup', () => {
  if(nomeMaternoInput.value.length < 15){
    maternoAttention.setAttribute('style', 'visibility: visible;');
    maternoIcon.setAttribute('style', 'color: red');
    nomeMaternoInput.setAttribute('style', 'color: red;');
    validMaterno = false
  }
  else{
    maternoAttention.setAttribute('style', 'visibility: hidden;');
    maternoIcon.setAttribute('style', 'color: green');
    nomeMaternoInput.setAttribute('style', 'color: green;')
    validMaterno = true
  }
})
//Validador Nome Materno


// Validador Numero
var telefoneinput = document.querySelector("#phone");
const numberAttention = document.querySelector('#number-attention');
var iti = window.intlTelInput(telefoneinput, {
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" 
});

telefoneinput.addEventListener('keyup', () => {
    // Quando você for enviar o número para o backend
    if(iti.isValidNumber()) { // Verifica se o número é válido
        numberAttention.setAttribute('style', 'visibility: hidden;')
        telefoneinput.setAttribute('style', 'color: green;')
        var fullNumber = iti.getNumber(); // Isso retornará o número completo, por exemplo "+5521964865400"
        validNumber = true
    } else {
        numberAttention.setAttribute('style', 'visibility: visible;')
        telefoneinput.setAttribute('style', 'color: red;') // Mostra a mensagem de erro se o número for inválido
        validNumber = false
    }
});
// Validador Numero