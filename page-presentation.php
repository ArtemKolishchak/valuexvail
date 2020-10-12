<?php
/**
 * Template name: Presentations
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

<section class="presentation-section">
	<div class="filter">
		<ul>
			<li><a href="#">all</a></li>
			<li class="current"><a href="#">2017</a></li>
			<li><a href="#">2016</a></li>
			<li><a href="#">2015</a></li>
			<li><a href="#">2014</a></li>
			<li><a href="#">2013</a></li>
			<li><a href="#">2012</a></li>
			<li><a href="#">2011</a></li>
		</ul>
	</div>
		<div class="presentation-inner">
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
						<div class="col-md-4">
						<a href="<?php the_permalink(); ?>"><div class="post-img"><?php the_post_thumbnail(); ?></div></a>
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