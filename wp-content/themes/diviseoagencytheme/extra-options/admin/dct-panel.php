<?php

/**

* Add Admin Menu

* Add Admin SubMenu

*/

if (! defined('ABSPATH')) {

    exit; // Exit if accessed directly

}

/* Add Add Admin Menu

-------------------------------------------------------------- */

function add_dct_admin_menu()

{

    add_menu_page(DCT_THEMENAME, DCT_THEMENAME, 'edit_theme_options', 'dct-options', 'dct_dcttheme_index');

    add_submenu_page(

        'dct-options',

        esc_html__('Welcome', 'dcttheme'),

        esc_html__('Welcome', 'dcttheme'),

        'switch_themes',

        'dct-options&tab=dct_welcome_tab',

        'dct_dcttheme_index'

    );

    add_submenu_page(

        'dct-options',

        esc_html__('Theme Options', 'dcttheme'),

        esc_html__('Theme Options', 'dcttheme'),

        'switch_themes',

        'et_divi_options#wrap-dct',

        'dct_dcttheme_index'

    );

}



function dct_dcttheme_index()

{

    ?>

<div id="panel-wrap" >
  <div id="epanel-wrapper" >
    <div id="epanel-content-wrap" >
      <div id="epanel-content" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
        <div id="epanel-header" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
          <h1 id="epanel-title">
            <?php esc_html_e('Welcome To ' .DCT_THEMENAME .' Child Theme!', 'dcttheme'); ?>
          </h1>
          <div class="epanel-text " ><?php echo esc_html_e(DCT_THEMENAME .'  Child Theme is now installed and ready to use! Read below for additional information. We hope you enjoy it!', 'dctonepage'); ?></div>
          <div class="dct-logo" > <span class="porto-version">
            <?php esc_html_e('Version', 'dctonepage'); ?>
            <?php esc_html_e(DCT_VERSION); ?>
            </span> </div>
        </div>
        <?php settings_errors();
		$active_tab ="dct_welcome_tab";
		if (!isset($_GET['dct_nonce']) || !wp_verify_nonce(sanitize_text_field($_GET['dct_nonce']), 'dct_verify')) 
		{
			$active_tab = sanitize_text_field(isset($_GET['tab']) ? $_GET['tab'] : 'dct_welcome_tab'); 
		}
		
		
        ?>
        <ul id="epanel-mainmenu" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" >
          <li class="ui-state-default ui-corner-top <?php esc_html_e ($active_tab == 'dct_welcome_tab' ? ' ui-tabs-active ui-state-active' : '');?>" > <a href="<?php esc_html_e  (wp_nonce_url(admin_url('?page=dct-options&tab=dct_welcome_tab'), 'dct_verify', 'dct_nonce'));?>" class="ui-tabs-anchor" > Welcome</a> </li>
          <li class="ui-state-default ui-corner-top <?php esc_html_e ($active_tab == 'dct_themeoptions_tab' ? ' ui-tabs-active ui-state-active' : '');?>" > <a href="<?php esc_html_e ( wp_nonce_url(admin_url('?page=et_divi_options#wrap-dct'), 'dct_verify', 'dct_nonce'));?>"  class="ui-tabs-anchor" >Theme Options</a> </li>
        </ul>
        <?php do_action('dct_tabs', 'dct-options', $active_tab); ?>
        <div class="et-content-div ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs ui-widget ui-corner-all" >
          <div class="et-tab-content ui-tabs-panel ui-widget-content ui-corner-bottom" >
            <form method="post" action="#">
              <?php

 						  
                         if ($active_tab == 'dct_welcome_tab') {

                            require_once get_stylesheet_directory() . '/extra-options/admin/welcome.php';

                        } else if ($active_tab == 'dct_themeoptions_tab') {

                            require_once get_stylesheet_directory() . '/extra-options/admin/themeoptions.php';

                        }

                        ?>
                       
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }

/* Add Child Theme Admin Menu

-------------------------------------------------------------- */

add_action('admin_menu', 'add_dct_admin_menu');


