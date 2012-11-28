<script type="text/javascript">	
$(document).ready(function(){
	$(".overlay-menu").hide();
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 255) {
				$('.overlay-menu').fadeIn();
			} else {
				$('.overlay-menu').fadeOut();
			}
		});
	});
});
</script>
<?php $category = get_the_category();  ?>
		<nav class="overlay-menu menu">
			<div class="buttons">
				<a href="javascript: void(0)" title="<?php the_title(); ?>" class="button left current-post"><?php $title = get_the_title(); if(strlen($title)>28){echo substr($title, 0, 28).'. . .';} else {echo $title;} ?> &mdash; <?php echo getPostViews(get_the_ID()); ?></a>
				<div class="socmed">
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="yusuf_udin" data-size="medium">Tweet</a><span class="g-plusone" data-size="medium"></span><div class="fb-like" data-send="false" data-width="330" data-show-faces="false" data-font="tahoma"></div>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<script type="text/javascript">
				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
				</div>
				<a href="<?php echo get_category_link($category[0]->cat_ID); ?>" class="button"><?php echo $category[0]->cat_name;?></a>
			</div>
			<div class="right">
				
			</div>
		</nav>