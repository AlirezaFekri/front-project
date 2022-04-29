
<tr class='tr'>
    <td><?php echo $v ['phone_number']; ?></td>
    <td><?php echo $v['fullname']; ?></td>
    <td><?php echo $v['email']; ?></td>
    <td><?php echo $v['address']; ?></td>
    <?php
    switch ($v['role_member']){
        case "admin":
            echo "<td>ادمین</td>";
            break;
        case "seller":
            echo "<td>فروشنده</td>";
            break;
        case "buyer":
            echo "<td>خریدار</td>";
            break;
    }
    ?>

    <td>
        <button class="btn text">
            <a href='update.php?phone_number=<?php echo $v['phone_number']; ?>'>ويرايش</a>
        </button>
    </td>
</tr>