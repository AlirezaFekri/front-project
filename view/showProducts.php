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
<h1>کالا ها</h1>
<table class="table" >
    <tr class="th">
        <td>نام کالا</td>
        <td>توضیحات</td>
        <td>تعداد</td>
        <td>تصویر</td>
        <td>دسته</td>
        <td>برند</td>
        <td>ویرایش</td>
    </tr>
    <?php
    $rows = $result->fetchAll();


    foreach ($rows as $key => $v) {
        print "
            <tr class='tr'>
                <td>{$v ['name']}</td>
                <td>{$v['description']}</td>
                <td>{$v['count']}</td>
                <td> <img src=\"{$v['pic_address']}\"> </td>
               <td>{$v['category']}</td>
                <td>{$v['brand']}</td>
                
                <td><a href='updateProduct.php?id={$v['id']}'>ویرایش</a></td>
            </tr>
        ";
    }

    echo "</table>";
    ?>


</body>
</html>
