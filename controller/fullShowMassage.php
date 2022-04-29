<?php
include "dbConnect.php";
include"../library/db.php";
include "../utils/security.php";
if (Authorization::checkRole()){
    if (isset($_GET['del'])){
        $id = $_GET['del'];
        $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName, $dbCharset);
        //query
        $qu = "delete  from tickets where id = ?";
        //execute query
        $result = $connectDB -> query($qu,$id);
        header("location:showMassage.php");
    }

    if (isset($_GET['id'])){

        $id = $_GET['id'];
        $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName, $dbCharset);
        //query
        $qu = "select * from tickets where id = ?";
        //execute query
        $result = $connectDB -> query($qu,$id);
        $massage = $connectDB->fetchArray();
        $connectDB ->close();
        include "../view/fullShowMessage.php";
    }
}else{
    header("location:login.php");
}
