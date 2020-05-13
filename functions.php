<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php'); 

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php'); 

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php');


// Custom Enqueue Scripts
// -------------------------------------------------------------
function fltd_enqueue_scripts() {
    if ( !is_admin() ) { // Instruction to only load if it is not the admin area
    // Register your script location, dependencies and version

        /* font (google CDN) */
        wp_register_style('googleFonts-robo', '//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
        wp_enqueue_style( 'googleFonts-robo');

        /* jquery (google CDN) */
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js');
        wp_enqueue_script('jquery');

        /* jquery UI (google CDN) */
        wp_deregister_script('jquery-ui-core');
        wp_register_script('jquery-ui-core', '//ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js');
        wp_enqueue_script('jquery-ui-core');

        /* masonry (http://masonry.desandro.com) */
        wp_register_script('masonry', '/wp-content/themes/forgottenltd/js/masonry.pkgd.min.js','jquery','', true);    
        wp_enqueue_script('masonry');

        /* isotope */
        // wp_register_script('isotope', '/wp-content/themes/lmgh/js/isotope.pkgd.js','', true);
        // wp_enqueue_script('isotope');

        /* isotope - custom */
        // wp_register_script('isotope-custom', '/wp-content/themes/lmgh/js/isotope.custom.js','', true);
        // wp_enqueue_script('isotope-custom');

        /* imageload - custom */
        // wp_register_script('images-loaded', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.1.8/imagesloaded.min.js','jquery', true);
        // wp_enqueue_script('images-loaded');

        
        /* scrolltotop (https://premium.wpmudev.org/blog/back-to-top-button-wordpress/) */ 
        // wp_register_script('scrolltotop', '/wp-content/themes/lmgh/js/scrolltotop.js','jquery','', true);    
        // wp_enqueue_script('scrolltotop');

        /* tota11y */
        /* http://khan.github.io/tota11y/ */
        /* wp_register_script('tota11y', '/wp-content/themes/lmgh/js/tota11y.min.js','', false); */
        /* wp_enqueue_script('tota11y'); */
    }
}
add_action('wp_enqueue_scripts', 'fltd_enqueue_scripts');

// For Typekit
// https://wpbeaches.com/stop-flicker-flash-load-adobe-typekit-font-faster-wordpress/

// ---
// Custom Admin Logo
// -------------------------------------------------------------
function fltd_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo-forgottenltd-admin.png);
            padding-bottom: 2px;
            -webkit-background-size: 315px 55px;
            background-size: 315px 55px;
            height: 55px;
            width: 315px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'fltd_login_logo' );
