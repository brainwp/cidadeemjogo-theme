<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coletivo
 */
?>
    <section class="section-padding section-logos section-meta onepage-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="follow-heading">Realizadores</h5>
                        <div class="col-sm-6">
                            <span class="logo-brava">Brava</span>
                        </div>
                        <div class="col-sm-6">
                             <span class="logo-wilsoncenter">WilsonCenter</span>
                        </div>
                </div>
                <div class="col-sm-6">
                    <h5 class="follow-heading">Apoiadores</h5>
                        <div class="col-sm-6">
                             <span class="logo-insitum">Insitum</span>
                        </div>
                        <div class="col-sm-6">
                             <span></span>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="colophon" class="site-footer" role="contentinfo">
        <?php
        $coletivo_btt_disable = get_theme_mod('coletivo_btt_disable');
        $coletivo_social_footer_title = get_theme_mod('coletivo_social_footer_title', esc_html__('Keep Updated', 'coletivo'));
        $coletivo_social_disable = get_theme_mod('coletivo_social_disable', '1');

        if ( $coletivo_social_disable != '1' ) : ?>
             <div class="site-info">
	            <div class="container">
	                <?php if ($coletivo_btt_disable != '1') : ?>
	                    <div class="btt">
	                        <a class="back-top-top" href="#page" title="<?php echo esc_html__('Back To Top', 'coletivo') ?>"><i class="fa fa-angle-double-up wow flash" data-wow-duration="2s"></i></a>
	                    </div>
	                <?php endif; ?>
	            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php
                            if ($coletivo_social_disable != '1') {
                                ?>
                                <div class="footer-social">
                                    <?php
                                    if ($coletivo_social_footer_title != '') echo '<h5 class="follow-heading">' . $coletivo_social_footer_title . '</h5>';

                                    $socials = coletivo_get_social_profiles();
                                    /**
                                     * New Socials profiles
                                     *
                                     * @since 1.1.4
                                     * @change 1.2.1
                                     */
                                    echo '<div class="footer-social-icons">';
                                    if ( $socials ) {
                                        echo $socials;
                                    } else {
                                        /**
                                         * Deprecated
                                         * @since 1.1.4
                                         */
                                        $twitter = get_theme_mod('coletivo_social_twitter');
                                        $facebook = get_theme_mod('coletivo_social_facebook');
                                        $google = get_theme_mod('coletivo_social_google');
                                        $instagram = get_theme_mod('coletivo_social_instagram');
                                        $rss = get_theme_mod('coletivo_social_rss');

                                        if ($twitter != '') echo '<a target="_blank" href="' . $twitter . '" title="Twitter"><i class="fa fa-twitter"></i></a>';
                                        if ($facebook != '') echo '<a target="_blank" href="' . $facebook . '" title="Facebook"><i class="fa fa-facebook"></i></a>';
                                        if ($google != '') echo '<a target="_blank" href="' . $google . '" title="Google Plus"><i class="fa fa-google-plus"></i></a>';
                                        if ($instagram != '') echo '<a target="_blank" href="' . $instagram . '" title="Instagram"><i class="fa fa-instagram"></i></a>';
                                        if ($rss != '') echo '<a target="_blank" href="' . $rss . '"><i class="fa fa-rss"></i></a>';
                                    }
                                    echo '</div>';
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12">
                            <?php
                            /**
                             * hooked coletivo_footer_site_info
                             * @see coletivo_footer_site_info
                             */
                            do_action('coletivo_footer_site_info');
                            ?>
                        </div>
                    </div>
                </div>
            </div><!-- .site-info -->
        <?php endif; ?>
    </footer><!-- #colophon -->
<?php
/**
 * Hooked: coletivo_site_footer
 *
 * @see coletivo_site_footer
 */
do_action( 'coletivo_site_end' );
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>