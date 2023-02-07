<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase"><?php the_field('about_subheading','option')?></h5>
                        <h1 class="mb-0"><?php the_field('about_heading','option')?></h1>
                    </div>
                    <p class="mb-4"><?php the_field('about_desc','option')?></p>
                    <div class="row g-0 mb-3">
                        <?php 
                        $about_supports= get_field('about_support','option');
                        foreach( $about_supports as $about_support){
                            ?>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $about_support['support_title'];?></h5>
                                 
                        </div>
                            <?php

                        }
                        
                        ?>
                    
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"><?php the_field('about_contact','option')?></h5>
                            <h4 class="text-primary mb-0"><?php the_field('phone_number','option')?></h4>
                        </div>
                    </div>
                    <a href="<?php the_field('about_link','option')?>" class="btn text-white btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s"><?php the_field('about_btn_text','option')?></a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <?php 
                        $about_images= get_field('about_images','option');
                        ?>
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php echo $about_images['url'];?>" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>