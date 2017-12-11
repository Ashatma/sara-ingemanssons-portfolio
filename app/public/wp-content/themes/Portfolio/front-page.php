
<?php get_header();?>
		<main>
<div id="grid_menu_container">

	<?php 

		$terms = get_terms(array(
		'taxonomy' => 'project_type',
		'hide_empty' => true )); ?>

		<span id="grid_menu">

				<a href="http://portfoliopaulapudane.local/">ALL</a>

			<?php foreach ($terms as $value) { ?>

		 		<a href="/project_type/<?php echo $value->slug ?>">
		 		<?php echo $value->name ?>
				</a>

			<?php } ?> 

		</span>

</div>

			<div id="grid-container">

				<?php 

					$args = array(
					  	'post_type' => 'project', 
					  	'post_per_page' => -1, 
					); 

					$my_query = new WP_Query($args);

					if($my_query->have_posts()): while ($my_query->have_posts()):
						$my_query->the_post(); 
				?>

				<div id="grid">

					<a href="<?php the_permalink(); ?>">

						<?php the_post_thumbnail('grid_thumbnail'); ?>

					</a>

					<a href="<?php the_permalink(); ?>">

						<h2> <?php the_title(); ?> </h2>

					</a>

				</div>

				<?php endwhile; endif; ?>

			</div>

		</main>

<?php get_footer(); ?>