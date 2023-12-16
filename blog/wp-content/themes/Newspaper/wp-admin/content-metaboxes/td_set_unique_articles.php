<div class="my_meta_control td-page-module-loop-wrap">
    <p class="td_help_section ">
        <span class="td_custom_label">Unique articles:</span>
        <?php $mb->the_field('td_unique_articles'); ?>
        <select name="<?php $mb->the_name(); ?>">
            <option value=""> - Disabled - </option>
            <option value="enabled"<?php $mb->the_select_state('enabled'); ?>>Enabled</option>
        </select>
    </p>


</div>