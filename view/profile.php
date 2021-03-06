<!doctype html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/355b79ec86.js" crossorigin="anonymous"></script>
    <title>صفحه کاربری</title>
</head>

<body>
    <div class="form">
        <div class="inline">
            <?php echo $fullName; ?>
            <br>
            <span class="number">
                <?php echo $phoneNumber; ?>
            </span>
        </div>
        <div class="grid-form">
            <div class="inline ">
                <a href=<?php echo "personalEdit.php" ?>>
                    <i class="fa-solid fa-pen-to-square link"> ویرایش</i>
                </a>
            </div>
            <div>
                <a href=<?php echo "ticket.php" ?>>
                    <i class="fa-solid fa-ticket"> ارسال تیکت</i>
                </a>
            </div>
        </div>
        <br>
        <div>
            <button class="btn-secondary">
                <a id="logout">
                    <i class="fa-solid fa-arrow-right-from-bracket"> خروج</i>
                </a>
            </button>
        </div>

    </div>
    <script src="../assets/js/auth/logout.js"></script>
</body>

</html>