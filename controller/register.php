<?php
include "dbConnect.php";
include"../library/db.php";

if (isset($_POST['submit'])) {

        //set form value's
        $name = $_POST['name'];
        $password = $_POST['password'];
        $phoneNumber = $_POST['phoneNumber'];

        //DataBase connect
        $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);

        //value's to array
        $attr = [
            "fullname" => $name,
            "pass" => $password,
            "phone_number" => $phoneNumber,
        ];

        // $fieldNames = array_keys($data);
        $fieldName = "";

        foreach ($attr as $key => $value) {
            $fieldName .= $key . ', ';
        }

        $fieldName = substr($fieldName, 0, strlen($fieldName) - 2);

        var_dump($fieldName);


        //Query
        $qu = "INSERT INTO users($fieldName) VALUES (?,?,?)";
        $qu2 = "select * from users where phone_number = ?";

        //execute query
        $resul = $connectDB -> query($qu2, $phoneNumber);
        $connectDB ->close();

        //data validation
        if ($resul ->numRows() == 1){
            echo "شماره تلفن از قبل ثبت نام شده است. <a href='login.php'>وارد شوید</a>";
        }
        else{
            $result = $connectDB->query($qu, array_values($attr));
            $connectDB ->close();
            if ($result){
                echo "کاربر با موفقیت ایجاد شد";
                }
        }

}else{
        include "../view/register.php";
}
?>