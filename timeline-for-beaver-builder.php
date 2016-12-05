<?php
/**
 * Plugin Name: Timeline For Beaver Builder 
 * Plugin URI: https://www.brainstormforce.com/
 * Description: Timeline for Beaver Builder is a custom modules for Beaver Builder to create the awesome responsive timeline with animation.
 * Version: 1.0.0
 * Author: Brainstorm force, Bhushan Bobade
 * Author URI: https://www.brainstormforce.com/
 * Text Domain: bb-timeline
 */
define( 'TIMELINE_FOR_BEAVER_BUILDER_DIR', plugin_dir_path( __FILE__ ) );
define( 'TIMELINE_FOR_BEAVER_BUILDER_URL', plugins_url( '/', __FILE__ ) );

/**
 * Custom modules
 */
// check of BSFBBTimeline class already exist or not
if ( !class_exists( 'BSFBBTimeline' ) ) {

    class BSFBBTimeline
    {
        //to initializ new object
        function __construct() {
            add_action( 'init', array( $this, 'load_timeline' ) );
            add_action('init', array( $this, 'load_textdomain'));
        }

        // function to load BB Bootstrap Cards
        function load_timeline() {

            if ( class_exists( 'FLBuilder' ) ) {

                // If class exist it loads the module
                require_once 'timeline-for-beaver-builder-module/timeline-for-beaver-builder-module.php';

            }

            else {

                // Display admin notice for activating beaver builder
                add_action('admin_notices',array($this,'admin_notices_function'));
                add_action('network_admin_notices',array($this,'admin_notices_function'));

            }
        }

        // function to load text domain
        public function load_textdomain() {
            
            load_plugin_textdomain( 'bb-timeline' );
            
        }

        // function to display admin notice
        function admin_notices_function() {

            // check for Beaver Builder Installed / Activated or not
            if ( file_exists( plugin_dir_path( 'bb-plugin-agency/fl-builder.php' ) ) 

                || file_exists( plugin_dir_path( 'beaver-builder-lite-version/fl-builder.php' ) ) ) {

                $url = network_admin_url() . 'plugins.php?s=Beaver+Builder+Plugin';
            
            } 
            
            else {
            
                $url = network_admin_url() . 'plugin-install.php?s=billyyoung&tab=search&type=author';
            
            }
            
            //To display notice 
            echo '<div class="notice notice-error">';

                echo "<p>". sprintf( __( 'The <strong>Timeline Module For Beaver Builder</strong> plugin requires <strong><a href="%s">Beaver Builder</strong></a> plugin installed & activated.', 'bb-timeline' ) . "</p>", $url );
            
            echo '</div>';
        } 
    }

    new BSFBBTimeline();
}