<?php
/**
 * Template name: Hotels
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

<section class="hotels">
	<div class="container">
		
		<div class="hotels-title">

			<?php
				while ( have_posts() ) :
						
					the_post();

					the_content();

				endwhile; // End of the loop.
			?>

		</div>

		<div class="column-wrapper">
			<div class="row">

			<?php
				$posts = get_posts( array(
					'numberposts' => 6,
					'post_type'   => 'hotels',
					'suppress_filters' => true, 
				) );

				foreach( $posts as $post ){
					setup_postdata($post);
			?>
				<div class="col-md-6">
					<div class="column">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
						<?php the_post_thumbnail(); ?>
					</div>
				</div> 
			<?php
				}
				wp_reset_postdata(); 
			?>

			</div>	
		</div>
	</div>
</section>

<?php get_footer('form'); ?>