<?php
/**
 * Template name: Contact Us
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

<section class="contact-us">
	<div id="map"></div>
	<div class="form-wrapper clearfix">
		<div class="col-md-6">
			<div class="row">
				<div class="form-container">

					<?php if( function_exists('acf_add_local_field_group') ):?>
						<h3><?php the_field('cf_title')?></h3>
					<?php endif; ?>

					<?php
						while ( have_posts() ) :
							
							the_post();

							the_content();

						endwhile; // End of the loop.
					?>
					
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="address-container">

				<?php if( function_exists('acf_add_local_field_group') ):?>
					<h3><?php the_field('ci_title')?></h3>
					<p><?php the_field('ci_subtitle_address')?> <strong><?php the_field('ci_address_text')?></strong></p>
					<p><?php the_field('ci_subtitle_email')?> <?php the_field('ci_email_text')?></p>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>

<?php get_footer('slides'); ?>