<?php
    include"dbConnect.php";
    include "../library/db.php";
include "../utils/security.php";


    $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName, $dbCharset);

    //query
    $qu = "select * from users";
    //execute query
    $result = $connectDB -> query($qu);
    $rows = $connectDB->fetchAll();

if (!Authentication::check()){
    Redirect::getDIR("showUser.php");
}
if (Authorization::checkRole()) {
    include "../view/showUser.php";
}
else {
    header("location:login.php");
}
