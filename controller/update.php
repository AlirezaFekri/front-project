<?php
include "dbConnect.php";
include"../library/db.php";
//get username of user
$user = $_GET['username'];

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
    $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);


    if (isset($password) && $password !== "") {
        //Query
        $qu = "UPDATE users SET fname = ?,
                family = ?, 
                user_name = ?,
                pass = ?, 
                phone_number = ?,
                email = ?
        where user_name = ?";

        //execute query
        $result = $connectDB->query($qu, $name, $family, $username, $password, $phoneNumber, $email, $user);

        //close DB
        $connectDB->close();
    }
    else{

        //Query
        $qu = "UPDATE users SET fname = ?,
     family = ?, 
     user_name = ?,
      phone_number = ?,
       email = ?
       where user_name = ?";

        //execute query
        $result = $connectDB->query($qu, $name, $family, $username, $phoneNumber, $email, $user);

        //close DB
        $connectDB->close();

    }
    //validation query
    if ($result) {
        echo "با موفقیت بروزرسانی انجام شد.";
    }
    else {
        print $connectDB->connect_error;
    }

}
else{

    //connect DB & query
    $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);
    $qu = "select * from users where user_name =?";

    //execute query
    $result = $connectDB->query($qu,$user);


    $row = $result->fetchArray();

//close connection
    $connectDB->close();

    include "../view/update.php";
}


