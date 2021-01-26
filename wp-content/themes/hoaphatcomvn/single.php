<!-- Header -->
<?php get_header(); ?>
  
  <!-- Content -->
  <div id="banner-product" class="default">
	<img src="https://sudospaces.com/hoaphat-com-vn/2020/12/san-pham.jpg" onerror="this.src='https://sudospaces.com/hoaphat-com-vn/2019/08/banner-2-1.png'" alt="">
	<div class="wrap"><h3><?php the_category(''); ?></h3></div>
  </div>
  <div id="news-detail" class="default">
	<div class="wrap">
	  <div class="content-detail default">
  <?php if (have_posts()) : ?>
  	<?php while (have_posts()) : the_post(); ?>
  	  <h1><?php the_title(); ?></h1>
	  <p class="clear time"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date('d-m-Y'); ?> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_time(); ?></p>
	  <div class="detail css-content default">
		<?php 
		  $content = get_the_content();
		  // This is where wordpress filters the content text and adds paragraphs
		  $content = apply_filters('the_content', $content);
		  echo html_entity_decode($content); 
		?>
		<!-- <p style="text-align: right;"><strong><?php //echo get_the_author(); ?></strong></p> -->
	  </div>
	  <div class="social default">
		<div style="float: right;padding-top: 20px;" class="addthis_inline_share_toolbox_d0v4"></div>
	  </div>
	  <div class="comments default">
		<p class="title">Bình luận</p>
		<div class="content-comments default">
		  <div class="fb-comments" data-href="https://www.hoaphat.com.vn/tin-tuc/ong-thep-va-ton-ma-mau-hoa-phat-to-chuc-hoi-nghi-khach-hang-chao-xuan-2021.html" data-width="100%" data-numposts="5"></div>
		</div>
	  </div></div>
	 
  	<?php endwhile; ?>
  <?php endif; ?>
	</div>
  </div>

<!-- Footer -->
<?php get_footer(); ?>
