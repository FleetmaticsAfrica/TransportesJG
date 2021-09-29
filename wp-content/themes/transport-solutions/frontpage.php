<?php 

/* Template Name: Front Page Template */

get_header(); ?>

<div id="content">
	<?php get_template_part( 'core/sections/slider' ); ?>
	<?php if ( get_theme_mod('transport_solutions_services_box_enable') ) : ?>
		<div class="section_two py-5">
			<div class="container-fluid">
				<?php get_template_part( 'core/sections/services' ); ?>
			</div>
		</div>	
	<?php endif; ?>
	<?php get_template_part( 'core/sections/additional-content' ); ?>
</div>

<?php get_footer(); ?>