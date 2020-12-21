<?php
    class Wolfactive_Elementor_Different_Collection extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_different_collection';
        }
        public function get_title(){
            return __('Ella Collection Custom','wolfactive-extend-elementor');
        }
        public function get_icon() {
            return 'fab fa-battle-net';
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
                'collection_custom_style',
                [
                    'label' => __( 'Collection Style', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'collection-custom-default',
                    'options' => [
                        'collection-custom-default'  => __( 'Collection Custom Default', 'wolfactive-extend-elementor' ),
                    ],
                ]
            );
            $this->add_control(
                'collection_custom_description', [
                    'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => __( 'Here is description' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'slider_item',
                [
                    'label' => __( 'Instagram Item', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 1,
                    'max' => 7,
                    'step' => 7,
                    'default' => 2,
                ]
            );
            $repeater = new \Elementor\Repeater();
            $repeater->add_control(
                'image',
                [
                    'label' => __( 'Choose Image', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $repeater->add_control(
                'collection_title_one_box', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Editor’s Pick' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'number_products', [
                    'label' => __( 'Number Products', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( '10 products' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'link_colection',
                [
                    'label' => __( 'Link Collection', 'wolfactive-extend-elementor' ),
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
                'name_button_shop_now', [
                    'label' => __( 'Name Button Shop Now', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Shop Now' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'list',
                [
                    'label' => __( 'Collection Left', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'Collection',
                ]
            );
            $repeater_chirld = new \Elementor\Repeater();
            $repeater_chirld->add_control(
                'image',
                [
                    'label' => __( 'Choose Image', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $repeater_chirld->add_control(
                'collection_title_one_box', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Editor’s Pick' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater_chirld->add_control(
                'number_products', [
                    'label' => __( 'Number Products', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( '10 products' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater_chirld->add_control(
                'link_colection',
                [
                    'label' => __( 'Link Collection', 'wolfactive-extend-elementor' ),
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
            $repeater_chirld->add_control(
                'name_button_shop_now', [
                    'label' => __( 'Name Button Shop Now', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Shop Now' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'list_right',
                [
                    'label' => __( 'Collection Right', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater_chirld->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'Collection',
                ]
            );
            $this->end_controls_section();
        }
        protected function render() {
            $settings = $this->get_settings_for_display();
            $class_preflix = 'wa-ella';
            if($settings['collection_custom_style'] === 'collection-custom-default'){
                include __DIR__ . '/sections/collection-custom/collection-custom-default.php';
            }
        }
    }

?>