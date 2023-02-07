<?php 
/*
Template Name: service
*/
get_header();
?>

         <!-- bredecom End -->
  <?php 
	  
      get_template_part('template-parts/content','bredecom');
      ?>
    <!-- Navbar End -->

     <!-- Service Start -->
     <?php get_template_part('template-parts/content','service'); ?>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <?php get_template_part('template-parts/content','testimonial'); ?>
    <!-- Testimonial End -->


     <!-- Vendor Start -->
     <?php get_template_part('template-parts/content','vandor'); ?>
    <!-- Vendor End -->
    
<?php get_footer();?>