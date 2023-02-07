<?php 
/*
Template Name: Home page 
*/
get_header();
?>

<?php  get_template_part('template-parts/content','slider'); ?>
    <!-- Navbar & Carousel End -->

    <!-- Facts Start -->
    <?php  get_template_part('template-parts/content','counter'); ?>
    <!-- Facts Start -->


    <!-- About Start -->
    <?php get_template_part('template-parts/content','about'); ?>
    <!-- About End -->


    <!-- Features Start -->
    <?php get_template_part('template-parts/content','feature'); ?>
    <!-- Features Start -->


    <!-- Service Start -->
    <?php get_template_part('template-parts/content','service'); ?>
    <!-- Service End -->


    <!-- Pricing Plan Start -->
    <?php get_template_part('template-parts/content','pricing'); ?>
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    <?php get_template_part('template-parts/content','quote'); ?>
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <?php get_template_part('template-parts/content','testimonial'); ?>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <?php get_template_part('template-parts/content','team'); ?>
    <!-- Team End -->


    <!-- Blog Start -->
    <?php get_template_part('template-parts/content','blog'); ?>
    <!-- Blog Start -->


    <!-- Vendor Start -->
    <?php get_template_part('template-parts/content','vandor'); ?>
    <!-- Vendor End -->
    
   <?php get_footer();?>