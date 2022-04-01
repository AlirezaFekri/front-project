<?php
    include"dbConnect.php";
    include "../library/db.php";

    $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName, $dbCharset);

    //query
    $qu = "select * from users";
    //execute query
    $result = $connectDB -> query($qu);
    $connectDB ->close();


    include "../view/showUser.php";
