<?php
    class Wolfactive_Elementor_Block_Banner extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_block_banner';
        }
        public function get_title(){
            return __('Ella Block Banner','wolfactive-extend-elementor');
        }
        public function get_icon() {
            return 'fas fa-cube';
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
                'block_banner_style',
                [
                    'label' => __( 'Block Banner Style', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'block-banner-default',
                    'options' => [
                        'block-banner-default'  => __( 'Block Banner Default', 'wolfactive-extend-elementor' ),
                        'block-banner-right'  => __( 'Block Image Right', 'wolfactive-extend-elementor' ),
                        'block-banner-left'  => __( 'Block Image Left', 'wolfactive-extend-elementor' ),
                        'block-banner-text-center'  => __( 'Block Banner Content Center', 'wolfactive-extend-elementor' ),
                        'block-banner-spotlight'  => __( 'Block Banner Spotlight', 'wolfactive-extend-elementor' ),
                    ],
                ]
            );
            $this->add_control(
                'spotlight_title', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( '#SPOTLIGHT' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'spotlight_description',
                [
                    'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 10,
                    'default' => __( 'Quisquemos sodales suscipit tortor ditaemcos copy', 'wolfactive-extend-elementor' ),
                    'placeholder' => __( 'Type your description here', 'wolfactive-extend-elementor' ),
                ]
            );
            $this->add_control(
                'banner',
                [
                    'label' => __( 'Choose Image', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $this->add_control(
                'link_block',
                [
                    'label' => __( 'Link Block Banner', 'wolfactive-extend-elementor' ),
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
                'block_banner_title', [
                    'label' => __( 'Title On Banner', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'METROPÓLIS' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'block_banner_description',
                [
                    'label' => __( 'Description On Banner', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 10,
                    'default' => __( 'Pellentesque posuere orci lobortis scelerisque blandit. Donec id tellus lacinia an tincidunt risus an consequat delit quisquemos.', 'wolfactive-extend-elementor' ),
                    'placeholder' => __( 'Type your description here', 'wolfactive-extend-elementor' ),
                ]
            );
            $this->add_control(
                'name_button', [
                    'label' => __( 'Name Button', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'shop now' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'slider_item',
                [
                    'label' => __( 'Block Banner Item', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 1,
                    'max' => 7,
                    'step' => 7,
                    'default' => 5,
                ]
            );
            $this->end_controls_section();
        }
        protected function render() {
            $settings = $this->get_settings_for_display();
            $class_preflix = 'wa-ella';
            if($settings['block_banner_style'] === 'block-banner-default'){
                include __DIR__ . '/sections/block-banner/block-banner-default.php';
            }
            if($settings['block_banner_style'] === 'block-banner-right'){
                include __DIR__ . '/sections/block-banner/block-banner-right.php';
            }
            if($settings['block_banner_style'] === 'block-banner-left'){
                include __DIR__ . '/sections/block-banner/block-banner-left.php';
            }
            if($settings['block_banner_style'] === 'block-banner-text-center'){
                include __DIR__ . '/sections/block-banner/block-banner-text-center.php';
            }
            if($settings['block_banner_style'] === 'block-banner-spotlight'){
                include __DIR__ . '/sections/block-banner/block-banner-spotlight.php';
            }
        }
    }

?>