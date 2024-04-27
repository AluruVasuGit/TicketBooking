

<?php 

include 'db_connection.php';


if(isset($_POST['signUpSubmit'])){
    $travellerName = $_POST['tname'];
    $travellerEmail = $_POST['temail'];
    $travellerPhone = $_POST['tphone'];
    $travellerPassword = $_POST['tpassword'];

    
    $sql_forId = "SELECT id FROM travellersdata ORDER BY id DESC LIMIT 1 ;";
    $result = mysqli_query($con, $sql_forId);
    $travellerId = 0;
    while($row = mysqli_fetch_assoc($result)){
        $travellerId = $row['id']+1;
    }

    $sql = "INSERT INTO travellersdata(id, name, email, phone, password) VALUES('$travellerId', 
    '$travellerName', '$travellerEmail', '$travellerPhone', '$travellerPassword');";
    if(mysqli_query($con, $sql)){
        echo "Successfully inserted";
    }
    else{
        echo "Something went wrong Error:".mysqli_error($con);
    }

    mysqli_close($con);
}
 

?>