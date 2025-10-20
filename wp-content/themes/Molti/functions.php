<?php

//Getting all styles and scripts
///// Gettings CSS
function molti_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'molti_enqueue_styles' );


// Every Divi Layout as Shortcode with the Below Code

add_filter( 'manage_et_pb_layout_posts_columns', 'sj_create_shortcode_column', 5 );
add_action( 'manage_et_pb_layout_posts_custom_column', 'sj_shortcode_content', 5, 2 );
// register new shortcode
add_shortcode('sj_layout', 'sj_shortcode_mod');
// New Admin Column
function sj_create_shortcode_column( $columns ) {
$columns['sj_shortcode_id'] = 'Module Shortcode';
return $columns;
}
//Display Shortcode
function sj_shortcode_content( $column, $id ) {
if( 'sj_shortcode_id' == $column ) {
?>
<p>[sj_layout id="<?php echo $id ?>"]</p>
<?php
}
}
// Create New Shortcode
function sj_shortcode_mod($sj_mod_id) {
extract(shortcode_atts(array('id' =>'*'),$sj_mod_id));
return do_shortcode('[et_pb_section global_module="'.$id.'"][/et_pb_section]');
}



function molti_custom_js() { ?>
<script type = "text/javascript" > ///Jquery for Pricing Table COLUMN 1 on homepage
    jQuery(document).ready(function() {
        jQuery('#reveal').hide();
        jQuery('.reveal-button').click(function(e) {
            e.preventDefault();
            jQuery("#reveal").slideToggle();
            jQuery('.reveal-button');
        });
    }); 
  </script>
<script type = "text/javascript" > //Jquery for Pricing Table COLUMN 2 on homepage
    jQuery(document).ready(function() {
        // Hide the div
        jQuery('#reveal-1').hide();
        jQuery('.reveal-button-1').click(function(e) {
            e.preventDefault();
            jQuery("#reveal-1").slideToggle();
            jQuery('.reveal-button-1');
        });
    }); 
  </script>

<script type = "text/javascript" > //Jquery for Pricing Table COLUMN 3 on homepage
    jQuery(document).ready(function() {
        // Hide the div
        jQuery('#reveal-2').hide();
        jQuery('.reveal-button-2').click(function(e) {
            e.preventDefault();
            jQuery("#reveal-2").slideToggle();
            jQuery('.reveal-button-2');
        });
    }); 
  </script>




<script type = "text/javascript" > ///JQUERY FOR Custom Dropdown in Header
    jQuery(document).ready(function() {
        jQuery('.molti-custom-menu-text').show();
        jQuery('.molti-custom-menu').click(function(e) {
            e.preventDefault();
            jQuery(".molti-custom-menu-text").toggle();
        });
    });
</script>
<script type = "text/javascript" >
    jQuery(document).ready(function() {
        jQuery('.molti-custom-dropdown-content').hide();
        jQuery('.molti-custom-menu').click(function(e) {
            e.preventDefault();
            jQuery(".molti-custom-dropdown-content").toggle();
        });
    });
jQuery(document).ready(function() {
        jQuery('#et-main-area').on('click', function(event) {
            jQuery('.molti-custom-dropdown-content').hide(0);
        });
    });
  ///END HERE FOR Custom Dropdown in Header
</script>





<script>/// Molti Testimonial - Active Image Switcher for Services Page

  ///Image 1 Click
    jQuery(document).ready(function() {
        jQuery(".molti-testimonial-image-1").click(function(){
  jQuery(".molti-testimonial-image-1").addClass("active-img");
});
        jQuery(".molti-testimonial-image-1").click(function(){
  jQuery(".molti-testimonial-image-2, .molti-testimonial-image-3, .molti-testimonial-image-4").removeClass("active-img");
});
});
  ///Image 2 Click
    jQuery(document).ready(function() {
        jQuery(".molti-testimonial-image-2").click(function(){
  jQuery(".molti-testimonial-image-2").addClass("active-img");
});
        jQuery(".molti-testimonial-image-2").click(function(){
  jQuery(".molti-testimonial-image-1, .molti-testimonial-image-3, .molti-testimonial-image-4").removeClass("active-img");
});
});
  ///Image 3 Click
    jQuery(document).ready(function() {
        jQuery(".molti-testimonial-image-3").click(function(){
  jQuery(".molti-testimonial-image-3").addClass("active-img");
});
        jQuery(".molti-testimonial-image-3").click(function(){
  jQuery(".molti-testimonial-image-1, .molti-testimonial-image-2, .molti-testimonial-image-4").removeClass("active-img");
});
});
  ///Image 4 Click
    jQuery(document).ready(function() {
        jQuery(".molti-testimonial-image-4").click(function(){
  jQuery(".molti-testimonial-image-4").addClass("active-img");
});
        jQuery(".molti-testimonial-image-4").click(function(){
  jQuery(".molti-testimonial-image-1, .molti-testimonial-image-2, .molti-testimonial-image-3").removeClass("active-img");
});
});
</script>
<script>/// Molti Testimonial - Text Switches for active testimonial
  ///Image 1 Click
    jQuery(document).ready(function() {
        jQuery(".molti-testimonial-image-1").click(function(){
  jQuery(".molti-testimonial-text-1").addClass("active-text");
});
        jQuery(".molti-testimonial-image-1").click(function(){
  jQuery(".molti-testimonial-text-2, .molti-testimonial-text-3, .molti-testimonial-text-4").removeClass("active-text");
});
});
  ///Image 2 Click
    jQuery(document).ready(function() {
        jQuery(".molti-testimonial-image-2").click(function(){
  jQuery(".molti-testimonial-text-2").addClass("active-text");
});
        jQuery(".molti-testimonial-image-2").click(function(){
  jQuery(".molti-testimonial-text-1, .molti-testimonial-text-3, .molti-testimonial-text-4").removeClass("active-text");
});
});
  ///Image 3 Click
    jQuery(document).ready(function() {
        jQuery(".molti-testimonial-image-3").click(function(){
  jQuery(".molti-testimonial-text-3").addClass("active-text");
});
        jQuery(".molti-testimonial-image-3").click(function(){
  jQuery(".molti-testimonial-text-1, .molti-testimonial-text-2, .molti-testimonial-text-4").removeClass("active-text");
});
});
  ///Image 4 Click
    jQuery(document).ready(function() {
        jQuery(".molti-testimonial-image-4").click(function(){
  jQuery(".molti-testimonial-text-4").addClass("active-text");
});
        jQuery(".molti-testimonial-image-4").click(function(){
  jQuery(".molti-testimonial-text-1, .molti-testimonial-text-2, .molti-testimonial-text-3").removeClass("active-text");
});
      ///All of them
       jQuery(".molti-testimonial-image-2").click(function(){
  jQuery(".molti-testimonial-text-1").addClass("not-active-text");
});
      jQuery(".molti-testimonial-image-3").click(function(){
  jQuery(".molti-testimonial-text-1").addClass("not-active-text");
});
      jQuery(".molti-testimonial-image-4").click(function(){
  jQuery(".molti-testimonial-text-1").addClass("not-active-text");
});
});
</script>




<script>/// Single Job Page - Tabs
    jQuery(document).ready(function() {
        jQuery(".molti-careers-application-link").click(function(){
  jQuery(".molti-careers-application-link").addClass("active-link-application");
  jQuery(".molti-careers-overview-link").removeClass("active-link");
});
      jQuery(".molti-careers-overview-link").click(function(){
  jQuery(".molti-careers-overview-link").addClass("active-link");
  jQuery(".molti-careers-application-link").removeClass("active-link-application");
});
});
</script>

<script>/// Single Job Page - Working of tabs
    jQuery(document).ready(function() {
  jQuery(".application").hide();
  jQuery(".molti-careers-application-link").click(function(){
  jQuery(".application").show();
  jQuery(".role-overview").hide();
});
  jQuery(".molti-careers-overview-link").click(function(){
  jQuery(".role-overview").show();
  jQuery(".application").hide();
});
});
</script>


<script>/// Molti Pricing page - Pricing Switcher for Yearly and Monthly Button
  ///Image 1 Click
    jQuery(document).ready(function() {
        jQuery(".yearly-button").click(function(){
  jQuery(".yearly-button").addClass("molti-active-switch-button");
  jQuery(".monthly-button").removeClass("molti-active-switch-button");
});
        jQuery(".monthly-button").click(function(){
  jQuery(".monthly-button").addClass("molti-active-switch-button");
  jQuery(".yearly-button").removeClass("molti-active-switch-button");
});
});
</script>


<script>/// Pricing Page - Pricing Switcher - Working of Tables
    jQuery(document).ready(function() {
  jQuery(".yearly-pricing").hide();
  jQuery(".yearly-button").click(function(){
  jQuery(".yearly-pricing").show();
  jQuery(".monthly-pricing").hide();
});
  jQuery(".monthly-button").click(function(){
  jQuery(".monthly-pricing").show();
  jQuery(".yearly-pricing").hide();
});
});
</script>


<script>/// Molti - Single Service Page - Custom Tabs 
    jQuery(document).ready(function() {
      jQuery(".molti-custom-tab-1").click(function(){
  jQuery(".molti-custom-tab-1").addClass("active-tab");
  jQuery(".molti-custom-tab-2").removeClass("active-tab");
  jQuery(".molti-custom-tab-3").removeClass("active-tab");
  jQuery(".molti-custom-tab-4").removeClass("active-tab");
});
        jQuery(".molti-custom-tab-2").click(function(){
  jQuery(".molti-custom-tab-2").addClass("active-tab");
  jQuery(".molti-custom-tab-3").removeClass("active-tab");
  jQuery(".molti-custom-tab-4").removeClass("active-tab");
});
        jQuery(".molti-custom-tab-3").click(function(){
  jQuery(".molti-custom-tab-3").addClass("active-tab");
  jQuery(".molti-custom-tab-2").addClass("active-tab");
  jQuery(".molti-custom-tab-4").removeClass("active-tab");
});
       jQuery(".molti-custom-tab-4").click(function(){
  jQuery(".molti-custom-tab-4").addClass("active-tab");
  jQuery(".molti-custom-tab-2").addClass("active-tab");
  jQuery(".molti-custom-tab-3").addClass("active-tab");
});
});
</script>


<script>/// Molti Custom tabs - Single Service Page - For Content 
    jQuery(document).ready(function() {
  jQuery(".molti-custom-tabs-content-2").hide();
  jQuery(".molti-custom-tabs-content-3").hide();
  jQuery(".molti-custom-tabs-content-4").hide();
      
  jQuery(".molti-custom-tab-1").click(function(){
  jQuery(".molti-custom-tabs-content-1").show();
  jQuery(".molti-custom-tabs-content-2, .molti-custom-tabs-content-3, .molti-custom-tabs-content-4").hide();
});  
  jQuery(".molti-custom-tab-2").click(function(){
  jQuery(".molti-custom-tabs-content-2").show();
  jQuery(".molti-custom-tabs-content-1, .molti-custom-tabs-content-3, .molti-custom-tabs-content-4").hide();
});
  jQuery(".molti-custom-tab-3").click(function(){
  jQuery(".molti-custom-tabs-content-3").show();
  jQuery(".molti-custom-tabs-content-1, .molti-custom-tabs-content-2, .molti-custom-tabs-content-4").hide();
});
  jQuery(".molti-custom-tab-4").click(function(){
  jQuery(".molti-custom-tabs-content-4").show();
  jQuery(".molti-custom-tabs-content-1, .molti-custom-tabs-content-2, .molti-custom-tabs-content-3").hide();
});
});
</script>




<script>///For Blog Module with Text Overlay
  (function ($) {
    $(document).ready(function () {
        $(".molti-blog-latest .et_pb_post").each(function () {
          $(this).find(".entry-title, .post-meta, .post-content ").wrapAll('<div class="molti-blog-content"></div>');
        });
    });
  })(jQuery); 
</script>

<script>/// Molti -> Advanced Blog Page - Post Switcher 
    jQuery(document).ready(function() {
      jQuery(".recent-button").click(function(){
  jQuery(".recent-button").addClass("active-blog");
  jQuery(".featured-button").removeClass("active-blog");
});
    jQuery(".featured-button").click(function(){
  jQuery(".featured-button").addClass("active-blog");
  jQuery(".recent-button").removeClass("active-blog");
});
});
</script>
<script>///Working of the Switcher - To Switch content
    jQuery(document).ready(function() {
  jQuery(".recent").hide(); 
  jQuery(".recent-button").click(function(){
  jQuery(".recent").show();
  jQuery(".featured").hide();
  });
  jQuery(".featured-button").click(function(){
  jQuery(".featured").show();
  jQuery(".recent").hide();
  });
  }); 
</script>



<script>///Single Post Page Tabs
    jQuery(document).ready(function() {
      jQuery(".molti-discussion").click(function(){
  jQuery(".molti-discussion").addClass("active-link-discussion");
  jQuery(".active-link-read").removeClass("active-link-read");
});
    jQuery(".molti-read").click(function(){
  jQuery(".molti-read").addClass("active-link-read");
  jQuery(".molti-discussion").removeClass("active-link-discussion");
});
});
</script>
<script>///Single Post Page Working of tabs to change content
    jQuery(document).ready(function() {
  jQuery(".molti-comments").hide(); 
  jQuery(".molti-read").click(function(){
  jQuery(".molti-article").show();
  jQuery(".molti-comments").hide();
  });
  jQuery(".molti-discussion").click(function(){
  jQuery(".molti-comments").show();
  jQuery(".molti-article").hide();
  });
  }); 
</script>


<script>/// To Collapse Submenu in Mobile Menu
(function($) { 
    function setup_collapsible_submenus() {
        // mobile menu
        $('.mobile_nav .menu-item-has-children > a').after('<span class="menu-closed"></span>');
        $('.mobile_nav .menu-item-has-children > a').each(function() {
            $(this).next().next('.sub-menu').toggleClass('hide',1000);
        });
        $('.mobile_nav .menu-item-has-children > a + span').on('click', function(event) {
            event.preventDefault();
            $(this).toggleClass('menu-open');
            $(this).next('.sub-menu').toggleClass('hide',1000);
        });
    }
    $(window).load(function() {
        setTimeout(function() {
            setup_collapsible_submenus();
        }, 0);
    });
})(jQuery);
</script>

<script>///Code For Showcase Page
    jQuery(document).ready(function() {
  jQuery(".options").hide(0); 
  jQuery(".buy").click(function(){
  jQuery(".options").show(300);
  });
  jQuery(".close").click(function(){
  jQuery(".options").hide(200);
  });  
});
</script>

<script type = "text/javascript" >
    jQuery(document).ready(function() {
        jQuery('.info-content').hide(0);
        jQuery('.info-btn').click(function(e) {
            e.preventDefault();
            jQuery(".info-content").slideToggle(0);
        });
    }); 
  </script>
<script>    
    jQuery('.info-btn').on('click', function(e) {
      jQuery('.info-btn').toggleClass("info-button open");
      e.preventDefault();
    });///END HERE
</script>

<?php }
add_action('wp_footer', 'molti_custom_js', 100);


//======================================================================
// CUSTOM DASHBOARD
//======================================================================
// ADMIN FOOTER TEXT
function molti_remove_footer_admin () {
    echo "Molti Child theme by SamarJ";
} 
add_action('wp_dashboard_setup', 'molti_my_custom_dashboard_widgets');

function molti_my_custom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('molti_custom_help_widget', 'Molti Child Theme', 'molti_custom_dashboard_help');
}

function molti_custom_dashboard_help() {
echo '<p>Thank you for Purchasing <strong>Molti</strong> Child Theme by SamarJ. If you have any problem while using it use the links below for Support:
<ul>
  <li><a href="https://docs.samarj.com/" target="_blank">Documentations</a></li>
  <li><a href="https://www.facebook.com/groups/samarj" target="_blank">Facebook Group</a></li>
  <li><a href="https://samarj.com/contact" target="_blank">Contact Us</a></li>
  <li><a href="https://headwayapp.co/molti-changelog" target="_blank">Molti Changelog</a></li>
</ul></p>';
}
//END


?>