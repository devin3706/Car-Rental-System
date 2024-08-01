const email = document.getElementById("email");
const password = document.getElementById("pw");

const form = document.querySelector("form");
const err = document.getElementById("err");

form.addEventListener("submit", (e) => {
    const errors = [];

    //validating inputs commands

    if (!(/^.+@.+\..+$/.test(email.value.trim()))){
        errors.push("Invalid email format!");
    }

    // password checks
    const checkPw = password.value.trim();

    if (checkPw.length < 8){
        errors.push("Password should be minimum 8 characters!");
    }

    if (!(/[A-Z]/.test(checkPw))){
        errors.push("Must contain a uppercase letter!");
    }

    if (!(/[a-z]/.test(checkPw))){
        errors.push("Must contain a lowercase letter!");
    }

    if (!(/[0-9]/.test(checkPw))){
        errors.push("Must contain a number!");
    }

    if(!(/[@#!%\^&\$\*\-_\+=]/.test(checkPw))){
        errors.push("Must contain a special symbol!");
    }
    
    //output errors
    if(errors.length > 0){
        e.preventDefault();
        err.toggleAttribute('hidden');
        err.innerHTML = errors.join('<br>');
    } else {
        //window.alert("Submit Successful!");
    }
})