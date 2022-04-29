<?php
include"dbConnect.php";
include "../library/db.php";
include "../utils/security.php";
if (Authorization::checkRole()) {
    $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName, $dbCharset);

//query
    $qu = "select * from tickets";
//execute query
    $result = $connectDB -> query($qu);
    $message = $result->fetchAll();
    $connectDB ->close();

    include "../view/message.php";
}else {
    header("location:login.php");
}
