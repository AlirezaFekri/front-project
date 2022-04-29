<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://cdn.tiny.cloud/1/7s2t5gm60bjkqdwd59bxof77zg6fiwdhh4y0t1palohu6jny/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#editor',
            plugins: 'directionality image',
            language: 'fa'
        });
    </script>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="right-side ticket">
            <div class="inline">
                <label for="name">نام و نام خانوادگی : </label>
                <input type="text" id="name" value="<?php echo $fullName?>" disabled>
            </div>
            <div class="inline">
                <label for="subject">
                    موضوع:<span>*</span>
                </label>
                <select name="subject" id="subject" required>
                    <option value="sendANDpayment">ارسال و پرداخت</option>
                    <option value="Proposal">پیشنهاد</option>
                    <option value="CriticismOrComplaint">انتقاد یا شکایت</option>
                    <option value="other">سایر موضوعات</option>
                </select>
            </div>
            <div>
                <label for="email">
                    ایمیل <span>*</span>
                </label>
                <input type="email" name="email" id="email" required>
            </div>

            <div>
                <label for="Message-text">
                    متن پیام: <span>*</span>
                </label>
                <textarea name="message" id="editor" required></textarea>
            </div>

            <div>
                <button class="btn filled" type="submit" name="submit">
                    ارسال
                </button>
            </div>
        </div>
    </form>
</body>
</html>
