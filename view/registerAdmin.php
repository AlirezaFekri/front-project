<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>
<body>

<div class="content-center">
    <form name="register-form" method = "post">

        <div id="error" class="error">
            وارد کردن تمام مقادیر ستاره دار الزامی می باشد.
        </div>
        <h1>ثبت نام</h1>
        <div>
            <label for="phoneNumber" required > شماره تلفن:
                <span>*</span
                ></label>
            <input type="tel" name="phoneNumber" id="phoneNumber" maxlength="11">
        </div>

        <br>

        <div>
            <label for="password">رمز عبور:
                <span>*</span>
            </label>
            <input type="password" name="password" id="password" value = "12345678" required>
            <span>رمز پیش فرض1 تا 8 می باشد.</span>
        </div>

        <br>

        <div class="radio-btn">
            <input type="radio" class="radio-btn" name="role" id="buyer" value = "buyer">
            <label for="buyer" class="lbl" >خریدار</label>
            <input type="radio" class="radio-btn"name="role" id="admin" value = "admin">
            <label for="admin" class="lbl">مدیر وبسایت</label>
            <input type="radio" class="radio-btn" name="role" id="seller" value = "seller">
            <label for="seller"  class="lbl">فروشنده</label>
        </div>
        <br>
        <div>
            <button class="btn filled" type="submit" name="submit">ارسال</button>
        </div>


    </form>

</body>
</html>