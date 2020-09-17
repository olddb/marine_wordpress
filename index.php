<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<div class="normalize main-container">
			<div class="sidebar-container">
				
				<?php get_sidebar(); ?>
			</div>

			<div class="articles-container">
				<div class="articles">
					<?php get_template_part('loop'); ?>
					<?php get_template_part('pagination'); ?>
				</div>
			</div>

		</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
