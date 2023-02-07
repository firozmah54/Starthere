<?php 
/*
Template Name: Team  
*/
get_header();

?>


        
        <!-- bredecom End -->
      <?php 
	  
      get_template_part('template-parts/content','bredecom');
      ?>
    
     <!-- Team Start -->
     <?php get_template_part('template-parts/content','team'); ?>
    <!-- Team End -->


     <!-- Vendor Start -->
     <?php get_template_part('template-parts/content','vandor'); ?>
    <!-- Vendor End -->

    
<?php get_footer();?>