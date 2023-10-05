<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package play
 */

get_header();

$term_slug = get_query_var('term');

$args = array(
	'post_type' => 'video',
	'tax_query' => array(
		array(
			'taxonomy' => 'video_type',
			'field' => 'slug',
			'terms' => [$term_slug]
		)
	)
);

$my_query = new WP_Query($args);

?>

<main id="primary" class="site-main mt-16 flex justify-center w-full mb-96">
	<div class="sm:block md:flex w-4/5">
		<div class=" max-sm:w-full md:w-1/2 mb-10">
			<h1 class="mt-12 text-4xl font-bold text-red-600 block mb-7">
				<?php echo get_queried_object()->name ?>
			</h1>
			<p class="sm:pr-1 md:pr-36 break-all">
				<?php echo get_queried_object()->description ?>
			</p>
		</div>
		<div class="flex sm:w-full md:w-1/2">

			<ul class="flex flex-wrap">
				<?php foreach ($my_query->posts as $video_itm): ?>

					<li class="flex-1 ">
						<a href="<?php echo get_permalink($video_itm) ?>">
							<div class="block h-60 w-40 bg-cover bg-center"
								style="background-image: url('<?php echo get_the_post_thumbnail_url($video_itm->ID, 'full') ?>');">

							</div>
							<div class="mt-5 w-full">
								<span id="video-duration"
									class="block w-1/2 text-white bg-transparent border border-gray-300 focus:outline-none hover:bg-black focus:ring-4 focus:ring-black font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 rounded-lg p-2 pt-1 pb-1">
									<?php echo get_post_meta($video_itm->ID, 'bx_play_video_duration', true) ?>m
								</span>
							</div>

							<h1 class="mt-5 pb-12 w-full font-bold ">
								<?php echo $video_itm->post_title ?>
							</h1>
						</a>
					</li>

				<?php endforeach ?>
			</ul>

		</div>
	</div>

</main><!-- #main -->

<?php

get_footer();