validName = false
validNumber = false
validEmail = false
validConfirmEmail = false
validPassword = false
validConfirmPassword = false

//BlOQUEIO CARACTERES ESPECIAIS E NUMEROS - INPUTNOME
  const nameInput = document.querySelector("#name");

  nameInput.addEventListener("keypress", function(e) {
      if(!checkChar(e)) {
        e.preventDefault();
    }
  });
  function checkChar(e) {
      var char = String.fromCharCode(e.keyCode);
      var pattern = '[a-zA-Z ^~´`óòõãáàéèê]';
      if (char.match(pattern)) {
      return true;
    }
  }
  //BlOQUEIO CARACTERES ESPECIAIS E NUMEROS - INPUTNOME

  //Validador Nome
  const colorName = document.querySelector('.name-color');

  nameInput.addEventListener('keyup', () => {
    if(nameInput.value.length < 7){
      colorName.setAttribute('style', 'color: red;')
      nameInput.setAttribute('style', 'color: red;')
      validName = false
    }
    else{
      colorName.setAttribute('style', 'color: green;')
      nameInput.setAttribute('style', 'color: green;')
      validName = true
    }
  })
  //Validador Nome

  function isNumberKey(evt){
    
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 43)
        validNumber = false;
    else{
      validNumber = true;
    }
  }

  function verifyNumber(){
    const numberInput = document.querySelector('.mobile-number');
    const checkNumber = document.querySelector('.checkNumber');
    if(numberInput.value.length <= 9){
      checkNumber.setAttribute('style', 'display: block;');
      numberInput.setAttribute('style', 'color: red;');
      validNumber = false;
    }
    else{
      checkNumber.setAttribute('style', 'display: none;');
      numberInput.setAttribute('style', 'color: green;');
      validNumber = true;
    }
  }

  // ALTERAR FORMULAS
  const loginBtn = document.querySelector("#sign-in-btn");
  const cadastroBtn = document.querySelector("#sign-up-btn");
  const container = document.querySelector(".container");

  cadastroBtn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
  });

  loginBtn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
  });
  // ALTERAR FORMULAS

  //Validador Confirma E-mail
  const emailInput = document.querySelector('.emailInput');
  const confirmaIcon = document.querySelector('.confirmColor');

  const emailColor = document.querySelector('.emailColor');
  const confirmaInput = document.querySelector('.email-confirm')

  const checkEmail = document.querySelector('.duoemailcheck');

  confirmaInput.addEventListener('blur', () => {
    if(confirmaInput.value != emailInput.value){
      emailColor.setAttribute('style', 'color: red;')
      emailInput.setAttribute('style', 'color: red;')
      confirmaIcon.setAttribute('style', 'color: red;')
      confirmaInput.setAttribute('style', 'color: red;')

      checkEmail.setAttribute('style', 'display: block;')
      validConfirmEmail = false
    }
    else if((confirmaInput.value && emailInput.value) == 0){
      emailColor.setAttribute('style', 'color: red;')
      emailInput.setAttribute('style', 'color: red;')
      confirmaIcon.setAttribute('style', 'color: red;')
      confirmaInput.setAttribute('style', 'color: red;')

      checkEmail.setAttribute('style', 'display: block;')
      validConfirmEmail = false
    }
    else{
      emailColor.setAttribute('style', 'color: green;')
      emailInput.setAttribute('style', 'color: green;')
      confirmaIcon.setAttribute('style', 'color: green;')
      confirmaInput.setAttribute('style', 'color: green;')

      checkEmail.setAttribute('style', 'display: none;')
      validConfirmEmail = true
    }
  })
  //Validador Confirma E-mail

  //Validador E-MAIL
  const emailInvalido = document.querySelector('.invalidEmail')
  function validacaoEmail(field) {
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
    if ((usuario.length >=3) &&
        (dominio.length >=3) &&
        (usuario.search("@")==-1) &&
        (dominio.search("@")==-1) &&
        (usuario.search(" ")==-1) &&
        (dominio.search(" ")==-1) &&
        (dominio.search(".")!=-1) &&
        (dominio.indexOf(".") >=1)&&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
          emailInvalido.setAttribute('style', 'display: none;')
          emailColor.setAttribute('style', 'color: green;')
          emailInput.setAttribute('style', 'color: green;')
          validEmail = true
    }
    else{
      emailInvalido.setAttribute('style', 'display: block;')
      emailColor.setAttribute('style', 'color: red;')
      emailInput.setAttribute('style', 'color: red;')
      validEmail = false
    }
    }
  //Validador E-MAIL

  //Validador SENHA
  const senhaInput = document.querySelector('.password');
  const senhaColor = document.querySelector('.passwordColor');
  const senhaCheck = document.querySelector('.passwordCheck');

  function validarSenha(input) {
    var senha = input.value;
    
    // Verificar o comprimento mínimo da senha
    if (senha.length < 8) {
      senhaCheck.setAttribute('style', 'display: block;')
      senhaColor.setAttribute('style', 'color: red;')
      senhaInput.setAttribute('style', 'color: red;')
      validPassword = false
        return;
    }
    
    // Verificar se há pelo menos um caractere especial
    var caractereEspecial = /[\W_]/;  // Regex para verificar caractere especial
    if (!caractereEspecial.test(senha)) {
      senhaCheck.setAttribute('style', 'display: block;')
      senhaColor.setAttribute('style', 'color: red;')
      senhaInput.setAttribute('style', 'color: red;')
      validPassword = false
        return;
    }
    
    // Verificar se há pelo menos um número
    var numero = /\d/;  // Regex para verificar número
    if (!numero.test(senha)) {
      senhaCheck.setAttribute('style', 'display: block;')
      senhaColor.setAttribute('style', 'color: red;')
      senhaInput.setAttribute('style', 'color: red;')
      validPassword = false
        return;
    }

    senhaCheck.setAttribute('style', 'display: none;')
    senhaColor.setAttribute('style', 'color: green;')
    senhaInput.setAttribute('style', 'color: green;')
    validPassword = true
  }
  //Validador SENHA

  //Validador ConfirmaSENHA
  const confirmSenhaInput = document.querySelector('.confirmaSenha');
  const confirmPassColor = document.querySelector('.confirmPassColor');
  const confirmPasswordCheck = document.querySelector('.confirmPasswordCheck');

  function validarConfirmaSenha(){

    if(confirmSenhaInput.value != senhaInput.value){
      confirmPasswordCheck.setAttribute('style', 'display: block;')
      confirmPassColor.setAttribute('style', 'color: red;')
      confirmaSenhaInput.setAttribute('style', 'color: red;')
      validConfirmPassword = false
    }
    else if((confirmSenhaInput.value && senhaInput.value) == 0){
      confirmPasswordCheck.setAttribute('style', 'display: block;')
      confirmPassColor.setAttribute('style', 'color: red;')
      confirmSenhaInput.setAttribute('style', 'color: red;')
      validConfirmPassword = false
    }
    else{
      confirmPasswordCheck.setAttribute('style', 'display: none;')
      confirmPassColor.setAttribute('style', 'color: green;')
      confirmSenhaInput.setAttribute('style', 'color: black;')
      validConfirmPassword = true
    }
  }
  //Validador ConfirmaSENHA

  var input = document.querySelector("#phone");
  var iti = window.intlTelInput(input, {
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });
  
  $('#registrationForm').on('submit', function() {
      var fullNumber = iti.getNumber();
      console.log("Número completo: " + fullNumber);  // Adicionado para depuração
      $('#phone').val(fullNumber);
  });



  if((validName && validNumber && validEmail && validConfirmEmail && validPassword && validConfirmPassword) == true){
    document.getElementById("submitForm").submit();
  }
  else{
  //   Swal.fire({
  //   icon: "error",
  //   title: "Oops...",
  //   text: "Something went wrong! Check the informations and try again",
  // });
  }