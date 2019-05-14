<?php get_header(); ?>
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
            style="background-image:url('<?php echo $backgroundImg[0]; ?>');" <?php } else { ?>
            style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/files/html_pages4.jpg');"
            <?php } ?>>
            <div class="subpage-banner-area-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center" style="z-index:0;">
                            <span class="subpage-banner-title aos-init aos-animate" data-aos="fade-down">Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="content page-content">
                            <div class="row">
                                <?php get_template_part('template-parts/content/content', 'archive'); ?>
                            </div>
                            <?php if(have_posts()) : ?>
                            <div class="row">
                                <div class="col-sm-6 text-sm-left text-xs-center">
                                    <?php previous_posts_link( 'Newer posts' ); ?>
                                </div>
                                <div class="col-sm-6 text-sm-right text-xs-center">
                                    <?php next_posts_link( 'Older posts' ); ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
<?php get_footer(); ?>