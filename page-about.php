<?php
/**
 * Template name: About
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package valuexvail
 */

get_header();
?>

<section class="about-section">
<div class="container">
	<div class="row">

		<?php if ( is_active_sidebar( 'about-page-sidebar' ) ) { ?>

			<div class="col-md-4">
				<div class="left-side">

					 <?php dynamic_sidebar( 'about-page-sidebar' ); ?>
					 
				</div>
			</div>
					 
		<?php } ?>

				
				<!-- <div class="notify-form-wrapper">

					<?php if( function_exists('acf_add_local_field_group') ):?>
						<h2><?php the_field('ls_cf_title'); ?></h2>
					<?php endif; ?>
					
					<?php if( function_exists('acf_add_local_field_group') ):?>
						<?php the_field('ls_cf_shortcode'); ?>
					<?php endif; ?>

				</div> -->

		<div class="col-md-8">
			<div class="right-side">
				<div class="top-text">

					<?php
						while ( have_posts() ) :
								
							the_post();

							the_content();

						endwhile; // End of the loop.
					?>
					
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<?php get_footer('slides'); ?>