




<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href="travelling.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class = "selection_background container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light page-1-navbar-background">
                <a class="navbar-brand text-light" href="#">EXPLORE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-light" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link text-light" href="#">Features</a>
                    <a class="nav-link text-light" href="#">Pricing</a>
                    <a class="nav-link text-light" href="#" tabindex="-1" aria-disabled="true">Details</a>
                    <a class = "nav-link" target = "_blank" href = "travelling_login.php"><button class="btn btn-outline-light my-2 my-sm-0 m-1" id = "signIn">Sign In</button></a>
                    <a class = "nav-link"  target = "_blank" href = "travelling_login.php"><button class="btn btn-outline-success my-2 my-sm-0" id = "signUp">Sign Up</button></a>
                </div>
                </div>
            </nav>
            <div class = "cardFlexContainer" >
                <div class = "statesCardsContainer" id = "mainCard">
                    <div class = "statesCardHandler">
                        <a href = "days_select.php"><div class = "statesCard"></div></a>
                        <a href="days_select.php"><span>Goa</span></a>
                    </div>

                    <div class = "statesCardHandler">
                    <a href = "days_select.php"><div class = "statesCard"></div></a>
                        <a href="days_select.php"><span>Kerala</span></a>
                    </div>

                    <div class = "statesCardHandler">
                    <a href = "days_select.php"><div class = "statesCard"></div></a>
                        <a href="days_select.php"><span>Madhya Pradesh</span></a>
                    </div>

                    <div class = "statesCardHandler">
                    <a href = "days_select.php"><div class = "statesCard"></div></a>
                        <a href="days_select.php"><span>Karnataka</span></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html> 