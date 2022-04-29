<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/355b79ec86.js" crossorigin="anonymous"></script>

    <title>تماس با ما</title>
</head>
<body>
    <div class="content-center">
        <h1>تماس با ما</h1>
             <form method = "post">
                <div c>
                    <label for="title"> عنوان: </label>
                    <input type="text" name="title" id="title">
                </div>

                <div>
                    <label for="description">متن پیام: </label>
                    <textarea name="description" id="description"></textarea>
                </div>

                <div>
                    <label for="email">ایمیل: </label>
                    <input type="email" name="email" id="email">
                </div>

                 <div>
                     <input type="checkbox" name="fast" id="fast">
                     <label for="fast">درخواست فوری </label>

                 </div>
                <button type="submit" class="btn filled" name ="submit">

                    ارسال
                    <i class="fa-solid fa-paper-plane"></i>

                </button>
             </form>
    </div>
</body>
</html>