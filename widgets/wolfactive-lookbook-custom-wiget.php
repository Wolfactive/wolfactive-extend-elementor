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
            $this->add_control(
                'img_gallery_lb',
                [
                    'label' => __( 'Add Images', 'plugin-domain' ),
                    'type' => \Elementor\Controls_Manager::GALLERY,
                    'default' => [],
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
        $repeater_child = new \Elementor\Repeater();

        $repeater_child->add_control(
            'carousel_choose',
            [
                'label' => __( 'Lookbook Add Modal', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'step' => 100,
                'default' => 0,
            ]
        );
        $repeater_child->add_control(
            'top',
            [
                'label' => __( 'Top(Position) %', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'step' => 1000,
                'default' => 0,
            ]
        );
        $repeater_child->add_control(
            'left',
            [
                'label' => __( 'Left(Position) %', 'wolfactive-extend-elementor' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'step' => 1000,
                'default' => 0,
            ]
        );
		$repeater_child->add_control(
            'location_modal',
            [
				'label' => __( 'Location Modal', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'left',
				'options' => [
					'left'  => __( 'Left', 'wolfactive-extend-elementor' ),
					'right' => __( 'Right', 'wolfactive-extend-elementor' ),
				],
            ]
        );
        $options = [];
		$post_array = get_posts('post_type=product&posts_per_page=-1&post_status=publish');
		foreach($post_array as $post){
			$options[$post->ID] = [__($post->post_title,'wolfactive-extend-elementor')];
		}
		$repeater_child->add_control(
			'show_elements',
			[
				'label' => __( 'Choose Product', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'multiple' => true,
				'options' => $options,
				'default' => [],
			]
        );
        
        $this->add_control(
			'list_child',
			[
				'label' => __( 'Product Modal List', 'wolfactive-extend-elementor' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater_child->get_controls(),
				'default' => [
					[],
                ],
                'title_field' => 'Product Modal',
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