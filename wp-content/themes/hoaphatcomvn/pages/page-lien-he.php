<?php global $hp_options; ?>
<div id="banner-product" class="default">
	<img src="<?php echo $hp_options['opt-image-page-lienhe']['url']; ?>">
	<div class="wrap">
		<h3>Liên hệ</h3>		
	</div>
</div>
<div id="contacts" class="default">
	<div class="wrap">
		<div class="top default">
			<div class="left">
				<div class="title-contact">Thông tin liên hệ</div>
				<div class="item">
					<p class="title">Tập đoàn hòa phát</p>
					<p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Văn phòng Hà Nội: 66 Nguyễn Du, P. Nguyễn Du, Q. Hai Bà Trưng, Hà Nội</p>
					<p class="phone"><i class="fa fa-phone" aria-hidden="true"></i> 024.628.48.666</p>
					<p class="phone"><i class="fa fa-fax" aria-hidden="true"></i> 024.628.48.456</p>
				</div>
				<div class="item">
					<p class="title">Miền trung</p>
					<p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Văn phòng Đà Nẵng: 171 Trường Chinh, P. An Khê, Q. Thanh Khê, Đà Nẵng</p>
					<p class="phone"><i class="fa fa-phone" aria-hidden="true"></i> 023.637 21 232</p>
					<p class="phone"><i class="fa fa-fax" aria-hidden="true"></i> 023.637 22 833</p>
				</div>
				<div class="item">
					<p class="title">Miền nam</p>
					<p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Văn phòng TP. Hồ Chí Minh: 643 Điện Biên Phủ, P. 25, Q. Bình Thạnh, TP. Hồ Chí Minh</p>
					<p class="phone"><i class="fa fa-phone" aria-hidden="true"></i> 028.629 85 599</p>
					<p class="phone"><i class="fa fa-fax" aria-hidden="true"></i> 028.629 87 799</p>
				</div>
			</div>
			<div class="right">
				<div class="title-contact">Gửi yêu cầu</div>
				<form action="" method="post" id="form-contacts">
				
					<div class="form-inline">
						<p class="error" style="padding-bottom: 10px;color: red;"></p>
						<input type="text" id="name" name="name" placeholder="Họ và tên (*)">
					</div>
					<div class="form-inline">
						<input type="text" id="address" name="address" placeholder="Địa chỉ">
					</div>
					<div class="form-inline">
						<input type="text" id="email" name="email" placeholder="Email (*)">
						<input type="number" id="phone" name="phone" placeholder="Số điện thoại (*)">
					</div>
					<div class="form-inline">
						<textarea id="content" name="content" placeholder="Nội dung (*)"></textarea>
					</div>
					<input type="submit" class="blue button radius form__submit_contact--tooth" value="Đặt lịch bác sĩ" name="submit" id="submit">
				</form>
				<div id="noti-success" class="alert alert-success" style="display:none">
    				<strong>Gửi thành công!</strong> Chúng tôi sẽ phản hồi nhanh nhất có thể.
  				</div>
  				<div id="noti-fail" class="alert alert-danger" style="display:none">
    				<strong>Gửi thất bại!</strong> Vui lòng thử lại sau.
  				</div>
			</div>
		</div>
	</div>
</div>