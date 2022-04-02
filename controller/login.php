<?php
include "dbConnect.php";
include"../library/db.php";

//DataBase connect
$connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);

if (isset($_POST['submit'])){
    //get data
    $phoneNumber = $_POST['uname'];
    $password = $_POST['psw'];

    //query
    $qu = "select * from users where phone_number = ? AND pass = ?";

    //execute query
    $result = $connectDB -> query($qu, $phoneNumber, $password);

    $connectDB ->close();
    //validation data
    if ($result -> numRows() > 0){
        die ("نام کاربری یا رمز عبور اشتباه می باشد.");
    }else{
        header("location: profile.php?phone_number={$phoneNumber}");
    }

}else{
    include "../view/login.php";
}
