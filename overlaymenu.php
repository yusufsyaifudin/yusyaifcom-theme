<script type="text/javascript">
$(document).ready(function(){
	$(".overlay-menu").hide();
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 490) {
				$('.overlay-menu').fadeIn();
			} else {
				$('.overlay-menu').fadeOut();
			}
		});
	});
});
</script>

		<nav class="overlay-menu menu">
			<ul class="buttons">
				<?php wp_list_categories(array('title_li'=>__(''))); ?>
			</ul>
			<div class="right">
				
			</div>
		</nav>