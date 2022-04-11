<?php
include"dbConnect.php";
include "../library/db.php";

if (isset($_POST['submit'])) {
//validation form
    if (isset($_POST['title'],
        $_POST['description'],
        $_POST['email'])) {

        //set form value's
        $title = $_POST['title'];
        $description = $_POST['description'];
        $email = $_POST['email'];

        //value's to array
        $attr = [
            "title" => $title,
            "user_text" => $description,
            "email" => $email
        ];

        $fieldName="";
        $vals="";

        foreach ($attr as $key => $value) {
            $fieldName .= $key . ', ';
            $vals .= "'$value', ";
        }

        $fieldName = substr($fieldName, 0, strlen($fieldName) - 2);
        $vals = substr($vals, 0, strlen($vals) - 2);


        //DataBase connect
        $connectDB = new DB($dbHost, $dbUser, $dbPassword,$dbName, $dbCharset);

        //query
        $qu = "INSERT INTO contact($fieldName) VALUES (?,?,?)";

        //execute query
        $result = $connectDB ->query($qu,$title,$description,$email);

        $connectDB ->close();
        if ($result) {
            //successes message
            echo "تماس شما با موفقیت ثبت شد. تماس شما برای ما مهم است و به زوی یه آن پاسخ خواهیم داد.";
        }
        else{
            echo $connectDB->connect_error;
        }
    }
}else{
    include "../view/contact.php";
}
