<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

<section class="main-section" style="background-image: url('<?php echo get_template_directory_uri() ?> /assets/imgs//main-section-bg.jpg');">
<!-- <section class="main-section" style="background-image: url('_imgs/main-section-bg.jpg');"> -->
	<div class="clip-overlay" style="height: 152.4px;">
		<svg class="svg-wave" width="100%" height="100%" version="1.1" viewBox="0 0 100 10" preserveAspectRatio="none" xmlns="//www.w3.org/2000/svg">
		<path class="front-wave" d="M0,0 C30,6 80,4 100,0 L100,10 L0,10 Z" fill="#4f8abb"></path>
	</svg>
</div>

<?php if( function_exists('acf_add_local_field_group') ):?>

	<div class="title-container">
		<h1><?php the_field('intro_title'); ?></h1>
		<div class="location">

			<span class="date">
				<?php if( get_field('intro_date-icon') ): ?>
					<img src="<?php the_field('intro_date-icon'); ?>" alt="">
				<?php endif; ?>
				<?php the_field('intro_date'); ?>
			</span>

			<span class="city">
				<?php if( get_field('intro_city-icon') ): ?>
					<img src="<?php the_field('intro_city-icon'); ?>" alt="">
				<?php endif; ?>
				<?php the_field('intro_city'); ?>
			</span>

		</div>
	</div>
	
<?php endif; ?>

<div class="form-wrapper">
	<div class="form-title">

		<?php if( function_exists('acf_add_local_field_group') ):?>					
			<h2><?php the_field('cf_fp_title'); ?></h2>
			<p><?php the_field('cf_fp_descriptions'); ?></p>
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
<section class="presentation">
	<div class="presentation-inner">

		<?php if( function_exists('acf_add_local_field_group') ):?>					
			<h2><?php the_field('presentations_title'); ?></h2>		
		<?php endif; ?>	
	
		<div class="container">
			<div class="row">

				<?php
					$posts = get_posts( array(
						'numberposts' => 6,
						'post_type'   => 'presentations',
						'suppress_filters' => true, 
					) );

					foreach( $posts as $post ){
						setup_postdata($post);
				?>
					<div class="col-md-4 col-sm-6">
					<a href="<?php the_permalink(); ?>"><div class="post-img"><?php the_post_thumbnail(); ?></div></a>
					</div>
				<?php
					}

					wp_reset_postdata(); 
				?>
			
			</div>
			<a href="#" class="btn big-round-btn">Check out all presentations</a>
		</div>
</section>

<?php get_footer('front-page'); ?>