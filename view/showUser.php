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
        <td>نام کاربری</td>
        <td>نام</td>
        <td>نام خانوادگی</td>
        <td>ایمیل</td>
        <td>شماره تلفن</td>
        <td>رمز عبور</td>
        <td>ویرایش</td>
    </tr>
        <?php
       while ($row = $result->fetchAll()) {
           var_dump($row);
           print "
            <tr class='tr'>
                <td>{$row['user_name']}</td>
                <td>{$row ['fname']}</td>
                <td>{$row['family']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone_number']}</td>
                <td>{$row['pass']}</td>
                <td><a href='update.php?username={$row['user_name']}'>ویرایش</a></td>
            </tr>
        ";
       }
       echo "</table>";
        ?>


</body>
</html>
