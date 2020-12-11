<?php
    class Wolfactive_Elementor_Instagram extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_instagram';
        }
        public function get_title(){
            return __('Ella Instagram','wolfactive-extend-elementor');
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
                'instagram_style',
                [
                    'label' => __( 'Instagram Style', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'slider-arrow',
                    'options' => [
                        'slider-arrow'  => __( 'Slider Arrow', 'wolfactive-extend-elementor' ),
                        'slider-no-arrow' => __( 'Slide No Arrow', 'wolfactive-extend-elementor' ),
                    ],
                ]
            );
            $this->add_control(
                'instagram_title', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( '#ELLA ON INSTAGRAM' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'instagram_description',
                [
                    'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 10,
                    'default' => __( 'Instagram description', 'wolfactive-extend-elementor' ),
                    'placeholder' => __( 'Type your description here', 'wolfactive-extend-elementor' ),
                ]
            );
            $this->add_control(
                'gallery',
                [
                    'label' => __( 'Add Images', 'plugin-domain' ),
                    'type' => \Elementor\Controls_Manager::GALLERY,
                    'default' => [],
                ]
            );
            $this->end_controls_section();
        }
        protected function render() {
            $settings = $this->get_settings_for_display();
            $class_preflix = 'wa-ella';
            if($settings['instagram_style'] === 'slider-arrow'){
                include __DIR__ . '/sections/instagram/instagram-slider-arrow.php';
            }
            if($settings['instagram_style'] === 'slider-no-arrow'){
                include __DIR__ . '/sections/instagram/instagram-slider-no-arrow.php';
            }
        }
    }

?>
