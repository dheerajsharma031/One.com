<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Aone
 * @since one 1.0
 */
?>

<?php

$footerTitle1 = one_get_theme_option('s_footer_title_1');
$footerTitle2 = one_get_theme_option('s_footer_title_2');
$footerTitle3 = one_get_theme_option('s_footer_title_3');
$footerTitle4 = one_get_theme_option('s_footer_title_4');

$footerContent1 = one_get_theme_option('s_footer_1');
$footerContent2 = one_get_theme_option('s_footer_2');
$footerContent3 = one_get_theme_option('s_footer_3');
$footerContent4 = one_get_theme_option('s_footer_4');


?>
<footer id="site-footer" role="footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row flex-row ">
                <div class="col-lg-4 col-md-6 flex-column">
                    <div id="one_footer_logo-2" class="widget widget_one_footer_logo">
                        <div class="site-logo footer-logo">
                            <h2 class="site-title"><?php echo get_bloginfo('name'); ?></h2>
                        </div>
                        <div class="widget-title">
                            <h4><?php echo $footerTitle1; ?></h4>
                        </div>
                        <?php echo $footerContent1; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 flex-column">
                    <div id="recent-posts-4" class="widget widget_recent_entries">
                        <div class="widget-title"><h4><?php echo $footerTitle2; ?></h4></div>
                        <?php echo $footerContent2; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 flex-column"><div id="one_footer_address-2" class="widget widget_one_footer_address">
                        <div class="widget-title">
                            <h4><?php echo $footerTitle3; ?></h4>
                        </div>
                        <?php echo $footerContent3; ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $footerContent4; ?>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<?php wp_footer(); ?>
</div>
</body>
</html>