<?php get_header(); ?>

<div id="banner-product" class="default">
  <img src="https://sudospaces.com/hoaphat-com-vn/2020/12/san-pham.jpg">
</div>
<div id="news-category" class="default">
  <div class="wrap">
	<h1 class="title default">Kết quả tìm kiếm</h1>
	<div class="bottom-content clear default">
	  <div class="list-news">
	  	<ul>
	  	  <?php if(have_posts()) : while(have_posts()) : the_post() ?>
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
	  	  	      <p class="clear time"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date('d-m-Y'); ?> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_time(); ?></p>
	  	  	      <h3><?php the_title(); ?></h3>
	  	  	      <p class="info">
  	  	    	    <?php
  	  	    	      $content = get_the_content();
  	  	    	      $content = apply_filters('the_content', $content);
  	  	    	      $excerpt = get_excerpt(html_entity_decode($content));
  	  	    	      echo $excerpt;
  	  	    	    ?>
	  	  	      </p>
	  	  	    </div>
	  	  	  </a>
	  	    </li>
	  	  <?php endwhile; else: ?>
			<p>Từ khóa bạn tìm không thấy vui lòng thử lại.</p>
		  <?php endif; ?>
	  	</ul>
	  	<!-- Pagination -->
	  	<?php page_nav(); ?>
	  </div>
	  <!-- Sidebar -->
	  <?php get_sidebar('new-posts'); ?>
	</div>
  </div>
</div>

<?php get_footer(); ?>