<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coletivo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'coletivo_before_site_star' ); ?>
<!-- Google Code for Pareto - Botao Jogar Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script type="text/javascript">
/* <![CDATA[ */
goog_snippet_vars = function() {
var w = window;
w.google_conversion_id = 963925532;
w.google_conversion_label = "Y6vmCJ_Cl3QQnKzRywM";
w.google_remarketing_only = false;
}
// DO NOT CHANGE THE CODE BELOW.
goog_report_conversion = function(url) {
goog_snippet_vars();
window.google_conversion_format = "3";
var opt = new Object();
opt.onload_callback = function() {
if (typeof(url) != 'undefined') {
window.location = url;
}
}
var conv_handler = window['google_trackConversion'];
if (typeof(conv_handler) == 'function') {
conv_handler(opt);
}
}
/* ]]> */
</script>
<script type="text/javascript"
src="//www.googleadservices.com/pagead/conversion_async.js">
</script>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'coletivo' ); ?></a>
    <?php
    /**
     * Hooked: coletivo_site_header
     *
     * @see coletivo_site_header
     */
    do_action( 'coletivo_site_start' );
    ?>
