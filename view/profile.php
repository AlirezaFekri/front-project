<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/355b79ec86.js" crossorigin="anonymous"></script>
    <title>صفحه کاربری</title>
</head>
<body>
    <div class="right-side">
        <div class="inline">
            <?php echo $fullName;?>
            <br>
            <span class="number">
            <?php echo $phoneNumber; ?>
            </span>
        </div>
        <div class="inline left ">
            <a href=<?php echo "personalEdit.php?phone_number={$phoneNumber}"?>>
                <i class="fa-solid fa-pen-to-square link">  ویرایش</i>
            </a>
        </div>

    </div>
</body>
</html>