<?php
/*
Plugin Name: Wolfactive Extend Elementor
Plugin URI: https://wolfactive.dev/
Description: Extendes Elementor and creates custom widgets.
Version: 1.0.0
Author: Wolfactive
Author URI: https://wolfactive.dev/
License: GPLv2 and later
Text Domain: wolfactive-extend-elementor
Domain Path: /languages/

Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
(Plugin Name) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
(Plugin Name) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with (Plugin Name). If not, see (http://link to your plugin license).
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Main Elementor Extension Class
 * The main class that initiates and runs the plugin.
 * @since 1.0.0
 * 
 * The final keyword prevents child classes from overriding a method by prefixing the definition with final. 
 * It means if we define a method with final then it prevents us to override the method.
 */
final class Wolfactive_Extend_Elementor {
    /**
     * Plugin Version
     * @since 1.0.0
     * @var string The plugin version.
     */
    const VERSION = '1.0.0';

    /**
     * Minimum Elementor Version
     * @since 1.0.0
     * @var string Minimum Elementor version required to run the plugin.
     */
    const MINIMUM_ELEMENTOR_VERSION = '2.9.7';

    /**
     * Minimum PHP Version
     * @since 1.0.0
     * @var string Minimum PHP version required to run the plugin.
     */
    const MINIMUM_PHP_VERSION = '7.0';

    /**
     * Instance
     * @since 1.0.0
     * @access private
     * @static
     * @var Wolfactive_Extend_Elementor The single instance of the class.
     */
    private static $_instance = null;

    /**
     * Instance
     * Ensures only one instance of the class is loaded or can be loaded.
     * @since 1.0.0
     * @access public
     * @static
     * @return Wolfactive_Extend_Elementor An instance of the class.
     */
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Constructor
     * @since 1.0.0
     * @access public
     */
    public function __construct() {
        add_action( 'init', [ $this, 'i18n' ] );
        add_action( 'plugins_loaded', [ $this, 'init' ] );
    }

    /**
     * Load Textdomain
     * Load plugin localization files.
     * Fired by `init` action hook.
     * @since 1.0.0
     * @access public
     */
    public function i18n() {
        load_plugin_textdomain( 'wolfactive-extend-elementor' );
    }

    /**
     * Initialize the plugin
     *
     * Load the plugin only after Elementor (and other plugins) are loaded.
     * Checks for basic plugin requirements, if one check fail don't continue,
     * if all check have passed load the files required to run the plugin.
     *
     * Fired by `plugins_loaded` action hook.
     * @since 1.0.0
     * @access public
     */
    public function init() {

        // Check if Elementor installed and activated
        if ( ! did_action( 'elementor/loaded' ) ) {
            add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
            return;
        }

        // Check for required Elementor version
        if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
            add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
            return;
        }

        // Check for required PHP version
        if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
            add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
            return;
        }

        // 1. Add Plugin actions
        // here we will add actions to elementor widgets and controls
        add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );

        // 2. Register Widget Styles
        // here we will add action to enqueue styles

        // 3. Register custom categories
        //here we will add actions to create a custom category for our widgets
        add_action( 'elementor/elements/categories_registered', [ $this, 'WolfactiveElementor__widget_categories' ] );

        add_action( 'wp_enqueue_scripts', [ $this, 'init_style_script' ]);
        add_action( 'wp_head', [ $this, 'init_script_excute' ]);
    }

    /**
     * Admin notice
     * Warning when the site doesn't have Elementor installed or activated.
     * @since 1.0.0
     * @access public
     */
    public function admin_notice_missing_main_plugin() {

        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

        $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor */
            esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'wolfactive-extend-elementor' ),
            '<strong>' . esc_html__( 'Wolfactive Extend Elementor', 'wolfactive-extend-elementor' ) . '</strong>',
            '<strong>' . esc_html__( 'Elementor', 'wolfactive-extend-elementor' ) . '</strong>'
        );

        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

    }

    /**
     * Admin notice
     * Warning when the site doesn't have a minimum required Elementor version.
     * @since 1.0.0
     * @access public
     */
    public function admin_notice_minimum_elementor_version() {

        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

        $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
            esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'wolfactive-extend-elementor' ),
            '<strong>' . esc_html__( 'Tartist Elementor Extension', 'wolfactive-extend-elementor' ) . '</strong>',
            '<strong>' . esc_html__( 'Elementor', 'wolfactive-extend-elementor' ) . '</strong>',
                self::MINIMUM_ELEMENTOR_VERSION
        );

        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

    }

    /**
     * Admin notice
     * Warning when the site doesn't have a minimum required PHP version.
     * @since 1.0.0
     * @access public
     */
    public function admin_notice_minimum_php_version() {

        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

        $message = sprintf(
            /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
            esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'wolfactive-extend-elementor' ),
            '<strong>' . esc_html__( 'Wolfactive Extend Elementor', 'wolfactive-extend-elementor' ) . '</strong>',
            '<strong>' . esc_html__( 'PHP', 'wolfactive-extend-elementor' ) . '</strong>',
                self::MINIMUM_PHP_VERSION
        );

        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

    }
    /**
     * Adding custom widget category
     */
    public function WolfactiveElementor__widget_categories( $elements_manager ) {

        $elements_manager->add_category(
            'wolfactive-widgets',
            [
                'title' => __( 'Wolfactive Add On', 'wolfactive-extend-elementor' ),
                'icon' => 'fas fa-plug',
            ]
        );

    }

    /**
     * Include widgets files and register them
     * @since 1.0.0
     * @access public
     */
    public function init_widgets() {

        /**
         * Posts Widget
         */
         //Include Widget File 
        require_once( __DIR__ . '/widgets/wolfactive-carousel-widget.php' );
        require_once( __DIR__ . '/widgets/wolfactive-product-list-widget.php' );
        require_once( __DIR__ . '/widgets/wolfactive-instagram-widget.php' );
        require_once( __DIR__ . '/widgets/wolfactive-product-tab-widget.php' );
        require_once( __DIR__ . '/widgets/wolfactive-product-list-with-banner-widget.php' );
        require_once( __DIR__ . '/widgets/wolfactive-brand-widget.php' );
        require_once( __DIR__ . '/widgets/wolfactive-product-tab-with-banner-widget.php' );
        require_once( __DIR__ . '/widgets/wolfactive-policy-widget.php' );
        require_once( __DIR__ . '/widgets/wolfactive-featured-widget.php' );
        // Register posts widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Wolfactive_Elementor_Carousel() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Wolfactive_Elementor_Product_list() );       
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Wolfactive_Elementor_Instagram() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Wolfactive_Elementor_Product_tab() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Wolfactive_Elementor_Product_list_with_banner() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Wolfactive_Elementor_Brand() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Wolfactive_Elementor_Product_tab_with_banner() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Wolfactive_Elementor_Policy() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Wolfactive_Elementor_Featured() );
    }

    public function init_style_script() {

        /**
         * Style Script 
         */
        $plugin_url = plugin_dir_url( __FILE__ );
        wp_enqueue_style( 'wolfactive-ella-elementor-addon-css', $plugin_url . 'dist/css/main.css' );
        wp_enqueue_script( 'wolfactive-ella-elementor-addon-lib-js', $plugin_url . 'lib/slick.min.js', array ( 'jquery' ), 1.1, true);
        wp_enqueue_script( 'wolfactive-ella-elementor-addon-js', $plugin_url . 'dist/js/root.js', array ( 'jquery' ), 1.1, true);
    }
    public function init_script_excute() {
        if(!is_admin()):
            _e('<script defer type="text/javascript" src="'.plugins_url( 'dist/js/root.js', __FILE__ ).'"></script>', 'ella');
        endif;
    }
}

// instantiate the class `Wolfactive_Extend_Elementor` and run
Wolfactive_Extend_Elementor::instance();

// support function

function ella_check_col_render_class($col_pc,$col_tablet){
    if($col_pc == 1){
        _e('col-divide-12','ella');
    }
    if($col_pc === 2){
        _e('col-divide-6','ella');
    }
    if($col_pc === 3){
        _e('col-divide-4','ella');
    }
    if($col_pc === 4){
        _e('col-divide-3','ella');
    }
    if($col_pc === 5){
        _e('col-divide-5-col','ella');
    }
    if($col_pc === 5){
        _e('col-divide-2','ella');
    }
    _e(' ','ella');
    if($col_tablet == 1){
        _e('col-divide-lg-12','ella');
    }
    if($col_tablet === 2){
        _e('col-divide-lg-6','ella');
    }
    if($col_tablet === 3){
        _e('col-divide-lg-4','ella');
    }
    if($col_tablet === 4){
        _e('col-divide-lg-3','ella');
    }
    if($col_tablet === 5){
        _e('col-divide-lg-5-col','ella');
    }
    if($col_tablet === 5){
        _e('col-divide-lg-2','ella');
    }
}