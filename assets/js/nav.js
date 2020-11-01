// pilih element triger = button
const login = document.querySelector('#login');
const register = document.querySelector('#register');
const closeBtnLogin = document.querySelector('#closeBtnLogin');
const closeBtnRegister = document.querySelector('#closeBtnRegister');

//pilih modal login dan modal register
const modalLogin = document.querySelector('#modal-login');
const modalRegister = document.querySelector('#modal-register');

//tampil modal login
login.onclick = function() {
    modalLogin.style.display = 'block';
}

//tampil modal register 
register.onclick = function() {
    modalRegister.style.display = 'block';
}

//close kalo di klik close
closeBtnRegister.onclick = function() {
    modalRegister.style.display = 'none';
}
closeBtnLogin.onclick = function() {
    modalLogin.style.display = 'none';
}
//close kalo klik dilur box
window.onclick = function(event) {
    if((event.target == modalLogin) || (event.target == modalRegister)) {
        modalLogin.style.display = 'none';
        modalRegister.style.display = 'none';
    }
}
