<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php the_field('team_subtitle','option');?></h5>
                <h1 class="mb-0"><?php the_field('team_title','option');?></h1>
            </div>
            <div class="row g-5">
                <?php 
                $args=array(
                    'post_type'=>'team',
                    'posts_per_page'=>3
                );
                $query= new WP_Query($args);
                if($query->have_posts()) {
                    while($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?php echo the_post_thumbnail_url();?>" alt="">
                            <div class="team-social">
                                <?php 
                                $team_icons=get_field('team_icons');

                                foreach($team_icons as $team_icon){
                                    ?>
                                     <a class="btn btn-lg btn-primary btn-lg-square rounded" href="<?php echo $team_icon['icons_link']; ?>"><i class="<?php echo $team_icon['icons']; ?> fw-normal text-white"></i></a>
                                    <?php
                                }
                                
                                ?>
                               
                               
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary"><?php the_title();?></h4>
                            <p class="text-uppercase m-0"><?php the_field('team_degistion');?></p>
                        </div>
                    </div>
                </div>
                        <?php
                    }
                }
                ?>
                
                
            </div>
        </div>
    </div>