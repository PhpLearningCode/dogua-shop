<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <title><?php wp_title(); ?></title>
    </head>

<body <?php body_class()?> >

<header class="sticky-top">
    <img 
        src="<?php header_image(); ?>" 
        alt="headerImage"
        width="50"
        height="65"
    />
    <div id="nav_menu">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation',
            )
        );?>
    </div>
</header>