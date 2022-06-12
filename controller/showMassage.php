<?php
include "dbConnect.php";
include "../library/db.php";
include "../utils/security.php";
if (Authorization::checkRole()) {
    $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName, $dbCharset);

//query
    $qu = "select * from tickets";
//execute query
    $connectDB -> query($qu);
    $message = $connectDB -> fetchAll();
    $connectDB ->close();

    include "../view/message.php";
}else {
    header("location:login.php");
}
