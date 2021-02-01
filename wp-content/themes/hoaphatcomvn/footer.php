<?php global $hp_options; ?>  
  <div id="footer" class="default" style="background-color:<?php  echo $hp_options['opt-background-footer']['background-color']; ?>">
    <img class="background-left" src="<?php echo URL_IMAGES . "/background_footer_left.png"; ?>" alt="">
    <div class="wrap">
	  <div class="col col1">
	  	<?php if ( $hp_options['opt-logo-on-footer'] == 1 ) : ?>
			<a href=""><img src="<?php echo $hp_options['opt-logo-footer']['url']; ?>" style="width:200px;height:120px;float:left;"></a>
		<?php else : ?>
			<a href=""><i class="icon-hoaphat icon-logo-footer"></i></a>
		<?php endif; ?>
		<p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $hp_options['opt-maintext-footer'] ?></p>
		<ul>
		  <?php 
		  	$i = 0;
		    while (!empty($hp_options['opt-icon-footer'][$i]) && !empty($hp_options['opt-icon-link-footer'][$i])) { ?>
		  		<li><a target="_blank" href="<?php echo $hp_options['opt-icon-link-footer'][$i]; ?>"><i class="<?php echo $hp_options['opt-icon-footer'][$i]; ?>" aria-hidden="true"></i></a></li>
		    <?php $i++;}; 
		  ?>
		</ul>
	  </div>
		
	  <div class="col col2">
		<p class="title"><?php echo $hp_options['opt-title-branch-1']; ?></p>
		<ul>
		  <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $hp_options['opt-address-branch-1']; ?></li>
		  <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $hp_options['opt-hotline1-branch-1']; ?></li>
		  <li><i class="fa fa-fax" aria-hidden="true"></i><?php echo $hp_options['opt-hotline2-branch-1']; ?></li>
		</ul>
	  </div>
	  <div class="col col2">
		<p class="title"><?php echo $hp_options['opt-title-branch-2']; ?></p>
		<ul>
		  <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $hp_options['opt-address-branch-2']; ?></li>
		  <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $hp_options['opt-hotline1-branch-2']; ?></li>
		  <li><i class="fa fa-fax" aria-hidden="true"></i><?php echo $hp_options['opt-hotline2-branch-2']; ?></li>
		</ul>
	  </div>
	  <div class="col col2">
		<p class="title"><?php echo $hp_options['opt-title-branch-3']; ?></p>
		<ul>
		  <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $hp_options['opt-address-branch-3']; ?></li>
		  <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $hp_options['opt-hotline1-branch-3']; ?></li>
		  <li><i class="fa fa-fax" aria-hidden="true"></i><?php echo $hp_options['opt-hotline2-branch-3']; ?></li>
		</ul>
	  </div>
	  <div class="col col2">
		<p class="title"><?php echo $hp_options['opt-title-branch-4']; ?></p>
		<ul>
		  <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $hp_options['opt-address-branch-4']; ?></li>
		  <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $hp_options['opt-hotline1-branch-4']; ?></li>
		  <li><i class="fa fa-fax" aria-hidden="true"></i><?php echo $hp_options['opt-hotline2-branch-4']; ?></li>
		</ul>
	  </div>
    </div>
    <img class="background-right" src="<?php echo URL_IMAGES . "/background_footer_right.png"; ?>" alt="">
  </div>
  <div id="footer-bottom" class="default">
	<div class="wrap">
	  <div class="left">
		<p>Copyright © 2019 <span>Hoa Phat Group</span>. All rights reserved. Designed by Sudo</p>
	  </div>
	  <div class="right">
		<a rel="nofollow" href="<?php echo $hp_options['opt-tou-link-footer']; ?>">Chính sách bảo mật</a>
		<a rel="nofollow" href="<?php echo $hp_options['opt-ppl-link-footer']; ?>">Điều khoản sử dụng</a>
	  </div>
	</div>
  </div>
  <section class="icon-fix icon-fix-right">
	<div class="item">
	  <div class="item-image">
		<a href="#" data-gototop="">
		  <img src="<?php echo URL_IMAGES . "/icon-fix.png"; ?>" alt="">
		</a>
	  </div>
	  <div class="item-tooltip">Về đầu trang</div>
	</div>
  </section>
</body>
</html>

