<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php the_field('pricing_subtitle', 'option');?></h5>
                <h1 class="mb-0"><?php the_field('pricing_title', 'option');?></h1>
            </div>
            <div class="row g-0">
                <?php 
                $args=array(
                    'post_type'=>'pricing',
                    'posts_per_page'=>3,
                    'order'    => 'ASC'
                );
                $query= new WP_Query($args);
                $i=0;
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
                        $i++;
                        ?>
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                            <div class=" <?php if( ($i % 2)==0){echo 'bg-white rounded shadow position-relative';}else{
                                echo 'bg-light rounded';
                            }?> ">
                                <div class="border-bottom py-4 px-5 mb-4">
                                    <h4 class="text-primary mb-1"><?php the_title();?></h4>
                                    <small class="text-uppercase"><?php the_field('pricing_subtitle');?></small>
                                </div>
                                <div class="p-5 pt-0">
                                    <h1 class="display-5 mb-3">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;"><?php the_field('currency');?></small><?php the_field('money');?><small
                                            class="align-bottom" style="font-size: 16px; line-height: 40px;">/ <?php the_field('diffient_time');?></small>
                                    </h1>
                                    <?php 
                                    $business_items = get_field('business_item');
                                    foreach($business_items as $item){
                                        ?>
                                          <div class="d-flex justify-content-between mb-3"><span><?php echo $item['item_text'];?></span><i class="<?php echo $item['item_select'];?>  pt-1"></i></div>
                                        <?php
                                    }
                                    ?>
                                  
                                    
                                    <a href="<?php the_field('btn_link');?>" class="btn btn-primary text-white py-2 px-4 mt-4"><?php the_field('btn_text');?></a>
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