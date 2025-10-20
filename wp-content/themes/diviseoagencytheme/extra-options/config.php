<?php
//Get Current Theme Details
$theme = wp_get_theme();
// set current theme version
define('DCT_VERSION', $theme->version);
// set current theme name
define('DCT_THEMENAME', $theme->name);
// set current theme version
define('DCT_THEMEDESC', $theme->description);
// set current theme Author
define('DCT_THEMEAUTHOR', $theme->author);
// set current theme Author URI
define('DCT_THEMEAUTHORURL', $theme->authorurl);
// Set Support URL
define('DCT_SUPPORT_URL', 'http://www.divi-childthemes.com/support/');
// Set Support Mail URL
define('DCT_SUPPORT_EMAIL', 'divichildthemes@gmail.com');
// Set Demo Product URL
define('DCT_DEMO_URL', 'https://diviseoagency.divifixer.com');
// Set Latest Product URL
define('DCT_DOCS_URL', 'https://www.divi-childthemes.com/docs/divi-seo-agency-theme-documentation/');
// Set Latest Product URL
define('DCT_VIDEO_URL', 'https://youtu.be/M4W7EUYw7Us');
// Facebook Group Page
define('DCT_FB_GROUP', 'https://www.facebook.com/groups/168664183851271');
