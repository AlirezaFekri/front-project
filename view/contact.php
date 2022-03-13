<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">

    <title>تماس با ما</title>
</head>
<body>
    <h1>تماس با ما</h1>
         <form method = "post">
            <div>
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
            <button type="submit" name ="submit">ارسال</button>
         </form>
</body>
</html>