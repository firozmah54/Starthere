<?php 
/*
Template Name: Quote
*/
get_header();
?>
  <!-- bredecom End -->
  <?php 
	  
      get_template_part('template-parts/content','bredecom');
      ?>
    <!-- Navbar End -->
 

   <!-- Quote Start -->
   <?php get_template_part('template-parts/content','quote'); ?>
    <!-- Quote End -->


   <!-- Vendor Start -->
   <?php get_template_part('template-parts/content','vandor'); ?>
    <!-- Vendor End -->
    

<?php get_footer();?>