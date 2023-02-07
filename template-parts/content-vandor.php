<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <?php 
                    $images= get_field('images','options');

                    foreach($images as $img){
                        ?>
                        <img src="<?php echo $img['client_logo']['url'];?>" alt="">
                        <?php
                    }
                    ?>
                    
                    
                </div>
            </div>
        </div>
    </div>