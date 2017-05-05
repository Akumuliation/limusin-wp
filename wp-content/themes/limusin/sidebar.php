<!-- header__menu -->
<div class="header__menu">

<?php

$lang = get_field('lang_img', 'option');
$menu_name = 'menu';
$locations = get_nav_menu_locations();
$id_page = pll_get_post( 5);

if( $locations && isset($locations[ $menu_name ]) ){

    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] ); // получаем объект меню

    $menu_items = wp_get_nav_menu_items( $menu ); // получаем элементы меню

    // создаем список
    $menu_list = '<nav class="menu"';

    if (count($menu_items) < 3) {
        $menu_list .= ' style="justify-content: space-around;"';
    }

    $menu_list .= '>';

    foreach ( (array) $menu_items as $key => $menu_item ){


        $menu_list .= '<a class="menu__item';

        if (is_page( $menu_item->ID)) {

            $menu_list .= "active";

        }

        $menu_list .='" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
    }

    $menu_list .= '</nav>';
    echo $menu_list;
}
?>
    <!-- menu -->

    <a href="<?php echo get_permalink(54); ?>" class="btn btn_1"><?php echo get_field('header_button', $id_page); ?><span>7/7</span></a>

		<!-- lang -->
    <div class="lang">

				<!-- lang__wrap -->
        <div class="lang__wrap">
	        <?php

	        $translations = pll_the_languages(array('raw'=>1));

	        foreach ($translations as $key => $value) {

		        $radio .= '<div class="';

		        if ($value['current_lang']) {
			        $radio .= 'active';
		        }

		        $radio .= '"><a href="'.$value['url'].'">'.$key.'</a></div>';

	        }
	        echo $radio;

	        ?>
        </div>
        <!-- lang__wrap -->

        <img src="<?php echo $lang; ?>" alt="">

    </div>
		<!-- /lang -->

</div>
<!-- /header__menu -->

<!-- menu-btn -->
<div class="menu-btn">
    <span></span>
</div>
<!-- /menu-btn -->