<article class="card outlined">
    <img class="card-img-top" src="<?php echo $row['pic_address'];?>" alt="">
    <div class="card-body">
        <h3 class="card-title"> <?php echo $row['name']; ?> </h3>
        <p> <?php echo $row['price']; ?> </p>
        <div>
            <a href="#" class="btn primary">
                <i class="fa-solid fa-pen-to-square">افزودن به سبد خرید</i>
            </a>
        </div>
    </div>
</article>

