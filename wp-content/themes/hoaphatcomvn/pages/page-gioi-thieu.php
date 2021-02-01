<?php global $hp_options; ?>  
<div id="banner-product" class="default">
  <img src="<?php echo $hp_options['opt-image-page-gioithieu']['url']; ?>">
  <div class="wrap"><h3>Giới thiệu</h3></div>
</div>
<div id="tab-about" class="default">
  <div class="wrap">
	<ul>
	  <li class="active about-general" data-scroll="about-general"><a href="javascript:;">Giới thiệu chung</a></li>
	  <li class="mission" data-scroll="mission"><a href="javascript:;">Sứ mệnh tầm nhìn</a></li>
	  <li class="history" data-scroll="history"><a href="javascript:;">Lịch sử hình thành</a></li>
	  <li class="maps-about" data-scroll="maps-about"><a href="javascript:;">Sơ đồ tổ chức</a></li>
	  <li class="company-members" data-scroll="company-members"><a href="javascript:;">Công ty thành viên</a></li>
	  <li class="news-home" data-scroll="news-home"><a href="javascript:;">Văn hóa doanh nghiệp</a></li>
	</ul>
  </div>
</div>
<div id="about-general" class="default">
  <div class="wrap">
	<div class="left">
	  <div class="box">
		<i class="icon-hoaphat icon-nhay"></i>
		<p><?php echo $hp_options['opt-title-block1']; ?></p>
	  </div>
	  <div class="content">
	    <p><?php echo $hp_options['opt-paragraph1-block1']; ?></p>
	    <p><?php echo $hp_options['opt-paragraph2-block1']; ?></p>
	    <p></p>
	    <p><?php echo $hp_options['opt-paragraph3-block1']; ?></p>
	  </div>
	</div>
	<div class="right">
	  <img src="<?php echo $hp_options['opt-image-block1']['url']; ?>">
	  <p><?php echo $hp_options['opt-image-description-block1']; ?></p>
	</div>
  </div>
</div>

<div id="mission" class="default">
  <div class="wrap">
  	<?php
  	  $i = 0;
  	  while ( !empty($hp_options['opt-title-block2'][$i]) && !empty($hp_options['opt-content-block2'][$i]) ) { ?>
  		<div class="item animated" data-animate="fadeInLeft">
	 	  <p class="title"><i class="icon-hoaphat icon-next"></i><?php echo $hp_options['opt-title-block2'][$i]; ?></p>
	 	  <p><?php echo $hp_options['opt-content-block2'][$i]; ?></p>
		</div>
  	  <?php $i++;}
  	?>
  </div>
</div>

<div id="history" class="default">
  <input type="hidden" name="_token" value="odceozqyolFjRkgXc0d7TpZwdNHWUwakdf4lGRck">		
  <div class="wrap">
	<div class="title-news-event">Lịch sử hình thành</div>
	<div class="clear"></div>
	<div class="image animated" data-animate="fadeInUp">
	  <img src="https://sudospaces.com/hoaphat-com-vn/2019/12/2-1.jpg">
	</div>
	<div class="event animated" data-animate="fadeInDown">
	  <ul>
		<li>
		  <p class="time">Tháng 9</p>
		  <p class="name-event">Công ty TNHH Thiết bị Phụ tùng Hòa Phát chính thức đổi tên Công ty thành Công ty TNHH Chế tạo kim loại Hòa Phát</p>
		</li>
		<li>
		  <p class="time">Tháng 11</p>
		  <p class="name-event">Thép Hòa Phát lần đầu cán mốc 300.000 tấn trong tháng 11, thị phần thép vượt 26%.</p>
		</li>
		<li>
		  <p class="time"></p>
		  <p class="name-event"></p>
		</li>
	  </ul>
	</div>
	<div class="clear"></div>
	<div class="timeline default">
	  <i class="fa fa-chevron-left" aria-hidden="true"></i>
	  <div style="width:calc(100% / 16)" class="item item-5" data-id="5"><a href="javascript:;">1992</a></div>
	  <div style="width:calc(100% / 16)" class="item item-6" data-id="6"><a href="javascript:;">1995</a></div>
	  <div style="width:calc(100% / 16)" class="item item-10" data-id="10"><a href="javascript:;">1996</a></div>
	  <div style="width:calc(100% / 16)" class="item item-9" data-id="9"><a href="javascript:;">2000</a></div> 
	  <div style="width:calc(100% / 16)" class="item item-11" data-id="11"><a href="javascript:;">2001</a></div>
	  <div style="width:calc(100% / 16)" class="item item-12" data-id="12"><a href="javascript:;">2004</a></div>
	  <div style="width:calc(100% / 16)" class="item item-13" data-id="13"><a href="javascript:;">2007</a></div>
	  <div style="width:calc(100% / 16)" class="item item-14" data-id="14"><a href="javascript:;">2009</a></div>
	  <div style="width:calc(100% / 16)" class="item item-15" data-id="15"><a href="javascript:;">2011</a></div>
	  <div style="width:calc(100% / 16)" class="item item-16" data-id="16"><a href="javascript:;">2012</a></div>
	  <div style="width:calc(100% / 16)" class="item item-17" data-id="17"><a href="javascript:;">2013</a></div>
	  <div style="width:calc(100% / 16)" class="item item-8" data-id="8"><a href="javascript:;">2015</a></div>
	  <div style="width:calc(100% / 16)" class="item item-7" data-id="7"><a href="javascript:;">2016</a></div>
	  <div style="width:calc(100% / 16)" class="item item-4" data-id="4"><a href="javascript:;">2017</a></div>
	  <div style="width:calc(100% / 16)" class="item item-39" data-id="39"><a href="javascript:;">2018</a></div>
	  <div style="width:calc(100% / 16)" class="item item-38  active" data-id="38"><a href="javascript:;">2019</a></div>
	  <i class="fa fa-chevron-right" aria-hidden="true"></i>
	</div>
	<img class="image-loading" src="<?php echo URL_IMAGES . "/image-loading.gif"; ?>">
  </div>
</div>

<div id="maps-about" class="default">
  <div class="wrap">
	<div class="title-news-event">Sơ đồ tổ chức</div>
	<div class="clear default">
	  <img src="https://sudospaces.com/hoaphat-com-vn/2020/12/mo-hinh-to-chuc-moi-1.png">
	</div>
  </div>
</div>

<div id="company-members" class="default">
  <div class="wrap">
	<div class="title-news-event"><?php echo $hp_options['opt-title-block3']; ?></div>
	<div class="content default animated" data-animate="fadeInUp">
	  <ul id="list-company-members">
	  	<?php
	  	  $i = 0;
	  	  while ( !empty($hp_options['opt-imagelink-block3'][$i]) && !empty($hp_options['opt-description-block3'][$i]) ) { ?>
	  	  	<li style="display: none;">
	  	  	  <div class="image">
  	  			<img src="<?php echo $hp_options['opt-imagelink-block3'][$i]; ?>">
  	  			<h3><a><?php echo $hp_options['opt-description-block3'][$i]; ?></a></h3>
	  	  	  </div>
	  	  	</li>
	  	  <?php $i++;}
	  	?>
	  </ul>
	  <p class="show-more" id="loadMore"><a href="javascript:;">Xem thêm <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
	</div>
  </div>
</div>

<div id="news-home" class="default">
  <div class="wrap">
	<div class="title-news-event"><a href=" /van-hoa-doanh-nghiep " title="">Văn hóa doanh nghiệp</a></div>
	<div class="content default">
	  <div class="col animated" data-animate="fadeInLeft">
		<div class="item-news">
		  <div class="image">
			<a href="https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/toi-cam-thay-rat-am-ap-trong-mai-nha-chung-hoa-phat-group.html"><img src="https://sudospaces.com/hoaphat-com-vn/2020/09/hoang-van-cong-2.jpg"></a>
		  </div>
		  <p class="time">07/09/2020 11:02</p>
		  <h3><a href="https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/toi-cam-thay-rat-am-ap-trong-mai-nha-chung-hoa-phat-group.html">Tôi cảm thấy rất ấm áp trong mái nhà chung Hòa Phát Group</a></h3>
		  <p class="info">Đã từng là Giám đốc kinh doanh của một công ty thức ăn chăn nuôi, với niềm yêu mến và muốn góp sức để cùng Hòa Phát thành công trong lĩnh vực mới ...</p>
		  <a href="https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/toi-cam-thay-rat-am-ap-trong-mai-nha-chung-hoa-phat-group.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		  <ul>
			<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?app_id=385713232082700&u=https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/toi-cam-thay-rat-am-ap-trong-mai-nha-chung-hoa-phat-group.html"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a target="_blank" href="http://twitter.com/share?text=Tôi cảm thấy rất ấm áp trong mái nhà chung Hòa Phát Group&url=https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/toi-cam-thay-rat-am-ap-trong-mai-nha-chung-hoa-phat-group.html"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/toi-cam-thay-rat-am-ap-trong-mai-nha-chung-hoa-phat-group.html&title=Tôi cảm thấy rất ấm áp trong mái nhà chung Hòa Phát Group&summary=Đã từng là Giám đốc kinh doanh của một công ty thức ăn chăn nuôi, với niềm yêu mến và muốn góp sức để cùng Hòa Phát thành công trong lĩnh vực mới TACN, anh Hoàng Văn Công ...&source=HoaPhat"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a target="_blank" href="http://www.tumblr.com/share/link?url=https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/toi-cam-thay-rat-am-ap-trong-mai-nha-chung-hoa-phat-group.html"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
		  </ul>
		</div>
		<div class="box-said">
		  <a href="/tin-tuc/ceo-hoa-phat-moi-ngay-chung-toi-lam-duoc-1-trieu-usd.html" title="">
			<p class="content-said">"Mỗi ngày, chúng tôi làm được 1 triệu USD"</p>
			<p class="name">-Ông Trần Tuấn Dương-</p>
			<p class="name">Phó Chủ tịch HĐQT kiêm Tổng Giám đốc Công ty Cổ phần Tập Đoàn Hòa Phát</p>
		  </a>
		</div>
	  </div>
	  <div class="col">
		<div class="box-said animated" data-animate="fadeInDown">
		  <a href="/tin-tuc/tap-doan-hoa-phat-gap-mat-dau-xuan-ky-hoi.html" title="">
			<p class="content-said">"Số nộp ngân sách của Hòa Phát tương đương với một tỉnh thứ 35-38 trên tổng số 64 tỉnh, thành"</p>
			<p class="name">-Ông Trần Đình Long-
			</p>
			<p class="name">Chủ tịch HĐQT Tập đoàn Hòa Phát</p>
		  </a>
		</div>
		<div class="item-news animated" data-animate="fadeInUp">
		  <div class="image">
		    <a href="https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/hoa-phat-ung-ho-tinh-quang-ngai-5-ty-dong-khac-phuc-hau-qua-bao-so-9.html"><img src="https://sudospaces.com/hoaphat-com-vn/2020/10/trao-5-ty-cho-quang-ngai.jpg"></a>
		  </div>
		  <p class="time">29/10/2020 08:00</p>
		  <h3><a href="https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/hoa-phat-ung-ho-tinh-quang-ngai-5-ty-dong-khac-phuc-hau-qua-bao-so-9.html">Hòa Phát ủng hộ tỉnh Quảng Ngãi 5 tỷ đồng khắc phục hậu quả bão số 9</a></h3>
		  <p class="info">Trước những thiệt hại vô cùng lớn do bão số 9 vừa gây ra, Tập đoàn Hòa Phát ủng hộ tỉnh Quảng Ngãi 5 tỷ đồng nhằm chung tay với địa phương khắc phục ...</p>
		  <a href="https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/hoa-phat-ung-ho-tinh-quang-ngai-5-ty-dong-khac-phuc-hau-qua-bao-so-9.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		  <ul>
			<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?app_id=385713232082700&u=https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/hoa-phat-ung-ho-tinh-quang-ngai-5-ty-dong-khac-phuc-hau-qua-bao-so-9.html"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a target="_blank" href="http://twitter.com/share?text=Hòa Phát ủng hộ tỉnh Quảng Ngãi 5 tỷ đồng khắc phục hậu quả bão số 9&url=https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/hoa-phat-ung-ho-tinh-quang-ngai-5-ty-dong-khac-phuc-hau-qua-bao-so-9.html"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/hoa-phat-ung-ho-tinh-quang-ngai-5-ty-dong-khac-phuc-hau-qua-bao-so-9.html&title=Hòa Phát ủng hộ tỉnh Quảng Ngãi 5 tỷ đồng khắc phục hậu quả bão số 9&summary=Trước những thiệt hại vô cùng lớn do bão số 9 vừa gây ra, Tập đoàn Hòa Phát ủng hộ tỉnh Quảng Ngãi 5 tỷ đồng nhằm chung tay với địa phương khắc phục hậu quả thiên tai. ...&source=HoaPhat"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a target="_blank" href="http://www.tumblr.com/share/link?url=https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/hoa-phat-ung-ho-tinh-quang-ngai-5-ty-dong-khac-phuc-hau-qua-bao-so-9.html"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
		  </ul>
		</div>
	  </div>
	  <div class="col animated" data-animate="fadeInRight">
		<div class="item-news">
		  <div class="image">
			<a href="https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/ong-thep-hoa-phat-to-chuc-gap-mat-giao-luu-voi-hiep-hoi-ket-cau-thep-mien-bac.html"><img src="https://sudospaces.com/hoaphat-com-vn/2020/06/hhkct-4.png"></a>
		  </div>
		  <p class="time">24/06/2020 09:15</p>
		  <h3><a href="https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/ong-thep-hoa-phat-to-chuc-gap-mat-giao-luu-voi-hiep-hoi-ket-cau-thep-mien-bac.html">Ống thép Hòa Phát tổ chức gặp mặt giao lưu với Hiệp hội kết cấu thép miền Bắc</a></h3>
		  <p class="info">Cuối tuần qua tại Hà Nội, Công ty Ống thép Hòa Phát đã tổ chức buổi gặp mặt và giao lưu với Hiệp hội kết cấu thép miền Bắc (HHKCTMB), với sự tham gia ...</p>
		  <a href="https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/ong-thep-hoa-phat-to-chuc-gap-mat-giao-luu-voi-hiep-hoi-ket-cau-thep-mien-bac.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		  <ul>
			<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?app_id=385713232082700&u=https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/ong-thep-hoa-phat-to-chuc-gap-mat-giao-luu-voi-hiep-hoi-ket-cau-thep-mien-bac.html"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a target="_blank" href="http://twitter.com/share?text=Ống thép Hòa Phát tổ chức gặp mặt giao lưu với Hiệp hội kết cấu thép miền Bắc&url=https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/ong-thep-hoa-phat-to-chuc-gap-mat-giao-luu-voi-hiep-hoi-ket-cau-thep-mien-bac.html"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/ong-thep-hoa-phat-to-chuc-gap-mat-giao-luu-voi-hiep-hoi-ket-cau-thep-mien-bac.html&title=Ống thép Hòa Phát tổ chức gặp mặt giao lưu với Hiệp hội kết cấu thép miền Bắc&summary=Cuối tuần qua tại Hà Nội, Công ty Ống thép Hòa Phát đã tổ chức buổi gặp mặt và giao lưu với Hiệp hội kết cấu thép miền Bắc (HHKCTMB), với sự tham gia của 20 doanh nghiệp ...&source=HoaPhat"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a target="_blank" href="http://www.tumblr.com/share/link?url=https://www.hoaphat.com.vn/van-hoa-doanh-nghiep/ong-thep-hoa-phat-to-chuc-gap-mat-giao-luu-voi-hiep-hoi-ket-cau-thep-mien-bac.html"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
		  </ul>
		</div>
		<div class="box-said">
		  <a href="/tin-tuc/4-trieu-tan-thep-co-gi-dau.html" title="">
			<p class="content-said">“4 triệu tấn thép – Có gì đâu!”</p>
			<p class="name">-Ông Kiều Chí Công-
			</p>
			<p class="name">Giám đốc Công ty TNHH Thép Hòa Phát Hưng Yên</p>
		  </a>
		</div>
	  </div>
	</div>
  </div>
</div>

<script>
	$(document).ready(function(){
		var height_fixed = $('#banner-product').height() + $('#header').height() + $('#tab-about').height();
		setTimeout(function(){ 
			$('#tab-about.fixed').css('display','none');
		}, 200);
		$('#company-members .show-more').on('click', function(){
			var page = $(this).attr('data-page');
			var token = $('input[name="_token"]').val();
			var locale = 'vi';
			$.ajax({
				type: 'post',
				dataType: 'json',
				data: {"_token":token, page:page,locale:locale},
				url: '/ajax/company-members',
				success:function(data){
					if(data.status == 1){
						$('#company-members ul').append(data.html);
						$('#company-members .show-more').attr('data-page', data.page);
					}else{
						if(locale == 'vi'){
							$('#company-members .show-more a').html('Đã hết dữ liệu');
						}else{
							$('#company-members .show-more a').html('Out of data');
						}
					}
				}
			});
		});
		$('.timeline .item').on('click', function(){
			$('.timeline .item').removeClass('active');
			$(this).addClass('active');
		});
		$('#tab-about li').on('click', function(){
			var data_scroll = $(this).attr('data-scroll');
			$('html, body').animate({
				scrollTop: $("#"+data_scroll).offset().top - 70
			}, 500);
		});
		$('#history .item').on('click', function(){
			var history_id = $(this).attr('data-id');
			var token = $('input[name="_token"]').val();s
			$.ajax({
				type: 'post',
				dataType: 'json',
				data: {"_token":token, id:history_id},
				url: '/ajax/get-history',
				beforeSend:function(){
					$("#history").addClass('history');
					$('#history .image-loading').css('display','block');
				},
				success:function(data){
					if(data.status == 1){
						$('#history .image img').attr('src', data.image);
						$('#history .event ul').html(data.content);
						setTimeout(function(){ 
							$("#history").removeClass('history');
							$('#history .image-loading').css('display','none');
						}, 500);
					}
				}
			});
		});

		size_li = $("#list-company-members li").size();
		x=6;
		$('#list-company-members li:lt('+x+')').show();
		$('#loadMore').click(function () {
			x= (x+6 <= size_li) ? x+6 : size_li;
			$('#list-company-members li:lt('+x+')').show();
		});
	});
</script>