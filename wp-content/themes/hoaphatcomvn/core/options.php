<?php
	if ( !class_exists( 'HoaPhat_Theme_Options' ) ) {

		/* class chứa toàn bộ code tạo options trong theme từ Redux Framework */
		class HoaPhat_Theme_Options {
			public $args = array();
			public $sections = array();
			public $theme;
			public $ReduxFramework;

			/* Load Redux Framework */
			public function __construct() {

				if ( !class_exists( 'ReduxFramework' ) ) { return; }

     			// This is needed. Bah WordPress bugs.
				if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
					$this->initSettings();
				} else {
					add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
				}

			}

			/** Thiết lập các method muốn sử dụng
                Method nào được khai báo trong này thì cũng phải được sử dụng **/
            public function initSettings() {
				// Thiết lập một số tùy chọn cho cái Theme Options.
                $this->setArguments();

    			// Tạo mục hướng dẫn ngay bên trong phần hiển thị Theme Options.
                $this->setHelpTabs();

    			// Chia phân mục các tùy chọn trong Theme Options.
    			// Khai báo các field tùy chọn bên trong phương thức này.
                $this->setSections();

			    if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
			    	return;
			    }

			    $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
			}

			/** Thiết lập cho method setAgruments
				Method này sẽ chứa các thiết lập cơ bản cho trang Options Framework như tên menu chẳng hạn **/
			public function setArguments() {
			    $theme = wp_get_theme(); // Lưu các đối tượng trả về bởi hàm wp_get_theme() vào biến $theme để làm một số việc tùy thích.
			    $this->args = array(
		            // Các thiết lập cho trang Options
		            'opt_name'  => 'hp_options', // Tên biến trả dữ liệu của từng options, ví dụ: hp_options['field_1']
		            'display_name' => $theme->get( 'Name' ), // Thiết lập tên theme hiển thị trong Theme Options
		            'menu_type'          => 'menu',
			        'allow_sub_menu'     => true,
			        'menu_title'         => __( 'HP Theme Options', 'hoaphat' ),
			        'page_title'         => __( 'HP Theme Options', 'hoaphat' ),
			        'dev_mode' => false,
			        'customizer' => true,
			        'google_api_key' => 'AIzaSyBrtNup0lopuMeKh7rHj_DQLVI0uIXQhRE',
			        'menu_icon' => '', // Đường dẫn icon của menu option
			        // Chức năng Hint tạo dấu chấm hỏi ở mỗi option để hướng dẫn người dùng */
			        'hints' => array(
			            'icon'          => 'icon-question-sign',
			            'icon_position' => 'right',
			            'icon_color'    => 'lightgray',
			            'icon_size'     => 'normal',
			            'tip_style'     => array(
			                'color'   => 'light',
			                'shadow'  => true,
			                'rounded' => false,
			                'style'   => '',
			            ),
			            'tip_position'  => array(
			                'my' => 'top left',
			                'at' => 'bottom right',
			            ),
			            'tip_effect'    => array(
			                'show' => array(
			                    'effect'   => 'slide',
			                    'duration' => '500',
			                    'event'    => 'mouseover',
			                ),
			                'hide' => array(
			                    'effect'   => 'slide',
			                    'duration' => '500',
			                    'event'    => 'click mouseleave',
			                ),
			            ),
			        ) // end Hints
		    	);
			}

			/** Thiết lập khu vực Help để hướng dẫn người dùng **/
			public function setHelpTabs() {

			    // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
				$this->args['help_tabs'][] = array(
					'id'      => 'redux-help-tab-1',
					'title'   => __( 'Theme Information 1', 'hoaphat' ),
					'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'hoaphat' )
				);

				$this->args['help_tabs'][] = array(
					'id'      => 'redux-help-tab-2',
					'title'   => __( 'Theme Information 2', 'hoaphat' ),
					'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'hoaphat' )
				);

			    // Set the help sidebar
				$this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'hoaphat' );
			}

			/** Thiết lập từng phần trong khu vực Theme Options
				Mỗi section được xem như là một phân vùng các tùy chọn
				Trong mỗi section có thể sẽ chứa nhiều field **/
			public function setSections() {
				// Header Section
			    $this->sections[] = array(
			        'title'  => __( 'Header', 'hoaphat' ),
			        'desc'   => __( 'All of settings for header on this theme.', 'hoaphat' ),
			        'icon'   => 'el-icon-home',
			        'fields' => array(
			        	// Mỗi array là một field
			        	array(
			        		'id'       => 'opt-swith-logo-header',
			        		'type'     => 'switch',
			        		'title'    => __( 'Enable Image Logo', 'hoaphat' ),
					        'compiler' => 'bool', // Trả về giá trị kiểu true/false (boolean)
					        'desc'     => __( 'Do you want to use image as a logo?', 'hoaphat' ),
					        'on' 	   => __('Enabled', 'hoaphat'),
					        'off' 	   => __('Disabled', 'hoaphat')
					    ),
			        	array(
			        		'id'       => 'opt-logo-header',
			        		'type'     => 'media',
			        		'title'    => __( 'Logo Image', 'hoaphat' ),
			        		'desc'     => __( 'Image for Header logo', 'hoaphat' ),
			        	),
			        )
			    );



			    // Footer Section
			    $this->sections[] = array(
			        'title'  => __('Footer', 'hoaphat'),
			        'desc'   => __('All of settings for footer on this theme.', 'hoaphat'),
			        'icon'   => 'el-icon-home',
			        'fields' => array(
			        	array(
			        		'id'       => 'opt-logo-on-footer',
			        		'type'     => 'switch',
			        		'title'    => __('Select Logo', 'hoaphat'),
					        'compiler' => 'bool', // Trả về giá trị kiểu true/false (boolean)
					        'desc'     => __('Do you want to use new image as a logo?', 'hoaphat'),
					        'on' => __('Enabled', 'hoaphat'),
					        'off' => __('Disabled', 'hoaphat')
					    ),
					    array(
			        		'id'       => 'opt-logo-footer',
			        		'type'     => 'media',
			        		'title'    => __('Logo Footer', 'hoaphat'),
			        		'desc'     => __('Image for Footer logo', 'hoaphat'),
			        	),
					    array(         
					    	'id'       => 'opt-background-footer',
					    	'type'     => 'background',
					    	'title'    => __('Background Color', 'hoaphat'),
					    	'background-repeat' 	=> false,
					    	'background-attachment' => false,
					    	'background-size' 		=> false,
					    	'background-position' 	=> false,
					    	'background-image'		=> false,
					    	'default'  => array(
					    		'background-color' => '#1d428a'
					    	),
					    ),
			        	array(
				        	'id'       => 'opt-maintext-footer',
			        		'type'     => 'text',
			        		'title'    => __('Address', 'hoaphat'),
			        		'desc'     => __('The official address of the company', 'hoaphat'),
			        		'default'  => __('KCN Phố Nối A, Xã Giai Phạm, Huyện Yên Mỹ, Tỉnh Hưng Yên, Việt Nam', 'hoaphat')
			        	),
			        	array(
			    			'id'	   => 'opt-icon-footer',
			    			'type'	   => 'multi_text',
			    			'title'    => __('Icon Name', 'hoaphat'),
			    			'subtitle' => __('Icon name in <a href="https://fontawesome.com/" target="_blank">fontawesome.com</a>', 'hoaphat'),
			    			'desc' 	   => __('Example: fas fa-ad', 'hoaphat'),
			    			'default'  => 'fas fa-ad'
			    		),
			    		array(
			    			'id'	   => 'opt-icon-link-footer',
			    			'type' 	   => 'multi_text',
			    			'title'    => __('Link In Icon', 'hoaphat'),
			    			'subtitle' => __('Link corresponding to each of the above icons', 'hoaphat'),
			    			'desc' 	   => __('Link to the respective website', 'hoaphat'),
			    			'default'  => 'https://www.hoaphat.com.vn/'
			    		),
			        	array(
				        	'id'       => 'opt-tou-link-footer',
			        		'type'     => 'text',
			        		'title'    => __('Terms Of Use Link', 'hoaphat'),
			        		'desc'     => __('Path to your Terms of Use page', 'hoaphat'),
			        		'default'  => 'https://www.hoaphat.com.vn/'
			        	),
			        	array(
				        	'id'       => 'opt-ppl-link-footer',
			        		'type'     => 'text',
			        		'title'    => __('Privacy Policy Link', 'hoaphat'),
			        		'desc'     => __('Path to your Privacy Policy page', 'hoaphat'),
			        		'default'  => 'https://www.hoaphat.com.vn/'
			        	),
			        ),
				);

				$this->sections[] = array(
					'subsection' => true,
			    	'title'   => __('Office Address 1', 'hoaphat'),
			    	'icon'    => 'el-icon-arrow-right',
			    	'desc'    => __('Edit infomation Office Address 1', 'hoaphat'),
			    	'fields'  => array(
			    		array(
			    			'id'    => 'opt-title-branch-1',
			    			'type'  => 'text',
			    			'title' => __('Title','hoaphat'),
			    			'desc'  => __('Branch name', 'hoaphat'),
			    			'default'  => __('Văn phòng TP HCM', 'hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-address-branch-1',
			    			'type'  => 'text',
			    			'title' => __('Address','hoaphat'),
			    			'default'  => __('Số 9, Nguyễn Thị Minh Khai, Quận 1, TP.HCM', 'hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-hotline1-branch-1',
			    			'type'  => 'text',
			    			'title' => __('Mobile Phone','hoaphat'),
			    			'default'  => __('028 629 75 599','hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-hotline2-branch-1',
			    			'type'  => 'text',
			    			'title' => __('Phone','hoaphat'),
			    			'default'  => __('024 628 33 456','hoaphat'),
			    		),
			    	),
			    );
				$this->sections[] = array(
					'subsection' => true,
			    	'title'   => __('Office Address 2', 'hoaphat'),
			    	'icon'    => 'el-icon-arrow-right',
			    	'desc'    => __('Edit infomation Office Address 2', 'hoaphat'),
			    	'fields'  => array(
			    		array(
			    			'id'    => 'opt-title-branch-2',
			    			'type'  => 'text',
			    			'title' => __('Title','hoaphat'),
			    			'desc'  => __('Branch name', 'hoaphat'),
			    			'default'  => __('Văn phòng TP HCM', 'hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-address-branch-2',
			    			'type'  => 'text',
			    			'title' => __('Address','hoaphat'),
			    			'default'  => __('Số 9, Nguyễn Thị Minh Khai, Quận 1, TP.HCM', 'hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-hotline1-branch-2',
			    			'type'  => 'text',
			    			'title' => __('Mobile Phone','hoaphat'),
			    			'default'  => __('028 629 75 599','hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-hotline2-branch-2',
			    			'type'  => 'text',
			    			'title' => __('Phone','hoaphat'),
			    			'default'  => __('024 628 33 456','hoaphat'),
			    		),
			    	),
			    );
			    $this->sections[] = array(
					'subsection' => true,
			    	'title'   => __('Office Address 3', 'hoaphat'),
			    	'icon'    => 'el-icon-arrow-right',
			    	'desc'    => __('Edit infomation Office Address 3', 'hoaphat'),
			    	'fields'  => array(
			    		array(
			    			'id'    => 'opt-title-branch-3',
			    			'type'  => 'text',
			    			'title' => __('Title','hoaphat'),
			    			'desc'  => __('Branch name', 'hoaphat'),
			    			'default'  => __('Văn phòng TP HCM', 'hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-address-branch-3',
			    			'type'  => 'text',
			    			'title' => __('Address','hoaphat'),
			    			'default'  => __('Số 9, Nguyễn Thị Minh Khai, Quận 1, TP.HCM', 'hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-hotline1-branch-3',
			    			'type'  => 'text',
			    			'title' => __('Mobile Phone','hoaphat'),
			    			'default'  => __('028 629 75 599','hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-hotline2-branch-3',
			    			'type'  => 'text',
			    			'title' => __('Phone','hoaphat'),
			    			'default'  => __('024 628 33 456','hoaphat'),
			    		),
			    	),
			    );
			    $this->sections[] = array(
					'subsection' => true,
			    	'title'   => __('Office Address 4', 'hoaphat'),
			    	'icon'    => 'el-icon-arrow-right',
			    	'desc'    => __('Edit infomation Office Address 4', 'hoaphat'),
			    	'fields'  => array(
			    		array(
			    			'id'    => 'opt-title-branch-4',
			    			'type'  => 'text',
			    			'title' => __('Title','hoaphat'),
			    			'desc'  => __('Branch name', 'hoaphat'),
			    			'default'  => __('Văn phòng TP HCM', 'hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-address-branch-4',
			    			'type'  => 'text',
			    			'title' => __('Address','hoaphat'),
			    			'default'  => __('Số 9, Nguyễn Thị Minh Khai, Quận 1, TP.HCM', 'hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-hotline1-branch-4',
			    			'type'  => 'text',
			    			'title' => __('Mobile Phone','hoaphat'),
			    			'default'  => __('028 629 75 599','hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-hotline2-branch-4',
			    			'type'  => 'text',
			    			'title' => __('Phone','hoaphat'),
			    			'default'  => __('024 628 33 456','hoaphat'),
			    		),
			    	),
			    );

			    $this->sections[] = array(
			    	'title'   => __('Page Giới Thiệu', 'hoaphat'),
			    	'icon'    => 'el-icon-home-alt',
			    	'desc'    => __('Customize page', 'hoaphat'),
			    	'fields'  => array(
			    		array(
			    			'id'    => 'opt-image-page-gioithieu',
			    			'type'  => 'media',
			    			'title' => __('Image For The Page', 'hoaphat'),
			    			'default'  => array(
			    				'url'=>'https://sudospaces.com/hoaphat-com-vn/2020/05/banner-trang-gioi-thieu.jpg'
			    			),
			    		),
			    	),
			    );

			    $this->sections[] = array(
			    	'subsection' => true,
			    	'title'  => __('Block 1', 'hoaphat'),
			    	'icon'   => 'el-icon-arrow-right',
			    	'desc'   => __('Introduction of the company', 'hoaphat'),
			    	'fields' => array(
			    		array(
			    			'id'      => 'opt-title-block1',
			    			'type'    => 'text',
			    			'title'   => __('Title','hoaphat'),
			    			'desc' 	  => __('Title of block 1', 'hoaphat'),
			    			'default' => __('This is the title', 'hoaphat')
			    		),
			    		array(
			    			'id'      => 'opt-image-block1',
			    			'type'    => 'media',
			    			'title'   => __('Image For Block 1','hoaphat'),
			    			'default' => array(
			    				'url' => 'https://sudospaces.com/hoaphat-com-vn/2019/08/img-chu-tich.png'
			    			),
			    		),
			    		array(
			    			'id'	  => 'opt-image-description-block1',
			    			'type'	  => 'text',
			    			'title'   => __('Description', 'hoaphat'),
			    			'desc' 	  => __('Description of the image', 'hoaphat'),
			    			'default' => 'Here is the description of the image'
			    		),
			    		array(
			    			'id'      => 'opt-paragraph1-block1',
			    			'type'    => 'textarea',
			    			'title'   => __('Paragraph 1', 'hoaphat'),
			    			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
			    		),
			    		array(
			    			'id'      => 'opt-paragraph2-block1',
			    			'type'    => 'textarea',
			    			'title'   => __('Paragraph 2', 'hoaphat'),
			    			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
			    		),
			    		array(
			    			'id'      => 'opt-paragraph3-block1',
			    			'type'    => 'textarea',
			    			'title'   => __('Paragraph 3','hoaphat'),
			    			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
			    		),
			    	),
			    );


				$this->sections[] = array(
			    	'subsection' => true,
			    	'title'  => __('Block 2', 'hoaphat'),
			    	'icon'   => 'el-icon-arrow-right',
			    	'desc'   => __('The mission of the company', 'hoaphat'),
			    	'fields' => array(
			    		array(
			    			'id'    => 'opt-title-block2',
			    			'type'  => 'multi_text',
			    			'title'	=> __('Title', 'hoaphat'),
			    			'desc'  => __('Title of each content', 'hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-content-block2',
			    			'type'  => 'multi_text',
			    			'title' => __('Content', 'hoaphat'),
			    			'desc'  => __('The content corresponds to the title', 'hoaphat'),
			    		),
			    	),
			    );
				
				$this->sections[] = array(
			    	'subsection' => true,
			    	'title'  => __('Block 3', 'hoaphat'),
			    	'icon'   => 'el-icon-arrow-right',
			    	'desc'   => __('Member companies', 'hoaphat'),
			    	'fields' => array(
			    		array(
			    			'id'    => 'opt-title-block3',
			    			'type'  => 'text',
			    			'title'	=> __('Title', 'hoaphat'),
			    			'desc'  => __('Title of block 3', 'hoaphat')
			    		),
			    		array(
			    			'id'    => 'opt-imagelink-block3',
			    			'type'  => 'multi_text',
			    			'title'	=> __('Image Link', 'hoaphat'),
			    			'desc'  => __('Path of the image', 'hoaphat')
			    		),
			    		array(
			    			'id'    => 'opt-description-block3',
			    			'type'  => 'multi_text',
			    			'title' => __('Description', 'hoaphat'),
			    			'desc'  => __('Here is the description of the image', 'hoaphat')
			    		),
			    	),
			    );

				$this->sections[] = array(
			    	'title'   => __('Page Sản Phẩm', 'hoaphat'),
			    	'icon'    => 'el-icon-home-alt',
			    	'desc'    => __('Customize page', 'hoaphat'),
			    	'fields'  => array(
			    		array(
			    			'id'      => 'opt-image-page-sanpham',
			    			'type'    => 'media',
			    			'title'   => __('Image For The Page', 'hoaphat'),
			    			'default' => array(
			    				'url' => 'https://sudospaces.com/hoaphat-com-vn/2019/12/hinh-anh-cho-website-13.jpg'
			    			),
			    		),
			    		array(
			    			'id'    => 'opt-imagelink-page-sanpham',
			    			'type'  => 'multi_text',
			    			'title'	=> __('Image Link', 'hoaphat'),
			    			'desc'  => __('Path of the image', 'hoaphat')
			    		),
			    		array(
			    			'id'    => 'opt-link-page-sanpham',
			    			'type'  => 'multi_text',
			    			'title'	=> __('Page Link', 'hoaphat'),
			    			'desc'  => __('Path to the content page', 'hoaphat')
			    		),
			    		array(
			    			'id'    => 'opt-description-page-sanpham',
			    			'type'  => 'multi_text',
			    			'title' => __('Description', 'hoaphat'),
			    			'desc'  => __('Here is the description of the image', 'hoaphat')
			    		),
			    	),
			    );



				// CHẤT LƯỢNG HÒA PHÁT
			    $this->sections[] = array(
			    	'title'   => __('Page Chất Lượng', 'hoaphat'),
			    	'icon'    => 'el-icon-home-alt',
			    	'desc'    => __('Customize page', 'hoaphat'),
			    	'fields'  => array(
			    		array(
			    			'id'      => 'opt-image-page-chatluong',
			    			'type'    => 'media',
			    			'title'   => __('Image For The Page', 'hoaphat'),
			    			'default' => array(
			    				'url' => 'https://sudospaces.com/hoaphat-com-vn/2019/12/hinh-anh-cho-website-14.jpg'
			    			),
			    		),
			    	),
			    );

			    $this->sections[] = array(
			    	'subsection' => true,
			    	'title'   => __('Block 1', 'hoaphat'),
			    	'icon'    => 'el-icon-arrow-right',
			    	'desc'    => __('Quality certification', 'hoaphat'),
			    	'fields'  => array(
			    		array(
			    			'id'    => 'opt-title-block1-page-chatluong',
			    			'type'  => 'text',
			    			'title'	=> __('Title', 'hoaphat'),
			    			'desc'  => __('Title of block 1', 'hoaphat'),
			    			'default' => __('This is the title', 'hoaphat')
			    		),
			    	),
			    );

			    $this->sections[] = array(
			    	'subsection' => true,
			    	'title'   => __('Block 2', 'hoaphat'),
			    	'icon'    => 'el-icon-arrow-right',
			    	'desc'    => __('Technology', 'hoaphat'),
			    	'fields'  => array(
			    		array(
			    			'id'    => 'opt-title-block2-page-chatluong',
			    			'type'  => 'text',
			    			'title'	=> __('Title', 'hoaphat'),
			    			'desc'  => __('Title of block 2', 'hoaphat'),
			    			'default' => __('This is the title', 'hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-content1-block2-page-chatluong',
			    			'type'  => 'select',
			    			'title' => __('Content 1', 'hoaphat'), 
			    			'desc'  => __('Choose 1 from the list available', 'hoaphat'),
			    			'data'	=> 'categories',
			    		),
			    		array(
			    			'id'    => 'opt-content2-block2-page-chatluong',
			    			'type'  => 'select',
			    			'title' => __('Content 2', 'hoaphat'), 
			    			'desc'  => __('Choose 1 from the list available', 'hoaphat'),
			    			'data'	=> 'categories',
			    		),
			    		array(
			    			'id'    => 'opt-content3-block2-page-chatluong',
			    			'type'  => 'select',
			    			'title' => __('Content 3', 'hoaphat'), 
			    			'desc'  => __('Choose 1 from the list available', 'hoaphat'),
			    			'data'	=> 'categories',
			    		),
			    		array(
			    			'id'    => 'opt-content4-images-block2-page-chatluong',
			    			'type'  => 'multi_text',
			    			'title' => __('Content 4 - Link Image', 'hoaphat'), 
			    			'desc'  => __("Video's path to content", 'hoaphat'),
			    		),
			    		array(
			    			'id'    => 'opt-content4-videos-block2-page-chatluong',
			    			'type'  => 'multi_text',
			    			'title' => __('Content 4 - Link Video', 'hoaphat'), 
			    			'desc'  => __("Video's path to content", 'hoaphat'),
			    		),
			    	),
			    );

			    $this->sections[] = array(
			    	'subsection' => true,
			    	'title'   => __('Block 3', 'hoaphat'),
			    	'icon'    => 'el-icon-arrow-right',
			    	'desc'    => __('Prize', 'hoaphat'),
			    	'fields'  => array(
			    		array(
			    			'id'    => 'opt-title-block3-page-chatluong',
			    			'type'  => 'text',
			    			'title'	=> __('Title', 'hoaphat'),
			    			'desc'  => __('Title of block 3', 'hoaphat'),
			    			'default' => __('This is the title', 'hoaphat')
			    		),
			    	),
			    );





			    $this->sections[] = array(
			    	'title'   => __('Page Tuyển Dụng', 'hoaphat'),
			    	'icon'    => 'el-icon-home-alt',
			    	'desc'    => __('Customize page', 'hoaphat'),
			    	'fields'  => array(
			    		array(
			    			'id'      => 'opt-image-page-tuyendung',
			    			'type'    => 'media',
			    			'title'   => __('Image For The Page', 'hoaphat'),
			    			'default' => array(
			    				'url' => 'https://sudospaces.com/hoaphat-com-vn/2019/12/hinh-anh-cho-website-17.jpg'
			    			),
			    		),
			    	),
			    );

			    $this->sections[] = array(
			    	'title'   => __('Page Liên Hệ', 'hoaphat'),
			    	'icon'    => 'el-icon-home-alt',
			    	'desc'    => __('Customize page', 'hoaphat'),
			    	'fields'  => array(
			    		array(
			    			'id'      => 'opt-image-page-lienhe',
			    			'type'    => 'media',
			    			'title'   => __('Image For The Page', 'hoaphat'),
			    			'default' => array(
			    				'url' => 'https://sudospaces.com/hoaphat-com-vn/2019/12/hinh-anh-cho-website-18.jpg'
			    			),
			    		),
			    	),
			    );




			    // Typography Section
			    $this->sections[] = array(
			    	'title' => __( 'Typography', 'hoaphat' ),
			    	'desc' => __( 'All of settings for themes typography', 'hoaphat' ),
			    	'icon' => 'el-icon-font',
			    	'fields' => array(
			    		// Main typography
					    array(
					        'id' => 'opt-typography',
					        'type' => 'typography',
					        'title' => __('Main Typography', 'hoaphat'),
					        'output' => array( 'div.test' ), // Element display in HTML
					        'text-transform' => true,
					        'default' => array(
					            'font-size'   => '15px',
					            'font-family' => 'Helvetica Neue, Arial, sans-serif',
					            'font-style'  => '700',
					            'color'       => '#333', 
            					'line-height' => '40',
            					'google'      => true
					        ),
					    ),
			    	)
				);

			    // New Section
			    // $this->sections[] = array(
			    // 	'title'   => 'New Section',
			    // 	'icon'    => 'el-icon-cogs',
			    // 	'desc'    => '<br />This is the section description.  HTML is permitted.<br />',
			    // 	'fields'  => array(
			    // 		array(
			    // 			'id'    => 'opt-text',
			    // 			'type'  => 'text',
			    // 			'title' => 'A sample text box',
			    // 		),
			    // 	),
			    // );
			}



		} // END CLASS

		/* Kích hoạt class vào Redux Framework */
		global $reduxConfig;
		$reduxConfig = new HoaPhat_Theme_Options();
	}

?>