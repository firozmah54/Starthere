<div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <?php 
                $counter_options= get_field('counter_options', 'option');
                $i= 0;
                foreach($counter_options as $counter){
                    $i++;
                    ?>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="<?php if( ($i % 2)==0){echo 'bg-light';}else{echo 'bg-primary';}?> shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class=" <?php if( ($i % 2)==0){echo 'bg-primary';}else{echo 'bg-white';}?> d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="<?php echo $counter['icons'];?>  <?php if( ($i % 2)==0){echo 'text-white';}else{echo 'text-primary';}?>"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class=" <?php if( ($i % 2)==0){echo 'text-primary';}else{echo 'text-white';}?> mb-0"><?php echo $counter['counter_text'];?></h5>
                            <h1 class="<?php if( ($i % 2)==0){echo 'text-primary';}else{echo 'text-white';}?> mb-0" data-toggle="counter-up"><?php echo $counter['counter_number'];?></h1>
                        </div>
                    </div>
                </div>
                    <?php
                }
                
                ?>
                
                
               
            </div>
        </div>
    </div>