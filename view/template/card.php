<article class="card outlined">
    <img class="card-img-top" src="<?php echo $row['pic_address'];?>" alt="">
    <div class="card-body">
        <h3 class="card-title"> <?php echo $row['name']; ?> </h3>
        <p> <?php echo $row['price']; ?> </p>
        <div>
            <a href="updateProduct.php?id = <?php echo $row['id']; ?> " class="btn primary">
                <i class="fa-solid fa-pen-to-square">ویرایش</i>
            </a>
        </div>
    </div>
</article>
masonry grid
