
<tr class='tr'>
    <td><?php echo $v ['id']; ?></td>
    <td><?php echo $v['fullname']; ?></td>
    <td><?php echo $v['subject']; ?></td>
    <td><?php echo $v['number']; ?></td>
    <td><?php echo $v['content']; ?></td>
    <td>
        <button class="btn text">
            <a href="fullShowMassage.php?id=<?php echo $v ['id']; ?>">نمایش کامل متن</a>
        </button>
        <button class="btn text">
            <a href="fullShowMassage.php?del=<?php echo $v ['id']; ?>">حذف</a>
        </button>
    </td>
</tr>