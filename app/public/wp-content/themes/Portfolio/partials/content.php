<div id="singular_container">
	<?php 
		the_post(); 
		the_post_thumbnail("single_large");
	?>
	<div id="singular_text_container">
		<h3> <?php the_title(); ?> </h3>
		<p> <?php the_content(); ?> </p>
		
		<div id="term_container">
			<?php 

				if (is_single()){?>
					
						<div id="skill">
							<?php the_terms(get_the_ID(), 'project_skill', '<img src="'.get_stylesheet_directory_uri().'/img/skills.png" height="15" width="15" hspace="0">', '<br><br><img src="'.get_stylesheet_directory_uri().'/img/skills.png" height="15" width="15">', ""); ?>
						</div>

				<?php } else { ?>

					<p>Skills:</p> 
					<?php 
					$terms = get_terms(array(
					'taxonomy' => 'project_skill',
					'hide_empty' => true )); 
					foreach ($terms as $value) { ?>
						<div id="all_skills">
							<img src="<?= get_stylesheet_directory_uri();?>/img/skills.png" height="15" width="15" hspace="0">
							<p>
								<?php echo $value->name;?> 
							</p>
						</div>
					<?php
					}
				}; 
			?>
		</div>

	</div>

</div>