<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase"><?php the_field('contact_subtitle','option');?></h5>
                        <h1 class="mb-0"><?php the_field('contact_title','option');?></h1>
                    </div>
                    <div class="row gx-3">
                        <?php 
                        $contact_supports= get_field('contact_support', 'option');
                        foreach($contact_supports as $contact_supp){
                            ?>
                             <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="<?php echo $contact_supp['icons'];?> text-primary me-3"></i><?php echo $contact_supp['icon_text'];?></h5>
                        </div>
                            <?php
                        }

                        ?>
                       
                        
                    </div>
                    <p class="mb-4"><?php the_field('contact_desc','option');?></p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"><?php the_field('call_text','option');?></h5>
                            <h4 class="text-primary mb-0"><?php the_field('phone_number','option');?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                       <?php 
                       echo do_shortcode('[contact-form-7 id="111" title="contact form"]');
                       ?>
                    </div>
                </div>
            </div>
        </div>
    </div>