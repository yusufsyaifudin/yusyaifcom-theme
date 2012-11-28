	<?php // You can start editing here -- including this comment! ?>
<div id="comments" class="post">
	<?php if ( have_comments() ) : ?>
		<div id="comments-title">
			<?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number() ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</div>

		<div class="commentlist">
			<ul>
			<?php wp_list_comments(array('style'=>'ul')); ?>
			</ul>
		</div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav">
			<?php paginate_comments_links( array('prev_text' => '&larr; Older Comments', 'next_text' => 'Newer Comments &rarr;') ); ?>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php endif; ?>
	<?php comment_form(); ?>

</div><!-- #comments -->