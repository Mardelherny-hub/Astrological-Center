<div class="td-footer-wrap">
    <div class="container">
        <div class="row">
            <?php
                $tds_footer_widget_cols = td_util::get_option('tds_footer_widget_cols');

                //reset global columns
                global $td_row_count, $td_column_count;
                $td_row_count = 1;

                switch ($tds_footer_widget_cols) {
                    case '23-13':

                        ?>

                                <div class="span12">
                                    <div class="td-grid-wrap">
                                        <div class="container-fluid">
                                            <div class="wpb_row row-fluid ">
                                                <div class="span8 wpb_column column_container">
                                                    <?php
                                                        $td_column_count = '2/3'; //2 cols widget
                                                        dynamic_sidebar('Footer 1')
                                                    ?>
                                                </div>

                                                <div class="span4 wpb_column column_container">
                                                    <?php
                                                        $td_column_count = '1/3'; //1 col widget
                                                        dynamic_sidebar('Footer 2')
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                        break;

                    case '13-23':
                        ?>

                                <div class="span12">
                                    <div class="td-grid-wrap">
                                        <div class="container-fluid">
                                            <div class="wpb_row row-fluid ">
                                                <div class="span4 wpb_column column_container">
                                                    <?php
                                                        $td_column_count = '1/3'; //1 col widget
                                                        dynamic_sidebar('Footer 1')
                                                    ?>
                                                </div>
                                                <div class="span8 wpb_column column_container">
                                                    <?php
                                                        $td_column_count = '2/3'; //2 cols widget
                                                        dynamic_sidebar('Footer 2')
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                        break;

                    case '33':
                        $td_column_count = '1/1'; //3 cols widget
                        ?>

                                <div class="span12">
                                    <div class="td-grid-wrap">
                                        <div class="container-fluid">
                                            <div class="wpb_row row-fluid ">
                                                <div class="span12 wpb_column column_container">
                                                    <?php dynamic_sidebar('Footer 1')?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                        break;

                    default:
                        $td_column_count = '1/3'; //1 col widget - all!
                        ?>

                                    <div class="span12">
                                        <div class="td-grid-wrap">
                                            <div class="container-fluid">
                                                <div class="wpb_row row-fluid ">
                                                    <div class="span4 wpb_column column_container">
                                                        <?php dynamic_sidebar('Footer 1')?>
                                                    </div>

                                                    <div class="span4 wpb_column column_container">
                                                        <?php dynamic_sidebar('Footer 2')?>
                                                    </div>
                                                    <div class="span4 wpb_column column_container">
                                                        <?php dynamic_sidebar('Footer 3')?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                        <?php
                        break;


                }
            ?>
        </div>
    </div>
</div> <!-- /.td-footer-wrap  -->


<div class="td-sub-footer-wrap">
    <div class="container ">
        <div class="row">
            <div class="span12">
                <div class="td-grid-wrap">
                    <div class="container-fluid">
                        <div class="row-fluid ">
                            <div class="span4 td-sub-footer-copy">
                                <?php
                                    $tds_footer_copyright = td_util::get_option('tds_footer_copyright');
                                    $tds_footer_copy_symbol = td_util::get_option('tds_footer_copy_symbol');

                                    //show copyright symbol
                                    if ($tds_footer_copy_symbol == '') {
                                        echo '&copy; ';
                                    }

                                    echo $tds_footer_copyright;
                                ?>
                            </div>
                            <div class="span8 td-sub-footer-menu">

                                <?php


                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu',
                                    'menu_class'=> '',
                                    'fallback_cb' => 'td_wp_footer_menu'
                                ));

                                //if no menu
                                function td_wp_footer_menu() {
                                    //do nothing?
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





</div>
<!--/#inner-wrap-->
</div>
<!--/#outer-wrap-->


<div class="td-sp td-scroll-up"></div>

<?php
//echo '<div style="position:fixed; top:100px; left:10px; z-index=9999">' . get_permalink() . '</div>';
//add the comments reply to script on single pages
if (is_singular()) {
    wp_enqueue_script('comment-reply');
}
wp_footer();
?>
<!-- Twitter universal website tag code -->
<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">twttr.conversion.trackPid('nupyn', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nupyn&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nupyn&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
</noscript>
<!-- End Twitter universal website tag code -->

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?4ccIgKXGosBlC3kYebmkML1MpBHxUetF";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
</body>
</html>