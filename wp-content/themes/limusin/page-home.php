<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<style>
    .helper__content .greed:after {
        background-image: url('<?php echo get_field('content_arrow'); ?>');
    }
</style>

<!-- site__content -->
<div class="site__content">

    <!-- hero -->
    <div class="hero" style="background: url('<?php echo get_field('hiro_background'); ?>');">

        <!-- hero__content -->
        <div class="hero__content">
            <div class="hero__title"><?php echo get_field('hero_big_title'); ?></div>
            <div class="hero__play-video popup__open" data-popup="video" data-video="true" style="background-image: url('<?php echo get_field('hiro_play_image'); ?>');">
                <p><?php echo get_field('hero_small_title'); ?></p>
            </div>
        </div>
        <!-- /hero__content -->

    </div>

<!-- helper -->
<div class="helper">

    <!-- helper__header -->
    <div class="helper__header">
        <h2><?php echo get_field('content_title'); ?></h2>
        <a href="<?php echo get_permalink(54); ?>" class="btn btn_2"><?php echo get_field('content_button'); ?></a>
    </div>
    <!-- /helper__header -->

    <!-- helper__wrap -->
    <div class="helper__content">
       <?php

	        $args = array(
		       'posts_per_page' => -1,
		       'orderby'     => 'menu_order',
		       'order'       => 'ASC',
		       'post_type'   => 'bisnes_idea',
		       'fields'      => 'ids'
	        );

	        $posts = get_posts( $args );
	        global $counter;
	        $counter = 0;

	        foreach($posts as $post){ setup_postdata($post);
		        set_query_var( 'counter', absint( $counter ) );
		        get_template_part( 'content-parts/content-part', 'bisnes_idea');
		        $counter++;
	        }

       ?>

    </div>
    <!-- content__wrap -->

</div>
<!-- /content -->

</div>
<!-- /site__content -->

<!-- popup -->
<div class="popup">

    <!-- popup__wrap -->
    <div class="popup__wrap">

        <!-- popup__content -->
        <div class="popup__content popup__video">

            <!-- popup__video__wrap -->
            <div class="video-palyer">

                <!-- popup__close -->
                <div class="popup__close"></div>
                <!-- /popup__close -->

                <!-- video -->
                <video controls="controls" id="video" src="<?php echo get_template_directory_uri()?>/video/duel.ogv"></video>
                <!-- /video -->

            </div>
            <!-- /popup__video__wrap -->

        </div>
        <!-- /popup__content -->

    </div>
    <!-- /popup__wrap -->

</div>
<!-- /popup -->

<?php get_footer(); ?>

