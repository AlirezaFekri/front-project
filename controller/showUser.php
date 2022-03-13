<?php
    include"dbConnect.php";
    $connectDB = new mysqli($dbHost, $dbUser, $dbPassword,$dbName);
    $qu = "select * from users";
    $result = $connectDB -> query($qu);
    $connectDB ->close();

    include "../view/showUser.php";
