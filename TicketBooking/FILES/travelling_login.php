
<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href="travelling.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class = "login-page-background-image">
            <div class = "login-page-card">
                <img src = "https://media.istockphoto.com/id/1096035138/photo/beautiful-young-couple-relaxing-after-hiking-and-taking-a-break.jpg?s=612x612&w=0&k=20&c=iwNan7K7gbiIl2unv-9EuE5Yej-h_l1OrLNMel0husU=" class = "login-page-card-image">
                
                <div>
                    <div class = "login-page-log-buttons">   
                        <button class = "login-page-log-button" id = "loginBtnId">Sign In</button>
                        <button class = "login-page-log-button" id = "signUpBtnId">Sign Up</button>
                    </div>

                    <div class = "login-page-card-handler d-none" id = "signUpContainerId">
                        <h1 class = "login-page-card-heading">Create Your Account</h1>
                        <form method="post" action="signUp_process.php" onsubmit="return signUpValidation()" class = "login-page-card-handler">
                            <input type = "text" placeholder="Your Name" name = "tname" id = "loginNameId" class = "login-page-input">
                            <p class = "login-page-err-msg" id = nameErr></p>
                            <input type = "email" placeholder="Your Email" name = "temail" id = "loginEmailId" class = "login-page-input">
                            <p class = "login-page-err-msg" id = "emailErr"></p>
                            <input type = "text" placeholder="Your Phone" name = "tphone" id = "loginPhoneId" class = "login-page-input">
                            <p class = "login-page-err-msg" id = "phoneErr"></p>
                            <input type = "password" placeholder="Your Password" name = "tpassword" id = "loginPasswordId" class = "login-page-input">
                            <input type = "password" placeholder="Confirm Password" name = "confimePassword" id = "loginConfirmPasswordId" class = "login-page-input">
                            <p class = "login-page-err-msg"  id = "passwordErr"></p>
                            <input class = "btn btn-primary mt-3" name = "signUpSubmit" type = "submit" value = "SignUp Now">
                        </form>
                    </div>
                    
                    <div class = "login-page-card-handler" id = "loginContainerId">
                        <h1 class = "login-page-card-heading">Log Into Your Account</h1>
                        <form method="post" action="login_process.php" onsubmit="return loginValidation()" class = "login-page-card-handler">
                            <input type = "email" placeholder="Your Email" name = "Uemail" id = "userloginEmailId" class = "login-page-input">
                            <p class = "login-page-err-msg" id = "loginEmailErr"></p>
                            <input type = "text" placeholder="Your Password" name = "Upassword" id = "userloginPasswordId" class = "login-page-input">
                            <p class = "login-page-err-msg" id = "loginPasswordErr"></p>
                            <input class = "btn btn-primary mt-3" name = "loginSubmit" type = "submit" value = "Login Now">
                        </form>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <script src = "travelling_login.js"></script>
    </body>
</html>