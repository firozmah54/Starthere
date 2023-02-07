<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php the_field('business_subheading','option');?></h5>
                <h1 class="mb-0"><?php the_field('business_heading','option');?></h1>
            </div>
            <div class="row g-5">
            <?php 
                        $choose_businesse = get_field('choose_business','option');

                        foreach($choose_businesse as $business){
                            ?>
                             <div class="col-lg-4">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                    
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="<?php echo $business['icons'];?> text-white"></i>
                                    </div>
                                    <h4><?php echo $business['support_ttitle'];?></h4>
                                    <p class="mb-0"><?php echo $business['support_desc'];?></p>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
               
                
            </div>
        </div>
    </div>