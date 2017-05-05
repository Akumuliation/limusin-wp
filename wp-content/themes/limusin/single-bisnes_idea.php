<?php get_header(); ?>

<!-- site__content -->
<div class="site__content">

    <!-- helper -->
    <div class="helper">
<?php
the_post();

$thumbnail_id = get_post_thumbnail_id();
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

$thumbnail_url = get_the_post_thumbnail_url();
$title = get_the_title();
$content = get_the_content();
$size_acf = get_field('enter_size');
?>
        
        <h2><?php echo $title; ?></h2>
        <img src="<?php echo $thumbnail_url ?>" alt="<?php echo $alt; ?>">
        <p><?php echo $content;  ?></p>
    </div>
    <!-- /helper -->

</div>
<!-- /site__content -->

<?php get_footer(); ?>

