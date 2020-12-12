<?php
/**
 * Elementor Product List With Banner Widget.
 * Elementor widget that insert product list with banner into the page.
 * @since 1.0.0
 */
class Wolfactive_Elementor_Product_list_width_banner extends \Elementor\Widget_Base {

    public function get_name() {
        return 'wolfactive_product_list_with_banner';
    }
    public function get_title() {
        return __( 'Product List With Banner', 'wolfactive-extend-elementor' );
    }
    public function get_icon() {
        return 'fab fa-product-hunt';
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

        $this->add_control(
			'title_banner', [
				'label' => __( 'Title', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '#LOOKBOOK' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );

        $this->add_control(
			'label_banner', [
				'label' => __( 'Label', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'FALL WINTER’08' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );

        $this->add_control(
			'description_banner', [
				'label' => __( 'Description', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Phasellus lorem malesuada ligula pulvinar de cosmopolis' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );

        $this->add_control(
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

        $this->add_control(
			'button_banner_content', [
				'label' => __( 'Button Content', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Shop Now' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );
        
        $this->add_control(
			'banner_image',
			[
				'label' => __( 'Choose Image', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [  
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
        );

        $this->add_control(
			'banner_location',
			[
				'label' => __( 'Banner Location', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'  => __( 'Left', 'wolfactive-extend-elementor' ),
					'right' => __( 'Right', 'wolfactive-extend-elementor' ),
				],
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

        $this->add_control(
			'title_product', [
				'label' => __( 'Title', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'BEST SELLERS' , 'wolfactive-extend-elementor' ),
				'label_block' => true,
			]
        );

        $this->add_control(
			'description_product', [
				'label' => __( 'Description', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Phasellus lorem malesuada ligula pulvinar cosmo' , 'wolfactive-extend-elementor' ),
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
                'max' => 4,
                'step' => 4,
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
                'default' => 2,
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
        if($settings['banner_location'] === 'left'){
            include __DIR__ . '/sections/product-list-with-banner/left.php';
        }
        if($settings['banner_location'] === 'right'){
            include __DIR__ . '/sections/product-list-with-banner/right.php';
        }
	}

	protected function _content_template() {
		
	}
}