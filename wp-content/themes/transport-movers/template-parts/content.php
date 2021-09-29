<?php
/**
 * The template part for displaying content
 * @package Transport Movers
 * @subpackage transport_movers
 * @since 1.0
 */
?>
<?php $transport_movers_theme_lay = get_theme_mod( 'transport_movers_post_layouts','Layout 1');
if($transport_movers_theme_lay == 'Layout 1'){ 
  get_template_part('template-parts/Post-layouts/layout1'); 
}else if($transport_movers_theme_lay == 'Layout 2'){ 
  get_template_part('template-parts/Post-layouts/layout2'); 
}else if($transport_movers_theme_lay == 'Layout 3'){ 
  get_template_part('template-parts/Post-layouts/layout3'); 
}else{ 
  get_template_part('template-parts/Post-layouts/layout1'); 
}