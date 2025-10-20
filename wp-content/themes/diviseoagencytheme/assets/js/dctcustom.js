/* Hero Section */
(function ($) { $(document).ready(function () { $('.tab_1').each(function () { $(this).closest('.tab-column').find('.contact_form_1').append($(this)); }); }); })(jQuery);
(function ($) { $(document).ready(function () { $('.tab_2').each(function () { $(this).closest('.tab-column').find('.contact_form_2').append($(this)); }); }); })(jQuery);
(function ($) { $(document).ready(function () { $('.tab_3').each(function () { $(this).closest('.tab-column').find('.contact_form_3').append($(this)); }); }); })(jQuery);

(function ($) { $(document).ready(function () { $('.tab_4').each(function () { $(this).closest('.tab-column').find('.contact_form_4').append($(this)); }); }); })(jQuery);
(function ($) { $(document).ready(function () { $('.tab_5').each(function () { $(this).closest('.tab-column').find('.contact_form_5').append($(this)); }); }); })(jQuery);
(function ($) { $(document).ready(function () { $('.tab_6').each(function () { $(this).closest('.tab-column').find('.contact_form_6').append($(this)); }); }); })(jQuery);

/* Home V2 Tab portfolio*/
(function ($) { $(document).ready(function () { $('.dct_ptf').each(function () { $(this).closest('.tab-column_2').find('.portfolio').append($(this)); }); }); })(jQuery);

/* Priceing Tab*/
(function ($) { $(document).ready(function () { $('.standard_1').each(function () { $(this).closest('.tab_column_3').find('.standard').append($(this)); }); }); })(jQuery);

(function ($) { $(document).ready(function () { $('.premium_1').each(function () { $(this).closest('.tab_column_3').find('.premium').append($(this)); }); }); })(jQuery);

/* Add Class to Portfolio*/
  jQuery(document).ready(function() {
 jQuery(".dct_ptf .project").each(function () {
         jQuery(this).find(".et_pb_module_header,.post-meta").wrapAll('<div class="project_description"></div>');
 });
    });
/* Add Class to Footer Blog*/
jQuery(".dct_ft_blog .et_pb_post").each(function () {
    jQuery(this).find(".entry-title,.post-meta,.post-content").wrapAll('<div class="blog_detail"></div>');
});
/*To Make Header Sticky */
jQuery(document).ready(function(){
    jQuery(window).scroll(function() {
        var scroll = jQuery(window).scrollTop();
        if (scroll >= 100) {
            jQuery(".dct-header").addClass("dct-fixed-header");
        }
        else{
            jQuery(".dct-header").removeClass("dct-fixed-header");
        }
    });
});
/*For Mobile Sub Menu */
(function ($) {
	function setup_collapsible_submenus() {
		// mobile menu
		$('.et_mobile_nav_menu .menu-item-has-children > a').after('<span class="menu-closed"></span>');
		$('.et_mobile_nav_menu .menu-item-has-children > a').each(function () {
			$(this).next().next('.sub-menu').toggleClass('hide', 1000);
		});
		$('.et_mobile_nav_menu .menu-item-has-children > a + span').on('click', function (event) {
			event.preventDefault();
			$(this).toggleClass('menu-open');
			$(this).next('.sub-menu').toggleClass('hide', 1000);
		});
	}
	$(window).load(function () {
		setTimeout(function () {
			setup_collapsible_submenus();
		}, 700);
	});
})(jQuery);

/*Client logo Crosual*/
jQuery(document).ready(function(){
    jQuery("#dct_client").owlCarousel({
        items:6,
        itemsDesktop:[1000,6],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        pagination:false,
        navigation:true,
		nav:true,
		autoplay: true,
		autoplayTimeout: 5000,
		rewind: false,
		navigationText:["",""]
	});

});

/*Theme Options Js*/
jQuery(function($){$('.cl-toggler').on('click',function(event){
	event.preventDefault();
	$(this).parent().parent().toggleClass('opened');});
	var presets=$('.cl-presets').find('li');
	presets.each(function(){
		$(this).find('a').on('click',function(event){
			event.preventDefault();
			var currentColor1 = $(this).find('div.color1').css("background-color");
			var currentColor2 = $(this).find('div.color2').css("background-color");
			$('#lblColorCode1').text(rgba2hex(currentColor1));
			$('#lblColorCode2').text(rgba2hex(currentColor2));
			document.documentElement.style.setProperty("--color-1", currentColor1);
			document.documentElement.style.setProperty("--color-2", currentColor2);
			presets.removeClass('active');
			$(this).parent().addClass('active');
		});
  });
  $('#switcher-menu-primary-color li a').on('click',function(event){
		event.preventDefault();
		var primaryColor = $(this).css("background-color");
		$('#lblColorCode1').text(rgba2hex(primaryColor));
		document.documentElement.style.setProperty("--color-1", primaryColor);
  });
  $('#switcher-menu-secondary-color li a').on('click',function(event){
		event.preventDefault();
		var secondaryColor = $(this).css("background-color");
		$('#lblColorCode2').text(rgba2hex(secondaryColor));
		document.documentElement.style.setProperty("--color-2", secondaryColor);
  });	

$('#cl-boxed').on('change',function(){
	if($(this).is(':checked')){
		$('body').addClass('layout-boxed');
		}
		else{
			$('body').removeClass('layout-boxed').removeAttr('style');
			}
	});

});

function rgba2hex( color_value ) {
	if ( ! color_value ) return false;
	var parts = color_value.toLowerCase().match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+(?:\.\d+)?))?\)$/),
		length = color_value.indexOf('rgba') ? 3 : 2; // Fix for alpha values
	delete(parts[0]);
	for ( var i = 1; i <= length; i++ ) {
		parts[i] = parseInt( parts[i] ).toString(16);
		if ( parts[i].length === 1 ) parts[i] = '0' + parts[i];
	}
	return '#' + parts.join('').toUpperCase(); // #F7F7F7
}


  jQuery(document).ready(function() {
 jQuery(".dct_blog_list .et_pb_post").each(function () {
         jQuery(this).find(".entry-title,.post-meta,.post-content").wrapAll('<div class="blog_list"></div>');
 });
    });



  
  jQuery(document).ready(function() {
 jQuery(".dct_blog .et_pb_post").each(function () {
         jQuery(this).find(".entry-title,.post-meta,.post-content").wrapAll('<div class="info"></div>');
 });
    });  



  (function(jQuery){
 jQuery('.dct_ptf .et_pb_portfolio_item').each(function(){
    jQuery('.et_pb_module_header, .post-meta',this).wrapAll("<div class='project_block'></div>");
  });
})(jQuery);

/*For Tab Service - Home V2**/


jQuery(document).ready(function($) {

 /* Blurbs as Tabs */
 
 $('.dct_tab_title').each(function () { 
 
 var section_id = $(this).find("a").attr("href");
 $(this).find("a").removeAttr("href");
 
 $(this).click(function() {
 
 $(this).siblings().removeClass("active-tab");
 $(this).addClass("active-tab");
 $('.tab-content').hide();
 $(section_id).show();
 });
 
 });

});









