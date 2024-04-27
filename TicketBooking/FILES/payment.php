

<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href="travelling.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        
        <div class = "payment-background">
            <nav class="navbar navbar-expand-lg navbar-light payment-navbar-background">
                <a class="navbar-brand text-light" href="#">EXPLORE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-light" href="travelling_home.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link text-light" href="#">Features</a>
                    <a class="nav-link text-light" href="#">Pricing</a>
                    <a class="nav-link text-light" href="#" tabindex="-1" aria-disabled="true">Details</a>
                    <a class = "nav-link" target = "_blank" href = "travelling_login.php"><button class="btn btn-outline-light my-2 my-sm-0 m-1" id = "signIn">Sign In</button></a>
                    <a class = "nav-link"  target = "_blank" href = "travelling_login.php"><button class="btn btn-outline-success my-2 my-sm-0" id = "signUp">Sign Up</button></a>
                </div>
                </div>
            </nav>
            <h1 class = "payment-heading">Payment</h1>
                <div class = "payment-arrangement">
                    <div class = "payment-container">
                        <div class = "p-2 ml-4">
                            <div>
                                <input type = "radio" name = "payment" class = "payment-radio-button">
                                <img src = "https://1000logos.net/wp-content/uploads/2023/03/Google-Pay-logo.png" class = "payment-gpay-image">
                            </div>
                            <div>
                                <input type = "radio" name = "payment" class = "payment-radio-button">
                                <img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/PhonePe_Logo.svg/1200px-PhonePe_Logo.svg.png" class = "payment-phonepay-image">
                            </div>
                            <div>
                                <input type = "radio" name = "payment" class = "payment-radio-button">
                                <img src = "https://assetscdn1.paytm.com/images/catalog/category/5165/paytm_logo.png" class = "payment-paytm-image">
                            </div>

                        </div>
                    </div>

                    <div class = "payment-container">
                        <h2 class = "upi-heading">Enter UPI Pin:</h2>
                        <input type = "number" id = "upiPin" class = "upi-pin" placeholder="your pin goes here">
                        <div class = "proceed-btn-container">
                            <a href = "spinner.php"><button class = "btn btn-primary proceed-btn">Proceed</button></a>
                        </div>
                    </div>
                </div>
            
        </div>
        
    </body>
</html>