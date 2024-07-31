<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package akymed
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
    
</head>
<script>
    window.onload = function () {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
        }, 500);

    }
</script>
<body <?php body_class(); ?>>
<div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
</div>


	<header id="header" class="header default">
        <div class="header__container big-container">
            <div class="header__logo">
                <a class="header__logo-container" href="<?php echo get_home_url()?>">
                    <img class="header__logo-move" src="<?php echo get_template_directory_uri() . '/img/templates/header/Logo-move.svg'?>" alt="">
                    <img class="header__logo-main" src="<?php echo get_template_directory_uri() . '/img/templates/header/Logo.svg' ?>" alt="">
                </a>
            </div>
            <nav id="header__nav" class="header__nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_id'        => 'main-menu',
                    )
                );
                ?>
            </nav>
            <div class="header__language">
                <?php
                    qtranxf_generateLanguageSelectCode('short');
                ?>
            </div>
            <div class="header__burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header__mobile-menu">
                <div class="header__mobile-menu-wrapper">
                    <nav id="header__nav" class="header__nav">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'menu_id'        => 'main-menu',
                            )
                        );
                        ?>
                    </nav>
                    <div class="header__language">
                        <?php
                            qtranxf_generateLanguageSelectCode('short');
                        ?>
                    </div>
                </div>
            </div>
        </div>
	</header>
