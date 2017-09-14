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
                    <h5 class="follow-heading mobile-margin-top">Apoiadores</h5>
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
        ?>
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