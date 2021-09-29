<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('transport_solutions_services_category'),
  'posts_per_page' => get_theme_mod('transport_solutions_services_number'),
); ?>

<div class="services">
  <div class="owl-carousel">
    <?php $arr_posts = new WP_Query( $args );
    if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <div class="box">
          <?php the_post_thumbnail(); ?>
          <div class="p-2">
            <h4 class="title my-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h4>
            <p><?php echo esc_html( wp_trim_words( get_the_content(), 8, '...' ) ); ?></p>
          </div>
          <div class="box-content">
            <h4 class="title mb-3 mt-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h4>
            <p><?php echo esc_html( wp_trim_words( get_the_content(), 20, '...' ) ); ?></p>
            <p class="slider_btn my-5">
              <?php if ( get_theme_mod('transport_solutions_services_button_text', true) == true ) : ?>
                <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html( get_theme_mod('transport_solutions_services_button_text' ) ); ?></a>
              <?php endif; ?>
            </p>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>