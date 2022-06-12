<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="form">
        <form name="register-form" method="post">

            <div id="error" class="error">
                وارد کردن تمام مقادیر ستاره دار الزامی می باشد.
            </div>
            <h1>ثبت نام</h1>
            <div class="centeral">
                <label for="name">نام و نام خانوادگی:
                    <span>*</span>
                </label>
                <input type="text" name="name" id="name" required>
            </div>
            <br>
            <div>
                <label for="password">رمز عبور:
                    <span>*</span>
                </label>
                <input type="password" name="password" id="password" required>
            </div>
            <br>
            <div>
                <label for="re-password">تکرار رمز عبور:
                    <span>*</span>
                </label>
                <input type="password" name="re-password" id="re-password" required>
            </div>
            <br>
            <div>
<<<<<<< HEAD
                <label for="phoneNumber" required> شماره تلفن:
                    <span>*</span></label>
                <input type="tel" name="phoneNumber" id="phoneNumber" maxlength="11">
=======
                <label for="phoneNumber" required > شماره تلفن:
                    <span>*</span
                    ></label>
                <input type="text" name="phoneNumber" id="phoneNumber" maxlength="11">
>>>>>>> 6ac56a4d18c7df1b46117dd2ef69165aedfefd27
            </div>
            <br>
            <div>
                <button class="btn-primary" type="submit" name="submit">ارسال</button>
            </div>


        </form>

</body>

</html>