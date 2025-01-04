<?php
/**
 * Plugin Name: KISS - Current Year
 * Plugin URI: https://kissplugins.com
 * Description: Adds a [current-year] shortcode that displays the current year (e.g., 2025).
 * Version: 1.0
 * Author: KISS Plugins
 * Author URI: https://kissplugins.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: hypercart-current-year
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! class_exists( 'HypercartCurrentYear' ) ) {
    class HypercartCurrentYear {

        /**
         * Constructor.
         */
        public function __construct() {
            // Register the shortcode [current-year].
            add_shortcode( 'current-year', array( $this, 'hc_year_shortcode' ) );
        }

        /**
         * Shortcode callback to output the current year.
         *
         * @return string Current year.
         */
        public function hc_year_shortcode() {
            return date( 'Y' ); 
        }
    }
}

// Initialize the plugin.
new HypercartCurrentYear();
