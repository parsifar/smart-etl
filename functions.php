<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 *
 * @package smart-etl
 */

/**
 * Change Copyright Text
 *
 * @return void
 */
function smart_etl_custom_copyright() {
	?>
	© <?php echo esc_attr( date( 'Y' ) ); ?> <?php echo esc_attr( get_bloginfo( 'name' ) ); ?>. Developed by <a href="https://parsifar.com" target="_blank">Ali Parsifar</a>
	<?php
}

add_filter( 'generate_copyright', 'smart_etl_custom_copyright' );
