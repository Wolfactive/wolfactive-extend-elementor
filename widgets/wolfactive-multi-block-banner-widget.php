<?php
    class Wolfactive_Elementor_Multi_Block_Banner extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_multi_block_banner';
        }
        public function get_title(){
            return __('Ella Multi Block Banner','wolfactive-extend-elementor');
        }
        public function get_icon() {
            return 'fas fa-cubes';
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
                    'default' => 'multi-block-banner-default',
                    'options' => [
                        'multi-block-banner-default'  => __( 'Multi Block Banner Default', 'wolfactive-extend-elementor' ),
                        'multi-block-banner-no-space'  => __( 'Multi Block Banner No Space', 'wolfactive-extend-elementor' ),
                        'multi-block-banner-have-content'  => __( 'Multi Block Banner Have Content', 'wolfactive-extend-elementor' ),
                        'block-banner-three-box'  => __( 'Block Banner Three Box', 'wolfactive-extend-elementor' ),
                    ],
                ]
            );
            
            $repeater = new \Elementor\Repeater();
            $repeater->add_control(
                'list_image',
                [
                    'label' => __( 'Choose Image', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $repeater->add_control(
                'block_banner_title', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'METROPÓLIS' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'block_banner_description',
                [
                    'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 10,
                    'default' => __( 'Pellentesque posuere orci lobortis scelerisque blandit. Donec id tellus lacinia an tincidunt risus an consequat delit quisquemos.', 'wolfactive-extend-elementor' ),
                    'placeholder' => __( 'Type your description here', 'wolfactive-extend-elementor' ),
                ]
            );
            $repeater->add_control(
                'link_block_banner',
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
                    'label' => __( 'Collection List', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'Collection',
                ]
            );
            $this->add_control(
                'slider_item',
                [
                    'label' => __( 'Brand Item', 'wolfactive-extend-elementor' ),
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
            if($settings['block_banner_style'] === 'multi-block-banner-default'){
                include __DIR__ . '/sections/multi-block-banner/multi-block-banner-default.php';
            }
            if($settings['block_banner_style'] === 'multi-block-banner-no-space'){
                include __DIR__ . '/sections/multi-block-banner/multi-block-banner-no-space.php';
            }
            if($settings['block_banner_style'] === 'multi-block-banner-have-content'){
                include __DIR__ . '/sections/multi-block-banner/multi-block-banner-have-content.php';
            }
            if($settings['block_banner_style'] === 'block-banner-three-box'){
                include __DIR__ . '/sections/multi-block-banner/block-banner-three-box.php';
            }
        }
    }

?>