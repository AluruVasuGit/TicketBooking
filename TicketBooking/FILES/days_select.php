
<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href="travelling.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class = "days-background-container">
            <nav class="navbar navbar-expand-lg navbar-light page-1-navbar-background">
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

            <div class = "controller">
                <div class = "days-cards-container">
                    <div class = "days-image-text-align">
                        <img src = "https://www.wayanad.com/files/slides/2064569462.jpg" class = "days-image-size w-100"/>
                        <span>3Days</span>
                    </div>
                    <div class = "days-buttons-align">
                        <a href = "payment.php"><button class = "btn btn-primary  mb-2">1000/-</button></a>
                        <button class = "btn btn-success  mb-2">VIEW</button>
                    </div>   
                </div>

                <div class = "days-cards-container">
                    <div class = "days-image-text-align">
                        <img src = "https://www.wayanad.com/files/slides/2064569462.jpg" class = "days-image-size w-100"/>
                        <span>7Days</span>
                    </div>
                    <div class = "days-buttons-align">
                    <a href = "payment.php"><button class = "btn btn-primary  mb-2">1800/-</button></a>
                        <button class = "btn btn-success  mb-2">VIEW</button>
                    </div>   
                </div>

                <div class = "days-cards-container">
                    <div class = "days-image-text-align">
                        <img src = "https://www.wayanad.com/files/slides/2064569462.jpg" class = "days-image-size w-100"/>
                        <span>10Days</span>
                    </div>
                    <div class = "days-buttons-align">
                    <a href = "payment.php"><button class = "btn btn-primary  mb-2">2500/-</button></a>
                        <button class = "btn btn-success  mb-2">VIEW</button>
                    </div>   
                </div>
    
                
            </div>

        </div>
        
    </body>
</html>