<?php if( file_exists( get_stylesheet_directory().'/jedi-apprentice/jedi-apprentice-import.php' ) && !defined('JEDI_APPRENTICE_PATH') ) {include_once( get_stylesheet_directory().'/jedi-apprentice/jedi-apprentice-import.php' );} ?><?php

if (!defined('ABSPATH')) {

    die();

}

/**

* dct_enqueue_css

* dct_enqueue_admin

* Extra Theme Tabs Options

*/

/* Hook */

add_action('wp_enqueue_scripts', 'dct_enqueue_css');

add_action('admin_enqueue_scripts', 'dct_enqueue_admin', 9999);

/* Include Config */

include_once(get_stylesheet_directory() . '/extra-options/config.php');

/* Add Default Parent Css */

function dct_enqueue_css()

{

    wp_enqueue_style('parent-style', get_template_directory_uri(). '/style.css');

    wp_enqueue_style('carousel-style', get_stylesheet_directory_uri().'/assets/css/owl.carousel.min.css');

    wp_enqueue_style('carousel-theme-style', get_stylesheet_directory_uri().'/assets/css/owl.theme.min.css');

    wp_enqueue_script('dct-carousel', get_stylesheet_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '', true);

    wp_enqueue_script('dct-custom', get_stylesheet_directory_uri().'/assets/js/dctcustom.js', array('jquery'), '', true);

}

function dct_enqueue_admin()

{

	wp_enqueue_style('dct-custom-admin', get_stylesheet_directory_uri().'/assets/css/admin.css');

	if ( ! wp_style_is( 'epanel-style', 'enqueued' ) ) {

		wp_enqueue_style('dct-epanel-css', get_template_directory_uri().'/epanel/css/panel.css');

	}

}

/* Include Extra Options */

include get_stylesheet_directory() . '/extra-options/modules.php';

/* Include Admin One Click Options */

include get_stylesheet_directory() . '/extra-options/admin/dct-panel.php';

/* Add Front-Site Css And JS */

add_action('wp_enqueue_scripts', 'dct_enqueue_css');

/* Add Admin Css And JS */

add_action('admin_enqueue_scripts', 'dct_enqueue_admin', 9999);

/* Admin footer modification */

function dct_footer_opt()

{

    ?> 

    <style type="text/css">

        :root {
            --color-1: <?php echo esc_attr(et_get_option('divi_DCT_color_palette_01', '#ee212b'));  ?>;
            --color-2: <?php echo esc_attr(et_get_option('divi_DCT_color_palette_02', '#082c4b'));  ?>;
			--color-3: <?php echo esc_attr(et_get_option('divi_DCT_color_palette_03', '#fe9192'));  ?>;
			--color-4: <?php echo esc_attr(et_get_option('divi_DCT_color_palette_04', '#8ee4cc'));  ?>;

        }

    </style>

    <?php

    include get_stylesheet_directory(). '/extra-options/opt.php';

}

add_action('wp_footer', 'dct_footer_opt');


/* Module within a module */
add_filter( 'manage_et_pb_layout_posts_columns', 'pmh_shortcode_column', 5 );
add_action( 'manage_et_pb_layout_posts_custom_column', 'pmh_shortcode_content', 5, 2 );
add_shortcode('pmh_showmodule', 'pmh_shortcode_mod');
function pmh_shortcode_column( $columns ) {
	$columns['pmh_shortcode_id'] = 'Module Shortcode';
	return $columns;
}
function pmh_shortcode_content( $column, $id ) {
	if( 'pmh_shortcode_id' == $column ) {
		?>
		<p>[pmh_showmodule id="<?php echo $id ?>"]</p>
		<?php
	}
}
// Create New Shortcode
function pmh_shortcode_mod($pmh_shortcode_id) {
	extract(shortcode_atts(array('id' =>'*'),$pmh_shortcode_id));
	return do_shortcode('[et_pb_section global_module="'.$id.'"][/et_pb_section]');
}

/*Add Subline on Menu*/
function divitradesman_header_menu_desc( $item_output, $item, $depth, $args ) {
	if( 'primary-menu' == $args->theme_location &&  $depth && $item->description )
		$item_output = str_replace( '</a>', '<br /><span class="sub-description">' . $item->description . '</span></a>', $item_output );
		
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'divitradesman_header_menu_desc', 10, 4 );
?>