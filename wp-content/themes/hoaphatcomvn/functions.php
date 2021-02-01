<?php
set_time_limit(500);

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
		load_theme_textdomain('hoaphat', $language_folder);

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
		register_nav_menu('primary-menu', __('Primary Menu', 'hoaphat'));

		//Them sidebar(widget)
		$sidebar = array(
			'name' => __('Main Sidebar', 'hoaphat'),
			'id' => 'main-sidebar',
			'description' => __('Default sidebar'),
			'class' => 'main-sidebar'
		);
		register_sidebar($sidebar);

		//require_once (dirname(__FILE__) . '/sample/sample-config.php');
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
		"local_jquery" => "jquery.min",
		"jquery_fancybox" => "jquery.fancybox",
		"owl_carousel" => "owl.carousel",
		"script_js" => "script",
		"contact" => "contact"
    );
    foreach ($js_file as $key => $value) {
    	wp_enqueue_script($key, URL_JS . "/" . $value . '.js', VERSION, false);
    }

    // if (is_page('lien-he')) {
    // 	wp_enqueue_script('contact', URL_JS . "/" .  'contact.js', VERSION, false);
    // }

    $ajaxSite = array(
        "siteurl" => get_bloginfo("url"),
        "tempurl" => get_bloginfo("template_directory"),
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'ajaxnonce' => wp_create_nonce('ajax-nonce')
    );
    wp_localize_script('local_jquery', 'myAjax', $ajaxSite );

    // In folder libs/lightgallery
    wp_enqueue_style("lightgallery.min", URL_LIBS_ . "/lightgallery.min.css", VERSION, false);
    wp_enqueue_script("lightgallery-all.min", URL_LIBS_ . "/lightgallery-all.min.js", VERSION, false);

}
add_action('wp_enqueue_scripts', 'wptuts_scripts_with_the_lot' );


function get_page_name(){
	$arr = array(
		"gioi-thieu",
		"van-hoa-doanh-nghiep",
		"san-pham",
		"chat-luong-hoa-phat",
		"quan-he-co-dong/cong-bo-thong-tin",
		"quan-he-co-dong/bao-cao-tai-chinh",
		"quan-he-co-dong/bao-cao-thuong-nien",
		"quan-he-co-dong/dai-hoi-co-dong",
		"quan-he-co-dong/van-ban-phap-ly",
		"quan-he-co-dong/cao-bach",
		"quan-he-co-dong/tro-giup-co-dong",
		"tuyen-dung",
		"lien-he"
	);

	$i = 0;
	$check = false;
	foreach ($arr as $value) {
		if (is_page($value)) {
			if(strpos($value, '/')) get_template_part('pages/page', explode("/", $value)[$i + 1]);
			else get_template_part('pages/page', $value);
			$check = true;
			break;
		} 
	}

	if($check == false) the_content();
}

function wp_category_template() {
	$category = get_queried_object();
	$parent_id = $category->category_parent;
	$templates = array();
	if ( $parent_id == 0 ) {
		$templates[] = "category-{$category->slug}.php";
		$templates[] = "category-{$category->term_id}.php";
		$templates[] = 'category.php';
	} else {
		$parent = get_category( $parent_id );
		$templates[] = "category-{$category->slug}.php";
		$templates[] = "category-{$category->term_id}.php";
		$templates[] = "category-{$parent->slug}.php";
		$templates[] = "category-{$parent->term_id}.php";
		$templates[] = 'category.php';
	}
	return locate_template( $templates );
}
add_filter( 'category_template', 'wp_category_template' );

function Generate_Featured_Image($image_url, $post_id){
    $upload_dir = wp_upload_dir();
    $image_data = file_get_contents($image_url);
    $filename = basename($image_url);
    if(wp_mkdir_p($upload_dir['path']))     $file = $upload_dir['path'] . '/' . $filename;
    else                                    $file = $upload_dir['basedir'] . '/' . $filename;
    file_put_contents($file, $image_data);

    $wp_filetype = wp_check_filetype($filename, null );
    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => sanitize_file_name($filename),
        'post_content' => '',
        'post_status' => 'inherit'
    );
    $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
    $res1= wp_update_attachment_metadata( $attach_id, $attach_data );
    $res2= set_post_thumbnail( $post_id, $attach_id );
}

function add_crawl_data(){
	if (!is_admin() && isset($_GET['act']) && $_GET['act']=='crawl'){
		require_once('core/crawler.php');
		$crawler = new Crawler_HoaPhat();
		$url = "https://www.hoaphat.com.vn/cong-nghe";
		$start = 1;
		$end = 3;
		$list_post = $crawler->crawl($url, $start, $end);

		if ( !function_exists('post_exists') ) {
		    require_once( ABSPATH . 'wp-admin/includes/post.php' );
		}

		$i = 0;
		if (!empty($list_post)){
		  	foreach ($list_post as $post){
		    	if (post_exists($post['title']) === 0){
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'post_title' => $post['title'],
						'post_name' => $post['slug'],
						'post_date' => $post['publish_date'],
						'post_content' => $post['content']
					);

					$post_id = wp_insert_post($args);

					if ($post_id > 0){
						wp_set_post_terms($post_id, 16, 'category');
						Generate_Featured_Image($post['featured_image'], $post_id);
						echo $i;
					}

				}
				$i++;
		   	}
		}
		die();
	}
}
add_action('init', 'add_crawl_data');

function get_excerpt($str) {
	$domd = new DOMDocument();
	libxml_use_internal_errors(true);
	$domd->loadHTML(mb_convert_encoding($str, 'HTML-ENTITIES', 'UTF-8'));
	libxml_use_internal_errors(false);

	$domx = new DOMXPath($domd);
	$items = $domx->query("//strong[position() = 1]");

	return $items->item(0)->textContent;
}

// Pagination
function page_nav() {
	if( is_singular() )
		return;
	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 ) return; 
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1; $max = intval( $wp_query->max_num_pages );

	/** Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<ul class="pagination" role="navigation">' . "\n";

	/** Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li class="page-item">%s</li>' . "\n", get_previous_posts_link('‹') );

	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li class="page-item">…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/** Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li class="page-item">%s</li>' . "\n", get_next_posts_link('›') );

	echo '</ul>' . "\n";

}

// Cau hinh mail
add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();  
    $phpmailer->Mailer = 'smtp';   
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
    $phpmailer->Port = 587;
    $phpmailer->Username = 'ducphamsalesforce@gmail.com';
    $phpmailer->Password = 'ynnlrseecepdegkb';
    $phpmailer->SMTPSecure = 'TLS';
}


// function send_mail(){
// 	$to = "ducphamsalesforce@gmail.com";
// 	$subject = "Email liên hệ đến từ website local_hoaphatcomvn";
// 	$headers[] = 'Content-Type: text/html; charset=UTF-8';
// 	$headers[] = 'From: hoaphat.com <emailtest@gmail.com>';
// 	$headers[] = 'Reply-to: hoaphatcomvn@gmail.com';
// 	$body = "Body here";

// 	wp_mail($to, $subject, $body, $headers);
// }
// add_action("wp_ajax_send_mail", "send_mail");
// add_action("wp_ajax_nopriv_send_mail", "send_mail");


add_action('wp_ajax_enquiry', 'send_mail');
add_action('wp_ajax_nopriv_enquiry', 'send_mail');
function send_mail(){
  if(!wp_verify_nonce( $_POST['nonce'], 'ajax-nonce')){
    wp_send_json_error('Nonce is incorrect', 401);
    die();
  }
  $formdata = [];
  wp_parse_str($_POST['send_mail'], $formdata);
  // email send
  $to = "ducphamsalesforce@gmail.com";
	$subject = "Email liên hệ đến từ website local_hoaphatcomvn";
	$headers[] = 'Content-Type: text/html; charset=UTF-8';
	$headers[] = 'From: hoaphat.com <emailtest@gmail.com>';
	$headers[] = 'Reply-to: hoaphatcomvn@gmail.com';
	$body = "Body here";

  try {
    if(wp_mail($to, $subject, $body, $headers) ){
      wp_send_json_success('Email sent');
    }
    else {
      wp_send_json_error('Email error');
    }
  } catch (Exception $e){
    wp_send_json_error($e->getMessage());
  }
}




/*
if( isset($_POST['submit']) ){
	$name = $_POST['name']; 
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$content = $_POST['content'];


	$headers[] = 'Content-Type: text/html; charset=UTF-8';
  	$headers[] = 'From: hoaphat.com <emailtest@gmail.com>';
  	$headers[] = 'Reply-to: hoaphatcomvn@gmail.com';
	$to = "ducphamsalesforce@gmail.com";
	$subject = "Email liên hệ đến từ website local_hoaphatcomvn";

	//  Noi dung
	$message = "HERE";
	$message .= "<strong>Họ và tên:</strong> " . $name . "<br />";
	$message .= "<strong>Email:</strong> " . $email . "<br />";
	$message .= "<strong>Số điện thoại:</strong> " . $phone . "<br />";
	$message .= "<br />" . $content;
}