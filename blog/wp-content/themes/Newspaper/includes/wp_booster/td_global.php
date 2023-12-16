<?php


//here we store the global statet

class td_global {

    static $td_options; //here we store all the options of the theme will be used in td_first_install.php

    static $current_template = ''; //used by page-homepage-loop, 404


    static $current_author_obj; //set by the author page template, used by widgets

    static $cur_url_page_id; //the id of the main page (if we have loopp in loop, it will return the id of the page that has the uri)

    static $load_sidebar_from_template; //used by some templates for custom sidebars (setted by page-homepage-loop.php etc)

    static $load_featured_img_from_template; //used by single.php to instruct td_module_1 to load the full with thumb when necessary (ex. no sidebars)



    static $is_bbpress_forum_home = false; //used by breadcrumbs


    static $category_background = '';



    static $http_or_https = 'http'; //is set below with either http or https string



    private static $post = '';
    private static $primary_category = '';
    private static $td_unique_counter = 0;


    static function load_single_post($post) {

            self::$post = $post;


        /*  ----------------------------------------------------------------------------
            update the primary category Only on single posts :0
         */
        if (is_single()) {
            //read the post setting
            $td_post_theme_settings = get_post_meta(self::$post->ID, 'td_post_theme_settings', true);
            if (!empty($td_post_theme_settings['td_primary_cat'])) {
                self::$primary_category = $td_post_theme_settings['td_primary_cat'];
                return;
            }

            $categories = get_the_category(self::$post->ID);
            foreach($categories as $category) {
                if ($category->name != TD_FEATURED_CAT) { //ignore the featured category name
                    self::$primary_category = $category->cat_ID;
                    break;
                }
            }
        }
    }


    //used on single posts
    static function get_primary_category_id() {
        if (empty(self::$post->ID)) {
            return get_queried_object_id();
        }
        return self::$primary_category;
    }


    //generate unique_ids
    static function td_generate_unique_id() {
        self::$td_unique_counter++;
        return 'td_uid_' . self::$td_unique_counter . '_' . uniqid();
    }

}


if (is_ssl()) {
    td_global::$http_or_https = 'https';
}