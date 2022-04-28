<?php
include"dbConnect.php";
include "../library/db.php";
include "../utils/security.php";
if (Authorization::checkRole()) {

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $pic = $_FILES['pic'];
        $des = $_POST['description'];
        $count = $_POST['count'];
        $category = $_POST['cat'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $dirSave = "../assets/images/";
        $file = $dirSave . basename($pic['name']);
        move_uploaded_file($pic['tmp_name'], $file);

        //DataBase connect
        $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);
        $qu = "insert into products (name, description, count , pic_address, category, brand,price) values(?,?,?,?,?,?,?)";

        $result = $connectDB->query($qu, $name, $des, $count, $file, $category, $brand, $price);
        if ($result->affectedRows() > 0) {
            echo "محصول با موفقیت اضافه شد.";
        }

    } else {
        include "../view/addProduct.php";
    }
}else{
    header("location:login.php");
}