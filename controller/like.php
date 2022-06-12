<?php
include "dbConnect.php";
include "../library/db.php";
include "../utils/security.php";
if (Authentication::check()){
    $productid = $_GET['id'];
    $usrName = $_GET['username'];
    $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName, $dbCharset);
    //query
    $qu = "select * from likes where pid = ? and uname = ?";
    $qu2 = "update likes set status = ? where id = ?";
    $qu3 = "insert into likes(pid, uname,status) values(?,?,?)";
    $connectDB->query($qu,$productid,$usrName);
    $result ="";
    if ($connectDB->numRows() > 0 )  {
        $result = $connectDB->fetchArray();
        if ($result['status'] == "like"){
            $connectDB -> query($qu2,'dislike',$result['id']);
            $connectDB->close();
            return "dislike";
        }elseif($result['status'] == "dislike"){
            $connectDB -> query($qu2,'like',$result['id']);
            $connectDB->close();
            return "like";

        }
        
    }elseif($connectDB -> numRows() == 0){
        $connectDB -> query($qu3, $productid,$usrName,'like');
        if ($connectDB -> affectedRows() > 0) {
            return "like";
        }
        $connectDB->close();
    }
}else{
    header("Location:itemSell.php");
}
