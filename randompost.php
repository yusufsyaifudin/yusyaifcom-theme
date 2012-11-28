<div class="random">
	<ul>
			<?php $rand_posts = get_posts('numberposts=4&orderby=rand');
				foreach( $rand_posts as $post ) : setup_postdata($post);?>
		<li><a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			<a href="<?php the_permalink(); ?>"><?php $excerpt = get_the_excerpt(); $excerpt=strip_tags($excerpt); echo($excerpt); ?></a>
		</li>
			<?php endforeach; ?>
	</ul>
</div>