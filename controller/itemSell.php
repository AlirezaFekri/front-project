<?php
include "dbConnect.php";
include "../library/db.php";
include "../utils/security.php";
$userName="";
if ( Authentication::check()) {
    $userName = Authentication::id();
}

$connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName, $dbCharset);

//query
$qu = "select * from products where status = ?";
//execute query
$result = $connectDB -> query($qu, 'Active');
$products = $result->fetchAll();
$connectDB ->close();

    include "../view/itemSell.php";

