<?php
include "dbConnect.php";
include"../library/db.php";
$id = $_GET['id'];

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $pic = $_FILES['pic'];
    $des = $_POST['description'];
    $count = $_POST['count'];
    $category = $_POST['cat'];
    $brand = $_POST['brand'];
    $dirSave = "../assets/images/";
    $file = $dirSave;

    if (isset($pic) && $pic['tmp_name'] !== "") {
        $file.= basename($pic['name']);
        move_uploaded_file($pic['tmp_name'], $file);
        $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);
        $qu = "UPDATE products SET name = ?,
                description= ?,
                count = ?,
                   pic_address =?,
                category = ?,
                brand = ? 
        where id = ?";

        $result = $connectDB->query($qu, $name, $des, $count,$file ,$category, $brand, $id);
        if ($result ->affectedRows() > 0){
            echo "باموفقیت بروز رسانی شد";
        }
    }else{
        $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);
        $qu = "UPDATE products SET name = ?,
                description= ?,
                count = ?,
                category = ?,
                brand = ? 
        where id = ?";

        $result = $connectDB->query($qu, $name, $des, $count,$category, $brand, $id);
        if ($result ->affectedRows() > 0){
            echo "باموفقیت بروز رسانی شد";
        }
    }
}else{
    //connect DB & query
    $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName,$dbCharset);
    $qu = "select * from products where id =?";

    //execute query
    $result = $connectDB->query($qu,$id);


    $row = $result->fetchArray();

//close connection
    $connectDB->close();

    include "../view/updateProduct.php";
}
