<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/table.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>show Users</title>
</head>
<body>
<h1>نمایش اطلاعات کاربران</h1>
<table class="datatable" >
    <thead>
    <tr>
        <th>نام کالا</th>
        <th>توضیحات</th>
        <th>تعداد</th>
        <th>دسته</th>
        <th>برند</th>
        <th>قیمت</th>
        <th>وضعیت</th>
        <th>ویرایش</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($products as $v) {
        include "template/product-row.php";
    }
    echo " </tbody></table>";
    ?>


    <script type="text/javascript" src="../assets/js/status.js">

    </script>
</body>
</html>
