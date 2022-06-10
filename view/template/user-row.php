
<tr class='tr' id="delete<?php echo $v ['phone_number']; ?>">
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
        <button onclick="deleteAjax(<?php echo $v ['phone_number']; ?>)" class="btn text">
            <a >ويرايش</a>
        </button>
    </td>
</tr>