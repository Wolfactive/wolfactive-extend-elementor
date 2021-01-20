<?php
/**
 * Elementor Product List Widget.
 * Elementor widget that insert product list into the page.
 * @since 1.0.0
 */
class Wolfactive_Elementor_Flash_Deals extends \Elementor\Widget_Base {

    public function get_name() {
        return 'wolfactive_flash_deals';
    }
    public function get_title() {
        return __( 'Ella Flash Deals', 'wolfactive-extend-elementor' );
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
            'due_date_flash_deals',
            [
                'label' => __( 'Date Countdown', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::DATE_TIME,
                'picker_options' => [
                    'dateFormat' => 'F j, Y h:i:s',
                ],
            ]
        );
        $this->add_control(
			'fd_title', [
				'label' => __( 'Title', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'FLASH DEALS' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );
        $this->add_control(
			'ld_ends_in', [
				'label' => __( 'Ends in:', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Ends in:' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );
        $this->add_control(
            'ld_btn', [
                'label' => __( 'Text Button', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'View All' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'ld_link', [
                'label' => __( 'Link View All', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'javascript:void(0)' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );
        $options = [];
		$post_array = get_posts('post_type=product&posts_per_page=-1&post_status=publish');
		foreach($post_array as $post){
			$options[$post->ID] = [__($post->post_title,'wolfactive-extend-elementor')];
		}
		$this->add_control(
			'fd_show_elements',
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
            'fd_slider_item_pc',
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
            'fd_slider_item_tablet',
            [
                'label' => __( 'Product Item on Tablet', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 5,
                'step' => 5,
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
        include __DIR__ . '/sections/product-list/flash-deals.php';
	}

	protected function _content_template() {
		
	}
}