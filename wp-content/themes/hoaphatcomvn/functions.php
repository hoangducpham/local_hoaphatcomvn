<?php
// Duong dan thu muc theme
define('THEME_URL', get_stylesheet_directory());
define('URL_CORE', THEME_URL . "/core");
require_once(URL_CORE . "/init.php");

define("URL", "http://localhost/local_hoaphatcomvn");
define("URL_THEME", get_template_directory_uri());
define("URL_CSS", get_template_directory_uri() . "/css");
define("URL_JS", get_template_directory_uri() . "/js");
define("URL_IMAGES", get_template_directory_uri() . "/images");
define("URL_LIBS_", get_template_directory_uri() . "/libs/lightgallery");
define("VERSION", '05012021');


// Khai bao chuc nang cua theme
if (!function_exists('hoaphatcomvn_theme_setup')) {
	function hoaphatcomvn_theme_setup(){
		//Thiet lap textdomain
		$language_folder = URL_THEME . '/languages';
		load_theme_textdomain('text-test', $language_folder);

		// Tu dong them link RSS len <head>
		add_theme_support('automatic-feed-links');

		// Them post thumbnail
		add_theme_support('post-thumbnails');

		// Them title-tag
		add_theme_support('title-tag');

		// Them custom background
		$default_background = array(
			'default-color' => '#FFFFFF'
		);
		add_theme_support('custom-background');

		//Them menu
		register_nav_menu('primary-menu', __('Primary Menu', 'text-test'));

		//Them sidebar(widget)
		$sidebar = array(
			'name' => __('Main Sidebar', 'text-test'),
			'id' => 'main-sidebar',
			'description' => __('Default sidebar'),
			'class' => 'main-sidebar'
		);
		register_sidebar($sidebar);

	}
	add_action('init', 'hoaphatcomvn_theme_setup');
}

//Thiet lap menu
if(!function_exists('hoaphatcomvn_menu')){
	function hoaphatcomvn_menu($menu){
		$menu = array(
			'theme_location' => $menu,
			'container' => 'nav',
			'container_class' => $menu
		);
		wp_nav_menu($menu);
	}
}

function wptuts_scripts_with_the_lot(){
    // wp_enqueue_style( 'slide', get_template_directory_uri() . '/css/slide.css', '20120208', false);
    // wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', '20120208', false);
    //wp_enqueue_script('my-script', URL_JS . '/myScript.js', VERSION, false);

    // In folder css
    $css_file = array(
    	"owl.carousel.min",
    	"animate",
    	"jquery.fancybox",
    	"news",
    	"style"
    );
    foreach ($css_file as $value) {
    	wp_enqueue_style($value, URL_CSS . "/" . $value . '.css', VERSION, false);
    }
    //wp_enqueue_style('stylesheet', URL_THEME . '/style.css', VERSION, false);

    // In folder js
	$js_file = array(
		"jquery.min",
		"jquery.fancybox",
    	"owl.carousel",
    	"script"
    );
    foreach ($js_file as $value) {
    	wp_enqueue_script($value, URL_JS . "/" . $value . '.js', VERSION, false);
    }

    // In folder libs/lightgallery
    wp_enqueue_style("lightgallery.min", URL_LIBS_ . "/lightgallery.min.css", VERSION, false);
    wp_enqueue_script("lightgallery-all.min", URL_LIBS_ . "/lightgallery-all.min.js", VERSION, false);

}
add_action('wp_enqueue_scripts', 'wptuts_scripts_with_the_lot' );


function get_page_name(){
	$arr = array(
		"gioi-thieu",
		"san-pham",
		"chat-luong-hoa-phat",
		"quan-he-co-dong/cong-bo-thong-tin",
		"quan-he-co-dong/bao-cao-tai-chinh",
		"quan-he-co-dong/bao-cao-thuong-nien",
		"quan-he-co-dong/dai-hoi-co-dong",
		"quan-he-co-dong/van-ban-phap-ly",
		"quan-he-co-dong/cao-bach",
		"quan-he-co-dong/tro-giup-co-dong",
		"tin-tuc/tin-tuc-tap-doan",
		"tin-tuc/bao-chi-viet-ve-hoa-phat",
		"tuyen-dung",
		"lien-he"
	);

	$i = 0;
	$check = false;
	foreach ($arr as $value) {
		if (is_page($value)) {
			if(strpos($value, '/')) get_template_part('template/page', explode("/", $value)[$i + 1]);
			else get_template_part('template/page', $value);
			$check = true;
			break;
		} 
	}

	if($check == false) the_content();
}