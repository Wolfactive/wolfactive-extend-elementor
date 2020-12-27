<?php
    class Wolfactive_Elementor_Parallax extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_parallax';
        }
        public function get_title(){
            return __('Ella Parallax','wolfactive-extend-elementor');
        }
        public function get_icon() {
            return 'fas fa-dice-d20';
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
                'toggle_float',
                [
                    'label' => __( 'Float Header Toggle', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'wolfactive-extend-elementor' ),
                    'label_off' => __( 'Hide', 'wolfactive-extend-elementor' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                ]
            );

            $this->add_control(
                'logo_image',
                [
                    'label' => __( 'Choose White Logo', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'conditions' => [
                        'terms' => [
                            [
                                'name' => 'toggle_float',
                                'operator' => '==',
                                'value' => 'yes'
                            ],
                        ]
                    ]
                ]
            );
            
            $this->add_control(
                'notification',
                [
                    'label' => __( 'Important Note', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::RAW_HTML,
                    'raw' => __( '<p style="margin: 8px 0px;padding: 8px 0px;color: #333;font-size: 13px;font-weight: 600;border-top: 1px solid #333;border-bottom: 1px solid #333;">This style is worked if you choose header template 3 or header template 1</p>', 'wolfactive-extend-elementor' ),
                    'content_classes' => '',
                    'conditions' => [
                        'terms' => [
                            [
                                'name' => 'toggle_float',
                                'operator' => '==',
                                'value' => 'yes'
                            ],
                        ]
                    ]
                ]
            );
            /* Section 1 */
            $this->add_control(
                'image_bg_section_one',
                [
                    'label' => __( 'Choose Image Background Section 1', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $this->add_control(
                'title_section_one', [
                    'label' => __( 'Title Section 1', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'COSMOPOLIS' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'desc_section_one', [
                    'label' => __( 'Description Section 1', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Quisquemos sodales suscipit tortor ditaemcos condimentum de cosmo lacus meleifend menean diverra loremous.' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'link_section_one',
                [
                    'label' => __( 'Link Section 1', 'wolfactive-extend-elementor' ),
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
                'name_button_shop_now_section_one', [
                    'label' => __( 'Name Button Section 1', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Shop Now' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            /* End section 1*/

            /* Section 2 */
            $repeaterSection2 = new \Elementor\Repeater();
            $repeaterSection2->add_control(
                'list_image_section_two',
                [
                    'label' => __( 'Choose Image Section 2', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $repeaterSection2->add_control(
                'link_block_banner_section_two',
                [
                    'label' => __( 'Link Block Banner Section 2', 'wolfactive-extend-elementor' ),
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
            $repeaterSection2->add_control(
                'name_button_section_two', [
                    'label' => __( 'Name Button Section 2', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Shop Now' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );   
            $this->add_control(
                'list_section_two',
                [
                    'label' => __( 'List Section 2', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeaterSection2->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'Collection',
                ]
            );
            /* End Section 2*/

            /* Section 3 */
            $this->add_control(
                'image_bg_section_three',
                [
                    'label' => __( 'Choose Image Background Section 3', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $this->add_control(
                'title_section_three', [
                    'label' => __( 'Title Section 3', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'MILANCELOS' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'desc_section_three', [
                    'label' => __( 'Description Section 3', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Quisquemos sodales suscipit tortor ditaemcos condimentum de cosmo lacus meleifend menean diverra loremous.' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'link_section_three',
                [
                    'label' => __( 'Link Section 3', 'wolfactive-extend-elementor' ),
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
                'name_button_shop_now_section_three', [
                    'label' => __( 'Name Button Section 3', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Shop Now' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            /* End section 3*/

            /* Section 4 */
            $this->add_control(
                'image_bg_section_four',
                [
                    'label' => __( 'Choose Image Background Section 4', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $this->add_control(
                'title_section_four', [
                    'label' => __( 'Title Section 4', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'SALE NOW ON' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'desc_section_four', [
                    'label' => __( 'Description Section 4', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Quisquemos sodales suscipit tortor ditaemcos condimentum de cosmo lacus meleifend menean diverra loremous.' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'link_section_four',
                [
                    'label' => __( 'Link Section 4', 'wolfactive-extend-elementor' ),
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
                'name_button_shop_now_section_four', [
                    'label' => __( 'Name Button Section 4', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Shop Now' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            /* End section 4*/
            $this->end_controls_section();
        }
        protected function render() {
            $settings = $this->get_settings_for_display();
            $class_preflix = 'wa-ella';
            include __DIR__ . '/sections/parallax/parallax.php';
        }
    }

?>
