<?php
/**
 * The template part for displaying a message that posts cannot be found.
 * @package Transport Movers
 */
?>

<header role="banner">
	<h2 class="entry-title"><?php echo esc_html(get_theme_mod('transport_movers_no_search_result_heading',__('Nothing Found','transport-movers')));?></h2>
</header>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.','transport-movers'), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
	<p><?php echo esc_html(get_theme_mod('transport_movers_no_search_result_text',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','transport-movers')));?></p><br />
		<?php get_search_form(); ?>
<?php else : ?>
	<p><?php esc_html_e( 'Dont worry it happens to the best of us.', 'transport-movers' ); ?></p><br />
	<div class="read-moresec">
		<a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Back to Home Page', 'transport-movers' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page', 'transport-movers' ); ?></span></a>
	</div>
<?php endif; ?>