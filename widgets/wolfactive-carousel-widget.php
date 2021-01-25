<?php
/**
 * Elementor Carousel Widget.
 * Elementor widget that inserts carousel (Slider banner) into the page.
 * @since 1.0.0
 */

class Wolfactive_Elementor_Carousel extends \Elementor\Widget_Base {

    public function get_name() {
        return 'wolfactive_carousel';
    }
    public function get_title() {
        return __( 'Ella Carousel', 'wolfactive-extend-elementor' );
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
        $this->add_control(
            'speed_slider',
            [
                'label' => __( 'Speed', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 300,
                'max' => 10000,
                'step' => 100,
                'default' => 3000,
            ]
        );
        
        $this->add_control(
			'slider_style',
			[
				'label' => __( 'Carousel Style', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default'  => __( 'Default', 'wolfactive-extend-elementor' ),
					'decore' => __( 'Decore', 'wolfactive-extend-elementor' ),
					'limit' => __( 'Limit', 'wolfactive-extend-elementor' ),
					'absoblute' => __( 'Header Float', 'wolfactive-extend-elementor' ),
					'boxed' => __( 'Header Boxed', 'wolfactive-extend-elementor' ),
				],
			]
        );
		
		$this->add_control(
			'spacing_toggle',
			[
				'label' => __( 'Spacing Bottom', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'wolfactive-extend-elementor' ),
				'label_off' => __( 'Hide', 'wolfactive-extend-elementor' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'boxed__container',
			[
				'label' => __( 'Width', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'size_units' => [ 'px', '%' ],
				'min' => 5,
				'max' => 1920,
				'step' => 5,
				'default' => 1350,
				'conditions' => [
					'terms' => [
						[
							'name' => 'slider_style',
							'operator' => '==',
							'value' => 'boxed'
						],
					]
				]
			]
		);

		$this->add_control(
			'background_color',
			[
				'label' => __( 'Boxed Outter Background Color', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .boxed--outer' => 'color: {{VALUE}}',
				],
				'conditions' => [
					'terms' => [
						[
							'name' => 'slider_style',
							'operator' => '==',
							'value' => 'boxed'
						],
					]
				]
			]
		);

		
		$this->add_control(
			'logo_image',
			[
				'label' => __( 'Choose White Logo', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [  
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'conditions' => [
					'terms' => [
						[
							'name' => 'slider_style',
							'operator' => '==',
							'value' => 'absoblute'
						],
					]
				]
			]
		);
		
		$this->add_control(
			'cart_image',
			[
				'label' => __( 'Choose White Cart Icon', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [  
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'conditions' => [
					'terms' => [
						[
							'name' => 'slider_style',
							'operator' => '==',
							'value' => 'absoblute'
						],
					]
				]
			]
		);
		
		$this->add_control(
			'notification',
			[
				'label' => __( 'Important Note', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => __( '<p style="margin: 8px 0px;padding: 8px 0px;color: #333;font-size: 13px;font-weight: 600;border-top: 1px solid #333;border-bottom: 1px solid #333;">This style is worked if you choose header template 3 or header template 1 </p>', 'wolfactive-extend-elementor' ),
				'content_classes' => '',
				'conditions' => [
					'terms' => [
						[
							'name' => 'slider_style',
							'operator' => '==',
							'value' => 'absoblute'
						],
					]
				]
			]
        );

        /* Begin Carousel Item Repeater */
        $repeater = new \Elementor\Repeater();
        /* Begin Repeater for modal product */
        
        $repeater->add_control(
			'list_title', [
				'label' => __( 'Title', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'List Title' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'list_content', [
				'label' => __( 'Description', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'Quisquemos sodales suscipit tortor ditaemcos condimentum de cosmo lacus meleifend menean diverra loremous.' , 'wolfactive-extend-elementor' ),
				'show_label' => false,
			]
		);

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
			'location_contain',
			[
				'label' => __( 'Location Contain', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'  => __( 'Left', 'wolfactive-extend-elementor' ),
					'center' => __( 'Center', 'wolfactive-extend-elementor' ),
					'right' => __( 'Right', 'wolfactive-extend-elementor' ),
				],
			]
        );
        
        $repeater->add_control(
			'button_link',
			[
				'label' => __( 'Button Link', 'wolfactive-extend-elementor' ),
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
			'button_title', [
				'label' => __( 'Button Content', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Shop The Collection' , 'wolfactive-extend-elementor' ),
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
					[
						'list_title' => __( 'Carousel Item 1', 'wolfactive-extend-elementor' ),
						'list_content' => __( 'Quisquemos sodales suscipit tortor ditaemcos condimentum de cosmo lacus meleifend menean diverra loremous.', 'wolfactive-extend-elementor' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);
        $repeater_child = new \Elementor\Repeater();

        $repeater_child->add_control(
            'carousel_choose',
            [
                'label' => __( 'Carousel Add Modal', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'step' => 100,
                'default' => 0,
            ]
        );
        $repeater_child->add_control(
            'top',
            [
                'label' => __( 'Top(Position) %', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'step' => 1000,
                'default' => 0,
            ]
        );
        $repeater_child->add_control(
            'left',
            [
                'label' => __( 'Left(Position) %', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'step' => 1000,
                'default' => 0,
            ]
        );
		$repeater_child->add_control(
            'location_modal',
            [
				'label' => __( 'Location Modal', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'left',
				'options' => [
					'left'  => __( 'Left', 'wolfactive-extend-elementor' ),
					'right' => __( 'Right', 'wolfactive-extend-elementor' ),
				],
            ]
        );
        $options = [];
		$post_array = get_posts('post_type=product&posts_per_page=-1&post_status=publish');
		foreach($post_array as $post){
			$options[$post->ID] = [__($post->post_title,'wolfactive-extend-elementor')];
		}
		$repeater_child->add_control(
			'show_elements',
			[
				'label' => __( 'Choose Product', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'multiple' => true,
				'options' => $options,
				'default' => [],
			]
        );
        
        $this->add_control(
			'list_child',
			[
				'label' => __( 'Product Modal List', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater_child->get_controls(),
				'default' => [
					[],
                ],
                'title_field' => 'Product Modal',
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
        include __DIR__ . '/sections/carousel.php';
	}

	protected function _content_template() {
		
	}
}