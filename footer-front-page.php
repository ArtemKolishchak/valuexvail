<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package valuexvail
 */

global $valuexvail_option;

?>

<footer class="main-footer">

<section class="slider-section clearfix" style="
                                                background-color: <?php echo ($valuexvail_option['footer_background']['background-color']); ?>; 
                                                background-image: url('<?php echo ($valuexvail_option['footer_background']['background-image']); ?>');
                                                background-repeat: <?php echo ($valuexvail_option['footer_background']['background-repeat']); ?>;
                                                background-position: <?php echo ($valuexvail_option['footer_background']['background-position']); ?>;
                                                background-size: <?php echo ($valuexvail_option['footer_background']['background-size']); ?>;
                                                background-attachment: <?php echo ($valuexvail_option['footer_background']['background-attachment']); ?>;
">
        <div class="text-block clearfix">

            <?php if($valuexvail_option['footer_img'] != ''): ?>
                <img src="<?php echo esc_html($valuexvail_option['footer_img']['url']); ?>" alt="avatar">
            <?php endif; ?>

            <div class="description">
                <?php if($valuexvail_option['footer_title'] != ''): ?>
                    <h3><?php echo esc_html($valuexvail_option['footer_title']); ?></h3>
                <?php endif; ?>

                <?php if($valuexvail_option['footer_text'] != ''): ?>
                    <p><?php echo esc_html($valuexvail_option['footer_text']); ?></p>
                <?php endif; ?>

                <?php if($valuexvail_option['footer_button_text'] != ''): ?>
                    <a href="<?php echo esc_html($valuexvail_option['footer_button_link']); ?>" class="btn white-btn"><?php echo esc_html($valuexvail_option['footer_button_text']); ?></a>
                <?php endif; ?>
            </div><!-- /.description -->

        </div><!-- /.text-block .clearfix -->

        <div class="slider-block">

            <?php if($valuexvail_option['footer_fp_slides_title'] != ''): ?>
                <h2><?php echo esc_html($valuexvail_option['footer_fp_slides_title']); ?></h2>
            <?php endif; ?>

            <div class="slider-wrapper">
                <div class="photo-slider clearfix">

                <div class="slick-slide" style="background-image: url('<?php echo get_template_directory_uri() ?> /assets/imgs/slider-photo-1.jpg');"></div>
                <div class="slick-slide" style="background-image: url('<?php echo get_template_directory_uri() ?> /assets/imgs/slider-photo-2.jpg');"></div>
                <div class="slick-slide" style="background-image: url('<?php echo get_template_directory_uri() ?> /assets/imgs/slider-photo-3.jpg');"></div>
                <div class="slick-slide" style="background-image: url('<?php echo get_template_directory_uri() ?> /assets/imgs/slider-photo-4.jpg');"></div>
                <div class="slick-slide" style="background-image: url('<?php echo get_template_directory_uri() ?> /assets/imgs/slider-photo-5.jpg');"></div>
                <div class="slick-slide" style="background-image: url('<?php echo get_template_directory_uri() ?> /assets/imgs/slider-photo-1.jpg');"></div>
                <div class="slick-slide" style="background-image: url('<?php echo get_template_directory_uri() ?> /assets/imgs/slider-photo-2.jpg');"></div>
                <div class="slick-slide" style="background-image: url('<?php echo get_template_directory_uri() ?> /assets/imgs/slider-photo-3.jpg');"></div>
                <div class="slick-slide" style="background-image: url('<?php echo get_template_directory_uri() ?> /assets/imgs/slider-photo-4.jpg');"></div>
                <div class="slick-slide" style="background-image: url('<?php echo get_template_directory_uri() ?> /assets/imgs/slider-photo-5.jpg');"></div>

                </div><!-- /.photo-slider clearfix -->
            </div><!-- /.slider-wrapper -->
            
            <?php if($valuexvail_option['footer_copyright'] != ''): ?>
                <div class="copyright"><?php echo esc_html($valuexvail_option['footer_copyright']); ?></div>
            <?php endif; ?>

        </div><!-- /.slider-block -->
    </section><!-- /.slider-section .clearfix -->

</footer><!-- /.main-footer -->

<?php wp_footer(); ?>

</body>
</html>