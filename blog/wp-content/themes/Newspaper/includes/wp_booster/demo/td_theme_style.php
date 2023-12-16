<?php

function td_theme_style_load_js() {
    wp_enqueue_script('style-customizer', get_template_directory_uri() . '/js/style_customizer.js',array( 'jquery' ), 1, true); //load at begining
}
//add_action('init', 'td_theme_style_load_js');





//the bottom code for analitics and stuff
function td_theme_style_footer() {
    ?>

    <div id="td-theme-settings" class="td-theme-settings-small">
        <div class="td-skin-header">SKINS & SETTINGS</div>
        <div class="td-skin-title">Predefined style</div>
        <div class="td-skin-content">
            <div class="td-set-theme-style"><a href="#" class="td-set-theme-style-link td-set1" data-value="style_1">SPORT</a></div>
            <div class="td-set-theme-style"><a href="#" class="td-set-theme-style-link td-set2" data-value="style_2">CAFE</a></div>
            <div class="td-set-theme-style"><a href="#" class="td-set-theme-style-link td-set1" data-value="style_3">FASHION</a></div>
            <div class="td-set-theme-style"><a href="#" class="td-set-theme-style-link td-set2" data-value="style_4">TECH</a></div>
            <div class="td-set-theme-style"><a href="#" class="td-set-theme-style-link" data-value="default">DEFAULT</a></div>
        </div>

        <div class="clearfix"></div>
        <div class="td-skin-title">Theme color sample</div>
        <div class="td-skin-content">
            <?php
            td_theme_style_add_color('#4db2ec', 'td-theme-color-active');
            td_theme_style_add_color('#ee5656');
            td_theme_style_add_color('#333333');
            td_theme_style_add_color('#ef4423');
            td_theme_style_add_color('#0a9600');
            td_theme_style_add_color('#ff85cb');
            td_theme_style_add_color('#78c0a8');
            td_theme_style_add_color('#ffd041');
            td_theme_style_add_color('#22aacf');
            td_theme_style_add_color('#293e6a');
            //td_theme_style_add_color('#92b06a');
            //td_theme_style_add_color('#bccf02');
            //td_theme_style_add_color('#ff60bb');
            //td_theme_style_add_color('#c13212');
            ?>
        </div>
        <div class="clearfix"></div>
        <div class="td-set-hide-show"><a href="#" id="td-theme-set-hide">HIDE</a></div>
    </div>

    <?php
}

add_action('wp_footer', 'td_theme_style_footer');




function td_theme_style_add_color($color, $is_active_class = '') {
    echo '<div class="td-set-color ' . $is_active_class . '" data-td-color="' . $color . '" style="background-color:' . $color . '"></div>';
}

?>