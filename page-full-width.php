<?php get_header();

/*
Template Name: Page Full Width
 */

?>

<main role="main">
    <div class="banner-area">
        <div class="container navigation-container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
                </div>
            </div>
        </div>
        <?php if(!empty($post->ID)) {
            $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
        } ?>
        <div class="subpage-banner-area" <?php if (!empty($backgroundImg)) {?>
            style="background-image:url('<?php echo $backgroundImg[0]; ?>');" <?php }?>>
            <div class="subpage-banner-area-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center" style="z-index:0;">
                            <span class="subpage-banner-title aos-init aos-animate"
                                data-aos="fade-down"><?php the_title(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>