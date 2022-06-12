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

                </div>
            </div>
</article>