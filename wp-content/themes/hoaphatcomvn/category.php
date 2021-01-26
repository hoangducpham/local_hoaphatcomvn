<?php get_header(); ?>

<div id="banner-product" class="default">
  <img src="https://sudospaces.com/hoaphat-com-vn/2020/12/san-pham.jpg" onerror="this.src='https://sudospaces.com/hoaphat-com-vn/2019/08/banner-2-1.png'" alt="">
  <div class="wrap"><h3><?php the_category(''); ?></h3></div>
</div>
<div id="news-category" class="default">
  <div class="wrap">
	<h1 class="title default">Tin tức tập đoàn</h1>
	<div class="top-content">
	  <ul>
<?php if ( have_posts() ) : ?>
	<?php $i=1; while ( have_posts() ) : the_post(); ?>
		<li>
		  <a href="<?php the_permalink(); ?>">
		  	<div class="image"><?php the_post_thumbnail(); ?></div>
		<?php if($i == 1){ ?>
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
		<?php } else { ?>
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
		<?php } ?>
		</a></li>
		<?php if($i == 4){ ?>
          </ul></div>
	      <div class="bottom-content clear default">
	        <div class="list-news">
		      <ul>
		<?php } ?>
	<?php $i++; endwhile; ?>
	</ul>
    <?php page_nav(); ?>
    </div>
    <?php get_sidebar(); ?>
    </div>
<?php else : ?>
  <p class="sorry"><?php _e( 'Xin lỗi chưa có bài viết trong chuyên mục' ); ?></p>
<?php endif; ?>
</div></div>

<?php get_footer(); ?>