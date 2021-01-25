<?php
    class Wolfactive_Elementor_Breadcums extends \Elementor\Widget_Base{

        public function get_name(){
            return 'wolfactive_breadcums';
        }
        public function get_title(){
            return __('Ella BreadCums','wolfactive-extend-elementor');
        }
        public function get_icon() {
            return 'fas fa-heading';
        }
        public function get_categories() {
            return [ 'wolfactive-widgets' ];
        }
        protected function _register_controls() {
            $this->start_controls_section(
                'content_section',
                [
                    'label' => __( 'BreadCums', 'wolfactive-extend-elementor' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
            );
            
            $this->end_controls_section();
        }
        protected function render() {
            $settings = $this->get_settings_for_display();
            get_template_part('sections/breadcrumbs'); ?>
            <div class="main-page__title">
                <h3 class="title--general">
                    <?php the_title(); ?>
                </h3>
            </div>
            <?php 
        }
    }

?>
