    <?php 
    /*
    Template Name: Pricing 
    */

    get_header();
    ?>

       <!-- bredecom End -->
       <?php 
	  
      get_template_part('template-parts/content','bredecom');
      ?>
    <!-- Navbar End -->
    

    <!-- Pricing Plan Start -->
    <?php get_template_part('template-parts/content','pricing'); ?>
    <!-- Pricing Plan End -->


     <!-- Quote Start -->
     <?php get_template_part('template-parts/content','quote'); ?>
    <!-- Quote End -->


    <!-- Vendor Start -->
    <?php get_template_part('template-parts/content','vandor'); ?>
    <!-- Vendor End -->
    

<?php get_footer();?>