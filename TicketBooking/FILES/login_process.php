

<?php

session_start(); 

include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $explorerName = $_POST["Uemail"];
    $explorerPassword = $_POST["Upassword"];

    $sql_forLogin = "SELECT email, password FROM travellersdata WHERE email = '$explorerName' AND password = '$explorerPassword';";
    $result = mysqli_query($con, $sql_forLogin);
    $num = mysqli_num_rows($result);

    if ($num === 1) {
        // Successful login, redirect to another page
        $_SESSION["login_success"] = true;
        //header("Location: places_selection.php");
        header("Location: places_selection.php");
        exit();
    } else {
        // Invalid credentials, set error session variable and redirect
        $_SESSION["login_success"] = true;
        $_SESSION["login_error"] = "Invalid email or password.";
        header("Location: travelling_login.php");
        exit();
    }

}


?>

