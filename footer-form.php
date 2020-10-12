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

    <section class="bottom-block" style="
                                            background-color: <?php echo ($valuexvail_option['ff_background']['background-color']); ?>; 
                                            background-image: url('<?php echo ($valuexvail_option['ff_background']['background-image']); ?>');
                                            background-repeat: <?php echo ($valuexvail_option['ff_background']['background-repeat']); ?>;
                                            background-position: <?php echo ($valuexvail_option['ff_background']['background-position']); ?>;
                                            background-size: <?php echo ($valuexvail_option['ff_background']['background-size']); ?>;
                                            background-attachment: <?php echo ($valuexvail_option['ff_background']['background-attachment']); ?>;
    ">
        <div class="form-wrapper">
            <div class="form-title">

                <?php if($valuexvail_option['ff_title'] != ''): ?>
                    <h2><?php echo esc_html($valuexvail_option['ff_title']); ?></h2>
                <?php endif; ?>

                <?php if($valuexvail_option['ff_description'] != ''): ?>
                    <p><?php echo esc_html($valuexvail_option['ff_description']); ?></p>
                <?php endif; ?>

                <form action="post" class="custom-form">
                    <?php if($valuexvail_option['ff_text'] != ''): ?>
                        <?php echo esc_html($valuexvail_option['ff_text']); ?>
                    <?php endif; ?>
                </form>
            </div>
        </div>

        <?php if($valuexvail_option['fs_copyright'] != ''): ?>
            <div class="copyright with-bg"><?php echo esc_html($valuexvail_option['fs_copyright']); ?></div>
        <?php endif; ?>

    </section><!-- /.bottom-block -->
    
</footer><!-- /.main-footer -->

<?php wp_footer(); ?>

</body>
</html>
