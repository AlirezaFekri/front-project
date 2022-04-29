
<tr class='tr'>
    <td><?php echo $v ['name']; ?></td>
    <td><?php echo $v['description']; ?></td>
    <td><?php echo $v['count']; ?></td>
    <?php
    switch ($v['category']){
        case "charger":
            echo "<td>شارژر</td>";
            break;
        case "glass":
            echo "<td>محافظ صفحه نمایش</td>";
            break;
        case "handsfree":
            echo "<td>هندزفری</td>";
            break;
        case "case":
            echo "<td>گارد</td>";
            break;
    }

    ?>
    <?php
    switch ($v['brand']){
        case "Samsung":
            echo "<td>سامسونگ</td>";
            break;
        case "Xiaomi":
            echo "<td>شیائومی</td>";
            break;
        case "Apple":
            echo "<td>اپل</td>";
            break;

    }

    ?>
    <td><?php echo number_format($v['price']); ?></td>
    <td>
        <button class="btn text">
            <a href="updateProduct.php?id=<?php echo $v['id']; ?>">ویرایش</a>
        </button>
        /
        <button class="btn text">
            <a href="updateProduct.php?delete=<?php echo $v['id']; ?>">حذف</a>
        </button>
    </td>

</tr>