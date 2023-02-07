<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php the_field('subheading', 'option');?></h5>
                <h1 class="mb-0"><?php the_field('heading', 'option');?></h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <?php 
                $args= array(
                    'post_type' => 'testimonial',
                    'posts_per_page' =>4

                );
                $query= new WP_Query($args);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
                        ?>
                        <div class="testimonial-item bg-light my-4">
                            <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                <img class="img-fluid rounded" src="<?php the_post_thumbnail_url();?>" style="width: 60px; height: 60px;" >
                                <div class="ps-4">
                                    <h4 class="text-primary mb-1"><?php the_title();?></h4>
                                    <small class="text-uppercase"><?php the_field('designation_');?></small>
                                </div>
                            </div>
                            <div class="pt-4 pb-5 px-5">
                              <?php the_field('testi_desc');?>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                
            </div>
        </div>
    </div>