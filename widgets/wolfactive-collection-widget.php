<?php
    class Wolfactive_Elementor_Collection extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_collection';
        }
        public function get_title(){
            return __('Ella Collection','wolfactive-extend-elementor');
        }
        public function get_icon() {
            return 'fas fa-archive';
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
                'collection_style',
                [
                    'label' => __( 'Collection Style', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'collection-default',
                    'options' => [
                        'collection-default'  => __( 'Collection Default', 'wolfactive-extend-elementor' ),
                        'collection-bottom-carousel' => __( 'Collection Bottom Carousel', 'wolfactive-extend-elementor' ),
                        'collection-five-box' => __( 'Collection Five Box', 'wolfactive-extend-elementor' ),
                        'collection-slider' => __( 'Collection Slider', 'wolfactive-extend-elementor' ),
                        'collection-button' => __( 'Collection Button View All', 'wolfactive-extend-elementor' ),
                        'collection-button-shop-now' => __( 'Collection Button Shop Now', 'wolfactive-extend-elementor' ),
                        'collection-boutique' => __( 'CO BOUTIQUE', 'wolfactive-extend-elementor' ),
                        'collection-slider-dot' => __( 'Collection Slider Dot', 'wolfactive-extend-elementor' ),
                    ],
                ]
            );
            $this->add_control(
                'collection_big_title', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Collection' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'collection_description',
                [
                    'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 10,
                    'default' => __( 'Pellentesque scelerisque eget lectus vitae congue. Phasellus ut laoreet purus. Proin accumsan commodo venenatis. Nunc nedolus vestibulum nisl sit amet tristique libero. Nulla cursus hendrerit facilisis. Duis mattis sit amet neque etos cosmo condimentum aliquam deratorum volutpat nam scelerisque ipsum accumsan lorem placerat dignissim.', 'wolfactive-extend-elementor' ),
                    'placeholder' => __( 'Type your description here', 'wolfactive-extend-elementor' ),
                ]
            );
            $this->add_control(
                'link_view_all',
                [
                    'label' => __( 'Link Button View All', 'wolfactive-extend-elementor' ),
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
                'collection_title_one_box', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Editor’s Pick' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'collection_desc_one_box', [
                    'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Diverra Blanditos' , 'wolfactive-extend-elementor' ),
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
            $repeater->add_control(
                'link_shop_now',
                [
                    'label' => __( 'Link Button Shop Now', 'wolfactive-extend-elementor' ),
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
                    'label' => __( 'Instagram Item', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 1,
                    'max' => 7,
                    'step' => 7,
                    'default' => 2,
                ]
            );
            $this->end_controls_section();
        }
        protected function render() {
            $settings = $this->get_settings_for_display();
            $class_preflix = 'wa-ella';
            if($settings['collection_style'] === 'collection-default'){
                include __DIR__ . '/sections/collection/collection-default.php';
            }
            if($settings['collection_style'] === 'collection-bottom-carousel'){
                include __DIR__ . '/sections/collection/collection-bottom-carousel.php';
            }
            if($settings['collection_style'] === 'collection-five-box'){
                include __DIR__ . '/sections/collection/collection-five-box.php';
            }
            if($settings['collection_style'] === 'collection-slider'){
                include __DIR__ . '/sections/collection/collection-slider.php';
            }
            if($settings['collection_style'] === 'collection-button'){
                include __DIR__ . '/sections/collection/collection-title-button.php';
            }
            if($settings['collection_style'] === 'collection-button-shop-now'){
                include __DIR__ . '/sections/collection/collection-slider-have-btn-shop.php';
            }
            if($settings['collection_style'] === 'collection-boutique'){
                include __DIR__ . '/sections/collection/collection-boutique.php';
            }
            if($settings['collection_style'] === 'collection-slider-dot'){
                include __DIR__ . '/sections/collection/collection-slider-dot.php';
            }
        }
    }

?>