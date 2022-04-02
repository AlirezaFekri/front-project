<?php
include "dbConnect.php";
include"../library/db.php";
//get username of user
$userid = $_GET['phone_number'];

//form validate
if (isset($_POST['submit'])) {

    //set form value's
    $fullname = $_POST['fullname'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    //DataBase connect
    $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);


    if (isset($password) && $password !== "") {
        //Query
        $qu = "UPDATE users SET fullname = ?,
                pass = ?, 
                phone_number = ?,
                email = ?,
                address = ?,
        where phone_number = ?";

        //execute query
        $result = $connectDB->query($qu, $fullname, $password, $phoneNumber, $email, $address,$userid);

    }
    else{

        //Query
        $qu = "UPDATE users SET fullname = ?,
                phone_number = ?,
                email = ?,
                address = ?,
        where phone_number = ?";

        //execute query
        $result = $connectDB->query($qu, $fullname, $phoneNumber, $email, $address,$userid);


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
    $qu = "select * from users where phone_number =?";

    //execute query
    $result = $connectDB->query($qu,$userid);
    $row = $result->fetchArray();

    include "../view/personalEdit.php";
}


