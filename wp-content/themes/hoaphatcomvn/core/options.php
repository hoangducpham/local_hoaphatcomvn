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
			        		'id'       => 'hp-swith-logo-header',
			        		'type'     => 'switch',
			        		'title'    => __( 'Enable Image Logo', 'hoaphat' ),
					        'compiler' => 'bool', // Trả về giá trị kiểu true/false (boolean)
					        'desc'     => __( 'Do you want to use image as a logo?', 'hoaphat' ),
					        'on' => __( 'Enabled', 'hoaphat' ),
					        'off' => __('Disabled', 'hoaphat')
					    ),
			        	array(
			        		'id'       => 'hp-logo-header',
			        		'type'     => 'media',
			        		'title'    => __( 'Logo Image', 'hoaphat' ),
			        		'desc'     => __( 'Image for Header logo', 'hoaphat' ),
			        	),
			        )
			    );

			    // Footer Section
			    $this->sections[] = array(
			        'title'  => __( 'Footer', 'hoaphat' ),
			        'desc'   => __( 'All of settings for footer on this theme.', 'hoaphat' ),
			        'icon'   => 'el-icon-home',
			        'fields' => array(
			        	array(
			        		'id'       => 'hp-swith-logo-footer',
			        		'type'     => 'switch',
			        		'title'    => __( 'Enable Image Logo', 'hoaphat' ),
					        'compiler' => 'bool', // Trả về giá trị kiểu true/false (boolean)
					        'desc'     => __( 'Do you want to use image as a logo?', 'hoaphat' ),
					        'on' => __( 'Enabled', 'hoaphat' ),
					        'off' => __('Disabled', 'hoaphat')
					    ),
					    array(
			        		'id'       => 'hp-logo-footer',
			        		'type'     => 'media',
			        		'title'    => __( 'Logo Footer', 'hoaphat' ),
			        		'desc'     => __( 'Image for Footer logo', 'hoaphat' ),
			        	),
			        	array(
				        	'id'       => 'hp-text-footer',
			        		'type'     => 'text',
			        		'title'    => __('Address', 'hoaphat'),
			        		'desc'     => __("The company's address", 'hoaphat'),
			        		'default'  => 'Number 9, Nguyen Thi Minh Khai, Quan 1, TP.HCM'
			        	),
			        	array(
			        		'id'       => 'hp-logo-footer',
			        		'type'     => 'media',
			        		'title'    => __( 'Logo Footer', 'hoaphat' ),
			        		'desc'     => __( 'Image for Footer logo', 'hoaphat' ),
			        	)
			        )
			    );

			    // Typography Section
			    $this->sections[] = array(
			    	'title' => __( 'Typography', 'hoaphat' ),
			    	'desc' => __( 'All of settings for themes typography', 'hoaphat' ),
			    	'icon' => 'el-icon-font',
			    	'fields' => array(
			    		// Main typography
					    array(
					        'id' => 'hp-typography',
					        'type' => 'typography',
					        'title' => 'Main Typography',
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
			    $this->sections[] = array(
			    	'title'   => 'New Section',
			    	'icon'    => 'el-icon-cogs',
			    	'desc'    => '<br />This is the section description.  HTML is permitted.<br />',
			    	'fields'  => array(
			    		array(
			    			'id'    => 'opt-text',
			    			'type'  => 'text',
			    			'title' => 'A sample text box',
			    		),
			    	),
			    );
			}



		} // END CLASS

		/* Kích hoạt class vào Redux Framework */
		global $reduxConfig;
		$reduxConfig = new HoaPhat_Theme_Options();
	}

?>