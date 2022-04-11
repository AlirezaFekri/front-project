<?php
include"dbConnect.php";
include "../library/db.php";

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $pic = $_FILES['pic'];
    $des = $_POST['description'];
    $count = $_POST['count'];
    $category = $_POST['cat'];
    $brand = $_POST['brand'];
    $dirSave = "../assets/images/";
    $file = $dirSave . basename($pic['name']);
    move_uploaded_file($pic['tmp_name'], $file);

    //DataBase connect
    $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);
    $qu = "insert into products (name, description, count , pic_address, category, brand) values(?,?,?,?,?,?)";

    $result = $connectDB->query($qu, $name, $des, $count, $file, $category, $brand);
    if ($result->affectedRows() > 0){
        echo "محصول با موفقیت اضافه شد.";
    }

}else{
    include "../view/addProduct.php";
}

