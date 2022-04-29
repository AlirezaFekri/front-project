<article class="card outlined">
    <img class="card-img-top" src="<?php echo $row['pic_address'];?>" alt="">
    <div class="card-body">
        <h3 class="card-title"> <?php echo $row['name']; ?> </h3>
         <?php echo number_format($row['price']); ?>
        <div>
            <button class="btn outlined">
            <a href="#" >
                <i class="fa-solid fa-pen-to-square">افزودن به سبد خرید</i>
            </a>
            </button>
        </div>
    </div>
</article>

