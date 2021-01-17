<?php
    class Wolfactive_Elementor_LookBook_Default extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_lookbook_default';
        }
        public function get_title(){
            return __('Ella LookBook Default','wolfactive-extend-elementor');
        }
        public function get_icon() {
            return 'fas fa-blog';
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
                'lookbook_style',
                [
                    'label' => __( 'Latest Post Style', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'lookbook-default',
                    'options' => [
                        'lookbook-default'  => __( 'Lookbook Default', 'wolfactive-extend-elementor' ),
                    ],
                ]
            );
            $this->add_control(
                'lb_text_share', [
                    'label' => __( 'Text Share', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Share' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'text_button_lb', [
                    'label' => __( 'Text Button', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Shop LookBook' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'lb_link', [
                    'label' => __( 'Link Button LookBook', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'javascript:void(0)' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->end_controls_section();
        }
        protected function render() {
            $settings = $this->get_settings_for_display();
            $class_preflix = 'wa-ella';
            if($settings['lookbook_style'] === 'lookbook-default'){
                include __DIR__ . '/sections/lookbook-default.php';
            }
        }
    }

?>