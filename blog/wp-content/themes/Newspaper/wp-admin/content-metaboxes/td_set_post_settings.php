<div class="my_meta_control">


    <p class="td_help_section ">
        <span class="td_custom_label">Sidebar position:</span>
        <?php $mb->the_field('td_sidebar_position'); ?>
        <select name="<?php $mb->the_name(); ?>">
            <option value="">Default position</option>
            <option value="sidebar_right">Sidebar right</option>
            <option value="sidebar_left"<?php $mb->the_select_state('sidebar_left'); ?>>Sidebar left</option>
            <option value="no_sidebar"<?php $mb->the_select_state('no_sidebar'); ?>>Full width</option>
        </select>
        <span class="td_info_inline"> - Default = get the position from the blog page</span>
    </p>



    <p class="td_help_section ">
        <span class="td_custom_label">Custom sidebar:</span>
        <?php $mb->the_field('td_sidebar'); ?>
        <select name="<?php $mb->the_name(); ?>">
                <option value="">Default sidebar</option>
                <?php
                $currentSidebars = td_util::get_option('sidebars'); //read the sidebars

                if (!empty($currentSidebars)) {
                    foreach ($currentSidebars as $sidebar) {
                        ?>
                            <option value="<?php echo $sidebar?>"<?php $mb->the_select_state($sidebar); ?>><?php echo $sidebar?></option>
                        <?php
                    }
                }
                ?>
        </select>



    </p>


    <p class="td_help_section ">
        <span class="td_custom_label">Primary category:</span>
        <?php $mb->the_field('td_primary_cat'); ?>
        <select name="<?php $mb->the_name(); ?>">
            <option value="">Auto select a category</option>
            <?php
            $td_current_categories = td_util::get_category2id_array(false);

            //print_r($td_current_categories);
            //die;
            foreach ($td_current_categories as $td_category => $td_category_id) {
                ?>
                <option value="<?php echo $td_category_id?>"<?php $mb->the_select_state($td_category_id); ?>><?php echo $td_category?></option>
            <?php
            }
            ?>
        </select>

        <span class="td_info_inline"> - If the posts has multiple categories, the one selected here will show up in blocks.</span>

    </p>


    <p class="td_help_section">
        <?php $mb->the_field('td_subtitle'); ?>
        <span class="td_custom_label td_text_area_label">Subtitle:</span>
        <textarea style="width: 400px;" name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea>
        <br>
        <span class="td_info_inline td_info_inline_textarea">this text will appear under the title</span>
    </p>


    <p class="td_help_section">
        <?php $mb->the_field('td_source'); ?>
        <span class="td_custom_label">Source name:</span>
        <input style="width: 200px;" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        <span class="td_info_inline"> - name of the source</span>
    </p>

    <p class="td_help_section">
        <?php $mb->the_field('td_source_url'); ?>
        <span class="td_custom_label">Source url:</span>
        <input style="width: 200px;" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        <span class="td_info_inline"> - url to the source</span>
    </p>

    <p class="td_help_section">
        <?php $mb->the_field('td_via'); ?>
        <span class="td_custom_label">Via name:</span>
        <input style="width: 200px;" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>

    </p>

    <p class="td_help_section">
        <?php $mb->the_field('td_via_url'); ?>
        <span class="td_custom_label">Via url:</span>
        <input style="width: 200px;" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
    </p>
<br/>
    <p class="td_help_section">
        <?php $mb->the_field('td_source_2'); ?>
        <span class="td_custom_label">2nd Source name:</span>
        <input style="width: 200px;" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        <span class="td_info_inline"> - name of the source</span>
    </p>

    <p class="td_help_section">
        <?php $mb->the_field('td_source_2_url'); ?>
        <span class="td_custom_label">2nd Source url:</span>
        <input style="width: 200px;" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        <span class="td_info_inline"> - url to the source</span>
    </p>

    <p class="td_help_section">
        <?php $mb->the_field('td_via_2'); ?>
        <span class="td_custom_label">2nd Via name:</span>
        <input style="width: 200px;" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>

    </p>

    <p class="td_help_section">
        <?php $mb->the_field('td_via_2_url'); ?>
        <span class="td_custom_label">2nd Via url:</span>
        <input style="width: 200px;" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
    </p>

</div>


