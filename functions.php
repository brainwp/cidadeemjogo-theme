<?php
/**
 * Cidad em Jogo functions and definitions.
 *
 */

// Insere função no hook do tema, originalmente no arquivo inc/customize.php

function coletivo_customize_after_register($wp_customize){

    /*------------------------------------------------------------------------*/
    /*  Site Options
    /*------------------------------------------------------------------------*/
        $wp_customize->add_section( 'coletivo_play_settings',
            array(
                'priority'       => 6,
                'capability'     => 'edit_theme_options',
                'theme_supports' => '',
                'title'          => esc_html__( 'Link Jogar', 'coletivo' ),
                'description'    => '',
                'panel'          => 'theme_options',
            )
        );

        // Play custom Link
        $wp_customize->add_setting( 'coletivo_jogar_text_link',
            array(
                'sanitize_callback' => 'esc_url',
                'default'           => esc_url( home_url( '/' )).esc_html__('', 'coletivo'),
                'transport'         => 'refresh',
            )
        );
        $wp_customize->add_control( 'coletivo_jogar_text_link',
            array(
                'type'  =>'text',
                'label'       => esc_html__('URL do Link de Jogar', 'coletivo'),
                'section'     => 'coletivo_play_settings',
                'description' => ''
            )
        );
    }

add_action( 'coletivo_customize_after_register', 'coletivo_customize_after_register' );

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
                <?php
                    $coletivo_jogar_text_link = get_theme_mod( 'coletivo_jogar_text_link' );
                ?>
                    <a href="#0" id="nav-toggle"><?php _e('Menu', 'coletivo'); ?><span></span></a>

                    <div class="btn-play alignright">
                        <a class="btn btn-theme-primary" onclick="goog_report_conversion ('<?php  if ($coletivo_jogar_text_link != '') echo $coletivo_jogar_text_link; ?>')" href="<?php  if ($coletivo_jogar_text_link != '') echo $coletivo_jogar_text_link; ?>">Jogar
                        </a>
                    </div>
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

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');
 
//Lets add Open Graph Meta Info
 
function insert_fb_in_head() {
    if ( is_front_page()) //if it is home page
        return;
        echo '<meta property="fb:admins" content="A4NjnfunWGV"/>';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="CIDADE EM JOGO"/>';
	    echo '<meta property="og:image" content="http://cidadeemjogo.org.br/wp-content/uploads/2017/08/CIDADE-EM-JOGO-logo-export.jpg"/>';
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );
