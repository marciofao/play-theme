<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package play
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <title>
        <?php esc_html_e('Play', 'play') ?>
    </title>
</head>

<body <?php body_class(); ?> >
    <?php wp_body_open(); ?>
    <nav class="fixed w-screen bg-black z-10 flex justify-center">
        <div class="mx-auto max-w-7xl w-4/5 ">
            <div class="relative flex h-16 items-center justify-between">

                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        ?>
                        <a href="<?php echo site_url() ?>">
                        <img class="h-8 w-auto" src="<?php echo $logo[0] ?>" alt="Logo">
                        </a>
                    </div>
                    <?php
                    $video_types = get_terms('video_type');
                    ?>
                    <div class="hidden sm:ml-6 sm:block absolute right-0">
                        <div class="flex space-x-4">
                            <?php foreach ($video_types as $type): ?>
                                
                                <?php  $text_color = (get_query_var('term') == $type->slug) ? 'text-red-600' : 'text-white'; ?>
                                <a href="<?php echo get_term_link($type->term_id) ?>" class="<?php echo $text_color ?> hover:bg-gray-900 rounded-md px-3 py-2 text-sm font-medium"
                                    aria-current="page"><?php echo $type->name ?></a>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </nav>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary">
            <?php esc_html_e('Skip to content', 'play'); ?>
        </a>

        <header id="masthead" class="site-header">
            <div class="site-branding">
                <?php
                //  the_custom_logo();
                if (is_front_page() && is_home()):
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a></h1>
                    <?php
                else:
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a></p>
                    <?php
                endif;
                $play_description = get_bloginfo('description', 'display');
                if ($play_description || is_customize_preview()):
                    ?>
                    <p class="site-description">
                        <?php echo $play_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </p>
                <?php endif; ?>
            </div><!-- .site-branding -->


        </header><!-- #masthead -->