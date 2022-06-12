<!doctype html>
<html lang=fa>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/addProduct.css">

    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/355b79ec86.js" crossorigin="anonymous"></script>
   

    <title>افزودن کالا</title>
</head>

<body>

    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
            <h1>افزودن محصول جدید</h1>

            <div class="div-body-matn">
                <label for="name">نام کالا
                    <span>*</span>
                </label>
                <br>

                <input type="text" name="name" id="name" required>
            </div>

            <br>

            <div>
                <label for="pic">تصویر کالا
                    <span>*</span>
                </label>
                <br>
                <label for="product-pic" class="product-pic">
                    Choose File <i class="fa-solid fa-images"></i>

                    <input type="file" name="product-pic" id="product-pic" accept="image/*" required>
                </label>
            </div>

            <br>
            <div class="grid-form">
                <div>
                    <label for="brand">برند
                        <span>*</span>
                    </label>
                    <br>

                    <select name="brand" id="brand" class="grid-input">
                        <option value="Samsung">Samsung</option>
                        <option value="Xiaomi">Xiaomi</option>
                        <option value="Apple">Apple</option>
                    </select>
                </div>

                <div>
                    <label for="cat">دسته بندی
                        <span>*</span>
                    </label>
                    <br>

                    <select name="cat" id="cat" class="grid-input">
                        <option value="charger">شارژر</option>
                        <option value="glass">محافظه صفحه نمایش</option>
                        <option value="handsfree">هندزفری</option>
                        <option value="case">گارد</option>
                    </select>
                </div>
                <div>
                    <label for="count">تعداد
                        <span>*</span>
                    </label>
                    <br>
                    <input type="number" name="count" id="count" class="grid-input" required>
                </div>
                <div>
                    <label for="price">قیمت
                        <span>*</span>
                    </label>
                    <br>

                    <input type="number" name="price" id="price" class="grid-input" required>
                </div>
                <br>
            </div>
            <div>
                <lable for="des">
                    توضیحات<span>*</span>
                </lable>
                <br>

                <textarea name="description" id="description" class="txtArea"></textarea>
            </div>
            <br>
            <div>
                <button class="btn-primary" type="submit" name="submit">
                    <i class="fa-solid fa-plus"></i>
                    اضافه کن !

                </button>
            </div>
        </form>
    </div>
</body>

</html>