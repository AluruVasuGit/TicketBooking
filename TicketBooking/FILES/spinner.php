


<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href="travelling.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        
        <div>

            <div class = "spinner-background" id = "spinnerId">
                <div class="spinner-border spinner-size" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <h2 class = "spinner-heading">Processing Your Payment</h2>
            </div>

            <div class = "spinner-background d-none" id = "paymentSuccessId">
                <img src = "https://icons.veryicon.com/png/o/miscellaneous/8atour/success-35.png" class = "payment-success-logo">
                <h2 class = "spinner-heading">Payment Successful</h2>
            </div>

        </div>
        <script src = "spinner.js"></script>
    </body>
</html>