<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update User</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="content-center">
    <form name="updateForm" method = "post">

        <h1>به روز رسانی اطلاعات</h1>
        <div class = "centeral">
            <label for="name">نام و نام خانوادگی:</label>
            <input type="text" name="fullname" value="<?php if (isset($row['fullname'])) echo $row['fullname']?>">
        </div>
        <br>
        <div>
            <label for="password">رمز عبور:</label>
            <input type="text" name="password" >
        </div>
        <br>
        <div>
            <label for="phoneNumber"> شماره تلفن:</label>
            <input type="tel" name="phoneNumber" value = "<?php if (isset($row['phone_number'])) echo $row['phone_number']?>" maxlength="11">
        </div>
        <br>
        <div>
            <label for="email">ایمیل:</label>
            <input type="email"  name="email" value = "<?php if (isset($row['email'])) echo $row['email']?>" >
        </div>
        <br>
        <div>
            <label for="address">آدرس:</label>
            <textarea name="address"  cols="50" rows="10" value = "<?php if (isset($row['address'])) echo $row['address']?>"></textarea>
        </div>
        <div class="radio-btn">
            <input type="radio" name="role" id="buyer" value = "buyer">
            <label for="buyer" class="lbl" >خریدار</label>
            <input type="radio" name="role" id="admin" value = "admin">
            <label for="admin" class="lbl">مدیر وبسایت</label>
            <input type="radio" name="role" id="seller" value = "seller">
            <label for="seller" class="lbl">فروشنده</label>
        </div>
        <div>
            <button  type="submit" class="btn filled" name="submit">ارسال</button>
        </div>


    </form>

</body>
</html>




