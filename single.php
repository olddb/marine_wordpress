<?php get_header(); ?>

<main role="main">

	<!-- <div class="normalize main-container"> -->

		<!-- <div class="sidebar-container">
					
			<?php // get_sidebar(); ?>
				
		</div> -->

		<!-- section -->
		<section>

			<div class="single-article-content">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
						<div class="image-text-container">
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<a title="<?php the_title(); ?>">
									<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								</a>
							<?php endif; ?>
						</div>
						<!-- /post thumbnail -->

						<div class="article-text-container">
							<!-- post title -->
							<h1>
								<a title="<?php the_title(); ?>">
									<div class="single-article-title">
										<?php the_title(); ?>
									</div>
								</a>
							</h1>
							<!-- /post title -->

							<?php the_content(); // Dynamic Content ?>
						</div>

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>

			</div>

		</section>
		<!-- /section -->
	<!-- </div> -->

</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
