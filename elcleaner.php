<?php
/**
 * Plugin Name:       ElCleaner UI
 * Plugin URI:        https://www.ewallzsolutions.com
 * Description:       Cleaner UI for the Wordpress Page Builder
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            eWallz
 * Author URI:        https://www.ewallzsolutions.com
 * Version:           1.4
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       elcleaner
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue CSS for Elementor Editor
function elcleaner_enqueue_elementor_styles() {

    wp_register_style('elcleaner-elementor-style', false);
    wp_enqueue_style('elcleaner-elementor-style');
    
    $custom_css = '
        #e-notice-bar,
        #elementor-panel-get-pro-elements-sticky,
        #elementor-panel-get-pro-elements,
        #elementor-panel-category-pro-elements,
        #elementor-panel-category-theme-elements,
        #elementor-panel-category-theme-elements-single,
        #elementor-panel-category-woocommerce-elements,
        #elementor-navigator__footer__promotion,
        #elementor-navigator__ai-titles,
        #e-image-ai-insert-media,
        .elementor-add-section-inner,
        .elementor-nerd-box,
        .e-ai-button,
        .e-ai-layout-button,
        .elementor-template-library-blank-footer,
        button[aria-label="What\'s New"],
        .elementor-template-library-pro-template,
        .elementor-template-library-template-generate-variation,
        .elementor-add-new-section button:nth-of-type(3) {
            display: none !important;
        }
        .elementor-template-library-template-block {
            margin-top: unset !important;
        }
        button.e-ai-layout-button {
            display: none !important;
        }
    ';
    
    wp_add_inline_style('elcleaner-elementor-style', $custom_css);
}
add_action('elementor/editor/after_enqueue_styles', 'elcleaner_enqueue_elementor_styles');
