<?php
include "dbConnect.php";
include"../library/db.php";

    if (isset($_POST['submit'])) {

        //set form value's
        $name = $_POST['name'];
        $family = $_POST['family'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];

        //DataBase connect
        $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);

        //value's to array
        $attr = [
            "fname" => $name,
            "family" => $family,
            "user_name" => $username,
            "pass" => $password,
            "phone_number" => $phoneNumber,
            "email" => $email
        ];

        // $fieldNames = array_keys($data);
        $fieldName = "";

        foreach ($attr as $key => $value) {
            $fieldName .= $key . ', ';
        }

        $fieldName = substr($fieldName, 0, strlen($fieldName) - 2);

        //Query
        $qu = "INSERT INTO users($fieldName) VALUES (?,?,?,?,?,?)";

        //execute query
        $result = $connectDB->query($qu, array_values($attr));

        if ($result){
            echo "کاربر با موفقیت ایجاد شد";
        }
    }else{
        include "../view/register.php";
    }
?>