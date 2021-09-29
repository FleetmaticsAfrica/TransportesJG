<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="skip_content" role="main">
  <?php do_action( 'transport_movers_above_slider' ); ?>

  <?php if( get_theme_mod('transport_movers_slider_hide',false) != '' || get_theme_mod( 'transport_movers_display_slider',false) != ''){ ?>
    <section id="slider" class="mw-100 m-auto p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> 
        <?php $transport_movers_slider_page = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'transport_movers_tab_pages' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $transport_movers_slider_page[] = $mod;
            }
          }
          if( !empty($transport_movers_slider_page) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $transport_movers_slider_page,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel text-start">
                <h1 class="text-uppercase"><?php the_title();?></h1>
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( transport_movers_string_limit_words( $excerpt, esc_attr(get_theme_mod('transport_movers_slider_excerpt_number','25')))); ?></p>
                <?php if (get_theme_mod( 'transport_movers_show_slider_button',true) != '' || get_theme_mod( 'transport_movers_display_slider_button',true) != ''){ ?>
                  <?php if( get_theme_mod('transport_movers_slider_button_text','Read More') != ''){ ?>
                    <div class="slide-button mt-3">
                      <a class="read-more py-2 px-3" href="<?php the_permalink(); ?>"><?php echo esc_html( get_theme_mod('transport_movers_slider_button_text',__('Read More','transport-movers'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('transport_movers_slider_button_text',__('Read More','transport-movers'))); ?></span></a>
                    </div>  
                  <?php }?>
                <?php }?>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('transport_movers_slider_previous_icon','fas fa-chevron-left')); ?>" ></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','transport-movers' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('transport_movers_slider_next_icon','fas fa-chevron-right')); ?>" ></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','transport-movers' );?></span>
        </a>
      </div>
      <div class="clearfix"></div>
    </section> 
  <?php }?>

  <?php do_action( 'transport_movers_below_slider' ); ?>

  <?php if( get_theme_mod('transport_movers_time') != '' || get_theme_mod('transport_movers_branchase') != '' || get_theme_mod('transport_movers_facebook') != '' || get_theme_mod('transport_movers_twitter') != '' || get_theme_mod('transport_movers_linkdin') != '' || get_theme_mod('transport_movers_pinterest') != '' || get_theme_mod('transport_movers_google_plus') != '' || get_theme_mod('transport_movers_instagram') != '' ||get_theme_mod('transport_movers_youtube') != '' ){ ?>
    <section id="con-details">
      <div class="container">
        <div class="row m-0">
          <div class="col-lg-3 col-md-3">
            <div class="row">
              <?php if( get_theme_mod( 'transport_movers_time','' ) != '') { ?>
                <div class="col-lg-2 col-md-2 time p-0">
                  <i class="<?php echo esc_attr(get_theme_mod('transport_movers_time_icon','far fa-clock')); ?>"></i>
                </div>
                <div class="col-lg-10 col-md-10">
                  <p class="text"><?php echo esc_html( get_theme_mod('transport_movers_time_text','' )); ?></p>
                  <p><?php echo esc_html( get_theme_mod('transport_movers_time','' )); ?></p>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="row">
              <?php if( get_theme_mod( 'transport_movers_branchase','' ) != '') { ?>
                <div class="col-lg-2 col-md-2 branch">
                  <i class="<?php echo esc_attr(get_theme_mod('transport_movers_branch_icon','fas fa-university')); ?>"></i>
                </div>
                <div class="col-lg-10 col-md-10">
                  <p class="text"><?php echo esc_html( get_theme_mod('transport_movers_branchase_text','')); ?></p>
                  <p><?php echo esc_html( get_theme_mod('transport_movers_branchase','' )); ?></p>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-lg-5 col-md-5">
            <div class="socialbox text-lg-end">
              <?php if( get_theme_mod( 'transport_movers_facebook') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'transport_movers_facebook','' ) ); ?>" class="facebook"><i class="<?php echo esc_attr(get_theme_mod('transport_movers_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','transport-movers' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'transport_movers_twitter') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'transport_movers_twitter','' ) ); ?>" class="twitter"><i class="<?php echo esc_attr(get_theme_mod('transport_movers_twitter_icon','fab fa-twitter')); ?>" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','transport-movers' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'transport_movers_linkdin') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'transport_movers_linkdin','' ) ); ?>" class="linkedin"><i class="<?php echo esc_attr(get_theme_mod('transport_movers_linkedin_icon','fab fa-linkedin-in')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkdin','transport-movers' );?></span></a>
              <?php } ?>            
              <?php if( get_theme_mod( 'transport_movers_pinterest') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'transport_movers_pinterest','' ) ); ?>" class="pinterest"><i class="<?php echo esc_attr(get_theme_mod('transport_movers_pinterest_icon','fab fa-pinterest-p')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','transport-movers' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'transport_movers_instagram') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'transport_movers_instagram','' ) ); ?>" class="instagram"><i class="<?php echo esc_attr(get_theme_mod('transport_movers_instagram_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','transport-movers' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'transport_movers_youtube') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'transport_movers_youtube','' ) ); ?>" class="youtube"><i class="<?php echo esc_attr(get_theme_mod('transport_movers_youtube_icon','fab fa-youtube')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','transport-movers' );?></span></a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'transport_movers_after_contact' ); ?>

  <?php if( get_theme_mod('transport_movers_sec_title') != '' || get_theme_mod('transport_movers_project_single_post') != ''){ ?>
    <section id="about-sec" class="my-3">
      <?php if( get_theme_mod('transport_movers_sec_title') != ''){ ?>
        <span><i class="<?php echo esc_attr(get_theme_mod('transport_movers_about_icon','fas fa-map-marker-alt')); ?> me-2"></i><h2 class="text-start py-2"><?php echo esc_html(get_theme_mod('transport_movers_sec_title','')); ?></h2></span>
      <?php }?>
      <?php
        $transport_movers_postData =  get_theme_mod('transport_movers_project_single_post');
        if($transport_movers_postData){
          $args = array( 'name' => esc_html($transport_movers_postData ,'transport-movers'));
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post(); ?>         
            <div class="mainbox row m-0">             
              <div class="col-lg-8 col-md-8 content-box">
                <h3 class="text-start"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                <p class="my-2 mx-0"><?php $excerpt = get_the_excerpt(); echo esc_html( transport_movers_string_limit_words( $excerpt, esc_attr(get_theme_mod('transport_movers_about_excerpt_number','45')))); ?></p>
                <?php if( get_theme_mod('transport_movers_project_button_text','Read More') != ''){ ?>
                  <div class="about-link">
                    <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_theme_mod('transport_movers_project_button_text',__('Read More','transport-movers'))); ?><i class="<?php echo esc_attr(get_theme_mod('transport_movers_button_icon','fas fa-long-arrow-alt-right')); ?> py-0 px-2"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('transport_movers_project_button_text',__('Read More','transport-movers'))); ?></span></a>
                  </div>
                <?php }?>
              </div>
              <div class="col-lg-4 col-md-4 p-0">
                <?php the_post_thumbnail(); ?>
              </div>
            </div>
          <?php endwhile; 
          wp_reset_postdata();?>
          <?php else : ?>
             <div class="no-postfound"></div>
           <?php
        endif; }?>
        <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action( 'transport_movers_after_about' ); ?>

  <div id="bwt-content" class="container py-4 px-0">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="new-text"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>