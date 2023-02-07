<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php 
                $args=array(
                    'post_type'=>'slider',
                    'posts_per_page'=>3
                );
                $query= new WP_Query($args);
                $i=0;
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
                        $i++;
                        ?>
                        <div class="carousel-item <?php if($i==1){echo "active";}?>">
                            <img class="w-100" src="<?php echo the_post_thumbnail_url();?>" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 900px;">
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?php the_field('slider_subheader');?></h5>
                                    <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?php the_title();?></h1>
                                    <a href="<?php the_field('but_url_1');?>" class="btn btn-primary text-white py-md-3 px-md-5 me-3 animated slideInLeft"><?php the_field('but_text_1');?></a>
                                    <a href="<?php the_field('but_url_2');?>" class="btn btn-outline-light text-white py-md-3 px-md-5 animated slideInRight"><?php the_field('but_text_1');?></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                
                ?>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>