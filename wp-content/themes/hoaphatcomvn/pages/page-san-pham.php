<?php global $hp_options; ?>  
<div id="banner-product" class="default">
	<img src="<?php echo $hp_options['opt-image-page-sanpham']['url']; ?>">
	<div class="wrap">
		<h3>Sản phẩm</h3>		
	</div>
</div>
<div id="products" class="default">
	<div class="wrap">
		<div class="content default">
			<?php
				$i = 0;
				while ( !empty($hp_options['opt-imagelink-page-sanpham'][$i]) && 
						!empty($hp_options['opt-link-page-sanpham'][$i]) && 
						!empty($hp_options['opt-description-page-sanpham'][$i]) ) { ?>
					<div class="item-product">
						<div class="image">
							<a href="<?php echo $hp_options['opt-link-page-sanpham'][$i]; ?>">
								<img src="<?php echo $hp_options['opt-imagelink-page-sanpham'][$i]; ?>">
							</a>
						</div>
						<h3><a href="<?php echo $hp_options['opt-link-page-sanpham'][$i]; ?>">
						  <i class="icon-hoaphat icon-next"></i><?php echo $hp_options['opt-description-page-sanpham'][$i]; ?>
						</a></h3>
					</div>
				<?php $i++; }
			?> 			
		</div>
	</div>
</div>