<?php
include "dbConnect.php";
include"../library/db.php";
include "../utils/security.php";
if (Authorization::checkRole()) {

    if (isset($_POST['action'])){

        if ($_POST['action'] == "deActive"){
            $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);
            $delete = $_POST['id'];
            $qu = "update products set status = ?  where id =?";
            //execute query
            $result = $connectDB->query($qu, "Deactive", $delete);
            $connectDB->close();
        }

        if($_POST['action'] == "Active"){
            $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);
            $active = $_POST['id'];
            $qu = "update products set status = ?  where id =?";
            //execute query
            $result = $connectDB->query($qu, "Active", $active);
            $connectDB->close();
        }
    }
}