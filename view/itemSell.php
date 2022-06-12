<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/355b79ec86.js" crossorigin="anonymous"></script>
    <title>نمایش کالا </title>
</head>

<body>
    <div class="header">
        <h1>کالا ها</h1>
    </div>
    <div class="grid grid-med-2 grid-large-4 ">
        <?php
        foreach ($products as  $row) {
            include "template/cardSell.php";
        }
        ?>
    </div>

    <script src="./../assets/js/like.js"></script>
</body>

</html>