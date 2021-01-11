<!-- Header -->
<?php get_header(); ?>

  <!-- Content -->
  <?php //if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <?php //the_content(); ?>
  	<?php //endwhile;?>
  <?php //endif;?>

 
  <?php 
  	//if (function_exists("get_page_name")) {
  		//get_page_name();
  	//} 
  ?>

  <?php get_page_name();?>


<!-- Footer -->
<?php get_footer(); ?>
