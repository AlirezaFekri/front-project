<?php
    include"dbConnect.php";
    include "../library/db.php";

    $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName, $dbCharset);

    $qu = "select * from users";

    $result = $connectDB -> query($qu);


    include "../view/showUser.php";
