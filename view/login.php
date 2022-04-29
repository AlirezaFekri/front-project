<!doctype html>
<html lang="fa" dir = rtl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/355b79ec86.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <form method="post">

        <div class="container">
            <div>
                <label for="uname" class="label-outlined">شماره تلفن</label>
                <div class="text-outlined">
                    <i class="fa-solid fa-user right" ></i>
                    <input class="input-text" type="text" id="uname" placeholder="شماره تلفن را وارد کنید" name="uname" required>
                </div>
            </div>
            <br>
            <div>
                <label class="label-outlined" for="psw">رمز عبور</label>
                <div class="text-outlined">
                    <input  class="input-text" type="password" id="psw" placeholder="رمز عبور وارد کنید" name="psw" required>
                    <i id="togglePassword" class="fa-solid fa-eye" id="lock"></i>
                </div>
            </div>
            <br>
            <input type="checkbox" id="remember" checked="checked" name="remember">
            <label class="lbl" for="remember">
                من را به خاطر بسپار
            </label>

            <button type="submit" class="btn filled" name="submit">ورود</button>

        </div>

    </form>
    <script src="../assets/js/index.js">

    </script>
</body>
</html>