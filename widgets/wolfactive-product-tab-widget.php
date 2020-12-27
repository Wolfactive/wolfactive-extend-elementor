<?php
/**
 * Elementor Product Tab Widget.
 * Elementor widget that insert product tab into the page.
 * @since 1.0.0
 */
class Wolfactive_Elementor_Product_tab extends \Elementor\Widget_Base {

    public function get_name() {
        return 'wolfactive_product_tab';
    }
    public function get_title() {
        return __( 'Ella Product Tab', 'wolfactive-extend-elementor' );
    }
    public function get_icon() {
        return 'eicon-product-tabs';
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
			'description', [
				'label' => __( 'Description', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Phasellus lorem malesuada ligula pulvinar commodo maecenas' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );

        $this->add_control(
			'tab_style',
			[
				'label' => __( 'Tab Style', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => __( 'Style1', 'wolfactive-extend-elementor' ),
					'style2' => __( 'Style2', 'wolfactive-extend-elementor' ),
				],
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

        $options = [];
		$post_array = get_posts('post_type=product&posts_per_page=-1&post_status=publish');
		foreach($post_array as $post){
			$options[$post->ID] = [__($post->post_title,'wolfactive-extend-elementor')];
		}
		$repeater->add_control(
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
            'list',
            [
                'label' => __( 'Tab List', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => __( 'Womens', 'wolfactive-extend-elementor' ),
                    ],
                ],
                'title_field' => '{{{ list_title }}}',
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
        include __DIR__ . '/sections/product-tab.php';
	}

	protected function _content_template() {
		
	}
}