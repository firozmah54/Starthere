<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php the_field('service_subtitle', 'option');?></h5>
                <h1 class="mb-0"><?php the_field('service_title', 'option');?></h1>
            </div>
            <div class="row g-5">
                <?php 
                $services = get_field('services','option');
                foreach($services as $service){
                    ?>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="<?php echo $service['icons'];?> text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $service['icon_title'];?></h4>
                        <p class="m-0"><?php echo $service['icon_desc'];?></p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                    <?php
                }
                ?>
                
                
            </div>
        </div>
    </div>