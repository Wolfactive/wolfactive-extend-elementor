<?php
    class Wolfactive_Elementor_Latest_Post extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_latest_post';
        }
        public function get_title(){
            return __('Ella Latest Post','wolfactive-extend-elementor');
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
                'latest_post_style',
                [
                    'label' => __( 'Latest Post Style', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'latest-post-default',
                    'options' => [
                        'latest-post-default'  => __( 'Latest Post Default', 'wolfactive-extend-elementor' ),
                        'latest-post-slider'  => __( 'Latest Post Slider', 'wolfactive-extend-elementor' ),
                        'latest-post-slider-no-border'  => __( 'Latest Post Slider No Border', 'wolfactive-extend-elementor' ),
                        'latest-post-hover'  => __( 'Latest Post Hover', 'wolfactive-extend-elementor' ),
                    ],
                ]
            );
            $this->add_control(
                'latest_post_title', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Latest Post' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
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
                    'default' => 'yes',
                    'conditions' => [
                        'terms' => [
                            [
                                'name' => 'latest_post_style',
                                'operator' => '!=',
                                'value' => 'latest-post-hover'
                            ],
                        ]
                    ]
                ]
            );
            $this->add_control(
                'latest_post_description',
                [
                    'label' => __( 'Description', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 10,
                    'default' => __( 'Phasellus lorem malesuada ligula pulvinar commodo maecenas.', 'wolfactive-extend-elementor' ),
                    'placeholder' => __( 'Type your description here', 'wolfactive-extend-elementor' ),
                ]
            );
            $options = [];
            $post_array = get_posts('post_type=post&posts_per_page=-1&post_status=publish');
            foreach($post_array as $post){
                $options[$post->ID] = [__($post->post_title,'wolfactive-extend-elementor')];
            }
            $this->add_control(
                'show_elements',
                [
                    'label' => __( 'Choose Post', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT2,
                    'multiple' => true,
                    'options' => $options,
                    'default' => [],
                    'label_block' => true,
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
                    'default' => 3,
                ]
            );
            $this->end_controls_section();
        }
        protected function render() {
            $settings = $this->get_settings_for_display();
            $class_preflix = 'wa-ella';
            if($settings['latest_post_style'] === 'latest-post-default'){
                include __DIR__ . '/sections/latest-post/latest-post-default.php';
            }
            if($settings['latest_post_style'] === 'latest-post-slider'){
                include __DIR__ . '/sections/latest-post/latest-post-slider.php';
            }
            if($settings['latest_post_style'] === 'latest-post-slider-no-border'){
                include __DIR__ . '/sections/latest-post/latest-post-slider-no-border.php';
            }
            if($settings['latest_post_style'] === 'latest-post-hover'){
                include __DIR__ . '/sections/latest-post/latest-post-hover.php';
            }
        }
    }

?>
