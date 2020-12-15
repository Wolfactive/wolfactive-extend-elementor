<?php
    class Wolfactive_Elementor_Policy extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_policy';
        }
        public function get_title(){
            return __('Ella Policy','wolfactive-extend-elementor');
        }
        public function get_icon() {
            return 'fas fa-book-open';
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
                'policy_style',
                [
                    'label' => __( 'Policy Style', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'policy-background',
                    'options' => [
                        'policy-background'  => __( 'Policy Background Color', 'wolfactive-extend-elementor' ),
                        'policy-none-background' => __( 'Policy No Background', 'wolfactive-extend-elementor' ),
                        'policy-border-top' => __( 'Policy Border Top', 'wolfactive-extend-elementor' ),
                        'policy-description' => __( 'Policy Description', 'wolfactive-extend-elementor' ),
                        'policy-no-icon' => __( 'Policy No Icon', 'wolfactive-extend-elementor' ),
                        'policy-border-box' => __( 'Policy Border Box', 'wolfactive-extend-elementor' ),
                    ],
                ]
            );
            $this->add_control(
                'background_color',
                [
                    'label' => __( 'Background Color', 'wolfactive-extend-elementor' ),
                    'default' => __( '#fff', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Scheme_Color::get_type(),
                        'value' => \Elementor\Scheme_Color::COLOR_1,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .wa-ella-policy' => 'background: {{VALUE}}',
                    ],
                ]
            );
            $this->add_control(
                'background_color_one_box',
                [
                    'label' => __( 'Background Color One Box', 'wolfactive-extend-elementor' ),
                    'default' => __( '#fafafa', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Scheme_Color::get_type(),
                        'value' => \Elementor\Scheme_Color::COLOR_1,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .wa-ella-polict-text' => 'background: {{VALUE}}',
                    ],
                ]
            );
            $repeater = new \Elementor\Repeater();
            $repeater->add_control(
                'policy_icon', [
                    'label' => __( 'Icon Policy', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( '<i class="fas fa-truck"></i>' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'policy_text', [
                    'label' => __( 'Text Policy', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Free Shipping on all orders *' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'policy_description', [
                    'label' => __( 'Description Policy', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => __( 'Metus tellus multricies a quam sit amet lorem diam libero de cosmopolis.' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'link_policy',
                [
                    'label' => __( 'Link Policy', 'wolfactive-extend-elementor' ),
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
                    'label' => __( 'Policy List', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'Policy',
                ]
            );
            $this->add_control(
                'slider_item',
                [
                    'label' => __( 'Policy Item', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 1,
                    'max' => 4,
                    'step' => 4,
                    'default' => 3,
                ]
            );
            $this->end_controls_section();
        }
        protected function render() {
            $settings = $this->get_settings_for_display();
            $class_preflix = 'wa-ella';
            if($settings['policy_style'] === 'policy-background'){
                include __DIR__ . '/sections/policy/policy-background.php';
            }
            if($settings['policy_style'] === 'policy-none-background'){
                include __DIR__ . '/sections/policy/policy-none-background.php';
            }
            if($settings['policy_style'] === 'policy-border-top'){
                include __DIR__ . '/sections/policy/policy-border-top.php';
            }
            if($settings['policy_style'] === 'policy-description'){
                include __DIR__ . '/sections/policy/policy-description.php';
            }
            if($settings['policy_style'] === 'policy-no-icon'){
                include __DIR__ . '/sections/policy/policy-no-icon.php';
            }
            if($settings['policy_style'] === 'policy-border-box'){
                include __DIR__ . '/sections/policy/policy-border-box.php';
            }
        }
    }

?>
