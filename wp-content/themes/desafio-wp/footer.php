<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package play
 */

?>

<footer id="colophon" class="site-footer  bg-gray-800 pb-10 bottom-0 relative w-full mb-0">
	<div class=" h-60 flex justify-center">
		<div class="site-info  w-4/5 mt-24">
			<div class="flex flex-shrink-0 items-center">
				<?php
				$custom_logo_id = get_theme_mod('custom_logo');
				$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
				?>
				<a href="<?php echo site_url() ?>">
					<img class="h-8 w-auto mb-5" src="<?php echo $logo[0] ?>" alt="Logo">
				</a>
			</div>
			<div>©
				<script>document.write(new Date().getFullYear())</script>
				<?php _e('- Play - Todos os Direitos Reservados') ?>
			</div>

		</div><!-- .site-info -->
	</div>

	
</footer><!-- #colophon -->
<div id="bottom-nav" class="bg-black z-10 pt-8 pb-8 w-full flex justify-center md:hidden fixed bottom-0">
		<?php
		$video_types = get_terms('video_type');
		?>
		<div class=" sm:ml-6 sm:block  ">
			<div class="flex space-x-4 w-4/5">
				<?php foreach ($video_types as $type): ?>
					<a href="<?php echo get_term_link($type->term_id) ?>"
					<?php  $text_color = (get_query_var('term') == $type->slug) ? 'text-red-600' : 'text-white'; ?>
						class=" <?php echo $text_color ?> hover:bg-gray-900 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">
						<?php echo $type->name ?>
					</a>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>