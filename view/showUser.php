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
<table class="table" >
    <tr class="th">
        <td>شماره تلفن</td>
        <td>نام و نام خانوادگی</td>
        <td>ایمیل</td>
        <td>رمز عبور</td>
        <td>نشانی</td>
        <td>نقش</td>
        <td>ویرایش</td>
    </tr>
        <?php
       $rows = $result->fetchAll();

       $i = 0;
          foreach ($rows as $key[$i] => $v) {
              print "
            <tr class='tr'>
                <td>{$v ['phone_number']}</td>
                <td>{$v['fullname']}</td>
                <td>{$v['email']}</td>
                <td>{$v['pass']}</td>
               <td>{$v['address']}</td>
                <td>{$v['role_member']}</td>
                
                <td><a href='update.php?phone_number={$v['phone_number']}'>ویرایش</a></td>
            </tr>
        ";
}

       echo "</table>";
        ?>


</body>
</html>
