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

        //Query
        $qu = "INSERT INTO users(fullname,pass,phone_number) VALUES (?,?,?)";
        $qu2 = "select * from users where phone_number = ?";

        //execute query
        $resul = $connectDB -> query($qu2, $phoneNumber);
        

        //data validation
        if ($resul ->numRows() == 1){
            echo "شماره تلفن از قبل ثبت نام شده است. <a href='login.php'>وارد شوید</a>";
            $connectDB ->close();
        }
        else{
            $result = $connectDB->query($qu, $name, $password,$phoneNumber);
            $connectDB ->close();
            if ($result){
                echo "کاربر با موفقیت ایجاد شد";
                }
        }

}else{
        include "../view/register.php";
}
?>