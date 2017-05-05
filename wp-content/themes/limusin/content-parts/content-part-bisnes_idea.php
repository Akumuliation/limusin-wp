<!-- greed -->
<?php

$thumbnail_url = get_the_post_thumbnail_url($post);
$title = get_the_title($post);
$excerpt = get_the_excerpt($post);
$content = get_the_content($post);
$permalink = get_permalink($post);
$thumbnail_caption = get_the_post_thumbnail_caption($post);
$size_acf = get_field('enter_size');


if($counter % 5 == 2) {
    echo "<!-- greed_2 -->
<div class=\"greed_2\">";
}

echo ""
?>


<a class="greed
<?php
switch ($counter % 5) {
    case 0:
    case 4:
        echo 'greed_1';
        break;
    case 1:
        echo 'greed_3';
        break;
}
?>
" href="<?php echo $permalink; ?>" style="background-image: url('<?php echo $thumbnail_url; ?>');">

    <!-- item__text -->
    <h3 class="item__text">
        <?php echo $title; ?>
        <span><?php echo $excerpt; ?></span>
    </h3>
    <!-- /item__text -->

</a>
<!-- /greed -->


<?php
if($counter % 5 == 3) {
    echo "</a>
    <!-- /greed -->

</div>
<!-- /greed_2 -->";
}
?>