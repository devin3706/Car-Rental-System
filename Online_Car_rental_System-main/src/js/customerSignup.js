const fname = document.getElementById("fname");
const lname = document.getElementById("lname");
const sname = document.getElementById("sname");
const genderM = document.getElementById("male");
const genderF = document.getElementById("female");
const dob = document.getElementById("dob");
const address = document.getElementById("address");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const nic = document.getElementById("nic");
const password = document.getElementById("pw");
const password2 = document.getElementById("cpw");

const form = document.querySelector("form");
const err = document.getElementById("err");

form.addEventListener("submit", (e) => {
    const errors = [];

    //validating inputs commands
    if (genderM.value.trim() === "" || genderF.value.trim() === ""){
        errors.push("Gender Required!");
    }

    if (!(/^.+@.+\..+$/.test(email.value.trim()))){
        errors.push("Invalid email format!");
    }

    if (!(/^0\d{9}$/.test(phone.value.trim()))){
        errors.push("Invalid mobile number!");
    }

    if (!(/^\d{12}$|^\d{9}[vV]$/.test(nic.value.trim()))){
        errors.push("Invalid NIC format!");
    }

    // password checks
    const checkPw = password.value.trim();
    const pwErrors = [];

    if (checkPw.length < 8){
        pwErrors.push("Password should be minimum 8 characters!");
    }

    if (!(/[A-Z]/.test(checkPw))){
        pwErrors.push("Must contain a uppercase letter!");
    }

    if (!(/[a-z]/.test(checkPw))){
        pwErrors.push("Must contain a lowercase letter!");
    }

    if (!(/[0-9]/.test(checkPw))){
        pwErrors.push("Must contain a number!");
    }

    if(!(/[@#!%\^&\$\*\-_\+=]/.test(checkPw))){
        pwErrors.push("Must contain a special symbol!");
    }
    
    //confirm password check
    if (!(checkPw === password2.value.trim()) && pwErrors.length == 0){
        errors.push("Confirm password doesn't match!");
    }
    //add password errors to errors
    const allErrors = errors.concat(pwErrors);
    //output errors
    if(allErrors.length > 0){
        e.preventDefault();
        err.toggleAttribute('hidden');
        err.innerHTML = allErrors.join('<br>');
    } else {
        //window.alert("Submit Successful!");
    }
})