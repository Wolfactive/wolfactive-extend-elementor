<?php
    class Wolfactive_Elementor_Featured extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_feature';
        }
        public function get_title(){
            return __('Ella Feature','wolfactive-extend-elementor');
        }
        public function get_icon() {
            return 'fas fa-grip-vertical';
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
                'featured_style',
                [
                    'label' => __( 'Featured Style', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'featured-three-box',
                    'options' => [
                        'featured-three-box'  => __( 'Featured Three Box', 'wolfactive-extend-elementor' ),
                        'featured-two-box' => __( 'Featured Two Box', 'wolfactive-extend-elementor' ),
                        'featured-text-on-img' => __( 'Featured Text On Image', 'wolfactive-extend-elementor' ),
                        'featured-text-on-img-2' => __( 'Featured Text On Image 2', 'wolfactive-extend-elementor' ),
                        'featured-five-box' => __( 'Featured Five Box', 'wolfactive-extend-elementor' ),
                        'featured-slider' => __( 'Featured Slider', 'wolfactive-extend-elementor' ),
                    ],
                ]
            );
            $this->add_control(
                'featured_title', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( '#FEATURED ON ELLA' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'bg_toggle_feture',
                [
                    'label' => __( 'Background', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => __( 'On', 'wolfactive-extend-elementor' ),
                    'label_off' => __( 'Off', 'wolfactive-extend-elementor' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                ]
            );
            $this->add_control(
                'toggle_title_line',
                [
                    'label' => __( 'Toggle Title Line', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => __( 'On', 'wolfactive-extend-elementor' ),
                    'label_off' => __( 'Off', 'wolfactive-extend-elementor' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                    'conditions' => [
                        'relation' => 'and',
                        'terms' => [
                            [
                                'name' => 'featured_style',
                                'operator' => '!=',
                                'value' => 'featured-slider'
                            ],
                            [
                                'name' => 'featured_style',
                                'operator' => '!=',
                                'value' => 'featured-text-on-img'
                            ],
                        ]
                    ]
                ]
            );
            $this->add_control(
                'featured_description',
                [
                    'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 10,
                    'default' => __( 'Phasellus lorem malesuada ligula pulvinar commodo maecenas.', 'wolfactive-extend-elementor' ),
                    'placeholder' => __( 'Type your description here', 'wolfactive-extend-elementor' ),
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
                'sub_title_one_box', [
                    'label' => __( 'Sub Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'New Arrivals' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'featured_title_one_box', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'LOREM DE DORUS' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'featured_description_one_box',
                [
                    'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 10,
                    'default' => __( 'Nullam aliquet vestibulum augue non varius. Cras cosmo congue an melitos. Duis tristique del ante le maliquam. Praesent murna de tellus laoreet cosmopolis.', 'wolfactive-extend-elementor' ),
                    'placeholder' => __( 'Type your description here', 'wolfactive-extend-elementor' ),
                ]
            );
            $repeater->add_control(
                'text_button', [
                    'label' => __( 'Name Button', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'shop now' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'link_featured',
                [
                    'label' => __( 'Link Featured', 'wolfactive-extend-elementor' ),
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
                    'label' => __( 'Featured List', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'Featured',
                ]
            );
            $repeaterTwo = new \Elementor\Repeater();
            $repeaterTwo->add_control(
                'list_image_two',
                [
                    'label' => __( 'Choose Image', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $repeaterTwo->add_control(
                'sub_title_one_box_two', [
                    'label' => __( 'Sub Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'New Arrivals' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeaterTwo->add_control(
                'featured_title_one_box_two', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'LOREM DE DORUS' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeaterTwo->add_control(
                'link_featured_two',
                [
                    'label' => __( 'Link Featured', 'wolfactive-extend-elementor' ),
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
                'list_two',
                [
                    'label' => __( 'Featured List Two', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeaterTwo->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'Featured',
                ]
            );
            $this->add_control(
                'slider_item',
                [
                    'label' => __( 'Featured Slider Item', 'wolfactive-extend-elementor' ),
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
            if($settings['featured_style'] === 'featured-three-box'){
                include __DIR__ . '/sections/featured-on-ella/featured-three-box.php';
            }
            if($settings['featured_style'] === 'featured-two-box'){
                include __DIR__ . '/sections/featured-on-ella/featured-two-box.php';
            }
            if($settings['featured_style'] === 'featured-text-on-img'){
                include __DIR__ . '/sections/featured-on-ella/featured-text-on-img.php';
            }
            if($settings['featured_style'] === 'featured-five-box'){
                include __DIR__ . '/sections/featured-on-ella/featured-five-box.php';
            }
            if($settings['featured_style'] === 'featured-slider'){
                include __DIR__ . '/sections/featured-on-ella/featured-slider.php';
            }
            if($settings['featured_style'] === 'featured-text-on-img-2'){
                include __DIR__ . '/sections/featured-on-ella/featured-text-on-img-2.php';
            }
        }
    }

?>