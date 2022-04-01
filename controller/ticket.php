<?php
include "dbConnect.php";
include"../library/db.php";

//get id user
$id = $_GET['phone_number'];

//validation login
if (isset($id)){
    //connection
    $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);

    //query
    $qu = "select * from users where phone_number = ?";

    //execute query
    $row = $connectDB->query($qu, $id);
    $row = $row->fetchArray();
    $connectDB->close();
    $fullName = $row['fullname'];

    //form validation
    if (isset($_POST['submit'])) {
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $qu2 = "insert into tickets(fullname, subject, number, content) values(?,?,?,?)";
        $result = $connectDB->query($qu2, "ss","sub", "091344","ZXzx ");
    }else {
        include "../view/ticket.php";
    }
}else{
    header("location:login.php");
}
