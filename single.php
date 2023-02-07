<?php 

get_header();
?>

        <!-- bredecom End -->
  <?php 
	  
      get_template_part('template-parts/content','bredecom');
      ?>
    <!-- Navbar End -->
   


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="<?php the_post_thumbnail_url();?>" alt="">
                        <h1 class="mb-4"><?php the_title();?></h1>
                       <?php the_content();?>
                    </div>
                    <!-- Blog Detail End -->
    
                    
    
                    <!-- Comment Form Start -->
                    <div class="bg-light rounded p-5">
                  
                        <?php 
                        // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        
                        ?>
                    </div>
                    <!-- Comment Form End -->
                </div>
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
				<?php get_sidebar();?>
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->


   <!-- Vendor Start -->
   <?php get_template_part('template-parts/content','vandor'); ?>
    <!-- Vendor End -->
    

<?php get_footer();?>