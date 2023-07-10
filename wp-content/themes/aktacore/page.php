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
            <div class="banner__container">
                <div class="banner__list">

                </div>
            </div>
            <?php
                if( have_rows('slajdy', $post_id) ):
                    while( have_rows('slajdy') ) : the_row();
                        $image = get_sub_field('banner-image');
                        $title = get_sub_field('banner-title');
                        ?>
                        <div class="banner__item">
                            <img src="<?php echo $image ?>" alt="<?php echo $title ?>">
                            <div class="banner__item-content">
                                <h1 class="banner__title">
                                    <?php echo $title ?>
                                </h1>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
            ?>
        </section>
	</main>
<?php
get_footer();
