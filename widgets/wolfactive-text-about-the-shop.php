<?php
    class Wolfactive_Elementor_About_The_Shop extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_text-ats';
        }
        public function get_title(){
            return __('Ella Text About The Shop','wolfactive-extend-elementor');
        }
        public function get_icon() {
            return 'fas fa-text-width';
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
                'text_abt',
                [
                    'label' => __( 'Latest Post Style', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'text-about-the-shop',
                    'options' => [
                        'text-about-the-shop'  => __( 'Latest Post Default', 'wolfactive-extend-elementor' ),
                    ],
                ]
            );
            $this->add_control(
                'text_abt_title', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'About The Shop' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'text_abt_description',
                [
                    'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 10,
                    'default' => __( 'Phasellus lorem malesuada ligula pulvinar commodo maecenas.', 'wolfactive-extend-elementor' ),
                    'placeholder' => __( 'Type your description here', 'wolfactive-extend-elementor' ),
                ]
            );
            $this->end_controls_section();
        }
        protected function render() {
            $settings = $this->get_settings_for_display();
            $class_preflix = 'wa-ella';
            if($settings['text_abt'] === 'text-about-the-shop'){
                include __DIR__ . '/sections/text-about-the-shop.php';
            }
        }
    }

?>