<?php
  global $post;
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('post-box mb-4'); ?>>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
      <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
    </div>
  <?php }?>
  <div class="p-3">
    <h3 class="post-title mb-3 mt-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
    <div class="post-content">
      <?php the_excerpt(); ?>
    </div>
    <div class="post-meta">
      <?php if ( get_theme_mod('transport_solutions_blog_admin_enable') ) : ?>
        <i class="far fa-user mr-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a>
      <?php endif; ?>
      <?php if ( get_theme_mod('transport_solutions_blog_comment_enable') ) : ?>
        <span class="ml-3"><i class="far fa-comments mr-2"></i> <?php comments_number( esc_attr('0', 'transport-solutions'), esc_attr('0', 'transport-solutions'), esc_attr('%', 'transport-solutions') ); ?> <?php esc_html_e('comments','transport-solutions'); ?></span>
      <?php endif; ?>
    </div>
  </div>
</div>