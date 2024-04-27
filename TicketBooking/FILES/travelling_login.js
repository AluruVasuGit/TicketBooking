


let loginBtn = document.getElementById("loginBtnId");
let signUpBtn = document.getElementById("signUpBtnId");

let signUpContainer = document.getElementById("signUpContainerId");
let loginContainer = document.getElementById("loginContainerId");

signUpBtn.onclick = function(){
    loginContainer.classList.add("d-none");
    signUpContainer.classList.remove("d-none");
}

loginBtn.onclick = function(){
    signUpContainer.classList.add("d-none");
    loginContainer.classList.remove("d-none");
}



function signUpValidation(){

    console.log("S i am in");

    let userName = document.getElementById("loginNameId").value;
    let userEmail = document.getElementById("loginEmailId").value;
    let userPhone = document.getElementById("loginPhoneId").value;
    let userPassword = document.getElementById("loginPasswordId").value;
    let userConfirmPassword = document.getElementById("loginConfirmPasswordId").value;

    let userNameErr = document.getElementById("nameErr");
    let userEmailErr = document.getElementById("emailErr");
    let userPhoneErr= document.getElementById("phoneErr");
    let userPasswordErr = document.getElementById("passwordErr");

    let error = false;

    if(userName === ""){
        console.log(userName);
        userNameErr.textContent = "*Name Required";
        error =  true;
    }
    if(userEmail === ""){
        userEmailErr.textContent = "*Email Required";
        error =  true;
    }
    if(userPhone === ""){
        userPhoneErr.textContent = "*Phone Number Required";
        error =  true;
    }
    else if(userPhone.length !== 10){
        userPhoneErr.textContent = "*Phone Number must contain 10 numbers";
        error = true;
    }
    if(userPassword !== ""){
        console.log(userPassword.length)
        if(userPassword.length < 8 && userPassword.length > 15){
            userPasswordErr.textContent = "*Password must contain between 8-15 characters";
            error =  true;
            
        }
        else if(!/[A-Z]/.test(userPassword)){
            userPasswordErr.textContent = "*Password must contain a capital";
            error =  true;
            
        }
        else if(!/[a-z]/.test(userPassword)){
            userPasswordErr.textContent = "*Password must contain a small letter";
            error =  true;
            
        }
        else if(!/[0-9]/.test(userPassword)){
            userPasswordErr.textContent = "*Password must contain a number";
            error =  true;
            
        }
        else if(!/[!@#$^&*()_+{}\[\]|:;<>.,?`\\/-]/.test(userPassword)){
            userPasswordErr.textContent = "*Password must container a specialCharacter";
            error =  true;

        }
    }
    else {
        userPasswordErr.textContent = "*Your new password required";
        error =  true;
        
    }
    if(userConfirmPassword !== userPassword){
        userPasswordErr.textContent = "*Password does not matched";
        error =  true;
    }

    return !error;

}

function loginValidation(){

    let uEmail = document.getElementById("userloginEmailId").value; 
    let userPassword = document.getElementById("userloginPasswordId").value;

    let uEmailErr = document.getElementById("loginEmailErr");
    let uPasswordErr = document.getElementById("loginPasswordErr");

    let status = false;

    if(uEmail === ""){
        uEmailErr.textContent = "*Your Email required";
        status = true;
    }
    if(userPassword === ""){
        uPasswordErr.textContent = "*Your Password required";
        status = true;
    }

    return !status;

}



document.addEventListener("DOMContentLoaded", function() {
    console.log("hey man");
    const loginError = document.getElementById("loginPasswordErr");
    
    // Check for the login error session variable and display error message
    const error = sessionStorage.getItem("login_error");
    console.log(error);
    if (error) {
        loginError.textContent = error;
        sessionStorage.removeItem("login_error"); // Clear the error
    }
})