<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/table.css">
    <title>show Users</title>
</head>
<body>
<h1>نمایش اطلاعات کاربران</h1>
<table class="datatable" >
    <thead>
    <tr>
        <th>شماره ثبت</th>
        <th>نام و نام خانوادگی</th>
        <th>موضوع</th>
        <th>شماره تلفن</th>
        <th>متن پیام</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($message as $v) {
        include "template/message-row.php";
    }
    echo " </tbody></table>";
    ?>


</body>
</html>

