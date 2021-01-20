<?php
    class Wolfactive_Elementor_LookBook_Custom extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_lookbook_custom';
        }
        public function get_title(){
            return __('Ella LookBook Custom','wolfactive-extend-elementor');
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
                'lookbook_custom_style',
                [
                    'label' => __( 'Latest Post Style', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'lookbook-custom',
                    'options' => [
                        'lookbook-custom'  => __( 'Lookbook Custom', 'wolfactive-extend-elementor' ),
                    ],
                ]
            );
            $repeaterLbl = new \Elementor\Repeater();
            $repeaterLbl->add_control(
                'gallery_lb',
                [
                    'label' => __( 'Add Images', 'plugin-domain' ),
                    'type' => \Elementor\Controls_Manager::GALLERY,
                    'default' => [],
                ]
            );
            $repeaterLbl->add_control(
                'list_image_lb_big',
                [
                    'label' => __( 'Choose Image', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $this->add_control(
                'list_lbl',
                [
                    'label' => __( 'LookBook List', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeaterLbl->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'LookBook',
                ]
            );
            $this->add_control(
                'lbc_text_share', [
                    'label' => __( 'Text Share', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Share' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'text_button_lbc', [
                    'label' => __( 'Text Button', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Shop LookBook' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'lbc_link', [
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
            if($settings['lookbook_custom_style'] === 'lookbook-custom'){
                include __DIR__ . '/sections/lookbook-custom.php';
            }
        }
    }

?>