<?php
    class Wolfactive_Elementor_Collection_With_Block_Banner extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_collection_block_banner';
        }
        public function get_title(){
            return __('Ella Collection With Block Banner','wolfactive-extend-elementor');
        }
        public function get_icon() {
            return 'fas fa-band-aid';
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
                    'default' => 'collection-with-block-banner',
                    'options' => [
                        'collection-with-block-banner'  => __( 'Collection With Block Banner 1', 'wolfactive-extend-elementor' ),
                        'collection-with-block-banner-2'  => __( 'Collection With Block Banner 2', 'wolfactive-extend-elementor' ),
                        'what-is-hot'  => __( 'What is hot', 'wolfactive-extend-elementor' ),
                        
                        
                    ],
                ]
            );
           
            $this->add_control(
                'image',
                [
                    'label' => __( 'Choose Image', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $this->add_control(
                'title', [
                    'label' => __( 'Big Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'WHAT’S HOT?' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'desc', [
                    'label' => __( 'Title Block Banner', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => __( 'Quisquemos sodales suscipit tortor ditaemcos' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'collection_title_one_box', [
                    'label' => __( 'Title Block Banner', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Editor’s Pick' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'name_button_shop_now', [
                    'label' => __( 'Name Button Block Banner', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'shop  now' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
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
            $repeaterCollec = new \Elementor\Repeater();
            $repeaterCollec->add_control(
                'list_image',
                [
                    'label' => __( 'Choose Image', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [  
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $repeaterCollec->add_control(
                'collection_title_one_box', [
                    'label' => __( 'Title', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Editor’s Pick' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $repeaterCollec->add_control(
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
                'list_right',
                [
                    'label' => __( 'Collection List', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeaterCollec->get_controls(),
                    'default' => [
                        [],
                    ],
                    'title_field' => 'Collection',
                ]
            );
            $this->add_control(
                'desc_bottom', [
                    'label' => __( 'Title Block Banner', 'wolfactive-extend-elementor' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => __( 'Pellentesque scelerisque eget lectus vitae congue. Phasellus ut laoreet purus.
                    Proin accumsan commodo venenatis. Nunc nedolus vestibulum nisl sit amet tristique libero. Nulla cursus
                    hendrerit facilisis. Duis mattis sit amet neque etos cosmo condimentum aliquam deratorum volutpat nam
                    scelerisque ipsum accumsan lorem placerat dignissim.' , 'wolfactive-extend-elementor' ),
                    'label_block' => true,
                ]
            );
            $this->end_controls_section();
        }
        protected function render() {
            $settings = $this->get_settings_for_display();
            $class_preflix = 'wa-ella';
            if($settings['collection_style'] === 'collection-with-block-banner'){
                include __DIR__ . '/sections/collection-custom/collection-with-block-banner.php';
            }
            if($settings['collection_style'] === 'collection-with-block-banner-2'){
                include __DIR__ . '/sections/collection-custom/collection-with-block-banner-2.php';
            }
            if($settings['collection_style'] === 'what-is-hot'){
                include __DIR__ . '/sections/collection-custom/what-is-hot.php';
            }
            
        }
    }

?>