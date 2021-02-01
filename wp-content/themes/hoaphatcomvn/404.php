<!-- Header -->
<?php get_header(); ?>

<style type="text/css" media="screen">
	.box-notificate__image {
		width: 100%;
		margin-bottom: 20px;
	}
	.box-notificate__image img {
		max-width: 100%;
		max-height: 100%;
		object-fit: cover;
		display: block;
		margin: 0 auto;
	}
	.box-notificate__title {
		font-size: 30PX;
		font-weight: bold;
		color: #333;
		margin-bottom: 10px;
		text-align: center;
	}
	.box-notificate__subtitle {
		line-height: 25px;
		text-align: center;
		margin-bottom: 30px;
	}
	.box-notificate__gohome{
		text-align: center;
	}
	.box-notificate__gohome a {
		background: #1d428a;
		padding: 10px 50px;
		color: #ffffff;
		border-radius: 5px;
		text-align: center;
	}
	.box-notificate{
		padding: 50px 0;
	}
	#header{
		border-bottom: 1px solid #e5e5e5;
	}
</style>
   
<main class="main">
	<section class="box-notificate">
		<div class="wrap">
			<div class="box-notificate__image">
				<img src="<?php echo URL_IMAGES . "/404-notfound.png";?>" alt="">
			</div>
			<div class="box-notificate__title">Không tìm thấy trang</div>
			<div class="box-notificate__subtitle">Trang bạn đang tìm có thể đã bị xóa, có tên <br> thay đổi hoặc tạm thời không khả dụng</div>
			<div class="box-notificate__gohome">
				<a href="<?php echo URL; ?>">Trang chủ</a>
			</div>
		</div>
	</section>
</main>
    
<!-- Footer -->
<?php get_footer(); ?>