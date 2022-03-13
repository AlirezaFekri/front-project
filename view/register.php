<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="..\style\style.css">
</head>
<body>
    <div class="content-center">
        <form name="register-form" method = "post">

            <div id="error" class="error">
                وارد کردن تمام مقادیر ستاره دار الزامی می باشد.
            </div>
            <h1>ثبت نام</h1>
            <div class = "centeral">
                <label for="name">نام :
                    <span>*</span>
                </label>
                <input type="text" name="name" id="name">
            </div>
            <br>
            <div>
                <label for="family">نام خانوادگی:
                    <span>*</span>
                </label>
                <input type="text" name="family" id="family">
            </div>
            <br>
            <div>
                <label for="userName"> نام کاربری:
                    <span>*</span>
                </label>
                <input type="text" name="username" id="userName">
            </div>
            <br>
            <div>
                <label for="password">رمز عبور:
                    <span>*</span>
                </label>
                <input type="password" name="password" id="password">
            </div>
            <br>
            <div>
                <label for="re-password">تکرار رمز عبور:
                    <span>*</span>
                </label>
                <input type="password" name="re-password" id="re-password">
            </div>
            <br>
            <div>
                <label for="phoneNumber"> شماره تلفن:
                    <span>*</span
                    ></label>
                <input type="tel" name="phoneNumber" id="phoneNumber" maxlength="11">
            </div>
            <br>
            <div>
                <label for="email">ایمیل:
                    <span>*</span>
                </label>
                <input type="email"  name="email" id="email" required>
            </div>
            <div>
                <button  type="submit" name="submit">ارسال</button>
            </div>


        </form>

</body>
</html>