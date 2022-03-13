<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update User</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<div class="content-center">
    <form name="updateForm" method = "post">

        <h1>به روز رسانی اطلاعات</h1>
        <div class = "centeral">
            <label for="name">نام :</label>
            <input type="text" name="name" value="<?=$row['fname']?>">
        </div>
        <br>
        <div>
            <label for="family">نام خانوادگی:</label>
            <input type="text" name="family" value = "<?=$row['family']?>">
        </div>
        <br>
        <div>
            <label for="userName"> نام کاربری:</label>
            <input type="text" name="username" value = "<?=$row['user_name']?>">
        </div>
        <br>
        <div>
            <label for="password">رمز عبور:</label>
            <input type="text" name="password" value = "<?=$row['pass']?>">
        </div>
        <br>
        <div>
            <label for="phoneNumber"> شماره تلفن:</label>
            <input type="tel" name="phoneNumber" value = "<?=$row['phone_number']?>" maxlength="11">
        </div>
        <br>
        <div>
            <label for="email">ایمیل:</label>
            <input type="email"  name="email" value = "<?=$row['email']?>" required>
        </div>
        <div>
            <button  type="submit" name="submit">ارسال</button>
        </div>


    </form>

</body>
</html>



