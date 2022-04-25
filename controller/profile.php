<?php
include "dbConnect.php";
include"../library/db.php";
include "../utils/security.php";

//get user id
$phoneNumber = Authentication::id();

if (Authentication::check()){
    //connection
    $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);

    //query
    $qu = "select * from users where phone_number = ?";

    //execute query
    $row = $connectDB->query($qu, $phoneNumber);
    $row = $row->fetchArray();
    $connectDB->close();
    $fullName = $row['fullname'];
    include "../view/profile.php";
}else{
    header("location:login.php");
}
