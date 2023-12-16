<?php


class td_slide_big extends td_block {


    function __construct() {
        $this->block_id = 'td_slide_big';
        add_shortcode('td_slide_big', array($this, 'render'));
    }


    function render($atts){

        $this->block_uid = td_global::td_generate_unique_id(); //update unique id on each render


        extract(shortcode_atts(
            array(
                'limit' => 5,
                'sort' => '',
                'category_id' => '',
                'category_ids' => '',
                'custom_title' => '',
                'custom_url' => '',
                'hide_title' => '',
                'show_child_cat' => '',
                'tag_slug' => '',
                'force_columns' => '', //used on categories
                'autoplay' => ''
            ),$atts));


        //hide the title by default
        $atts['hide_title'] = 'hide_title';

        $buffy = ''; //output buffer
        $td_unique_id = td_global::td_generate_unique_id();


        $td_query = &td_data_source::get_wp_query($atts); //by ref  do the query


        if ($td_query->have_posts() and $td_query->found_posts > 1 ) {
            //get the js for this block
            $buffy .= $this->get_block_js($atts, $td_query);


                $buffy .= '<div class="td_block_wrap td_block_slide td_block_slide_big">';

                    //get the block title
                    $buffy .= $this->get_block_title($atts);

                    //get the sub category filter for this block
                    $buffy .= $this->get_block_sub_cats($atts, $td_unique_id);

                    $buffy .= '<div id=' . $td_unique_id . ' class="td_block_inner">';
                    //inner content of the block

                        $buffy .= $this->inner($td_query->posts, $force_columns, $autoplay);

                    $buffy .= '</div>';

                $buffy .= '</div> <!-- ./block1 -->';
        }



        /*
        $atts['limit'] = round($atts['limit'] / 2,0);
        $atts['force_columns'] = 2;
        $atts['class'] = 'td-big-slide-mobile';
        $buffy .= td_global_blocks::get_instance('td_slide')->render($atts);
        */

        return $buffy;
    }

    function inner($posts, $td_column_number = '', $autoplay = '') {
        //global $post;

        $buffy = '';

        $td_block_layout = new td_block_layout();
        if (empty($td_column_number)) {
            $td_column_number = $td_block_layout->get_column_number(); // get the column width of the block
        }

        $td_post_count = 0; // the number of posts rendered


        $td_unique_id_slide = td_global::td_generate_unique_id();

        $buffy .= '<div id="' . $td_unique_id_slide . '" class="iosSlider iosSlider-col-' . $td_column_number . ' td_mod_wrap">';
        $buffy .= '<div class="slider ">';

        $mobile_post_count = 0;

        if (!empty($posts)) {
            for ($i = 0; $i <= count($posts) - 1; $i = $i + 4) {
                $post_1 = '';
                $post_2 = '';
                $post_3 = '';
                $post_4 = '';
                $post_mobile = '';


                if (!empty($posts[$mobile_post_count])) {
                    $post_mobile = $posts[$mobile_post_count];
                    $mobile_post_count++;
                }

                if (!empty($posts[$i])) {
                    $post_1 = $posts[$i];
                }

                if (!empty($posts[$i + 1])) {
                    $post_2 = $posts[$i + 1];
                }

                if (!empty($posts[$i + 2])) {
                    $post_3 = $posts[$i + 2];
                }

                if (!empty($posts[$i + 3])) {
                    $post_4 = $posts[$i + 3];
                }
                $td_module_slide_big = new td_module_slide_big($post_1, $post_2, $post_3, $post_4, $post_mobile);
                $buffy .= $td_module_slide_big->render($td_column_number, $td_post_count);
            }


        }



        $buffy .= $td_block_layout->close_all_tags();





        $buffy .= '</div>'; //close slider


        $buffy .= '<div class = "prevButton"></div>';
        $buffy .= '<div class = "nextButton"></div>';

        $buffy .= '</div>'; //clos ios

        if (!empty($autoplay)) {
            $autoplay_string =  '
            autoSlide: true,
            autoSlideTimer: ' . $autoplay * 1000 . ',
            ';
        } else {
            $autoplay_string = '';
        }

        td_js_buffer::add_to_footer('
jQuery(document).ready(function() {
    jQuery("#' . $td_unique_id_slide . '").iosSlider({
        snapToChildren: true,
        desktopClickDrag: true,
        keyboardControls: false,
        ' . $autoplay_string. '

        infiniteSlider: true,
        navPrevSelector: jQuery("#' . $td_unique_id_slide . ' .prevButton"),
        navNextSelector: jQuery("#' . $td_unique_id_slide . ' .nextButton"),
        onSlideComplete: slideContentComplete,
        onSlideStart: slideStartedMoving
    });
});
    ');

        return $buffy;
    }


    function get_map () {

        //get the generic filter array
        $generic_filter_array = td_generic_filter_array::get_array();

        //add custom filter fields to generic filter array
        array_push ($generic_filter_array,
            array(
                "param_name" => "autoplay",
                "type" => "textfield",
                "value" => '',
                "heading" => 'Autoplay slider (at x seconds)',
                "description" => "Leave empty do disable autoplay",
                "holder" => "div",
                "class" => ""
            ),
            array(
                "param_name" => "limit",
                "type" => "textfield",
                "value" => __("5", TD_THEME_NAME),
                "heading" => __("Limit post number:", TD_THEME_NAME),
                "description" => "",
                "holder" => "div",
                "class" => ""
            ),
            array(
                "param_name" => "offset",
                "type" => "textfield",
                "value" => __("", TD_THEME_NAME),
                "heading" => __("Offset posts:", TD_THEME_NAME),
                "description" => "",
                "holder" => "div",
                "class" => ""
            )

        );

        //remove hide title on the slide @hack
        if ($generic_filter_array[5]['param_name'] == 'hide_title') {
            unset($generic_filter_array[5]);
        }


        return array(
            "name" => __("Big Slide", TD_THEME_NAME),
            "base" => "td_slide_big",
            "class" => "td_slide_big",
            "controls" => "full",
            "category" => __('Blocks', TD_THEME_NAME),
            'icon' => 'icon-pagebuilder-slide_big',
            "params" => $generic_filter_array
        );



    }

}



td_global_blocks::add_instance('Slide big', new td_slide_big());




