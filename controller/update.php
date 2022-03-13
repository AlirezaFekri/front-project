<?php
include "dbConnect.php";
//get username of user
$user = $_GET['username'];

//connect DB & query
$connectDB = new mysqli($dbHost, $dbUser, $dbPassword,$dbName);
$qu = "select * from users where user_name ='$user'";

//execute query
$result = $connectDB->query($qu);

//get data from DB
$row = mysqli_fetch_array($result);

//close connection
$connectDB->close();

//form validate
if (isset($_POST['submit'])) {

    //set form value's
    $name = $_POST['name'];
    $family = $_POST['family'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    //DataBase connect
    $connectDB = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    //Query
    $qu = "UPDATE users SET fname = '$name',
     family = '$family', 
     user_name = '$username',
      pass = '$password', 
      phone_number = '$phoneNumber',
       email = '$email'
       where user_name = '$user'";

    //set charset
    $connectDB->character_set_name("utf8mb4");

    //execute query
    $result = $connectDB->query($qu);

    //close DB
    $connectDB->close();

    //validation query
    if ($result) {
        echo "با موفقیت بروزرسانی انجام شد.";
    }
    else {
        print $connectDB->connect_error;
    }

}
else{
    include "../view/update.php";
}


