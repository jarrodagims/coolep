<?php get_header();?>
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
                    <div class="col-md-9">
                        <div id="breadcrumb">

                            <?php

if (function_exists('bcn_display_list')) {
    bcn_display_list();
}
?>

                        </div>
                        <?php the_content(); ?>
                    </div>
                    <div class="side-content col-sm-3">
                        <div class="side-nav bg-blue white paralucent">

                            <?php if($post->post_parent) {

$ancestors = get_ancestors( $post->ID, 'page' );

if ( 1 == count( $ancestors ) ) {

        echo '<ul>';

        wp_list_pages(
            array (
                'title_li' => '',
                'sort_column' => 'menu_order',
                'child_of' => $ancestors[0],
                'depth' => 2
            ) 
        );

        echo '</ul>';

}

if ( 2 == count( $ancestors )) {

        echo '<ul>';

        wp_list_pages(
            array (
                'title_li' => '',
                'sort_column' => 'menu_order',
                'child_of' => $ancestors[1],
                'depth' => 3
            ) 
        );

        echo '</ul>';

}

if(3 == count($ancestors)) {
    echo '<ul>';

    wp_list_pages(
        array (
            'title_li' => '',
            'sort_column' => 'menu_order',
            'child_of' => $ancestors[2],
            'depth' => 4
        ) 
    );

    echo '</ul>';
}


} ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>