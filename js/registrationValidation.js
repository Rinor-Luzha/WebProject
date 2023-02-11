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
    const name = document.querySelector("#name").value;
    const surname = document.querySelector("#surname").value;
    const gender = document.querySelector('input[name="gender"]:checked');
    const birthdate = document.querySelector("#birthdate").value;
    const email = document.querySelector("#email").value;
    const password = document.querySelector("#password").value;
    const initialsError = document.getElementById('initialsError');
    const genderError = document.getElementById('genderError');
    const birthdateError = document.getElementById('birthdateError');
    const passwordError = document.getElementById('passwordError');
    const emailError = document.getElementById('emailError');
    console.log(birthdate);
    let initialsValidated = true;
    let passwordValidated = true;
    let validation = true;
    if (name.length < 2) {
        initialsError.innerText = "Name should be at least two characters.";
        validation = false;
        inputDiv[0].classList.add('error');
        initialsValidated = false;
    } else if (initialsValidated) {
        inputDiv[0].classList.remove('error');
    }
    if (surname.length < 2) {
        initialsError.innerText = initialsError.innerText + "\nSurname should be at least two characters.";
        validation = false;
        initialsValidated = false;
        inputDiv[0].classList.add('error');
    } else if (initialsValidated) {
        inputDiv[0].classList.remove('error');
    }
    if (gender === null || (gender.value !== 'M' && gender.value !== 'F')) {
        genderError.innerText = "Gender was not set correctly.";
        validation = false;
        inputDiv[1].classList.add('error');
    } else {
        inputDiv[1].classList.remove('error');
    }
    if (birthdate == undefined || birthdate == null || birthdate == '') {
        birthdateError.innerText = "Birthdate is required.";
        validation = false;
        inputDiv[2].classList.add('error');
    } else {
        inputDiv[2].classList.remove('error');
    }
    if (validateEmail(email) === false) {
        emailError.innerText = "The email you have entered is not valid!";
        validation = false;
        inputDiv[3].classList.add('error');
    } else {
        inputDiv[3].classList.remove('error');
    }
    if (password.length < 8) {
        passwordError.innerText = "Password should be a minimum of 8 characters.";
        validation = false;
        passwordValidated = false;
        inputDiv[4].classList.add('error');

    } else if (passwordValidated) {
        inputDiv[4].classList.remove('error');
    }
    if (validatePassword(password) === false) {
        passwordError.innerText = passwordError.innerText + "\nPassword should include a special character and at least one capital letter.";
        validation = false;
        passwordValidated = false;
        inputDiv[4].classList.add('error');
    } else if (passwordValidated) {
        inputDiv[4].classList.remove('error');
    }

    if (validation == false) {
        e.preventDefault();
    }
});