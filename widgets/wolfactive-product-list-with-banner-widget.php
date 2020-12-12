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
        return 'fas fa-th-list';
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
        
	}

	protected function _content_template() {
		
	}
}