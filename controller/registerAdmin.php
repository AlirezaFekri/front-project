<?php
include "dbConnect.php";
include"../library/db.php";
include "../utils/security.php";
if (Authorization::checkRole()) {
    if (isset($_POST['submit'])) {

        //set form value's
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        //DataBase connect
        $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);

        //value's to array
        $attr = [
            "phone_number" => $phoneNumber,
            "pass" => $password,
            "role_member" => $role
        ];

        // $fieldNames = array_keys($data);
        $fieldName = "";
        foreach ($attr as $key => $value) {
            $fieldName .= $key . ', ';
        }
        $fieldName = substr($fieldName, 0, strlen($fieldName) - 2);

        //Query
        $qu = "INSERT INTO users($fieldName) VALUES (?,?,?)";
        $qu2 = "select * from users where phone_number = ?";

        //execute query
        $resul = $connectDB->query($qu2, $phoneNumber);
        $connectDB->close();

        //data validation
        if ($resul->numRows() > 0) {
            echo "شماره تلفن از قبل ثبت نام شده است. <a href='login.php'>وارد شوید</a>";
        } else {
            $result = $connectDB->query($qu, array_values($attr));
            $connectDB->close();
            if ($result) {
                echo "کاربر با موفقیت ایجاد شد";
            }
        }

    } else {
        include "../view/registerAdmin.php";
    }
}else{
    header("location:login.php");
}
?>