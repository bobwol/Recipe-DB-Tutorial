<?php if (have_posts()): while (have_posts()): the_post(); ?>
	<div class="recipe">
		<h2><?php the_title(); ?></h2>
		<ul class='ingredients'>
			<?php
				if (is_single()):
					$quantities = get_post_meta(get_the_ID(),'quantities');
					foreach ($quantities as $quantity):
						$quantity = explode(':',$quantity); ?>
						<li>
							<?php echo $quantity[1]; ?> <a href='<?php echo get_term_link($quantity[0],'recdb_ingredients'); ?>'>
								<?php echo $quantity[0]; ?>
							</a>
						</li><?php
					endforeach; 
				endif;
			?>
		</ul>
		<?php 
			if (is_single()): 
				the_content(); 
			else: 
				the_excerpt(); 
				?><a href="<?php the_permalink(); ?>">Read recipe</a><?php
			endif; ?>
	</div>
<?php endwhile; endif; ?>