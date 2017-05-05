<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <style>
        @font-face{
            font-family:"genbas-bold";
            src:url("<?php echo get_template_directory_uri(); ?>/fonts/genbas-bold.woff") format("woff");
            font-weight:normal;
            font-style:normal
        }
        @font-face{
            font-family:"genbas-regular";
            src:url("<?php echo get_template_directory_uri(); ?>/fonts/genbas-regular.woff") format("woff");
            font-weight:normal;
            font-style:normal}
        @font-face{
            font-family:"helveticaneuecyr-bold";
            src:url("<?php echo get_template_directory_uri(); ?>/fonts/helveticaneuecyr-bold.woff") format("woff");
            font-weight:normal;
            font-style:normal
        }
        @font-face{font-family:"helveticaneuecyr-medium";
            src:url("<?php echo get_template_directory_uri(); ?>/fonts/helveticaneuecyr-medium.woff") format("woff");
            font-weight:normal;
            font-style:normal
        }
        @font-face{font-family:"helveticaneuecyr-regular";
            src:url("<?php echo get_template_directory_uri(); ?>/fonts/helveticaneuecyr-regular.woff") format("woff");
            font-weight:normal;
            font-style:normal
        }
        @font-face{font-family:"helveticaneuecyr-thin";
            src:url("<?php echo get_template_directory_uri(); ?>/fonts/helveticaneuecyr-thin.woff") format("woff");
            font-weight:normal;
            font-style:normal
        }
    </style>

    <?php wp_head(); ?>

</head>
<body>
<?php
	$logo = get_field('logo_img', 'option');
?>
<!-- site -->
<div class="site">

    <!-- header -->
    <header class="site__header">

        <?php if( is_front_page() ) { ?>
            <!--logo -->
            <h1 class="logo" >
	            <img src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>" title="<?php echo $logo['title']?>">
            </h1 >
            <!-- /logo-->
        <?php } else { ?>
            <!--logo -->
            <a class="logo" href="<?php echo get_the_permalink(get_option('page_on_front')); ?>">
	            <img src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>" title="<?php echo $logo['title']?>">
            </a >
            <!-- /logo-->
            <?php } ?>

        <?php get_sidebar(); ?>

    </header>
    <!-- /header -->
