<?php
/**
 * Template name: Apply
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

	<section class="apply-section">
		<div class="custom-container">

			<?php if( function_exists('acf_add_local_field_group') ):?>
				<div class="text-wrapper">
					<p><?php the_field('apply_text')?></p>
				</div>
			<?php endif; ?>

			<div class="apply-form">

				<?php if( function_exists('acf_add_local_field_group') ):?>
					<h2><?php the_field('cf_apply_title')?></h2>
				<?php endif; ?>

				<?php
					while ( have_posts() ) :

						the_post();

						the_content();

					endwhile; // End of the loop.
				?>
			
			</div>
		</div>
	</section>

<?php get_footer('slides'); ?>