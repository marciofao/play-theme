<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package play
 */

get_header();
$video = get_post();
?>

<main id="primary" class="site-main mt-16 flex justify-center">

	<?php ?>
	<div class="video-details w-4/5 ">

		<div class="mb-11">
			<a href="<?php echo get_term_link(get_the_terms($video, 'video_type')[0]->term_id) ?>">
				<span id="video-type"
					class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 rounded-lg p-2 pt-1 pb-1">
					<?php echo get_the_terms($video, 'video_type')[0]->name ?>
				</span>
			</a>

			<span id="video-duration"
				class="text-white bg-transparent border border-gray-300 focus:outline-none hover:bg-black focus:ring-4 focus:ring-black font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 rounded-lg p-2 pt-1 pb-1">
				<?php echo get_post_meta($video->ID, 'bx_play_video_duration', true) ?>m
			</span>
			<h1 id="video-title" class="block text-6xl text-white font-bold mt-5 mb-5">
				<?php echo $video->post_title ?>
			</h1>
			<button class="button bg-red-600 rounded-lg p-4 pt-1 pb-1">
				<?php _e('Mais Informações') ?>
			</button>
		</div>

		<?php

		$url = get_post_meta($video->ID, 'bx_play_video_ID', true);
		$url_components = parse_url($url);
		parse_str($url_components['query'], $params);
		?>
		<iframe class=" w-full h-screen" src="https://www.youtube.com/embed/<?php echo $params['v'] ?>"
			title="YouTube video player" frameborder="0"
			allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
			allowfullscreen></iframe>
	</div>




</main><!-- #main -->
<div class="flex w-full text-justify justify-center pb-8">
	<div class="pt-8 w-4/5">

		<?php echo get_post_meta($video->ID, 'sinopse', true) ?>
	</div>
</div>

<?php

get_footer();