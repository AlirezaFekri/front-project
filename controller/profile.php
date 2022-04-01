<?php
include "dbConnect.php";
include"../library/db.php";

//get user id
$phoneNumber = $_GET['phone_number'];

if (isset($phoneNumber)){
//connection
$connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);

//query
$qu = "select * from users where phone_number = ?";

//execute query
$row = $connectDB->query($qu, $phoneNumber);
$row = $row->fetchArray();
$fullName = $row['fullname'];
include "../view/profile.php";
}else{
    header("location:login.php");
}
