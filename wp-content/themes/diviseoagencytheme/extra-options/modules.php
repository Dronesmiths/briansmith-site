<?php

/**

* Social

* Extra Theme Options

* Extra Theme Tabs Options

* Preloader

*/

/* Add Extra Social Icons Code Here

-------------------------------------------------------------- */
 
/* Add Theme Options Panel Tabs Code Here*/

function dct_epanel_tabs()

{

    dct_epanel_fields();  ?><li><a href="#wrap-dct"><?php echo 'DCT Options'; ?></a></li><?php

}

/* End Theme Options Panel Tabs Code Here**/

/* Add Theme Options Panel Tabs Options Code Here

*  Preloader

*  Blog

*  404-Page

*  Woocommerce

-------------------------------------------------------------- */

function dct_epanel_fields()

{

    global $epanelMainTabs, $themename, $shortname, $options ;

    $options[] = array(

        "name" => "wrap-dct",

        "type" => "contenttab-wrapstart",);

            $options[] = array(

            "type" => "subnavtab-start",);

                $options[] = array(

                    "name" => "dct-1",

                    "type" => "subnav-tab",

                    "desc" => esc_html__("General", $themename)

                );

                $options[] = array(

                    "name" => "dct-2",

                    "type" => "subnav-tab",

                    "desc" => esc_html__("Preloader", $themename)

                );

                $options[] = array(

                "type" => "subnavtab-end",);

                $options[] = array(

                "name" => "dct-1",

                "type" => "subcontent-start",);

                $options[] = array(

                    "name" =>esc_html__('Theme Color Options', $themename),

                    "id" => $shortname . "_DCT_show_color_option",

                    "type" => "checkbox2",

                    "std" => "off",

                    "desc" =>esc_html__("Define the default color palette for color pickers in the Divi Builder.", $themename),

                );

                $options[] = array( "name"         => esc_html__("Default Primary Color", $themename),

                    "id"           => $shortname . "_DCT_color_palette_01",

                    "type"         => "et_color_palette",

                    "items_amount" => 1,

                    "std"          => '#ee212b',

                    "desc"         => esc_html__("Define the default color palette for color pickers in the Divi Builder.", $themename),

                );

                $options[] = array( "name"         => esc_html__("Default secondary Color", $themename),

                    "id"           => $shortname . "_DCT_color_palette_02",

                    "type"         => "et_color_palette",

                    "items_amount" => 1,

                    "std"          => '#082c4b',

                    "desc"         => esc_html__("Define the default secondary color palette for color pickers in the Divi Builder.", $themename),

                );
	
				$options[] = array( "name"         => esc_html__("Default Third Color", $themename),

                    "id"           => $shortname . "_DCT_color_palette_03",

                    "type"         => "et_color_palette",

                    "items_amount" => 1,

                    "std"          => '#fe9192',

                    "desc"         => esc_html__("Define the default secondary color palette for color pickers in the Divi Builder.", $themename),

                );
	
				$options[] = array( "name"         => esc_html__("Default Four Color", $themename),

								"id"           => $shortname . "_DCT_color_palette_04",

								"type"         => "et_color_palette",

								"items_amount" => 1,

								"std"          => '#8ee4cc',

								"desc"         => esc_html__("Define the default secondary color palette for color pickers in the Divi Builder.", $themename),

							);

                $options[] = array(

                "name" => "dct-1",

                "type" => "subcontent-end",);

            //**************************Pre-Loader Options Start Here******************************************//

                $options[] = array(

                "name" => "dct-2",

                "type" => "subcontent-start",);

                $options[] = array(

                    'name' => esc_html__('Preloader', $themename),

                    'id' => $shortname . "_DCT_preloader_option",

                    'desc' => esc_html__('Prealoder ENABLE/DISABLE', $themename),

                    'std' => 'off',

                    "type" => "checkbox"

                );

                $options[] = array(

                    'name' => esc_html__('Preloader Images', $themename),

                    'desc' => '',

                    "type" => "callback_function",

                    "function_name" => 'et_preloader_option',

                );

                $options[] = array(

                    'name' => esc_html__('Preloader Custom Image', $themename),

                    'id' => $shortname . "_DCT_preloader_custom_image_option",

                    'desc' => esc_html__('Prealoder Custom Image ENABLE/DISABLE', $themename),

                    'std' => 'off',

                    "type" => "checkbox"

                );

                $options[] = array(

                    'name' => esc_html__('Preloader Image Uploader', $themename),

                    'id' => $shortname . "_DCT_preloader_custom_image",

                    'desc' => esc_html__('You can Upload your Desire image.Image size will be maximum width: 200px and maximum height : 200px', $themename),

                    'std' => '',

                    "type" => "upload"

                );

                $options[] = array(

                    'name' => esc_html__('Preloader color', $themename),

                    'id' => $shortname . "_DCT_preloader_color",

                    'desc' => esc_html__('Please Select Preloader color here. You can also add html HEX color code.', $themename),

                    'std' => '#ee212b',

                    "type" => "et_color_palette"

                );

                $options[] = array(

                    'name' => esc_html__('Preloader background color', $themename),

                    'id' => $shortname . "_DCT_preloader_background_color",

                    'desc' => esc_html__('Please Select preloader background color here. You can also add html HEX color code.', $themename),

                    'std' => '#082c4b',

                    "type" => "et_color_palette"

                );

                $options[] = array(

                    'name' => esc_html__('Preloader Effects', $themename),

                    'id' => $shortname . "_DCT_preloader_effects",

                    'desc' => esc_html__('Preloader Effects.', $themename),

                    'std' => 'fadeOut',

                    "type" => "select",

                    "options" => array(

                        'fadeOut' => esc_html__('FadeOut ', $themename),

                        'slideUp' => esc_html__('SlideUp', $themename),

                    ),

                    'et_save_values' => true,

                );

                $options[] = array(

                    'name' => esc_html__('Preloader Delay time', $themename),

                    'type' => 'text',

                    'id' => $shortname . "_DCT_preloader_delay_time",

                    'desc' => esc_html__('Please put delay time, only use number. Default value is 350. Example: 350', $themename),

                    'std' => '350',

                );

                $options[] = array(

                    'name' => esc_html__('Body Delay time', $themename),

                    'type' => 'text',

                    'id' => $shortname . "_DCT_preloader_body_delay_time",

                    'desc' => esc_html__('Please put delay time, only use number. Default value is 350. Example: 350', $themename),

                    'std' => '350',

                );

                $options[] = array(

                    'name' => esc_html__('Preloader Fadeout Speed', $themename),

                    'id' => $shortname . "_DCT_preloader_fadeout_speed",

                    'desc' => esc_html__('Preloader Fadeout Speed.', $themename),

                    'std' => 'fast',

                    "type" => "select",

                    "options" => array(

                      'fast' => esc_html__('Fast', $themename),

                      'slow' => esc_html__('Slow', $themename),

                    ),

                    'et_save_values' => true,

                );

                $options[] = array(

                "name" => "dct-2",

                "type" => "subcontent-end",);

            //**************************Pre-Loader Options End Here******************************************//

        ///***************************Particle Ground Options End Here*****************************************//

                $options[] = array(

                "name" => "wrap-dct",

                "type" => "contenttab-wrapend",);

}

/** End Theme Options Panel Tabs Options Code Here **/



/* Adding Preloader Options Code Here **/

function DCT_custom_preloader_option_css()

{

    if (et_get_option('divi_DCT_preloader_option') != '') {

        $divi_DCT_preloader_option = et_get_option('divi_DCT_preloader_option');

    } else {

        $divi_DCT_preloader_option = 'on';

    }//if( et_get_option('divi_DCT_preloader_option') != '' )

    if ($divi_DCT_preloader_option == 'on') {

        $divi_DCT_preloader_images = get_option('divi_DCT_preloader_images');

        $divi_DCT_preloader_custom_image = et_get_option('divi_DCT_preloader_custom_image');

        $divi_DCT_preloader_background_color = et_get_option('divi_DCT_preloader_background_color');

        $divi_DCT_preloader_effects = et_get_option('divi_DCT_preloader_effects');

        $divi_DCT_preloader_delay_time = et_get_option('divi_DCT_preloader_delay_time');

        $divi_DCT_preloader_body_delay_time = et_get_option('divi_DCT_preloader_body_delay_time');

        $divi_DCT_preloader_fadeout_speed = et_get_option('divi_DCT_preloader_fadeout_speed');

        ?>

        <style type="text/css">

                .preloader{position:fixed;top:0;left:0;right:0;bottom:0; z-index:100000;height:100%;width:100%;overflow:hidden !important;z-index:9999999999999999;background-color: <?php echo esc_attr(et_get_option('divi_DCT_preloader_background_color', '#ee212b')); ?>;}

                .preloader .status{width:100px;height:100px;position:absolute;left:50%;top:50%;background-repeat:no-repeat;background-position:center;-webkit-background-size:cover;background-size:cover;margin:-50px 0 0 -50px;}

        </style>

        <?php

    }//if( $divi_DCT_preloader_option == 'on' ){

}

/** Adding Preloader Options Section **/

function DCT_preloader_option_section()

{

    if (et_get_option('divi_DCT_preloader_option') != '') {

        $divi_DCT_preloader_option = et_get_option('divi_DCT_preloader_option');

    } else {

        $divi_DCT_preloader_option = 'on';

    }//if( et_get_option('divi_DCT_preloader_option') != '' )

    $is_et_fb_enabled = function_exists('et_fb_enabled') && et_core_is_fb_enabled();

    if ($divi_DCT_preloader_option == 'on' && !$is_et_fb_enabled) {  ?>

    <!-- PRE LOADER -->

    <div class="preloader">

      <div class="status">

        <?php

        $divi_DCT_preloader_custom_image = et_get_option('divi_DCT_preloader_custom_image');

        $divi_DCT_preloader_images = get_option('divi_DCT_preloader_images');

        if ($divi_DCT_preloader_custom_image != '' &&  et_get_option('divi_DCT_preloader_custom_image_option') == 'on') {?>

        <img src="<?php esc_html_e($divi_DCT_preloader_custom_image); ?>" alt="<?php esc_html_e(get_bloginfo()); ?>" />

            <?php

        } else {

           if ( $divi_DCT_preloader_images!= '' ){

			    //echo '$divi_DCT_preloader_images'.$divi_DCT_preloader_images;

				$divi_DCT_preloader_no = get_option("divi_DCT_preloader_images", '/preloader1.gif' );

				//echo '$divi_DCT_preloader_no'.$divi_DCT_preloader_no;

				$tmp = explode('/', $divi_DCT_preloader_no);

				$divi_DCT_preloader_explode = end($tmp);

				$divi_DCT_preloader_path = str_replace("gif","php", $divi_DCT_preloader_explode);

            	require_once(get_stylesheet_directory().'/extra-options/preloader/'.$divi_DCT_preloader_path);

            }else{

            	require_once( get_stylesheet_directory().'/extra-options/preloader/preloader1.php' );

            }//if ( $divi_DCT_preloader_images!= '' ){

        }//if($divi_DCT_preloader_custom_image != '' &&  et_get_option('divi_DCT_preloader_custom_image_option') == 'on' )

        ?>

      </div>

    </div>

<!-- .preloader -->

    <?php }//if( $divi_DCT_preloader_option == 'on' && !$is_et_fb_enabled)

}

/* Adding Preloader Active jQuery**/

function DCT_preloader_js()

{

    if (et_get_option('divi_DCT_preloader_option') != '') {

        $divi_DCT_preloader_option = et_get_option('divi_DCT_preloader_option');

    } else {

        $divi_DCT_preloader_option = 'on';

    }//if( et_get_option('divi_DCT_preloader_option') != '' ){

    if ($divi_DCT_preloader_option == 'on') {

         $divi_DCT_preloader_images = get_option('divi_DCT_preloader_images');

         $divi_DCT_preloader_custom_image = et_get_option('divi_DCT_preloader_custom_image');

         $divi_DCT_preloader_background_color = et_get_option('divi_DCT_preloader_background_color');

         $divi_DCT_preloader_effects = et_get_option('divi_DCT_preloader_effects', 'fadeOut');

         $divi_DCT_preloader_delay_time = et_get_option('divi_DCT_preloader_delay_time', 350);

         $divi_DCT_preloader_body_delay_time = et_get_option('divi_DCT_preloader_body_delay_time', 350);

         $divi_DCT_preloader_fadeout_speed = et_get_option('divi_DCT_preloader_fadeout_speed', 'fast');

        ?>

        <script type="text/javascript">

            jQuery(window).load(function(){ 

                jQuery('.status').fadeOut('<?php esc_html_e($divi_DCT_preloader_fadeout_speed); ?>'); // will first fade out the loading animation

                jQuery('.preloader').delay(<?php esc_html_e($divi_DCT_preloader_delay_time); ?>).<?php esc_html_e($divi_DCT_preloader_effects); ?>('<?php esc_html_e($divi_DCT_preloader_fadeout_speed); ?>'); // will fade out the white DIV that covers the website.

                jQuery('.home').delay(<?php esc_html_e($divi_DCT_preloader_body_delay_time); ?>).css({'overflow':'visible'});

            })

        </script>

        <?php

    }//if( $divi_DCT_preloader_option == 'on' )

}



/* Adding Preloader Options jQuery **/

function et_preloader_option()

{

        $preloader_images = array(

            'preloader_images1' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader1.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader1.gif'

            ),

            'preloader_images2' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader2.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader2.gif'

            ),

            'preloader_images3' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader3.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader3.gif'

            ),

            'preloader_images4' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader4.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader4.gif'

            ),

            'preloader_images5' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader5.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader5.gif'

            ),

            'preloader_images6' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader6.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader6.gif'

            ),

            'preloader_images7' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader7.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader7.gif'

            ),

            'preloader_images8' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader8.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader8.gif'

            ),

            'preloader_images9' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader9.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader9.gif'

            ),

            'preloader_images10' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader10.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader10.gif'

            ),

            'preloader_images11' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader11.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader11.gif'

            ),

            'preloader_images12' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader12.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader12.gif'

            ),

            'preloader_images13' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader13.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader13.gif'

            ),

            'preloader_images14' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader14.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader14.gif'

            ),

            'preloader_images15' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader15.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader15.gif'

            ),

            'preloader_images16' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader16.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader16.gif'

            ),

            'preloader_images17' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader17.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader17.gif'

            ),

            'preloader_images18' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader18.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader18.gif'

            ),

            'preloader_images19' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader19.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader19.gif'

            ),

            'preloader_images20' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader20.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader20.gif'

            ),

            'preloader_images21' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader21.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader21.gif'

            ),

            'preloader_images22' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader22.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader22.gif'

            ),

            'preloader_images23' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader23.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader23.gif'

            ),

            'preloader_images24' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader24.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader24.gif'

            ),

            'preloader_images25' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader25.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader25.gif'

            ),

            'preloader_images26' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader26.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader26.gif'

            ),

            'preloader_images27' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader27.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader27.gif'

            ),

            'preloader_images28' => array(

                'value' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader28.gif',

                'img' => get_stylesheet_directory_uri().'/assets/img/preloader/preloader28.gif'

            )

        );

        $gt_preloader_images = get_option('divi_DCT_preloader_images') ;

        foreach ($preloader_images as $activate) : ?>

        <div style="margin-right:50px; display: inline-block; line-height: 70px;">

            <input type="radio"  name="divi_DCT_preloader_images" 

                    value="<?php esc_attr_e($activate['value']); ?>" <?php checked($gt_preloader_images, $activate['value']); ?>  class="dct-preloader-radio"/>

            <label for="<?php esc_html_e($activate['value']); ?>"> 

                <img src="<?php esc_html_e($activate['img']); ?>"  width="70" alt="preloader" /> 

            </label>

        </div>

        <?php endforeach;

}



/* Save Preloader Theme Options */

function et_epanel_save_callback_new($source)
{
	 et_core_nonce_verified_previously();
	$divi_DCT_preloader_images = isset( $_POST[ 'divi_DCT_preloader_images' ] ) ? sanitize_text_field( $_POST['divi_DCT_preloader_images'] ) : '';
	update_option('divi_DCT_preloader_images', $divi_DCT_preloader_images);
}







/* Custom page footer on Woo pages */

/* Add Hook For Blog Category Footer */

//add_action('et_after_main_content', 'dct_blog_category_footer');



/* Add Hook For Add Extra Theme Options */

add_action("epanel_render_maintabs", 'dct_epanel_tabs');

/* Add Hook For  Add Extra Theme Tabs Options */

add_action("et_epanel_changing_options", 'dct_epanel_fields');

/* Add Preloader Theme Options */

add_action('wp_head', 'DCT_custom_preloader_option_css');

/* Add Preloader Options Section */

add_action('wp_footer', 'DCT_preloader_option_section');

/* Add Preloader Footer Js */

add_action('wp_footer', 'DCT_preloader_js');

/* Save Preloader Theme Options */

add_action('wp_ajax_save_epanel', 'et_epanel_save_callback_new');

/** Blog Options **/

//add_action('et_before_main_content', 'dct_blog_page_title');

/* Change Footer Admin Text */

function dct_remove_footer_admin()

{

    echo '<a href="'.esc_html(DCT_THEMEAUTHORURL).'" target="_blank">'.esc_html(DCT_THEMENAME).' Child Theme Design By DCT Team  </a>';

}

add_filter('admin_footer_text', 'dct_remove_footer_admin');

/* Add Add To cart Button On All Shop Page */





