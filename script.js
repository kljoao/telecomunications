const btnMobile = document.querySelector('#btn-mobile');

function toggleMenu(e){
    const options = document.querySelector('.nav-options');
    const left = document.querySelector('.nav-left');
    options.classList.toggle('active');
    left.classList.toggle('active');
}

btnMobile.addEventListener('click', toggleMenu);