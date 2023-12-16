<?php
/*
    tagDiv - 2014
    Our portofolio:  http://themeforest.net/user/tagDiv/portfolio
    Thanks for using our theme !
*/


/*  ----------------------------------------------------------------------------
    WordPress booster framework - this is our theme framework - all the content and settings are there
*/
if (!defined('TD_THEME_WP_BOOSTER')) {
    /*  ----------------------------------------------------------------------------
        deploy mode - this file tells the theme what settings to load (demo, (dev) development, deploy)
     */
    require_once('includes/td_wordpres_booster.php');
}



/*  ----------------------------------------------------------------------------
    WordPress booster framework admin panel
 */
if (current_user_can('switch_themes')) {
    //wp-admin panel
    require_once('wp-admin/panel/td_panel_start.php');
}




/*  ----------------------------------------------------------------------------
    CSS - front end
 */

function td_load_css() {

    //google fonts
    if ((defined('TD_DEPLOY_MODE') and (TD_DEPLOY_MODE == 'demo' or TD_DEPLOY_MODE == 'dev')) or defined('TD_SPEED_BOOSTER')) { //on demo and dev we load only the latin fonts
        //modify this collection if you want to optimize the fonts loaded
        //collection url -> : http://www.google.com/fonts#ReviewPlace:refine/Collection:PT+Sans:400,700,400italic|Ubuntu:400,400italic|Open+Sans:400italic,400|Oswald:400,700|Roboto+Condensed:400italic,700italic,400,700
        wp_enqueue_style('google-font-rest', td_global::$http_or_https . '://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic|Ubuntu:400,400italic|Open+Sans:400italic,400|Oswald:400,700|Roboto+Condensed:400italic,700italic,400,700'); //used on menus/small text
    } else {
        wp_enqueue_style('google-font-opensans', td_global::$http_or_https . '://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic'); //used on menus/small text
        wp_enqueue_style('google-font-ubuntu', td_global::$http_or_https . '://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic&amp;subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic'); //used on content
        wp_enqueue_style('google-font-pt-sans', td_global::$http_or_https . '://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic&subset=latin,cyrillic-ext,latin-ext,cyrillic'); //used on content
        wp_enqueue_style('google-font-oswald', td_global::$http_or_https . '://fonts.googleapis.com/css?family=Oswald:400,300,700&subset=latin,latin-ext'); //used on content
        wp_enqueue_style('google-roboto-cond', td_global::$http_or_https . '://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic'); //used on content
    }


    //add the google style link for fonts used by user
    $td_fonts_css_files = td_util::get_option('td_fonts_css_files');
    if(!empty($td_fonts_css_files)) {
        wp_enqueue_style('google-fonts-style', td_global::$http_or_https . $td_fonts_css_files);
    }


    //bootstrap - custom built - it was generated via compilation of /external/bootstrap-master/less/bootstrap.less
    $responsive = td_util::get_option('tds_responsive');
    switch ($responsive) {
        case '980_responsive':
            wp_enqueue_style('td-bootstrap', get_template_directory_uri() . '/includes/wp_booster/external/bootstrap/td-bootstrap-980-responsive.css', '', TD_THEME_VERSION, 'all' );
            break;

        case '980':
            wp_enqueue_style('td-bootstrap', get_template_directory_uri() . '/includes/wp_booster/external/bootstrap/td-bootstrap-980-not-resp.css', '', TD_THEME_VERSION, 'all' );
            break;

        case '1170':
            wp_enqueue_style('td-bootstrap', get_template_directory_uri() . '/includes/wp_booster/external/bootstrap/td-bootstrap-1170-not-resp.css', '', TD_THEME_VERSION, 'all' );
            break;

        default:
            wp_enqueue_style('td-bootstrap', get_template_directory_uri() . '/includes/wp_booster/external/bootstrap/td-bootstrap.css', '', TD_THEME_VERSION, 'all' );
            break;
    }





    //main theme style - set the TD_DEBUG_USE_LESS flag in /includes/app/td_config.php and the theme will load the less files and compile them for you
    if (TD_DEBUG_USE_LESS) {
        wp_enqueue_style('td-theme', get_template_directory_uri() . '/td_less_compiler.php',  array('td-bootstrap'), TD_THEME_VERSION, 'all' );
        //wp_enqueue_style('td-theme', get_template_directory_uri() . '/style.less', array('td-bootstrap'), TD_THEME_VERSION, 'all' );
    } else {
        wp_enqueue_style('td-theme', get_stylesheet_uri(), array('td-bootstrap'), TD_THEME_VERSION, 'all' );
    }
}
add_action('wp_enqueue_scripts', 'td_load_css');







/*  ----------------------------------------------------------------------------
    JS - main
 */

function td_load_js() {

    if (TD_DEPLOY_MODE == 'demo' or defined('TD_SPEED_BOOSTER')) { //on demo load compressed js
        //wp_enqueue_script('site', get_template_directory_uri() . '/js/site.js',array( 'jquery' ), 1, true); //the main site script
        //wp_enqueue_script('site', get_template_directory_uri() . '/js/min/site.min.js',array( 'jquery' ), 1, true); //the main site script
        //wp_enqueue_script('site-external', get_template_directory_uri() . '/js/min/external.min.js', array( 'site' ), 1, true); //load at begining

        wp_enqueue_script('site-external', get_template_directory_uri() . '/js/min/external.min.js', array( 'jquery' ), TD_THEME_VERSION, true); //load at begining
        wp_enqueue_script('site', get_template_directory_uri() . '/js/min/site.min.js',array( 'site-external' ), TD_THEME_VERSION, true); //the main site script

        /*
         * //it's already appended
        if (TD_DEBUG_LIVE_THEME_STYLE) {
            wp_enqueue_script('td-js-style-customizer', get_template_directory_uri() . '/js/min/style_customizer.min.js',array( 'jquery'), 1, true);
        }
        (*/
    } else {
        wp_enqueue_script('site-external', get_template_directory_uri() . '/js/external.js',array( 'jquery' ), TD_THEME_VERSION, true); //load at begining
        wp_enqueue_script('site', get_template_directory_uri() . '/js/site.js',array( 'site-external' ), TD_THEME_VERSION, true); //the main site script

        if (TD_DEBUG_LIVE_THEME_STYLE) {
            wp_enqueue_script('td-js-style-customizer', get_template_directory_uri() . '/js/style_customizer.js',array( 'jquery'), TD_THEME_VERSION, true);
        }
    }


}
add_action('wp_enqueue_scripts', 'td_load_js');




/*  ----------------------------------------------------------------------------
    CSS - wp-admin
 */

function td_load_td_admin_css() {
    //load the panel font in wp-admin
    $td_protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style('google-font-ubuntu', $td_protocol . '://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic&amp;subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic'); //used on content
    wp_enqueue_style('td-wp-admin-td-panel-2', get_template_directory_uri() . '/wp-admin/css/wp-admin.css', false, TD_THEME_VERSION, 'all' );

    //load the colorpicker
    wp_enqueue_style( 'wp-color-picker' );
}
add_action('admin_enqueue_scripts', 'td_load_td_admin_css');


/*  ----------------------------------------------------------------------------
    JS - admin
 */

function td_load_js_admin() {
    wp_enqueue_script('td-wp-admin-general', get_template_directory_uri() . '/wp-admin/js/general.js', array('jquery', 'wp-color-picker'), 1, false); //legacy code
    wp_enqueue_script('td-wp-admin-panel-js', get_template_directory_uri() . '/wp-admin/js/wp-admin-panel.js', array('jquery', 'wp-color-picker'), 1, false);

    wp_enqueue_script('thickbox');
    add_thickbox();
}
add_action('admin_enqueue_scripts', 'td_load_js_admin');


// used by ie8 - there is no other way to add js for ie8 only
function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<![endif]-->
    ';
}
add_action('wp_head', 'add_ie_html5_shim');



/*  ----------------------------------------------------------------------------
    Custom <title> wp_title - seo
 */
function td_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . __td('Page') . ' ' .  max( $paged, $page );

    return $title;
}
add_filter( 'wp_title', 'td_wp_title', 10, 2 );








/*  ----------------------------------------------------------------------------
    page view counter
 */

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);



/*  ----------------------------------------------------------------------------
    archive widget - add current class
 */
function theme_get_archives_link ( $link_html ) {
    global $wp;
    static $current_url;
    if ( empty( $current_url ) ) {
        $current_url = add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) );
    }
    if ( stristr( $current_url, 'page' ) !== false ) {
        $current_url = substr($current_url, 0, strrpos($current_url, 'page'));
    }
    if ( stristr( $link_html, $current_url ) !== false ) {
        $link_html = preg_replace( '/(<[^\s>]+)/', '\1 class="current"', $link_html, 1 );
    }
    return $link_html;
}
add_filter('get_archives_link', 'theme_get_archives_link');



/*  ----------------------------------------------------------------------------
    add span wrap for category number in widget
 */

add_filter('wp_list_categories', 'cat_count_span');
function cat_count_span($links) {
  $links = str_replace('</a> (', '<span class="td-widget-no">', $links);
  $links = str_replace(')', '</span></a>', $links);
  return $links;
}

//fix archives widget
add_filter('get_archives_link', 'archive_count_no_brackets');
function archive_count_no_brackets($links) {
    $links = str_replace('</a>&nbsp;(', '<span class="td-widget-no">', $links);
    $links = str_replace(')', '</span></a>', $links);
    return $links;
}


//remove gallery style css
add_filter( 'use_default_gallery_style', '__return_false' );



function remove_more_link_scroll( $link ) {

	$link = preg_replace( '|#more-[0-9]+|', '', $link );

        $link = '<div class="more-link-wrap wpb_button wpb_btn-danger">' . $link . '</div>';
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );



/*  ----------------------------------------------------------------------------
    excerpt lenght
 */

add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {

    // on feed show full content if it's set in wordpress
    if (is_feed() and get_option('rss_use_excerpt') == 0) {
        return 999999;
    }
    $excerpt_length = td_util::get_option('tds_wp_default_excerpt');
    if (!empty($excerpt_length) and is_numeric($excerpt_length)) {
        return $excerpt_length;
    } else {
        return 22; //default
    }
}



/*  ----------------------------------------------------------------------------
    more text
 */

add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($text){
    return ' ';
}



/*  ----------------------------------------------------------------------------
    editor style
 */

add_editor_style();



/*  ----------------------------------------------------------------------------
    thumbnails
 */

//the image sizes that we use
add_theme_support( 'post-thumbnails' );

//featured image
$td_crop_features_image = td_util::get_option('tds_' . 'crop_features_image');
if ($td_crop_features_image == '') {
    add_image_size('featured-image', 700, 0, true);
} else {
    add_image_size('featured-image', 700, 357, true);
}

//the small thumbnails
set_post_thumbnail_size(          100, 65, true );
add_image_size('art-thumb',       100, 65, true);

//small height, 1 col wide
add_image_size('art-wide',        326, 159, true);

//medium height 1 col wide
add_image_size('art-big-1col',    326, 235, true);

//the slides
add_image_size('art-slide-small', 326, 406, true);
add_image_size('art-slide-med',   700, 357, true);
add_image_size('art-slide-big',  1074, 483, true);

//big slider - big image
add_image_size('art-slidebig-main',  745, 483, true);

//the gallery
add_image_size('art-gal',         210, 210, true);



/*  ----------------------------------------------------------------------------
    Post formats
 */

add_theme_support('post-formats', array('gallery', 'video', 'link', 'quote'));







/*  ----------------------------------------------------------------------------
    shortcodes in widgets
 */

add_filter('widget_text', 'do_shortcode');



/*  ----------------------------------------------------------------------------
    content width
 */

if (!isset($content_width)) {
    $content_width = 700;
}



/*  ----------------------------------------------------------------------------
    rss supporrt
 */

add_theme_support('automatic-feed-links');



/*  ----------------------------------------------------------------------------
    Register the themes default sidebars + dinamic ones
 */

//register the default sidebar
register_sidebar(array(
    'name'=> TD_THEME_NAME . ' default',
    'id' => 'td-default', //the id is used by the importer
    'before_widget' => '<aside class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="block-title"><span>',
    'after_title' => '</span></div>'
));

register_sidebar(array(
    'name'=>'Top right (social)',
    'id' => 'td-top-right',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
));

register_sidebar(array(
    'name'=>'Footer 1',
    'id' => 'td-footer-1',
    'before_widget' => '<aside class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="block-title"><span>',
    'after_title' => '</span></div>'
));

register_sidebar(array(
    'name'=>'Footer 2',
    'id' => 'td-footer-2',
    'before_widget' => '<aside class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="block-title"><span>',
    'after_title' => '</span></div>'
));

register_sidebar(array(
    'name'=>'Footer 3',
    'id' => 'td-footer-3',
    'before_widget' => '<aside class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<div class="block-title"><span>',
    'after_title' => '</span></div>'
));



//get our custom dynamic sidebars
$currentSidebars = td_util::get_option('sidebars');

//if we have user made sidebars, register them in wp
if (!empty($currentSidebars)) {
    foreach ($currentSidebars as $sidebar) {
        register_sidebar(array(
            'name'=>$sidebar,
            'id' => 'td-' . td_util::sidebar_name_to_id($sidebar),
            'before_widget' => '<aside class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<div class="block-title"><span>',
            'after_title' => '</span></div>',
        ));

    } //end foreach
}


/*  -----------------------------------------------------------------------------
    WP-ADMIN section
 */

if (is_admin()) {

    /*
     * the wp-admin TinyMCE editor buttons
     */
    require_once('wp-admin/tinymce/tinymce.php');


    /*
     * Custom content metaboxes (the select sidebar dropdown/post etc)
     */
    require_once ('wp-admin/content-metaboxes/td_templates_settings.php');
}






//the bottom code for css
function td_bottom_code() {
    //buffy before pasting custom css code
    $buffy_custom_css = '';

    $speed_booster = '';

    if (defined('TD_SPEED_BOOSTER')) {
        $speed_booster = 'Speed booster: ' . TD_SPEED_BOOSTER . "\n";
    }

    echo '

    <!--
        Theme: ' . TD_THEME_NAME .' by tagDiv 2014
        Version: ' . TD_THEME_VERSION . ' (rara)
        Deploy mode: ' . TD_DEPLOY_MODE . '
        ' . $speed_booster . '
    -->

    ';




    if (!is_home() and !is_front_page()) {
        //do not show author metadata on front page
        $authorMetaGoogle = get_the_author_meta('googleplus');
        if (!empty($authorMetaGoogle)) {
            //echo '<a href="' . $authorMetaGoogle . '?rel=author"></a>';
        }
    }



    //get and paste user custom css
    $td_custom_css = stripslashes(td_util::get_option('tds_custom_css'));

    //desktop
    $td_responsive_css_desktop = stripslashes(td_util::get_option('tds_responsive_css_desktop'));

    //ipad landscape
    $td_responsive_css_ipad_landscape = stripslashes(td_util::get_option('tds_responsive_css_ipad_landscape'));

    //ipad portrait
    $td_responsive_css_ipad_portrait = stripslashes(td_util::get_option('tds_responsive_css_ipad_portrait'));

    //phone
    $td_responsive_css_phone = stripslashes(td_util::get_option('tds_responsive_css_phone'));

    //check if we have to add the custom css code
    if(!empty($td_custom_css) || !empty($td_responsive_css_desktop) || !empty($td_responsive_css_ipad_landscape) || !empty($td_responsive_css_ipad_portrait) || !empty($td_responsive_css_phone)) {
        $buffy_custom_css =  '
            <style type="text/css" media="screen">';

        //paste custom css
        if(!empty($td_custom_css)) {
            $buffy_custom_css .= '
                '.$td_custom_css.'
                ';
        }

        //paste desktop custom css
        if(!empty($td_responsive_css_desktop)) {
            $buffy_custom_css .= '

                  /* responsive monitor */
                  @media (min-width: 1200px) {
                  ' .
                    $td_responsive_css_desktop .
                  '}
                  ';
        }

        //paste ipad landscape custom css
        if(!empty($td_responsive_css_ipad_landscape)) {
            $buffy_custom_css .= '

                  /* responsive landscape tablet */
                  @media (min-width: 1019px) and (max-width: 1199px) {
                  ' .
                    $td_responsive_css_ipad_landscape .
                  '}';
        }

        //paste ipad portrait custom css
        if(!empty($td_responsive_css_ipad_portrait)) {
            $buffy_custom_css .= '

                 /* responsive portrait tablet */
                  @media (min-width: 768px) and (max-width: 1018px) {
                  ' .
                    $td_responsive_css_ipad_portrait .
                  '}';
        }

        //paste ipad portrait custom css
        if(!empty($td_responsive_css_phone)) {
            $buffy_custom_css .= '

                 /* responsive phone */
                 @media (max-width: 767px) {
                 ' .
                    $td_responsive_css_phone .
                '}';
        }

        $buffy_custom_css .= '</style>';

        echo $buffy_custom_css;
    }
}
add_action('wp_footer', 'td_bottom_code');


/*  ----------------------------------------------------------------------------
    google analytics
 */
function td_header_analytics_code() {
    $td_analytics = td_util::get_option('td_analytics');
    echo stripslashes($td_analytics);
}

add_action('wp_head', 'td_header_analytics_code', 40);



//Append page slugs to the body class
function add_slug_to_body_class( $classes ) {
        global $post;
        if( is_home() ) {
                $key = array_search( 'blog', $classes );
                if($key > -1) {
                        unset( $classes[$key] );
                };
        } elseif( is_page() ) {
                $classes[] = sanitize_html_class( $post->post_name );
        } elseif(is_singular()) {
                $classes[] = sanitize_html_class( $post->post_name );
        };


        $i = 0;
        foreach ($classes as $key => $value) {
            $pos = strripos($value, 'span');
            if ($pos !== false) {
                unset($classes[$i]);
            }

            $pos = strripos($value, 'row');
            if ($pos !== false) {
                unset($classes[$i]);
            }

            $pos = strripos($value, 'container');
            if ($pos !== false) {
                unset($classes[$i]);
            }
            $i++;
        }
        return $classes;
}
add_filter('body_class', 'add_slug_to_body_class');






//remove span row container classes from post_class()
function add_slug_to_post_class( $classes ) {
    $i = 0;
    foreach ($classes as $key => $value) {
        $pos = strripos($value, 'span');
        if ($pos !== false) {
            unset($classes[$i]);
        }

        $pos = strripos($value, 'row');
        if ($pos !== false) {
            unset($classes[$i]);
        }

        $pos = strripos($value, 'container');
        if ($pos !== false) {
            unset($classes[$i]);
        }
        $i++;
    }
    return $classes;
}
add_filter('post_class', 'add_slug_to_post_class');







/*  -----------------------------------------------------------------------------
    Our custom admin bar
 */
add_action('admin_bar_menu', 'td_custom_menu', 1000);
function td_custom_menu() {
    global $wp_admin_bar;
    if(!is_super_admin() || !is_admin_bar_showing()) return;

    $wp_admin_bar->add_menu(array(
        'parent' => 'site-name',
        'title' => '<span class="td-admin-bar-red">Theme panel</span>',
        'href' => admin_url('admin.php?page=td_theme_panel'),
        'id' => 'td-menu1'
    ));




    $wp_admin_bar->add_menu( array(
        'id'   => 'our_support_item',
        'meta' => array('title' => 'Theme support', 'target' => '_blank'),
        'title' => 'Theme support',
        'href' => 'http://forum.tagdiv.com' ));

}


/*  -----------------------------------------------------------------------------
    Woo commerce
 */

if (in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' )))) { // check if we have woo commerce installed
    // breadcrumb
    add_filter( 'woocommerce_breadcrumb_defaults', 'td_woocommerce_breadcrumbs' );

    function td_woocommerce_breadcrumbs() {
        return array(
            'delimiter' => ' <span class="td-sp td-sp-breadcrumb-arrow td-bread-sep"></span> ',
            'wrap_before' => '<div class="entry-crumbs" itemprop="breadcrumb">',
            'wrap_after' => '</div>',
            'before' => '',
            'after' => '',
            'home' => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
    }

    // number of products to display on shop page
    add_filter('loop_shop_per_page', create_function('$cols', 'return 8;'));



    if (!function_exists('woocommerce_pagination')) {
        // pagination
        function woocommerce_pagination(){
            echo td_page_generator::get_pagination();
        }
    }


    if (!function_exists('woocommerce_output_related_products')) {
        // number of related product
        function woocommerce_output_related_products() {
            woocommerce_related_products(4,4); // Display 4 products in rows of 4
        }
    }
}



/**
 * Add prev and next links to a numbered link list - the pagination on single.
 */
function wp_link_pages_args_prevnext_add($args)
{
    global $page, $numpages, $more, $pagenow;

    if (!$args['next_or_number'] == 'next_and_number')
        return $args; # exit early

    $args['next_or_number'] = 'number'; # keep numbering for the main part
    if (!$more)
        return $args; # exit early

    if($page-1) # there is a previous page
        $args['before'] .= _wp_link_page($page-1)
            . $args['link_before']. $args['previouspagelink'] . $args['link_after'] . '</a>'
        ;

    if ($page<$numpages) # there is a next page
        $args['after'] = _wp_link_page($page+1)
            . $args['link_before'] . $args['nextpagelink'] . $args['link_after'] . '</a>'
            . $args['after']
        ;

    return $args;
}
add_filter('wp_link_pages_args', 'wp_link_pages_args_prevnext_add');
add_theme_support('woocommerce');






/*  ----------------------------------------------------------------------------
    visual composer rewrite classes
 */

function custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if ($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', 'row-fluid', $class_string);
    }
    if ($tag=='vc_column' || $tag=='vc_column_inner') {
        $class_string = preg_replace('/vc_span(\d{1,2})/', 'span$1', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'custom_css_classes_for_vc_row_and_vc_column', 10, 2);

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if (function_exists('vc_set_as_theme')) {
    vc_set_as_theme();
}


if(function_exists('wpb_map')) {
    //map all of our blocks in page builder
    td_global_blocks::wpb_map_all();
}



if (function_exists('vc_disable_frontend')) {
    vc_disable_frontend();
}

if (class_exists('WPBakeryVisualComposer')) { //disable visual composer updater
    $td_composer = WPBakeryVisualComposer::getInstance();
    $td_composer->disableUpdater();
}




//if you want to enable all the features from visual composer delete this code
if (function_exists('vc_remove_element')) {
    //remove unused composer elements;
    vc_remove_element("vc_separator");
    vc_remove_element("vc_text_separator");
    vc_remove_element("vc_message");
    vc_remove_element("vc_toggle");
    vc_remove_element("vc_gallery");
    vc_remove_element("vc_tour"); //wtf
    vc_remove_element("vc_accordion");
    vc_remove_element("vc_teaser_grid");
    vc_remove_element("vc_posts_slider");
    vc_remove_element("vc_posts_grid");
    vc_remove_element("vc_cta_button");
    vc_remove_element("vc_progress_bar");
    vc_remove_element("vc_wp_links");
    vc_remove_element("vc_facebook");

    //remove unused styles and visual composer scripts
    add_action( 'wp_print_scripts', 'td_remove_visual_composer_assets', 100 );
}
//end delete code visual composer


function td_remove_visual_composer_assets() {
    global $wp_styles;
    wp_deregister_style('js_composer_front');  //remove all the css form the pageubilder

}


// add pagebuilder support for title on rows
if (function_exists('vc_add_param')) {
    vc_add_param('vc_row', array(
        "param_name" => "custom_title",
        "type" => "textfield",
        "value" => "",
        "heading" => __("Optional - custom title for this block:", TD_THEME_NAME),
        "description" => "",
        "holder" => "div",
        "class" => ""
    ));

    vc_add_param('vc_row', array(
        "type" => "colorpicker",
        "holder" => "div",
        "class" => "",
        "heading" => __("Header color", TD_THEME_NAME),
        "param_name" => "header_color",
        "value" => '', //Default Red color
        "description" => __("Choose a custom header color for this block", TD_THEME_NAME)
    ));


    vc_add_param('vc_row', array(
        "type" => "colorpicker",
        "holder" => "div",
        "class" => "",
        "heading" => __("Header text color", TD_THEME_NAME),
        "param_name" => "header_text_color",
        "value" => '', //Default Red color
        "description" => __("Choose a custom header color for this block", TD_THEME_NAME)
    ));

}

/*



global $wpVC_setup;
$wpVC_setup->composer->disableUpdater();

remove_action( 'in_plugin_update_message-js_composer/js_composer.php', array( $wpVC_setup, 'addUpgradeMessageLink' ), 10 );

//print_r($wpVC_setup);

 */