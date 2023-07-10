<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;800&display=swap" rel="stylesheet">
        <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ_Q9f_bDGGDLjUQZOClHEiLhFnE3RIog"
                defer
        ></script>

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
	<main id="main" class="main">
        <div class="page-404">
            <div class="container container-star">
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-1"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
                <div class="star-2"></div>
            </div>
            <div class="container container-bird">
                <div class="bird bird-anim">
                    <div class="bird-container">
                        <div class="wing wing-left">
                            <div class="wing-left-top"></div>
                        </div>
                        <div class="wing wing-right">
                            <div class="wing-right-top"></div>
                        </div>
                    </div>
                </div>
                <div class="bird bird-anim">
                    <div class="bird-container">
                        <div class="wing wing-left">
                            <div class="wing-left-top"></div>
                        </div>
                        <div class="wing wing-right">
                            <div class="wing-right-top"></div>
                        </div>
                    </div>
                </div>
                <div class="bird bird-anim">
                    <div class="bird-container">
                        <div class="wing wing-left">
                            <div class="wing-left-top"></div>
                        </div>
                        <div class="wing wing-right">
                            <div class="wing-right-top"></div>
                        </div>
                    </div>
                </div>
                <div class="bird bird-anim">
                    <div class="bird-container">
                        <div class="wing wing-left">
                            <div class="wing-left-top"></div>
                        </div>
                        <div class="wing wing-right">
                            <div class="wing-right-top"></div>
                        </div>
                    </div>
                </div>
                <div class="bird bird-anim">
                    <div class="bird-container">
                        <div class="wing wing-left">
                            <div class="wing-left-top"></div>
                        </div>
                        <div class="wing wing-right">
                            <div class="wing-right-top"></div>
                        </div>
                    </div>
                </div>
                <div class="bird bird-anim">
                    <div class="bird-container">
                        <div class="wing wing-left">
                            <div class="wing-left-top"></div>
                        </div>
                        <div class="wing wing-right">
                            <div class="wing-right-top"></div>
                        </div>
                    </div>
                </div>
                <div class="container-title">
                    <div class="title">
                        <div class="number">4</div>
                        <div class="moon">
                            <div class="face">
                                <div class="mouth"></div>
                                <div class="eyes">
                                    <div class="eye-left"></div>
                                    <div class="eye-right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="number">4</div>
                    </div>
                    <div class="subtitle">Page not found!!!</div>
                    <a class="button-404" href="<?php echo get_home_url()?>">To main</a>
                </div>
            </div>
        </div>
    </main><!-- #main -->

<?php
//get_footer();
