<style>
	.detail-list-product{
		width: 1170px;
		float: left;
		margin-top: 20px;
		margin-left: calc((100% - 1170px) / 2);
		position: relative;
	}
	.detail-list-product .css-content{
		max-height: 200px;
		margin-bottom: 20px;
		overflow: hidden;
	}
	#product-content_showmore, #product-img_showmore {
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0;
		width: 100%;
		padding-top: 50px;
		text-align: center;
		background: 0 0;
		background: -moz-linear-gradient(top,rgba(255,255,255,0) 0,rgba(255,255,255,.91) 50%,#fff 55%);
		background: -webkit-gradient(left top,left bottom,color-stop(0,rgba(255,255,255,0)),color-stop(50%,rgba(255,255,255,.91)),color-stop(55%,#fff));
		background: -webkit-linear-gradient(top,rgba(255,255,255,0) 0,rgba(255,255,255,.91) 50%,#fff 55%);
		background: -o-linear-gradient(top,rgba(255,255,255,0) 0,rgba(255,255,255,.91) 50%,#fff 55%);
		background: -ms-linear-gradient(top,rgba(255,255,255,0) 0,rgba(255,255,255,.91) 50%,#fff 55%);
		background: linear-gradient(to bottom,rgba(255,255,255,0) 0,rgba(255,255,255,.91) 50%,#fff 55%);
		display: block;
		margin-bottom: 0;
	}
	#product-content_showmore a, #product-img_showmore a {
		color: #1d428a;
	}
</style>
<div id="banner-product" class="default">
	<img src="https://sudospaces.com/hoaphat-com-vn/2019/12/hinh-anh-cho-website-13.jpg" onerror="this.src='https://sudospaces.com/hoaphat-com-vn/2019/08/banner-2-1.png'" alt="">
	<div class="wrap">
		<h3>Sản phẩm</h3>		
	</div>
</div>
<div id="products" class="default">
	<div class="wrap">
		<div class="content default">
			<div class="item-product">
				<div class="image">
					<a href="http://thep.hoaphat.com.vn/language/vi/"><img src="https://sudospaces.com/hoaphat-com-vn/2019/08/screen-shot-2019-08-19-at-1-09-30-pm-large.png" alt=""></a>
				</div>
				<h3><a href="http://thep.hoaphat.com.vn/language/vi/"><i class="icon-hoaphat icon-next"></i>Thép xây dựng</a></h3>
			</div>
			<div class="item-product">
				<div class="image">
					<a href="http://ongthep.hoaphat.com.vn/language/vi/"><img src="https://sudospaces.com/hoaphat-com-vn/2019/08/screen-shot-2019-08-19-at-1-10-14-pm-large.png" alt=""></a>
				</div>
				<h3><a href="http://ongthep.hoaphat.com.vn/language/vi/"><i class="icon-hoaphat icon-next"></i>Ống thép</a></h3>
			</div>
			<div class="item-product">
				<div class="image">
					<a href="http://ton.hoaphat.com.vn/vi/trang-chu/"><img src="https://sudospaces.com/hoaphat-com-vn/2019/08/screen-shot-2019-08-19-at-1-11-32-pm-large.png" alt=""></a>
				</div>
				<h3><a href="http://ton.hoaphat.com.vn/vi/trang-chu/"><i class="icon-hoaphat icon-next"></i>Tôn mạ màu, mạ kẽm</a></h3>
			</div>
			<div class="item-product">
				<div class="image">
					<a href="http://thietbi.hoaphat.com.vn/language/vi/"><img src="https://sudospaces.com/hoaphat-com-vn/2019/08/screen-shot-2019-08-19-at-1-17-51-pm-large.png" alt=""></a>
				</div>
				<h3><a href="http://thietbi.hoaphat.com.vn/language/vi/"><i class="icon-hoaphat icon-next"></i>Chế tạo kim loại</a></h3>
			</div>
			<div class="item-product">
				<div class="image">
					<a href="http://dienlanh.hoaphat.com.vn/language/en/"><img src="https://sudospaces.com/hoaphat-com-vn/2019/08/screen-shot-2019-08-19-at-1-18-58-pm-large.png" alt=""></a>
				</div>
				<h3><a href="http://dienlanh.hoaphat.com.vn/language/en/"><i class="icon-hoaphat icon-next"></i>Điện lạnh</a></h3>
			</div>
			<div class="item-product">
				<div class="image">
					<a href="http://hoaphat.com/en/"><img src="https://sudospaces.com/hoaphat-com-vn/2019/08/screen-shot-2019-08-19-at-1-19-38-pm-large.png" alt=""></a>
				</div>
				<h3><a href="http://hoaphat.com/en/"><i class="icon-hoaphat icon-next"></i>Nội thất</a></h3>
			</div>
			<div class="item-product">
				<div class="image">
					<a href="http://mandaringarden2.vn/"><img src="https://sudospaces.com/hoaphat-com-vn/2019/10/flycam-man-2-large.jpg" alt=""></a>
				</div>
				<h3><a href="http://mandaringarden2.vn/"><i class="icon-hoaphat icon-next"></i>Bất động sản</a></h3>
			</div>
			<div class="item-product">
				<div class="image">
					<a href="https://hoaphatv2.dev1.pro/gioi-thieu"><img src="https://sudospaces.com/hoaphat-com-vn/2019/10/dsc9174-large.jpg" alt=""></a>
				</div>
				<h3><a href="https://hoaphatv2.dev1.pro/gioi-thieu"><i class="icon-hoaphat icon-next"></i>Nông nghiệp</a></h3>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$("body").on("click","#product-content_showmore",function(){
			var data_show = $(this).attr('data-show');
			if(data_show == 1){
				$('.detail-list-product .css-content').css('max-height','initial');
				$(this).attr('data-show', 0);
				$(this).find('a').html('Ẩn bớt <i class="fa fa-angle-up"></i>');
				$(this).css('padding-top', 0);
			}else{
				$('.detail-list-product .css-content').css('max-height','200px');
				$(this).attr('data-show', 1);
				$(this).find('a').html('Xem thêm <i class="fa fa-angle-down"></i>');
				$(this).css('padding-top', '50px');
			}
		});
	});
</script>
