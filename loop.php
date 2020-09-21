<div class="column column-one">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php if ($wp_query->current_post % 2 == 0): ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<span class="date"><?php the_time('j F Y'); ?></span>
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php
							$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							echo '<div class="image-articles-container" style="background: url('. $url.'); background-size:cover;"></div>';
						?>
					</a>
				<?php endif; ?>
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			</article>
		<?php endif ?>
		<?php endwhile; ?>
	<?php endif ?>
</div>


<div class="column column-two">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php if ($wp_query->current_post % 2 == 1): ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<span class="date"><?php the_time('j F Y'); ?></span>
				<?php if ( has_post_thumbnail()) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php
							$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							echo '<div class="image-articles-container" style="background: url('. $url.'); background-size:cover;"></div>';
						?>
					</a>
				<?php endif; ?>
				<?php html5wp_excerpt('html5wp_index');?>
			</article>
		<?php endif ?>
		<?php endwhile; ?>
	<?php endif ?>
</div>

