<!doctype html>
<html lang="fa" dir = rtl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <form method="post">

        <div class="container">
            <label for="uname">شماره تلفن</label>
            <input type="text" id="uname" placeholder="شماره تلفن را وارد کنید" name="uname" required>

            <label for="psw">رمز عبور</label>
            <input type="password" id="psw" placeholder="رمز عبور وارد کنید" name="psw" required>

            <input type="checkbox" id="remember" checked="checked" name="remember">
            <label class="lbl" for="remember">
                من را به خاطر بسپار
            </label>

            <button type="submit" class="btn primary" name="submit">ورود</button>

        </div>

    </form>
</body>
</html>