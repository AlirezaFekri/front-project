<?php
include "dbConnect.php";
include"../library/db.php";
include "../utils/security.php";

if (Authorization::checkRole()) {

    if (isset($_GET['delete'])){
        $delete = $_GET['delete'];
        $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);
        $qu = "delete from products where id =?";
        //execute query
        $result = $connectDB->query($qu, $delete);
        if ($connectDB->affectedRows() > 0 ){
            header("location:showProduct.php");
        }
        $connectDB->close();
    }
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $pic = $_FILES['pic'];
            $des = $_POST['description'];
            $count = $_POST['count'];
            $category = $_POST['cat'];
            $brand = $_POST['brand'];
            $price = $_POST['price'];
            $dirSave = "../assets/images/";
            $file = $dirSave;

            if (isset($pic) && $pic['tmp_name'] !== "") {
                $file .= basename($pic['name']);
                move_uploaded_file($pic['tmp_name'], $file);
                $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);
                $qu = "UPDATE products SET name = ?,
                        description= ?,
                        count = ?,
                           pic_address =?,
                        category = ?,
                        brand = ?,
                        price =?    
                where id = ?";

                $result = $connectDB->query($qu, $name, $des, $count, $file, $category, $brand, $price, $id);
                if ($result->affectedRows() > 0) {
                    echo "باموفقیت بروز رسانی شد";
                }
                $connectDB->close();
            } else {
                $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);
                $qu = "UPDATE products SET name = ?,
                        description= ?,
                        count = ?,
                        category = ?,
                        brand = ?,
                        price =?    
                        where id = ?";

                $result = $connectDB->query($qu, $name, $des, $count, $category, $brand, $price, $id);
                if ($result->affectedRows() > 0) {
                    echo "باموفقیت بروز رسانی شد";
                    $connectDB->close();
                }
            }
        } else {
            //connect DB & query
            $connectDB = new DB($dbHost, $dbUser, $dbPassword, $dbName, $dbCharset);
            $qu = "select * from products where id =?";

            //execute query
            $result = $connectDB->query($qu, $id);


            $row = $connectDB->fetchArray();

            //close connection
            $connectDB->close();

            include "../view/updateProduct.php";
        }
    }else{
        header("location:showProduct.php");
    }


}else{
    header("location:login.php");
}
