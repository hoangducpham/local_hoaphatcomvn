<div class="news-new default">
  <p class="title">Tin đọc nhiều</p>
  <ul>
<?php
	$category = new WP_Query(array(
	    'cat' => $id,
		'post_type' => 'post',
		'post_status' => 'publish',
	    'orderby' => 'post_date',
	    'order' => 'ASC',
		'posts_per_page' => 5,
	));
?>
<?php while ( $category->have_posts() ) :  $category->the_post(); ?>
  <li>
	<a href="<?php the_permalink(); ?>">
	  <div class="image">
  		<img src="
  		  <?php 
			if ( !check_file_exist(get_the_post_thumbnail_url()) ){
				echo "http://localhost/local_hoaphatcomvn/wp-content/uploads/2021/01/default.jpg";
			}
			else echo get_the_post_thumbnail_url();
  		  ?>">
  	  </div>
	  <div class="infomation">
		<h3><?php the_title(); ?></h3>
		<p class="clear time"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date('d-m-Y'); ?> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_time(); ?></p>
	  </div>
	</a>
  </li>
<?php endwhile; ?>
  </ul>
</div>