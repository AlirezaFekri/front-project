<?php
include "dbConnect.php";
include"../library/db.php";
//get username of user
$user = $_GET['phone_number'];

//form validate
if (isset($_POST['submit'])) {

    //set form value's
    $fullname = $_POST['fullname'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $role = $_POST['role'];
    //DataBase connect
    $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);


    if (isset($password) && $password !== "") {
        //Query
        $qu = "UPDATE users SET fullname = ?,
                pass = ?, 
                phone_number = ?,
                email = ?,
                address = ?,
                role_member = ? 
        where phone_number = ?";

        //execute query
        $result = $connectDB->query($qu, $fullname, $password, $phoneNumber, $email, $address, $role,$user);

        //close DB
        $connectDB->close();
    }
    else{

        //Query
        $qu = "UPDATE users SET fullname = ?,
                phone_number = ?,
                email = ?,
                address = ?,
                role_member = ? 
        where phone_number = ?";

        //execute query
        $result = $connectDB->query($qu, $fullname, $phoneNumber, $email, $address, $role,$user);

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
    $qu = "select * from users where phone_number =?";

    //execute query
    $result = $connectDB->query($qu,$user);


    $row = $result->fetchArray();

//close connection
    $connectDB->close();

    include "../view/update.php";
}


