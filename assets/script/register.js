validName = false
validCPF = false

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