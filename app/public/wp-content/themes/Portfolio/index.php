
<?php get_header();?>
		<main>

			<div id="grid-container">

				<?php
				if(have_posts()):while (have_posts()):
					?>
					<div id="grid" >
					<?php 
					the_post(); 
					the_post_thumbnail('grid_thumbnail');
				?>

			</div>

				<?php endwhile; endif; ?>

			</div>

		</main>

<?php get_footer(); ?>