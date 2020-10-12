<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package valuexvail
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Begin Header -->
<header class="main-header">
	<div class="container-fluid">
		<div class="logo">

			<?php 
				if ( is_front_page() ) {    

					$logo_img = '';
					if( $custom_logo_id = get_theme_mod('custom_logo') ){
						$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
							'class'    => 'custom-logo',
							'itemprop' => 'logo',
						) );
					}
					
					echo $logo_img;
				
				} else { 
					the_custom_logo();
				} 
			?>
				
		</div><!-- /.logo -->

		<?php 
			$args = array( 
				'theme_location'  => 'main-menu',
				'container'       => 'nav',
				'container_class' => 'main-nav',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			); 

			wp_nav_menu($args); 
    	?>

	</div><!-- /.container-fluid -->

	<div class="menu-button">
		<span></span>
	</div>
	<div class="pre-title">
		
		<?php
			if ( is_front_page() ) { ?> 

				<?php if( function_exists('acf_add_local_field_group') ):?>	      
					<h1><?php the_field('page_title'); ?></h1> 
				<?php endif; ?>    

		<?php 
			} else { 
		?>
				<?php the_title( '<h1>', '</h1>' ); ?>
		<?php 
			} 
		?>

		<div class="clip-overlay" style="height: 152.4px;">
			<svg class="svg-wave" width="100%" height="100%" version="1.1" viewBox="0 0 100 10" preserveAspectRatio="none" xmlns="//www.w3.org/2000/svg">
				<path class="front-wave" d="M0,0 C30,6 80,4 100,0 L100,10 L0,10 Z" fill="#4f8abb"></path>
			</svg>
		</div><!-- /.clip-overlay -->

	</div><!-- /.pre-title -->
</header><!-- /.main-header -->
<!-- End Header -->
