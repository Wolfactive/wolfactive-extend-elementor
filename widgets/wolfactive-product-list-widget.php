<?php
/**
 * Elementor Product List Widget.
 * Elementor widget that insert product list into the page.
 * @since 1.0.0
 */
class Wolfactive_Elementor_Product_list extends \Elementor\Widget_Base {

    public function get_name() {
        return 'wolfactive_product_list';
    }
    public function get_title() {
        return __( 'Ella Product List', 'wolfactive-extend-elementor' );
    }
    public function get_icon() {
        return 'eicon-products';
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
			'title', [
				'label' => __( 'Title', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'New Arrival' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );
        $this->add_control(
            'toggle_title_line',
            [
                'label' => __( 'Toggle Title Line', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'On', 'wolfactive-extend-elementor' ),
                'label_off' => __( 'Off', 'wolfactive-extend-elementor' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
			'description', [
				'label' => __( 'Description', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Phasellus lorem malesuada ligula pulvinar commodo maecenas' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );

        $options = [];
		$post_array = get_posts('post_type=product&posts_per_page=-1&post_status=publish');
		foreach($post_array as $post){
			$options[$post->ID] = [__($post->post_title,'wolfactive-extend-elementor')];
		}
		$this->add_control(
			'show_elements',
			[
				'label' => __( 'Choose Product', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'options' => $options,
                'default' => [],
                'label_block' => true,
			]
        );

        $this->add_control(
            'slider_item_pc',
            [
                'label' => __( 'Product Item on Desktop', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 6,
                'step' => 6,
                'default' => 3,
            ]
        );

        $this->add_control(
            'slider_item_tablet',
            [
                'label' => __( 'Product Item on Tablet', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 5,
                'step' => 5,
                'default' => 3,
            ]
        );
        $this->add_control(
            'toggle_product_item_style',
            [
                'label' => __( 'Toggle Product Item Supermarket', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'On', 'wolfactive-extend-elementor' ),
                'label_off' => __( 'Off', 'wolfactive-extend-elementor' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        
        $this->add_control(
			'slider_style',
			[
				'label' => __( 'Carousel Style', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'slider',
				'options' => [
					'slider'  => __( 'Slider', 'wolfactive-extend-elementor' ),
					'loadmore' => __( 'Load More', 'wolfactive-extend-elementor' ),
				],
			]
        );
        
        $this->add_control(
            'row_item_pc',
            [
                'label' => __( 'Row Product Item ', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 3,
                'step' => 1,
                'default' => 2,
                'conditions' => [
                    'terms' => [
                        [
                            'name' => 'slider_style',
                            'operator' => '==',
                            'value' => 'loadmore'
                        ],
                    ]
                ]
            ]
        );

        $this->add_control(
			'button_title', [
				'label' => __( 'Button Content (Fill if you choose slider style)', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Load More' , 'wolfactive-extend-elementor' ),
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
        if($settings['slider_style'] === 'slider'){
            include __DIR__ . '/sections/product-list/slider.php';
        }
        if($settings['slider_style'] === 'loadmore'){
            include __DIR__ . '/sections/product-list/loadmore.php';
        }
	}

	protected function _content_template() {
		
	}
}