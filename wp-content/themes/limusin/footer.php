<?php
$logo = get_field('logo_img', 'option');
$id_page = pll_get_post( 5);
?>
<!-- footer -->
<footer class="site__footer">

    <!-- site__footer__item -->
    <div class="site__footer__item">
      <span><?php the_field('colunum_text_left', $id_page); ?></span>
    </div>
    <!-- /site__footer__item -->

    <!-- site__footer__item -->
    <div class="site__footer__item">
        <?php the_field('colunum_text_center', $id_page); ?>
    </div>
    <!-- /site__footer__item -->

    <!-- site__footer__item -->
    <div class="site__footer__item">
        <a href="<?php echo get_permalink(54); ?>" class="btn btn_3"><?php the_field('colunum_button', $id_page); ?><span>7/7</span></a>
    </div>
    <!-- /site__footer__item -->

    <!-- site__footer__item -->
    <div class="site__footer__item">
        <?php echo  get_field('copyright', $id_page); ?>
    </div>
    <!-- /site__footer__item -->

    <!-- site__footer__item -->
    <div class="site__footer__item">
        <img src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>" title="<?php echo $logo['title']?>">
    </div>
    <!-- /site__footer__item -->

    <!-- site__footer__item -->
    <div class="site__footer__item">
        <?php echo  get_field('crafted_by', $id_page); ?>
    </div>
    <!-- /site__footer__item -->

</footer>
<!-- /footer -->

</div>
<!-- /site -->

<?php wp_footer(); ?>
</body>
</html>
