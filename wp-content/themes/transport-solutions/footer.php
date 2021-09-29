<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('transport-solutions-footer-sidebar')) {
        echo '<div class="row sidebar-area">';
          dynamic_sidebar('transport-solutions-footer-sidebar');
        echo '</div>';
      }
    ?>

    <div class="row">
      <div class="col-md-12">
        <p class="mb-0 py-3 text-center text-md-left">
          <?php
            if (!get_theme_mod('transport_solutions_footer_text') ) { ?>
              <a href="<?php echo esc_url(__('https://www.misbahwp.com/themes/free-transport-wordpress-theme/', 'transport-solutions' )); ?>" target="_blank"><?php esc_html_e('Transport WordPress ','transport-solutions'); ?></a>
            <?php } else {
              echo esc_html(get_theme_mod('transport_solutions_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('transport_solutions_copyright_enable', true) == true ) : ?>
            <?php 
            /* translators: %s: Misbah WP */ 
            printf( esc_html__( ' Theme by %s', 'transport-solutions' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url(__('https://wordpress.org', 'transport-solutions' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'transport-solutions' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
