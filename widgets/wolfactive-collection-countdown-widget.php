<?php
    class Wolfactive_Elementor_Collection_Countdown extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_collection_countdown';
        }
        public function get_title(){
            return __('Ella Collection Countdown','wolfactive-extend-elementor');
        }
        public function get_icon() {
            return 'fas fa-clock';
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
                    'default' => 'collection-countdown',
                    'options' => [
                        'collection-countdown'  => __( 'Collection Countdown', 'wolfactive-extend-elementor' ),
                    ],
                ]
            );
            $this->add_control(
                'due_date',
                [
                    'label' => __( 'Date Countdown', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::DATE_TIME,
                    'picker_options' => [
                        'dateFormat' => 'F j, Y h:i:s',
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
            $this->add_control(
                'list_left',
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
            $repeaterBetween = new \Elementor\Repeater();
            $repeaterBetween->add_control(
                'list_image',
                [
                    'label' => __( 'Choose Image', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $repeaterBetween->add_control(
                'collection_title_one_box', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Editor’s Pick' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeaterBetween->add_control(
                'collection_desc_one_box', [
                    'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Diverra Blanditos' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeaterBetween->add_control(
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
            $this->add_control(
                'list_between',
                [
                    'label' => __( 'Collection List', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeaterBetween->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'Collection',
                ]
            );
            $repeaterRight = new \Elementor\Repeater();
            $repeaterRight->add_control(
                'list_image',
                [
                    'label' => __( 'Choose Image', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $repeaterRight->add_control(
                'collection_title_one_box', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Editor’s Pick' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeaterRight->add_control(
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
            // $repeaterRight->add_control(
            //     'name_button_shop_now', [
            //         'label' => __( 'Name Button Shop Now', 'wolfactive-extend-elementor' ),
            //         'type' => \Elementor\Controls_Manager::TEXT,
            //         'default' => __( 'Shop Now' , 'wolfactive-extend-elementor' ),
            //         'label_block' => true,
            //     ]
            // );
            // $repeaterRight->add_control(
            //     'link_shop_now',
            //     [
            //         'label' => __( 'Link Button Shop Now', 'wolfactive-extend-elementor' ),
            //         'type' => \Elementor\Controls_Manager::URL,
            //         'placeholder' => __( home_url(), 'wolfactive-extend-elementor' ),
            //         'show_external' => true,
            //         'default' => [
            //             'url' => home_url(),
            //             'is_external' => true,
            //             'nofollow' => true,
            //         ],
            //     ]
            // );
            $this->add_control(
                'list_right',
                [
                    'label' => __( 'Collection List', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeaterRight->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'Collection',
                ]
            );
            $this->add_control(
                'slider_item',
                [
                    'label' => __( 'Collection Item', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 1,
                    'max' => 7,
                    'step' => 7,
                    'default' => 1,
                ]
            );
            $this->end_controls_section();
        }
        protected function render() {
            $settings = $this->get_settings_for_display();
            $class_preflix = 'wa-ella';
            if($settings['collection_style'] === 'collection-countdown'){
                include __DIR__ . '/sections/collection-custom/collection-countdown.php';
            }
        }
    }

?>