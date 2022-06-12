<?php
include "dbConnect.php";
include "../library/db.php";
include "../utils/security.php";
$status = Authentication::check();


if ($status) {
    header("location:itemSell.php");
} else{
    Authentication::logout();
    //DataBase connect
    $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);

    if (isset($_POST['submit'])) {
        //get data
        $phoneNumber = $_POST['uname'];
        $password = $_POST['psw'];

        //query
        $qu = "select * from users where phone_number = ? AND pass = ?";

        //execute query
        $result = $connectDB->query($qu, $phoneNumber, $password);

        //validation data
        if ($connectDB->numRows() > 0) {
            $user = $connectDB->fetchArray();
            $id = $user['phone_number'];
            Authentication::login($id);
            Authorization::getRole($user['role_member']);
            if (Redirect::checkDIR()) {
                $redirect = Redirect::DIR();
                header("location: $redirect");
            } else {
                header("location: profile.php");
            }

        } else {
            include "../view/login.php";
            die ("نام کاربری یا رمز عبور اشتباه می باشد.");
        }

        $connectDB->close();
    } else {
        include "../view/login.php";
    }

}

