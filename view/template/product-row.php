
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

        <?php
            switch ($v['status']){
                case "Active":
                    echo "<td id='productStatus{$v['id']}'>فعال</td>";
                    break;
                case "Deactive":
                    echo "<td id='productStatus{$v['id']}'>غیر فعال</td>";
                    break;
            }
        ?>

    <td>
        <button class="btn text">
            <a href="updateProduct.php?id=<?php echo $v['id']; ?>">ویرایش</a>
        </button>
        <?php
            if ($v['status'] == "Active"){
                echo "
                    <button id='btnStatus' onclick='deleteData({$v['id']});' class='btn text'>
                         غیرفعال  
                    </button>
                ";
            }
            else{
                echo "
                    <button id='btnStatus' onclick='activeData({$v['id']});' class='btn text'>
                         فعال  
                    </button>
                ";
            }
        ?>

    </td>

</tr>