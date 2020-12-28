<?php
/**
 * Elementor Carousel Widget.
 * Elementor widget that inserts carousel (Slider banner) into the page.
 * @since 1.0.0
 */

class Wolfactive_Elementor_Xmas_Carousel extends \Elementor\Widget_Base {

    public function get_name() {
        return 'wolfactive_xmas_carousel';
    }
    public function get_title() {
        return __( 'Ella Xmas Carousel', 'wolfactive-extend-elementor' );
    }
    public function get_icon() {
        return 'eicon-banner';
    }
    public function get_categories() {
        return [ 'wolfactive-widgets' ];
    }
    /**
     * Register Posts widget controls.
     * Adds different input fields to allow the user to customize the widget settings.
     * @since 1.0.0
     * @access protected
     */
    protected function _register_controls() {

        /**
         * Add content tab
         */
        $this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Setting', 'wolfactive-extend-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );
        $repeater = new \Elementor\Repeater();
            $repeater->add_control(
                'list_image',
                [
                    'label' => __( 'Choose Image', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $repeater->add_control(
                'sub_title', [
                    'label' => __( 'Sub Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Most Popular' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'title', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Cosmo Milancelos' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'collection_desc_one_box', [
                    'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Quisquemos sodales suscipit tortor ditaemcos condimentum lacus meleifend menean diverra lorem comodous.' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'link_carousel',
                [
                    'label' => __( 'Link Carousel', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::URL,
                    'placeholder' => __( home_url(), 'wolfactive-extend-elementor' ),
                    'show_external' => true,
                    'default' => [
                        'url' => home_url(),
                        'is_external' => true,
                        'nofollow' => true,
                    ],
                ]
            );
            $repeater->add_control(
                'name_button_shop_now', [
                    'label' => __( 'Name Button Shop Now', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Shop Now' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'list',
                [
                    'label' => __( 'Carousel List', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'Collection',
                ]
            );
        
        $this->end_controls_section();
    }

    /**
     * Render Posts widget output on the frontend.
     * Written in PHP and used to generate the final HTML.
     * @since 1.0.0
     * @access protected
     */
	protected function render() {
        $settings = $this->get_settings_for_display();
        $class_preflix = 'wa-ella';
        include __DIR__ . '/sections/xmas/carousel-xmas.php';
	}

	protected function _content_template() {
		
	}
}

class Wolfactive_Elementor_Xmas_Collection extends \Elementor\Widget_Base {

    public function get_name() {
        return 'wolfactive_xmas_collection';
    }
    public function get_title() {
        return __( 'Ella Xmas Collection', 'wolfactive-extend-elementor' );
    }
    public function get_icon() {
        return 'eicon-product-categories';
    }
    public function get_categories() {
        return [ 'wolfactive-widgets' ];
    }
    /**
     * Register Posts widget controls.
     * Adds different input fields to allow the user to customize the widget settings.
     * @since 1.0.0
     * @access protected
     */
    protected function _register_controls() {

        /**
         * Add content tab
         */
        $this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Setting', 'wolfactive-extend-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );
        $this->add_control(
            'image_background',
            [
                'label' => __( 'Choose Image Background', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [  
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'image_center',
            [
                'label' => __( 'Choose Image Center', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [  
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'image_right',
            [
                'label' => __( 'Choose Image Right', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [  
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'sub_title', [
                'label' => __( 'Sub Title', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'EDITOR PICKS' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Cosmo Milance<br>Collections' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'link_shop',
            [
                'label' => __( 'Link Carousel', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( home_url(), 'wolfactive-extend-elementor' ),
                'show_external' => true,
                'default' => [
                    'url' => home_url(),
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'name_button_shop_now', [
                'label' => __( 'Name Button Shop Now', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Shop Now' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
    }

    /**
     * Render Posts widget output on the frontend.
     * Written in PHP and used to generate the final HTML.
     * @since 1.0.0
     * @access protected
     */
	protected function render() {
        $settings = $this->get_settings_for_display();
        $class_preflix = 'wa-ella';
        include __DIR__ . '/sections/xmas/xmas-collection.php';
	}

	protected function _content_template() {
		
	}
}

class Wolfactive_Elementor_Xmas_Block_Banner extends \Elementor\Widget_Base {

    public function get_name() {
        return 'wolfactive_xmas_block_banner';
    }
    public function get_title() {
        return __( 'Ella Xmas Block Banner', 'wolfactive-extend-elementor' );
    }
    public function get_icon() {
        return 'far fa-image';
    }
    public function get_categories() {
        return [ 'wolfactive-widgets' ];
    }
    /**
     * Register Posts widget controls.
     * Adds different input fields to allow the user to customize the widget settings.
     * @since 1.0.0
     * @access protected
     */
    protected function _register_controls() {

        /**
         * Add content tab
         */
        $this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Setting', 'wolfactive-extend-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );
        $this->add_control(
            'image_background',
            [
                'label' => __( 'Choose Image Background', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [  
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'image_left',
            [
                'label' => __( 'Choose Image Left', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [  
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'collection_desc_one_box', [
                'label' => __( 'Description Left', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Pellentesque posuere orci lobortis scelerisque blandit. Donec id tellus lacinia an tincidunt risus an consequat delit quisquemos.' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'name_button_left', [
                'label' => __( 'Name Button Left', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'shop the collections' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'link_collection_left',
            [
                'label' => __( 'Link Block Banner Left', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( home_url(), 'wolfactive-extend-elementor' ),
                'show_external' => true,
                'default' => [
                    'url' => home_url(),
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'image_right',
            [
                'label' => __( 'Choose Image Right', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [  
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'title_right', [
                'label' => __( 'Title Right', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'METROPOLIS' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'collection_desc_right', [
                'label' => __( 'Description Right', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Venenatis Dapibus <br> Collections' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'name_button_right', [
                'label' => __( 'Name Button Right', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'shop now' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'link_collection_right',
            [
                'label' => __( 'Link Block Banner Right', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( home_url(), 'wolfactive-extend-elementor' ),
                'show_external' => true,
                'default' => [
                    'url' => home_url(),
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();
    }

    /**
     * Render Posts widget output on the frontend.
     * Written in PHP and used to generate the final HTML.
     * @since 1.0.0
     * @access protected
     */
	protected function render() {
        $settings = $this->get_settings_for_display();
        $class_preflix = 'wa-ella';
        include __DIR__ . '/sections/xmas/xmas-block-banner.php';
	}

	protected function _content_template() {
		
	}
}
class Wolfactive_Elementor_Xmas_Video extends \Elementor\Widget_Base {

    public function get_name() {
        return 'wolfactive_xmas_video';
    }
    public function get_title() {
        return __( 'Ella Xmas Video', 'wolfactive-extend-elementor' );
    }
    public function get_icon() {
        return 'fas fa-video';
    }
    public function get_categories() {
        return [ 'wolfactive-widgets' ];
    }
    /**
     * Register Posts widget controls.
     * Adds different input fields to allow the user to customize the widget settings.
     * @since 1.0.0
     * @access protected
     */
    protected function _register_controls() {

        /**
         * Add content tab
         */
        $this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Setting', 'wolfactive-extend-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );
        $this->add_control(
            'iframe_video',
            [
                'label' => __( 'Iframe Video', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'This is iframe video' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'image_background_video',
            [
                'label' => __( 'Choose Image Background', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [  
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'image_left_video',
            [
                'label' => __( 'Choose Image Video', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [  
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'sub_title_video', [
                'label' => __( 'Sub Title', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'SPECIAL OFFERS' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title_video', [
                'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Phasellus Loremous' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'xmas_desc_video', [
                'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique...' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'name_button_video', [
                'label' => __( 'Name Button', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'shop the collections' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'link_video_shop',
            [
                'label' => __( 'Link Shop', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( home_url(), 'wolfactive-extend-elementor' ),
                'show_external' => true,
                'default' => [
                    'url' => home_url(),
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();
    }

    /**
     * Render Posts widget output on the frontend.
     * Written in PHP and used to generate the final HTML.
     * @since 1.0.0
     * @access protected
     */
	protected function render() {
        $settings = $this->get_settings_for_display();
        $class_preflix = 'wa-ella';
        include __DIR__ . '/sections/xmas/xmas-video.php';
	}

	protected function _content_template() {
		
	}
}

class Wolfactive_Elementor_Xmas_Customer extends \Elementor\Widget_Base {

    public function get_name() {
        return 'wolfactive_xmas_customer';
    }
    public function get_title() {
        return __( 'Ella Xmas Customer', 'wolfactive-extend-elementor' );
    }
    public function get_icon() {
        return 'fas fa-user-check';
    }
    public function get_categories() {
        return [ 'wolfactive-widgets' ];
    }
    /**
     * Register Posts widget controls.
     * Adds different input fields to allow the user to customize the widget settings.
     * @since 1.0.0
     * @access protected
     */
    protected function _register_controls() {

        /**
         * Add content tab
         */
        $this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Setting', 'wolfactive-extend-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );
        $this->add_control(
            'title_customer_speak', [
                'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'LET OUR CUSTOMERS SPEAK FOR US' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $repeaterCustomer = new \Elementor\Repeater();
            $repeaterCustomer->add_control(
                'image_customer',
                [
                    'label' => __( 'Choose Image Customer', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $repeaterCustomer->add_control(
                'sub_title_cs_speak', [
                    'label' => __( 'Sub Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Best product ever' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeaterCustomer->add_control(
                'desc_cs_speak', [
                    'label' => __( 'Customer Speak', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => __( 'Nam tempus turpis at metus cosmo scelerisque placerat nulla deumantos solicitud de felis. Pellentesque diam delos lorem...' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeaterCustomer->add_control(
                'purchased', [
                    'label' => __( 'Purchased', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Purchased: Magnis darturien eros laciniados...' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeaterCustomer->add_control(
                'name_customer', [
                    'label' => __( 'Name Customer', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'John Doe' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeaterCustomer->add_control(
                'date_speak', [
                    'label' => __( 'Date Speak', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Wednesday, Jan 26, 2019' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'list_customer_speak',
                [
                    'label' => __( 'Customer Speak List', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeaterCustomer->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'Customer Speak',
                ]
            );
            $this->add_control(
                'slider_item_customer_speak',
                [
                    'label' => __( 'Customer Speak Item', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 1,
                    'max' => 7,
                    'step' => 7,
                    'default' => 3,
                ]
            );
        $this->end_controls_section();
    }

    /**
     * Render Posts widget output on the frontend.
     * Written in PHP and used to generate the final HTML.
     * @since 1.0.0
     * @access protected
     */
	protected function render() {
        $settings = $this->get_settings_for_display();
        $class_preflix = 'wa-ella';
        include __DIR__ . '/sections/xmas/xmas-customer-speak.php';
	}

	protected function _content_template() {
		
	}
}
class Wolfactive_Elementor_Xmas_Instagram extends \Elementor\Widget_Base{

    public function get_name(){
        return 'wolfactive_xmas_instagram';
    }
    public function get_title(){
        return __('Ella Xmas Instagram','wolfactive-extend-elementor');
    }
    public function get_icon() {
        return 'fab fa-instagram';
    }
    public function get_categories() {
        return [ 'wolfactive-widgets' ];
    }
    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Setting', 'wolfactive-extend-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'xmas_instagram_title', [
                'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '#ELLA ON INSTAGRAM' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'xmas_instagram_description',
            [
                'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => __( 'Phasellus lorem malesuada ligula pulvinar commodo maecenas', 'wolfactive-extend-elementor' ),
                'placeholder' => __( 'Type your description here', 'wolfactive-extend-elementor' ),
            ]
        );
        $this->add_control(
            'xmas_gallery',
            [
                'label' => __( 'Add Images', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::GALLERY,
                'default' => [],
            ]
        );

        $this->add_control(
            'row_show',
            [
                'label' => __( 'Row Init Display', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 10,
                'step' => 1,
                'default' => 1,
            ]
        );

        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        $class_preflix = 'wa-ella';
        include __DIR__ . '/sections/xmas/xmas-instagram.php';
    }
}
class Wolfactive_Elementor_Xmas_Policy extends \Elementor\Widget_Base{

    public function get_name(){
        return 'wolfactive_xmas_policy';
    }
    public function get_title(){
        return __('Ella Xmas Policy','wolfactive-extend-elementor');
    }
    public function get_icon() {
        return 'fas fa-shield-alt';
    }
    public function get_categories() {
        return [ 'wolfactive-widgets' ];
    }
    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Setting', 'wolfactive-extend-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeaterPolicy = new \Elementor\Repeater();
        $repeaterPolicy->add_control(
            'xmas_policy_icon', [
                'label' => __( 'Icon Policy', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '<i class="fas fa-truck"></i>' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $repeaterPolicy->add_control(
            'xmas_policy_text', [
                'label' => __( 'Text Policy', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Free Shipping on all orders *' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $repeaterPolicy->add_control(
            'xmas_policy_description', [
                'label' => __( 'Description Policy', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Cosmo de milancelos.' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $repeaterPolicy->add_control(
            'xmas_link_policy',
            [
                'label' => __( 'Link Policy', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( home_url(), 'wolfactive-extend-elementor' ),
                'show_external' => true,
                'default' => [
                    'url' => home_url(),
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'xmas_policy_list',
            [
                'label' => __( 'Policy List', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeaterPolicy->get_controls(),
                'default' => [
                    [],
                ],
                'title_field' => 'Policy',
            ]
        );
        $this->add_control(
            'xmas_policy_slider_item',
            [
                'label' => __( 'Policy Item', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 4,
                'step' => 4,
                'default' => 3,
            ]
        );
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        $class_preflix = 'wa-ella';
        include __DIR__ . '/sections/xmas/xmas-policy.php';
    }
}

class Wolfactive_Elementor_Xmas_Newsletter extends \Elementor\Widget_Base{

    public function get_name(){
        return 'wolfactive_xmas_newsletter';
    }
    public function get_title(){
        return __('Ella Xmas Newsletter','wolfactive-extend-elementor');
    }
    public function get_icon() {
        return 'fas fa-newspaper';
    }
    public function get_categories() {
        return [ 'wolfactive-widgets' ];
    }
    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Setting', 'wolfactive-extend-elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'xmas_newsletter_title', [
                'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'NEWSLETTER SIGN UP' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'xmas_newsletter_description',
            [
                'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => __( 'Receive our latest updates about our products and promotions.', 'wolfactive-extend-elementor' ),
                'placeholder' => __( 'Type your description here', 'wolfactive-extend-elementor' ),
            ]
        );
        $this->add_control(
            'image_background_newsletter_xmas',
            [
                'label' => __( 'Choose Image Background', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [  
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        $class_preflix = 'wa-ella';
        include __DIR__ . '/sections/xmas/xmas-newsletter.php';
    }
}

