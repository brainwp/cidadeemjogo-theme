<?php
/**
 * Cidad em Jogo functions and definitions.
 *
 */

// Altera a função do header, originalmente no arquivo inc/template-tags.php

if ( ! function_exists( 'coletivo_site_header' ) ) {
    /**
     * Display site header
     */
    function coletivo_site_header(){
        ?>
        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div class="site-branding">
                <?php
                coletivo_site_logo();
                ?>
                </div>
                <!-- .site-branding -->
                <div class="header-right-wrapper">
                    <a href="#0" id="nav-toggle"><?php _e('Menu', 'coletivo'); ?><span></span></a>
                    <div class="btn-play alignright"><a class="btn btn-theme-primary" href="http://13.58.122.3/cidadeemjogo/">Jogar</a></div>
                    <nav id="site-navigation" class="main-navigation alignright" role="navigation">
                        <ul class="coletivo-menu">
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => '', 'items_wrap' => '%3$s')); ?>
                        </ul>
                    </nav>
                    <!-- #site-navigation -->
                </div>
            </div>
        </header><!-- #masthead -->
        <?php
    }
}

add_action( 'coletivo_site_header', 'coletivo_site_header' );
