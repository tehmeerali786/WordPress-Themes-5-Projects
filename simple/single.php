

	<?php get_header(); ?>


	<div class="container">

	<div class="main">
		
		<?php if(have_posts()): ?>

			<?php while(have_posts()): the_post(); ?>
				<article class="post">
				<a href="<?php the_permalink(); ?>">
				<h3>
					<a href="<?php  the_permalink(); ?>">
					<?php the_title(); ?>
						
					</a>
					</h3>
				</a>
				<div class="meta">
				Created by: <a href="<?php get_author_posts_url( get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>  on <?php the_date(); ?>
				</div>
				<?php if(has_post_thumbnail()): ?>

					<div class="post-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>

				<?php endif; ?>
				<?php the_content(); ?>
				</article>
				<br>

				
			<?php endwhile; ?>

		<?php else: ?>
			<?php echo wpautop('Sorry, no posts were found') ?>
		<?php endif; ?>

		<?php comments_template(); ?>


		</div>




	<?php get_footer(); ?>