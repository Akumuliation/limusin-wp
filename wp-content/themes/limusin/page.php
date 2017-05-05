<?php
get_header();
the_post();
?>
<p>
    <?php echo get_the_title();

echo get_the_content(); ?></p>
<?php get_footer(); ?>