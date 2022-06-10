<?php
include "dbConnect.php";
include "../library/db.php";

if (isset($_POST['submit'])) {

        //set form value's
        $name = $_POST['name'];
        $password = $_POST['password'];
        $phoneNumber = $_POST['phoneNumber'];
        $role = "buyer";
        //DataBase connect
        $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);
        //Query
        $qu = "INSERT INTO users(fullname,pass,phone_number,role_member ) VALUES(?,?,?,?)";
        $qu2 = "select * from users where phone_number = ?";

        //execute query
        $connectDB -> query($qu2, $phoneNumber);
        //data validation
        if ($connectDB ->numRows() > 0){
            echo "شماره تلفن از قبل ثبت نام شده است. <a href='login.php'>وارد شوید</a>";
            $connectDB ->close();
        }
        else{
            $connectDB->query($qu, $name, $password, $phoneNumber,$role);
           
            if ($connectDB -> affectedRows() > 0){
                echo "کاربر با موفقیت ایجاد شد";
                $connectDB ->close();
                }
        }

}else{
        include "../view/register.php";
}
?>