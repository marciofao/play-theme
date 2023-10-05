<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package play
 */

$query = new WP_Query(
	array(
		'post_type' => 'video',
		'post_status' => 'publish'
	)
);


get_header();

?>

<main id="primary" class="site-main pt-10">

	<?php
	if (!empty($query->posts)):
		$video = $query->posts[0];
		//dump_die($video);
	

		?>
		<header>

			<a href="<?php echo get_permalink($video) ?>">
				<div class=" relative bg-cover bg-center flex justify-center"
					style="background-image: url('<?php echo get_the_post_thumbnail_url($video->ID, 'full') ?>'); height: calc(80vh);">
					<div class="video-details absolute bottom-20 w-4/5 ">

						<span id="video-type"
							class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 rounded-lg p-2 pt-1 pb-1">
							<?php echo get_the_terms($video, 'video_type')[0]->name ?>
						</span>
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
				</div>
			</a>
		</header>
		<?php


	endif;
	?>

</main><!-- #main -->
<?php
$video_types = get_terms('video_type');

?>
<!-- Carrousels of video types -->
<div id="video-types" class="w100 justify-center flex">
	<ul class="video-types mt-20 bottom-20 w-4/5">
		<?php foreach ($video_types as $type): ?>
			<li class="type-item block mb-10">
				<?php ?>
				<a href="<?php echo get_term_link($type->term_id) ?>">
					<h1 class="text-3xl text-red-600 font-bold mb-2">
						<?php echo $type->name ?>
					</h1>
				</a>
				<div class="carrossel">
					<?php
					$args = array(
						'post_type' => 'video',
						'tax_query' => array(
							array(
								'taxonomy' => 'video_type',
								'field' => 'slug',
								'terms' => [$type->slug]
							)
						)
					);

					$my_query = new WP_Query($args); ?>
					<ul class="flex flex-row">
						<?php foreach ($my_query->posts as $video_itm): ?>

							<li class=" mr-3">
								<a href="<?php echo get_permalink($video_itm) ?>">
									<div class="block h-60 w-40 bg-cover bg-center"
										style="background-image: url('<?php echo get_the_post_thumbnail_url($video_itm->ID, 'full') ?>');">

									</div>
									<div class="mt-5 w-40">
										<span id="video-duration"
											class="block w-1/2 text-white bg-transparent border border-gray-300 focus:outline-none hover:bg-black focus:ring-4 focus:ring-black font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 rounded-lg p-2 pt-1 pb-1">
											<?php echo get_post_meta($video_itm->ID, 'bx_play_video_duration', true) ?>m
										</span>
									</div>

									<h1 class="mt-5 w-40 font-bold">
										<?php echo $video_itm->post_title ?>
									</h1>
								</a>
							</li>

						<?php endforeach ?>
					</ul>


				</div>
			</li>
		<?php endforeach ?>
	</ul>
</div>


<?php

get_footer();