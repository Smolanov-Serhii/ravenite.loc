<?php
/* Template Name: Главная страница */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akymed
 */

get_header();
$post_id = get_the_ID();
?>
	<main id="main" class="main">
        <section class="banner">
            <div class="banner__container swiper-container">
                <div class="banner__list swiper-wrapper">
                    <?php
                    if( have_rows('slajdy', $post_id) ):
                        while( have_rows('slajdy') ) : the_row();
                            $image = get_sub_field('banner-image');
                            $title = get_sub_field('banner-title');
                            ?>
                            <div class="banner__item swiper-slide">
                                <div class="banner__bg">
                                    <img src="<?php echo $image ?>" alt="<?php echo $title ?>">
                                </div>
                                <div class="main-container">
                                    <div class="banner__content">
                                        <h2 class="banner__title" data-aos="fade-up" data-aos-delay="200">
                                            <?php echo $title ?>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="banner__nav big-container">
                    <div class="banner-prev">
                        <svg width="41" height="16" viewBox="0 0 41 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.292892 8.70711C-0.0976295 8.31658 -0.0976295 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41422 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM41 9H1V7H41V9Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="banner-next">
                        <svg width="41" height="16" viewBox="0 0 41 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40.7071 8.70711C41.0976 8.31658 41.0976 7.68342 40.7071 7.29289L34.3431 0.928932C33.9526 0.538408 33.3195 0.538408 32.9289 0.928932C32.5384 1.31946 32.5384 1.95262 32.9289 2.34315L38.5858 8L32.9289 13.6569C32.5384 14.0474 32.5384 14.6805 32.9289 15.0711C33.3195 15.4616 33.9526 15.4616 34.3431 15.0711L40.7071 8.70711ZM0 9H40V7H0V9Z" fill="white"/>
                        </svg>
                    </div>
                </div>
                <div class="banner__pagination swiper-pagination"></div>
            </div>
        </section>
        <section class="two-col" id="company">
            <div class="two-col__container main-container">
                <div class="two-col__text">
                    <h2 class="two-col__untitle section-untitle" data-aos="fade-up" data-aos-delay="200">
                        <?php echo get_field('nadzagolovok_bloka_opisanie', $post_id)?>
                    </h2>
                    <h3 class="two-col__title section-title" data-aos="fade-up" data-aos-delay="400">
                        <?php echo get_field('zagolovok_bloka_opisanie', $post_id)?>
                    </h3>
                    <div class="two-col__content" data-aos="fade-up" data-aos-delay="600">
                        <?php echo get_field('opisanie_bloka_opisanie', $post_id)?>
                    </div>
                </div>
                <div class="two-col__image" data-aos="fade-left" data-aos-delay="800">
                    <img src="<?php echo get_field('izobrazhenie_bloka_opisanie', $post_id)?>" alt="<?php echo get_field('zagolovok_bloka_opisanie', $post_id)?>">
                </div>
            </div>
        </section>
        <section class="products" id="products">
            <div class="products__container main-container">
                <h2 class="products__untitle section-untitle" data-aos="fade-up" data-aos-delay="200">
                    <?php echo get_field('nadzagolovok_bloka_products', $post_id)?>
                </h2>
                <h3 class="products__title section-title" data-aos="fade-up" data-aos-delay="400">
                    <?php echo get_field('zagolovok_bloka_products', $post_id)?>
                </h3>
                <div class="products__list" data-aos="fade-up" data-aos-delay="600">
                    <?php
                    if( have_rows('perechen_produktov', $post_id) ):
                        while( have_rows('perechen_produktov') ) : the_row();
                            $image = get_sub_field('ikonka_produkta');
                            $title = get_sub_field('nazvanie_produkta');
                            ?>
                            <div class="products__item <?php if (!$image){echo 'products__item-width';}?>">
                                <?php
                                    if ($image){
                                        ?>
                                            <div class="products__img">
                                                <img src="<?php echo $image ?>" alt="<?php echo $title ?>">
                                            </div>
                                            <h3 class="products__name">
                                                <?php echo $title ?>
                                            </h3>
                                        <?php
                                    } else {
                                        ?>
                                        <p class="products__desc"><?php echo $title ?></p>
                                        <?php
                                    }
                                ?>

                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <section class="partners" id="partners">
            <div class="partners__container main-container">
                <h2 class="partners__untitle section-untitle" data-aos="fade-up" data-aos-delay="200">
                    <?php echo get_field('nadzagolovok_partners', $post_id)?>
                </h2>
                <h3 class="partners__title section-title" data-aos="fade-up" data-aos-delay="400">
                    <?php echo get_field('zagolovok_bloka_partners', $post_id)?>
                </h3>
                <div class="partners__list swiper-container" data-aos="fade-up" data-aos-delay="600">
                    <div class="swiper-wrapper">
                        <?php
                        if( have_rows('logotipy_partnyorov', $post_id) ):
                            while( have_rows('logotipy_partnyorov') ) : the_row();
                                $image = get_sub_field('izobrazhenie_logotipa');
                                $title = get_sub_field('opisanie_logotipa');
                                ?>
                                <div class="partners__item swiper-slide <?php if (!$image){echo 'products__item-width';}?>">
                                    <img src="<?php echo $image ?>" alt="<?php echo $title ?>">
                                </div>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="contacts" id="contacts">
            <div class="contacts__container main-container">
                <h2 class="contacts__untitle section-untitle" data-aos="fade-up" data-aos-delay="200">
                    <?php echo get_field('nadzagolovok_contacts', $post_id)?>
                </h2>
                <h3 class="contacts__title section-title" data-aos="fade-up" data-aos-delay="400">
                    <?php echo get_field('zagolovok_contacts', $post_id)?>
                </h3>
                <div class="contacts__list" data-aos="fade-up" data-aos-delay="600">
                    <?php
                    if( have_rows('opisanie_lokaczij', $post_id) ):
                        while( have_rows('opisanie_lokaczij') ) : the_row();
                            $phone = get_sub_field('telefon');
                            $adress = get_sub_field('adress');
                            $map = get_sub_field('karta_gugl');
                            ?>
                            <div class="contacts__item">
                                <div class="contacts__phone">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.5">
                                            <path d="M19 17.5V21.5C16.242 21.5 13.93 21.005 12 20.175C8.159 18.523 5.824 15.545 4.5 12.5C3.4 9.972 3 7.398 3 5.5H7L8 9.5L4.5 12.5C5.824 15.545 8.159 18.523 12 20.175L15 16.5L19 17.5Z" fill="white"/>
                                            <path d="M12 20.175C13.93 21.005 16.242 21.5 19 21.5V17.5L15 16.5L12 20.175ZM12 20.175C8.159 18.523 5.824 15.545 4.5 12.5M4.5 12.5C3.4 9.972 3 7.398 3 5.5H7L8 9.5L4.5 12.5ZM14 4.5H14.01M17 4.5H17.01M20 4.5H20.01M14 7.5H14.01M17 7.5H17.01M20 7.5H20.01M14 10.5H14.01M17 10.5H17.01M20 10.5H20.01" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                    <a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a>
                                </div>
                                <div class="contacts__adress">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.5">
                                            <path d="M17.6569 16.6421L12 22.5L6.34311 16.6421C5.2243 15.4835 4.46239 14.0074 4.15371 12.4004C3.84504 10.7934 4.00347 9.12774 4.60898 7.61399C5.21448 6.10025 6.23986 4.80643 7.55545 3.89614C8.87104 2.98586 10.4178 2.5 12 2.5C13.5822 2.5 15.129 2.98586 16.4445 3.89614C17.7601 4.80643 18.7855 6.10025 19.391 7.61399C19.9965 9.12774 20.155 10.7934 19.8463 12.4004C19.5376 14.0074 18.7757 15.4835 17.6569 16.6421ZM12 14.4661C12.943 14.4661 13.8474 14.0782 14.5142 13.3877C15.181 12.6972 15.5556 11.7607 15.5556 10.7842C15.5556 9.8077 15.181 8.87119 14.5142 8.1807C13.8474 7.49021 12.943 7.1023 12 7.1023C11.057 7.1023 10.1526 7.49021 9.48584 8.1807C8.81905 8.87119 8.44445 9.8077 8.44445 10.7842C8.44445 11.7607 8.81905 12.6972 9.48584 13.3877C10.1526 14.0782 11.057 14.4661 12 14.4661ZM12 12.6251C11.5285 12.6251 11.0763 12.4312 10.7429 12.0859C10.4095 11.7407 10.2222 11.2724 10.2222 10.7842C10.2222 10.2959 10.4095 9.8277 10.7429 9.48245C11.0763 9.13721 11.5285 8.94325 12 8.94325C12.4715 8.94325 12.9237 9.13721 13.2571 9.48245C13.5905 9.8277 13.7778 10.2959 13.7778 10.7842C13.7778 11.2724 13.5905 11.7407 13.2571 12.0859C12.9237 12.4312 12.4715 12.6251 12 12.6251Z" fill="white"/>
                                        </g>
                                    </svg>
                                    <p><?php echo $adress ?></p>
                                </div>
                                <div class="contacts__map">
                                    <?php echo $map ?>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
	</main>
<?php
get_footer();
