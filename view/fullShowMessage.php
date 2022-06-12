<!doctype html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>نمایش پیام ها</title>
</head>

<body>
    <div class="form">
        <form action="" method="post">
            <div class="inline">
                <label for="name">نام و نام خانوادگی : </label>
                <input type="text" id="name" value="<?php echo $massage['fullname'] ?>">
            </div>
            <div class="inline">
                <label for="subject">
                    موضوع:<span>*</span>
                </label>
                <select name="subject" id="subject" required>
                    <option value="sendANDpayment">ارسال و پرداخت</option>
                    <option value="Proposal" selected>پیشنهاد</option>
                    <option value="CriticismOrComplaint">انتقاد یا شکایت</option>
                    <option value="other">سایر موضوعات</option>
                </select>
            </div>
            <div>
                <label for="email">
                    شماره تلفن <span>*</span>
                </label>
                <input value="<?php echo $massage['number'] ?>" name="email" id="email" required>
            </div>

            <div>
                <label for="Message-text">
                    متن پیام: <span>*</span>
                </label>
                <textarea name="message" id="description" class="txtArea" required>
                <?php echo $massage['content'] ?>
            </textarea>

            </div>
    </div>
    </form>
</body>

</html>