<!doctype html>
<html lang=fa>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/355b79ec86.js" crossorigin="anonymous"></script>
    <title>افزودن کالا</title>
</head>
<body>
    <div class="content-center">
        <form action="" method="post" enctype="multipart/form-data">
            <h1>افزودن محصول جدید</h1>
            <div>
                <label for="name">نام کالا:
                    <span>*</span>
                </label>
                <input type="text" name="name" id="name" required>
            </div>
            <br>
            <div>
                <label for="pic">تصویر کالا:
                    <span>*</span>
                </label>
                <input type="file" name="pic"  id="pic" required>
            </div>
            <br>
            <div>
                <label for="brand">برند:
                    <span>*</span>
                </label>
                <select name="brand" id="brand">
                    <option value="Samsung">Samsung</option>
                    <option value="Xiaomi">Xiaomi</option>
                    <option value="Apple">Apple</option>
                </select>
            </div>
            <div>
                <label for="cat">دسته بندی:
                    <span>*</span>
                </label>
                <select name="cat" id="cat">
                    <option value="charger">شارژر</option>
                    <option value="glass">محافظه صفحه نمایش</option>
                    <option value="handsfree">هندزفری</option>
                    <option value="case">گارد</option>
                </select>
            </div>
            <br>
            <div>
                <label for="count">تعداد
                    <span>*</span>
                </label>
                <input type="number" name="count"  id="count"  required>
            </div>
            <br>
            <div>
                <lable for = "des">
                    توضیحات:<span>*</span>
                </lable>
                <textarea name="description" id="des" ></textarea>
            </div>
            <br>
            <div>
                <button  type="submit" name="submit">
                    <i class="fa-solid fa-plus"></i>
                    افزودن

                </button>
            </div>
        </form>
    </div>
</body>
</html>
