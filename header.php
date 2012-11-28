	<div id="header">
		<div class="navigasi-atas">
			<nav id="menu-utama" class="menu container">
				<div class="logo left"><a href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo('template_url'); ?>/img/yusyaif.png" alt="Yusyaif logo"></a></div>
				<ul class="right">
					<?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'container'=>'false' ) ); ?>
					<li><a href="#">Arsip</a></li>
					<li><a href="#">Site map</a></li>
					<li><a href="#">Contact</a></li>
					<!--
					<li><div class="fb-login-button" data-show-faces="false" data-width="200" data-max-rows="1">Log in with Facebook</div></li>
					-->
				</ul>
			</nav>
			<div class="triangle-l"></div>
			<div class="triangle-r"></div>
		</div>
	</div>
	<div class="space"></div>