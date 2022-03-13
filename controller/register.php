<?php
include "dbConnect.php";
    if (isset($_POST['submit'])) {

        //set form value's
        $name = $_POST['name'];
        $family = $_POST['family'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];

        //DataBase connect
        $connectDB = new mysqli($dbHost, $dbUser, $dbPassword,$dbName);

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
        // $values = array_values($data);
        $fieldName = "";
        $vals = "";

        foreach ($attr as $key => $value) {
            $fieldName .= $key . ', ';
            $vals .= "'$value', ";
        }

        $fieldName = substr($fieldName, 0, strlen($fieldName) - 2);
        $vals = substr($vals, 0, strlen($vals) - 2);

        //Query
        $qu = "INSERT INTO users($fieldName) VALUES ($vals)";

        //set charset
        $connectDB->set_charset("utf8mb4");

        //execute query
        $result = $connectDB->query($qu);

        $connectDB->close();

        if ($result) {
          echo "کاربر گرامی اکانت با موفقیت ایجاد شد";
        } else {
            print $connectDB->connect_error;
        }


    }else{
        include "../view/register.php";
    }
?>