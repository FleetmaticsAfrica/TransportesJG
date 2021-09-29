<?php
/**
 * The template part for displaying content
 * @package Ecommerce Solution
 * @subpackage transport_movers
 * @since 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="layout2"> 
    <h2 class="section-title text-center"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>  
    <div class="box-image text-center my-3 mx-0">
      <?php 
        if(has_post_thumbnail()) { 
          the_post_thumbnail(); 
        }
      ?>
    </div>
    <div class="new-text text-center">
      <?php $transport_movers_theme_lay = get_theme_mod( 'transport_movers_content_settings','Excerpt');
      if($transport_movers_theme_lay == 'Content'){ ?>
        <?php the_content(); ?>
      <?php }
      if($transport_movers_theme_lay == 'Excerpt'){ ?>
        <?php if(get_the_excerpt()) { ?>
          <?php $excerpt = get_the_excerpt(); echo esc_html( transport_movers_string_limit_words( $excerpt, esc_attr(get_theme_mod('transport_movers_post_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('transport_movers_post_discription_suffix','[...]') ); ?>
        <?php }?>
      <?php }?>
    </div> 
    <?php if( get_theme_mod('transport_movers_button_text','View More') != ''){ ?>
      <div class="postbtn text-center">
        <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('transport_movers_button_text','View More'));?><i class="<?php echo esc_attr(get_theme_mod('transport_movers_post_button_icon','fas fa-long-arrow-alt-right')); ?> me-2 py-0 px-2"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('transport_movers_button_text','View More'));?></span></a>
      </div>
    <?php }?>
  </div>
</article>