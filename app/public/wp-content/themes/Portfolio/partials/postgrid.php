
<div id="grid-container">

	<?php
	if(have_posts()):while (have_posts()):
		the_post(); 
		?>

		<div id="grid">

			<a href="<?php the_permalink(); ?>">
				<?php 
					
					the_post_thumbnail('grid_thumbnail');
				?>
			</a>

		</div>

	<?php endwhile; endif; 
	?>

</div>