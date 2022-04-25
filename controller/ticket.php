<?php
include "dbConnect.php";
include "../library/db.php";
include "../utils/security.php";

//get id user
$id = $_SESSION['id'];

//validation login
if (isset($id)){
    //connection
    $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);

    //query
    $qu = "select * from users where phone_number = ?";

    //execute query
    $row = $connectDB->query($qu, $id);
    $row = $row->fetchArray();

    $fullName = $row['fullname'];

    //form validation
    if (isset($_POST['submit'])) {
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $qu2 = "INSERT INTO tickets(fullname, subject, number, content) VALUES (?,?,?,?)";
        $result = $connectDB->query($qu2, $fullName,$subject, $id, $message);
        if ($result){
            echo "تیکت شما با موفقیت ثبت گردید و ما به زودی به آن پاسخ خواهیم داد.";
        }
        $connectDB -> close();
    }else {
        include "../view/ticket.php";
    }
}else{
    header("location:login.php?redirect=ticket.php");
}
