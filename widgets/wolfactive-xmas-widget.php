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