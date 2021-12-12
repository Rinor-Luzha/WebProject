function validation() {

}
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function validatePassword(pw) {
    //special characters
    var reSpecial = /[#?!@$%^&*\-_\\\/]/;
    //capitals
    var reCap = /[A-Z]/;
    return pw.match(reSpecial) != undefined && pw.match(reCap) != undefined;
};
const form = document.querySelector('#submit');
form.addEventListener('submit', (e) => {
    const inputDiv = document.querySelectorAll('.input-div');
    const email = document.querySelector("#email").value;
    const password = document.querySelector("#password").value;
    const passwordError = document.getElementById('passwordError');
    const emailError = document.getElementById('emailError');
    let emailErr = [];
    let passwordErr = [];
    let emailValidation = true;
    let passwordValidation = true;
    if (validateEmail(email) === false) {
        emailErr.push("The email you have entered is not valid!");
        emailValidation = false;
    }
    if (password.length < 8) {
        passwordErr.push("Password should be a minimum of 8 characters.");
        passwordValidation = false;
    }
    if (validatePassword(password) === false) {
        passwordErr.push("Password include a special character and at least one capital letter.");
        passwordValidation = false;

    }
    if (emailValidation && passwordValidation) {
    } else if (!emailValidation && passwordValidation) {
        e.preventDefault();
        emailError.innerText = emailErr.join('\n ');
        inputDiv[3].classList.add('error');
        inputDiv[4].classList.remove('error');
    } else if (emailValidation && !passwordValidation) {
        e.preventDefault();
        passwordError.innerText = passwordErr.join('\n ');
        inputDiv[4].classList.add('error');
        inputDiv[3].classList.remove('error');
    } else {
        e.preventDefault();
        emailError.innerText = emailErr.join('\n ');
        passwordError.innerText = passwordErr.join('\n ');
        inputDiv[4].classList.add('error');
        inputDiv[3].classList.add('error');
    }
});