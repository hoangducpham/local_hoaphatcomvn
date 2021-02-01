<div class="sidebar-news">
  <p class="title">Bài viết mới nhất</p>
  <ul>
<?php 
	$category = new WP_Query(array(
	    'post_type' => 'post',
	    'post_status' => 'publish',
	    'orderby' => 'post_date',
	    'order' => 'ASC',
	    'posts_per_page' => 5
	));
?>
<?php $i=1; while ( $category->have_posts() ) :  $category->the_post(); ?>
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
	  </div>
	</a>
  </li>
<?php endwhile; ?>
  </ul>
  <a style="float: right;" class="show-more" href="#" title="">Xem thêm <i class="fa fa-caret-right" aria-hidden="true"></i></a>
</div>