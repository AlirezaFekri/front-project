<<<<<<< HEAD
<article class="card">
            <img class="card-img-top" src="<?php echo $row['pic_address'];?>">
            <div class="card-body">
                <h3 class="card-title"><?php echo $row['name']; ?> </h3>
                <p class="price">  <?php echo number_format($row['price']); ?></p>
                <div>
                    <a class="btn-secondary" href="#">
                        افزودن به سبد خرید
                    </a>
                    <button class="btn-like">
                        <div class="like">
                            <a  href="like.php?id=<?php echo $row['id'];?>&username=<?php echo $userName;?>">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                           
                        </div>
                    </button>
=======
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
            <button class="btn text">
                <div class="like">
                    <i class="fa-regular fa-heart"></i>
                </div> 
            </button>
             
        </div>
    </div>
</article>
>>>>>>> 6ac56a4d18c7df1b46117dd2ef69165aedfefd27

                </div>
            </div>
</article>