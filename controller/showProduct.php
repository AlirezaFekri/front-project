<?php
include"dbConnect.php";
include "../library/db.php";

$connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName, $dbCharset);

//query
$qu = "select * from products";
//execute query
$result = $connectDB -> query($qu);



include "../view/showProducts.php";