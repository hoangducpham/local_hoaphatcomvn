<div class="sidebar-news">
  <p class="title">Báo chí viết về Hòa Phát</p>
  <ul>
<?php if ( have_posts() ) : ?>
	<?php $i=1; while ( have_posts() ) : the_post(); ?>
		<?php if($i <= 5){ ?>
		  <li>
			<a href="<?php the_permalink(); ?>">
			  <div class="image"><?php the_post_thumbnail(); ?></div>
			  <div class="infomation">
				<h3><?php the_title(); ?></h3>
			  </div>
			</a>
		  </li>
		<?php } else{ break; } ?>
	<?php $i++; endwhile; ?>
<?php endif; ?>
  </ul>
  <a style="float: right;" class="show-more" href="/tin-tuc/bao-chi-viet-ve-hoa-phat" title="">Xem thêm <i class="fa fa-caret-right" aria-hidden="true"></i></a>
</div>