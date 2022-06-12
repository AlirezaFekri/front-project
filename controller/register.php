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
<<<<<<< HEAD

        //Query
        $qu = "INSERT INTO users(fullname,pass,phone_number) VALUES (?,?,?)";
        $qu2 = "select * from users where phone_number = ?";

        //execute query
        $resul = $connectDB -> query($qu2, $phoneNumber);
        

=======
        //Query
        $qu = "INSERT INTO users(fullname,pass,phone_number,role_member ) VALUES(?,?,?,?)";
        $qu2 = "select * from users where phone_number = ?";

        //execute query
        $connectDB -> query($qu2, $phoneNumber);
>>>>>>> 6ac56a4d18c7df1b46117dd2ef69165aedfefd27
        //data validation
        if ($connectDB ->numRows() > 0){
            echo "شماره تلفن از قبل ثبت نام شده است. <a href='login.php'>وارد شوید</a>";
            $connectDB ->close();
        }
        else{
<<<<<<< HEAD
            $result = $connectDB->query($qu, $name, $password,$phoneNumber);
            $connectDB ->close();
            if ($result){
=======
            $connectDB->query($qu, $name, $password, $phoneNumber,$role);
           
            if ($connectDB -> affectedRows() > 0){
>>>>>>> 6ac56a4d18c7df1b46117dd2ef69165aedfefd27
                echo "کاربر با موفقیت ایجاد شد";
                $connectDB ->close();
                }
        }

}else{
        include "../view/register.php";
}
?>