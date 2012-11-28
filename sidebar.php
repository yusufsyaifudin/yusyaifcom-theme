		<div id="sidebar">
			<div class="sid">
				<div class="fb-like" data-href="http://facebook.com/yusyaif" data-send="false" data-width="235" data-show-faces="true" data-font="tahoma"></div>
				<div class="g-plus" data-width="230" data-href="https://plus.google.com/110658673647836017952?rel=publisher"></div>
				<script type="text/javascript">
				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
				<br>
				<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=YOUR-ID-HERE', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
					<input class="email" type="text" name="email" value="Email" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"><input type="hidden" value="ariff" name="uri"><input type="hidden" name="loc" value="en_US">
					<input class="button" type="submit" value="Subscribe">
				</form>
				<br>
				<div class="readalso">
				<h6 class="bar"><span>Read also</span></h6>
				<ul>
					<?php $rand_posts = get_posts('numberposts=7&orderby=rand');
							foreach( $rand_posts as $post ) : setup_postdata($post);?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
				</ul>
				</div>
			</div>
		</div>