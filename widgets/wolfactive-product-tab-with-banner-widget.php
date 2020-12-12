<?php
/**
 * Elementor Product Tab With Banner Widget.
 * Elementor widget that insert product tab with banner into the page.
 * @since 1.0.0
 */
class Wolfactive_Elementor_Product_tab_with_banner extends \Elementor\Widget_Base {

    public function get_name() {
        return 'wolfactive_product_tab_with_banner';
    }
    public function get_title() {
        return __( 'Ella Product Tab With Banner', 'wolfactive-extend-elementor' );
    }
    public function get_icon() {
        return 'eicon-tabs';
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
			'banner_section',
			[
				'label' => __( 'Setting Banner', 'wolfactive-extend-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );
         /* Begin Carousel Item Repeater */
        $repeater = new \Elementor\Repeater();
         /* Begin Repeater for modal product */
        
        $repeater->add_control(
            'title_banner', [
                'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '#Dapbõe' , 'wolfactive-extend-elementor' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'description_banner', [
				'label' => __( 'Description', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Phasellus lorem pulvinar maecenas cosmopolis' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'button_banner_link',
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
			'button_banner_content', [
				'label' => __( 'Button Content', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Shop Now' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );

        $this->add_control(
            'list_banner',
            [
                'label' => __( 'Banner List', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title_banner' => __( '#Dapbõe', 'wolfactive-extend-elementor' ),
                    ],
                ],
                'title_field' => '{{{ title_banner }}}',
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section(
			'product_section',
			[
				'label' => __( 'Setting Product', 'wolfactive-extend-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );
        
         /* Begin Carousel Item Repeater */
         $repeater_child = new \Elementor\Repeater();
         /* Begin Repeater for modal product */
        
        $repeater_child->add_control(
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
		$repeater_child->add_control(
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
            'list_product',
            [
                'label' => __( 'Tab List', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater_child->get_controls(),
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
        include __DIR__ . '/sections/product-tab-with-banner.php';
	}

	protected function _content_template() {
		
	}
}